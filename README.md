# PHP Composer Package Example

## The library

The `library` directory contains a custom package.
The `composer.json` defines the name of the package,
the version number, and how to autoload the classes from the `src/` directory.

## The application

The `application/` directory contains a sample
application that uses the class from the `library/`
directory. There is a `composer.json` that loads
the library locally and then creates an instance
of the class for use.

From this directory, run:

```bash
composer install
php main.php
```

## Learn more

To learn more about Composer basics, check out my
tutorial [PHP Composer Basics](https://www.devdungeon.com/content/php-composer-basics)

## Author

John Leon <nanodano@devdungeon.com>