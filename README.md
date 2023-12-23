Getting Started
---------------

This project requires PHP 8.1+, check it with:

```
php -v
```

Clone this repository and then run Composer:

```
composer install
```

You will then be able to run the unit tests with PHPUnit 10 using:

```
./vendor/bin/phpunit --no-coverage
```

For code coverage, run PHPUnit using:

```
XDEBUG_MODE=coverage ./vendor/bin/phpunit
```
