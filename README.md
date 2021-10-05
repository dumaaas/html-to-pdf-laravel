# City Curator Report

HTML to PDF convertor for cc reports.

## Laravel-Snappy installation

1. Require this package in your composer.json and update composer.

``` bash
$ composer require barryvdh/laravel-snappy
```

2. After updating composer, add the ServiceProvider to the providers array in config/app.php

``` bash
Barryvdh\Snappy\ServiceProvider::class,
```

3. Use the Facade for shorter code. Add this to your facades:

``` bash
'PDF' => Barryvdh\Snappy\Facades\SnappyPdf::class,
'SnappyImage' => Barryvdh\Snappy\Facades\SnappyImage::class,
```

4. Finally you can publish the config file:

``` bash
$ php artisan vendor:publish --provider="Barryvdh\Snappy\ServiceProvider"
```

5. Require wkhtmltopdf package in your composer.json and update composer.

``` bash
$ composer require h4cc/wkhtmltopdf-amd64 0.12.x
$ composer require h4cc/wkhtmltoimage-amd64 0.12.x
```

6. The main change to this config file (config/snappy.php) will be the path to the binaries. 

``` bash
'binary' => base_path('vendor/h4cc/wkhtmltopdf-amd64/bin/wkhtmltopdf-amd64'),
```

7. Create reports directory in your resources/views and add this files there

``` bash
'footer.blade.php' -> footer for all report pages
'header.blade.php', -> header for all report pages
'report.blade.php', -> all report pages
```