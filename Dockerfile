# syntax=docker/dockerfile:1

# ==========================================
# Stage 1: Build CSS from SCSS
# ==========================================

FROM node:24-alpine@sha256:a0b9bf06e4e6193cf7a0f58816cc935ff8c2a908f81e6f1a95432d679c54fbfd AS assets
WORKDIR /build
RUN corepack enable
COPY package.json pnpm-lock.yaml pnpm-workspace.yaml ./
RUN pnpm install --frozen-lockfile --ignore-scripts
COPY scss ./scss
RUN pnpm run css-build

# ==========================================
# Stage 2: PHP-FPM Production Image
# ==========================================

FROM php:8.3-fpm-alpine@sha256:bb1e2c31079e049c6c8f4f02e9a132c60efc681ac249d83ae97fc1c497307f75 AS runtime
WORKDIR /var/www/html

LABEL org.opencontainers.image.source="https://github.com/Aapok0/homepage-bulma" \
      org.opencontainers.image.title="homepage-bulma (php-fpm)" \
      org.opencontainers.image.licenses="ISC"

# Production marker read by config/chttps.php (anything != "local" = production).
ENV APP_ENV=production

# opcache has to be compiled; the alpine base ships no build toolchain, so add
# $PHPIZE_DEPS just for the build and remove it again to keep the image small.
RUN set -eux; \
    apk add --no-cache --virtual .build-deps "$PHPIZE_DEPS"; \
    docker-php-ext-install opcache; \
    apk del .build-deps

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
FROM nginxinc/nginx-unprivileged:alpine@sha256:054e14f543eb688809d59ec2ad1644d1a61678e247c87a318ad605977eb37eaf AS nginx-sidecar

LABEL org.opencontainers.image.source="https://github.com/Aapok0/homepage-bulma" \
      org.opencontainers.image.title="homepage-bulma (nginx)" \
      org.opencontainers.image.licenses="ISC"

# Build steps need root (this image defaults to a non-root user).
USER root
WORKDIR /var/www/html

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
