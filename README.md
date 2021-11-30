# Timbertrack

Database management software made for Timbertrack.

## Run the following commands before you start the project

```bash
git pull
php artisan migrate:rollback
php artisan migrate

```

## Run the following commands before after cloning the project

```bash
git clone https://github.com/barsi-dev/timbertrack
composer install
composer require livewire/livewire
php artisan key:generate
php artisan storage:link
php artisan migrate
php artisan serve

```
