## Quick orientation

- This repository is a Laravel-based web app skeleton (PSR-4 autoload, PHP ^8.2, Laravel 12 in composer.json).
- Key code locations:
  - Routes: `routes/web.php` (mostly closures for pages)
  - Controllers: `app/Http/Controllers/` (e.g. `RiskController.php`)
  - Models: `app/Models/` (Eloquent models, e.g. `User.php`)
  - Views: `resources/views/` (Blade templates; many are RTL/Arabic)
  - Frontend: `package.json`, `vite.config.js`, Tailwind + Vite

## Big-picture architecture (what to know)
- The app follows a Laravel-style layered MVC shape: routes → controllers → models → blade views. Many pages are implemented as route closures that return views (see `routes/web.php`).
- Service bootstrapping lives in `bootstrap/app.php` and providers are under `app/Providers/` (register app-level bindings there).
- Frontend assets are built with Vite + Tailwind (see `package.json`). Some pages include third-party client libs directly in Blade (e.g. `vis-network` in `resources/views/suspicious-accounts.blade.php`).
- Data migrations and seeders are in `database/migrations` and `database/seeders`.

## Project-specific patterns & conventions
- Arabic/RTL-first UI: many Blade views contain Arabic text and RTL layout. Preserve RTL-related classes and textual content when editing views.
- Small, self-contained controllers: example: `app/Http/Controllers/RiskController.php` contains a single `analyze(Request $request)` method with an inline risk algorithm and Arabic inline comments — use it as the canonical example of business logic placement.
- Routes often use closures for simple pages. For APIs or heavier logic, add routes in `routes/web.php` that point to controller methods (preferred for testability).
- Model casting uses the `casts()` method rather than a property array in `User.php` (follow existing style).

## Build / dev / test workflows (concrete commands)
- Install backend deps: `composer install`
- Setup environment (one-off): copy `.env.example` → `.env`, then `php artisan key:generate` and `php artisan migrate` (the project creates `database/database.sqlite` in post-create scripts).
- Frontend: `npm install` then `npm run dev` (vite dev) or `npm run build` for production bundle.
- Useful composer scripts defined in `composer.json`:
  - `composer run setup` — runs composer install, copies .env, key:generate, migrate, npm install & build (convenience)
  - `composer run dev` — runs the concurrently dev stack (if you need server, queue, vite together)
  - `composer test` — clears config and runs `php artisan test`

## Testing and verification
- Unit/feature tests live under `tests/`. Run `composer test` or `php artisan test`.
- Quick local server: `php artisan serve` (or use the `composer run dev` concurrently script for server + vite).

## Integration points & external deps
- Backend: Laravel framework (declared in `composer.json`).
- Frontend: Vite, Tailwind, `vis-network` is loaded directly from CDN in `resources/views/suspicious-accounts.blade.php`.
- Background processing: queue-related scripts appear in composer/dev scripts (concurrently runs `php artisan queue:listen`). If you add queue workers, follow Laravel queue config patterns.

## Concrete examples to reference
- Risk scoring algorithm: `app/Http/Controllers/RiskController.php` — `analyze(Request $request)` shows how input is read, scored and a JSON response is returned. Use this pattern for simple JSON endpoints.
- Network visualization: `resources/views/suspicious-accounts.blade.php` uses `vis-network` and an inline `networksData` JS object — when integrating server data, return JSON from a controller and fetch it from the view (avoid embedding large datasets in blade).

## Rules for AI edits (practical constraints)
- Do not change user-facing Arabic strings unless fixing an obvious bug — preserve RTL and language.
- Add routes in `routes/web.php`. For controller additions, create files under `app/Http/Controllers/` and keep controller methods small and testable.
- Keep database schema changes in `database/migrations/` and add a seeder in `database/seeders/` when adding sample data.
- For frontend changes, prefer modifying files in `resources/js/` and rebuilding with `npm run build` / `npm run dev`. Avoid editing the compiled `public/` assets directly.
- Never commit secrets or `.env` contents. Use `.env.example` for examples.

## When you need clarification
- If a change touches deployment (migrations, env vars, queues), ask for the target environment and DB credentials (do not request secrets in chat — request they run commands locally and paste non-sensitive outputs if needed).

---
If anything in this instruction is unclear or you want more examples (e.g. how to add an API route + controller + test), tell me which area to expand and I will iterate.
