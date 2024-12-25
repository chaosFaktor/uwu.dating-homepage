## About UwU.dating
UwU.dating is an on-convention dating applicastion, tailored to the chaos community. The current version is the third incarnation of [larsms](https://larsm.org/) uwu.tours.

This homepage contains information about the current state of the project and instructions on how to use it.


## Build instructions

First copy the file named '.env.example' to .env and adapt the file to your needs. As of now the defaults should just work fine though.

```
cp .env{.example,}

$EDITOR .env
```

Next make sure you installed the required depencies using composer

```
composer install
```

You can now test the application by running `php artisan serve` in the projects root directory. This should start a webserver, serving the page.

For actual deployment please have a look at the [laravel documentation](https://laravel.com/docs/11.x/deployment) 

To deploy using frankenphp you can run `frankenphp php-server -r public/` in the projects root directory. Consider using [gnu screen](https://www.gnu.org/software/screen/manual/screen.html) to keep the process alive.
