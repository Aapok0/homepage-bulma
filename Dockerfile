# syntax=docker/dockerfile:1

# ==========================================
# Stage 1: Build CSS from SCSS
# ==========================================

FROM node:24-alpine@sha256:d32cdf619f63fe0471182d08996dd516c6275bb5fd31ae06e55a570bd9e1ad43 AS assets
WORKDIR /build
RUN corepack enable
COPY package.json pnpm-lock.yaml pnpm-workspace.yaml ./
RUN pnpm install --frozen-lockfile --ignore-scripts
COPY scss ./scss
RUN pnpm run css-build

# ==========================================
# Stage 2: PHP-FPM Production Image
# ==========================================

FROM php:8.3-fpm-alpine@sha256:bf90236449d333cef008b1f01c72a3d4f11a6470a74629665e4c6b6158f03fc8 AS runtime
WORKDIR /var/www/html

LABEL org.opencontainers.image.source="https://github.com/Aapok0/homepage-bulma" \
      org.opencontainers.image.title="homepage-bulma (php-fpm)" \
      org.opencontainers.image.licenses="ISC"

# Production marker read by config/chttps.php (anything != "local" = production).
ENV APP_ENV=production

# opcache has to be compiled; the alpine base ships no build toolchain, so add
# $PHPIZE_DEPS just for the build and remove it again to keep the image small.
# hadolint ignore=SC2086
RUN set -eux; \
    apk add --no-cache --virtual .build-deps $PHPIZE_DEPS; \
    docker-php-ext-install opcache; \
    apk del .build-deps; \
    apk upgrade --no-cache

# Production php.ini baseline, then our overrides + the tuned php-fpm pool.
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"
COPY docker/php/php.ini "$PHP_INI_DIR/conf.d/custom-production.ini"
COPY docker/php/www.conf /usr/local/etc/php-fpm.d/www.conf

# App source + compiled CSS; drop the build-context config dir from the web root.
COPY . .
COPY --from=assets /build/css ./css
RUN rm -rf docker && chown -R www-data:www-data /var/www
USER www-data

EXPOSE 9000

# ==========================================
# Stage 3: Nginx Sidecar Image
# ==========================================

# Unprivileged nginx: runs as uid 101, listens on 8080, pid in /tmp.
FROM nginxinc/nginx-unprivileged:alpine@sha256:334d92979f15aaecd5dd50af5105e1230e2bb70765d45b1e2f964e7c5eda81c3 AS nginx-sidecar

LABEL org.opencontainers.image.source="https://github.com/Aapok0/homepage-bulma" \
      org.opencontainers.image.title="homepage-bulma (nginx)" \
      org.opencontainers.image.licenses="ISC"

# Build steps need root (this image defaults to a non-root user).
USER root
WORKDIR /var/www/html

RUN apk upgrade --no-cache

COPY docker/nginx/default.conf /etc/nginx/conf.d/default.conf

# Same app tree + CSS so static files and try_files resolve; drop the config dir.
# (Paths must match the php-fpm image: SCRIPT_FILENAME is resolved there.)
COPY . .
COPY --from=assets /build/css ./css
RUN rm -rf docker

# Back to the image's built-in non-root user.
USER nginx

EXPOSE 8080
CMD ["nginx", "-g", "daemon off;"]
