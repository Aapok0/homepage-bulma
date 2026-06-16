# [Homepage CV developed with Bulma framework](https://aapokokko.com/v2/)

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

### What to edit

| Area | Location |
|------|----------|
| Page content and layout | `*.php`, `components/` |
| Styles | `scss/` (Bulma 1.x via `@use`, theme in `main.scss`) |
| JavaScript | `js/` |
| Active nav indicator | `php/navIndicator.php` |