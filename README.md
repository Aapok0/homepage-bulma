# [Homepage CV developed with Bulma framework](https://www.aapokokko.com/)

After finishing my first [website](https://github.com/Aapok0/homepage) I started making new version of a CV website. This time I wanted to use a CSS framework and ended choosing Bulma. I also decided to add some Javascript as I was learning it.

The website is hosted in an Azure VM deployed with this [Terraform architecture](https://github.com/Aapok0/azure-tf-architecture) with Nginx setup by these [Ansibles](https://github.com/Aapok0/homepage-webserver-ansible).

## Local development

Static PHP site with Bulma styles compiled from SCSS. No database or Composer dependencies.

### Prerequisites

- **Node.js** and **pnpm** — install dependencies and compile CSS
- **PHP 8+** — serve pages and PHP includes

### Setup

```bash
pnpm install
pnpm run css-build
```

The `css/` directory is gitignored and built before deploy, so run `css-build` once after cloning.

### Daily workflow

**One terminal (CSS watch + PHP server):**

```bash
pnpm run dev-start
```

Builds CSS once, then runs SCSS watch and the PHP dev server together. Stop both with Ctrl+C.

**Or split across two terminals:**

```bash
# Terminal 1 — watch SCSS changes
pnpm start

# Terminal 2 — PHP dev server (HTTP, local only)
APP_ENV=local php -S localhost:8080 router.php
```

**PHP only (no SCSS watch):**

```bash
pnpm run dev
```

Open http://localhost:8080/ (extensionless URLs, same as production)

Production enforces HTTPS via `config/chttps.php`. Setting `APP_ENV=local` skips that redirect for the built-in PHP server. Do not set this in production.

### CI

GitHub Actions workflow **CSS build** (`.github/workflows/css-build.yml`) runs `pnpm run css-build` on SCSS changes and uploads `css/main.css` as an artifact. Ansible still builds CSS on the VM during deploy; CI catches SCSS compile errors early.

### What to edit

| Area | Location |
|------|----------|
| Page content and layout | `*.php`, `components/` |
| Styles | `scss/` (Bulma 1.x via `@use`, theme in `main.scss`) |
| JavaScript | `js/` |
| Active nav indicator | `php/navIndicator.php` |

## Docker (local container test)

The production build is two images that run as a sidecar pair: an `nginx` front end and a `php-fpm` back end that talk over `127.0.0.1:9000`. To mirror that locally, the nginx container joins the php container's network namespace (same as a single Container Apps replica), so they share `localhost`.

### Build both images

```bash
docker build --target runtime       -t homepage-bulma-php   .
docker build --target nginx-sidecar -t homepage-bulma-nginx .
```

### Run the pair

```bash
# php-fpm owns the shared network namespace and publishes nginx's port
docker run -d --name homepage-php -p 8080:8080 homepage-bulma-php

# nginx joins that namespace, so fastcgi_pass to 127.0.0.1:9000 resolves
docker run -d --name homepage-nginx --network "container:homepage-php" homepage-bulma-nginx
```

Open http://localhost:8080/. Port `8080` is published on the **php** container because the first container owns the namespace; the joining nginx container can't add its own port mappings.

`APP_ENV=production` is baked into the image, but `localhost` is listed under `local` in `config/hosts.php`, so the HTTPS redirect in `config/chttps.php` is skipped and the site serves over plain HTTP.

### Logs and cleanup

```bash
docker logs homepage-nginx
docker logs homepage-php

docker rm -f homepage-nginx homepage-php
```

## Releasing (version tags)

The webserver Ansible pins each app to a git ref via `nginx_apps[].version`. Cut a release by tagging `main`:

```bash
# Make sure main is up to date and CSS compiles
git checkout main
git pull

# Create an annotated, semver-style tag and push it
git tag -a v2.0.0 -m "v2.0.0"
git push origin v2.0.0
```

Then point the deploy at it in **homepage-webserver-ansible** `group_vars/nginx`:

```yaml
nginx_apps:
  - name: homepage-bulma
    version: v2.0.0   # was: main
```

Re-run `nginx.yml`; the app is checked out at that tag (build/sync only run because the ref changed).

Useful tag commands:

```bash
git tag                      # list tags
git tag -d v2.0.0            # delete locally
git push origin :v2.0.0      # delete on remote
```