Following the tutorial at https://laracasts.com/series/laravel-6-from-scratch

Used docker to containerize the application
* Run `docker-compose up -d` to build, create, start, and attach the docker containers.
* You can run `php artisan` commands inside docker like this: `docker-compose exec php php artisan`
* Run the following commands, using barryvdh/laravel-ide-helper to create helper files for IDE autocompletion:
    * `php artisan ide-helper:generate`
    * `php artisan ide-helper:meta`
    * `php artisan ide-helper:models --nowrite`