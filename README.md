# City Curator Report

HTML to PDF convertor for cc reports.

## Laravel-Snappy installation

1. Require this package in your composer.json and update composer.

``` bash
$ composer require barryvdh/laravel-snappy
```

2. After updating composer, add the ServiceProvider to the providers array in config/app.php

``` bash
$ Barryvdh\Snappy\ServiceProvider::class,
```