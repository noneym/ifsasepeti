#!/bin/sh
set -e

cd /var/www/html

# Ensure storage is writable (mounted volumes may reset ownership)
chown -R www-data:www-data storage bootstrap/cache || true

# Generate APP_KEY if missing - useful for first deploy if not set in env
if [ -z "${APP_KEY:-}" ] && [ ! -f .env ]; then
    php artisan key:generate --force --no-interaction || true
fi

# Wait briefly for DB to be reachable, then migrate
php artisan migrate --force --no-interaction || true

# Cache configs, routes, views for production
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan event:cache || true

# Storage symlink for public uploads
php artisan storage:link || true

# Meilisearch: push index settings + (re)import searchable models.
# Non-fatal: if Meilisearch is unreachable the search UI degrades to a DB lookup.
if [ -n "${MEILISEARCH_HOST:-}" ]; then
    php artisan scout:sync-index-settings || true
    php artisan scout:import "App\\Models\\Site" || true
    php artisan scout:import "App\\Models\\Post" || true
fi

exec "$@"
