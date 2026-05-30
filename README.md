# Prime ICT Website

Laravel 11 business website for **Prime ICT** (layout inspired by expertittelco.com.au with custom navigation).

## Tech stack

- Laravel 11, Blade, Bootstrap 5
- Vite for asset compilation
- MySQL-ready (default `.env` uses SQLite for local dev)
- Images loaded from the reference site as placeholders

## Pages

| URL | Page |
|-----|------|
| `/` | Homepage |
| `/it-services` | Managed IT Services |
| `/business-phone-systems` | Business Phone Systems |
| `/business-internet` | Business Internet |
| `/why-choose-us` | Why Choose Us |
| `/contact` | Contact |

## Run locally

```bash
composer install
cp .env.example .env   # if needed
php artisan key:generate
php artisan migrate    # optional, for SQLite default

npm install
npm run dev            # Vite dev server (separate terminal)

php artisan serve      # http://127.0.0.1:8000
```

For XAMPP, point the vhost document root to `public/` or visit `http://localhost/primeict/public`.

## Project structure

```
app/Http/Controllers/PageController.php
config/site.php
routes/web.php
resources/views/layouts/app.blade.php
resources/views/components/   # header, footer, hero, service-card, cta-banner, testimonials, contact-form
resources/views/pages/        # all page templates
public/assets/css/main.css
public/assets/js/main.js
public/assets/images/         # add local images here when replacing placeholders
```

## Design notes

Brand colors: navy `#002855`, accent orange `#F58220` (from Prime ICT logo). Logo: `public/assets/images/logo-prime-ict.png`. Contact forms are UI-only until you wire a backend handler.

## MySQL

Update `.env`:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=primeict
DB_USERNAME=root
DB_PASSWORD=
```

Then run `php artisan migrate`.
