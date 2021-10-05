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

8. Add css files to public/css and js files to public/js 

``` bash
css files => [app.css, fonts.css]
js files => [chart.js, doughnot.js]
```

8. Set this options in config/snappy.php 

``` bash
'pdf' => [
    enabled' => true,
    'binary' => base_path('vendor/h4cc/wkhtmltopdf-amd64/bin/wkhtmltopdf-amd64'),
    'timeout' => false,
    'options' => [
        'enable-javascript' => true,
        'javascript-delay' => 1000,
        'enable-smart-shrinking' => true,
        'no-stop-slow-scripts' => true,
        'margin-top' => 15,
        'margin-bottom' => 12,
        'margin-left' => 0,
        'margin-right' => 0,
    ],
    'env' => [],
],
```

9. Finally, add this code to your report controller

``` bash
public function report()
{
    $viewName = 'reports.report';
    $header = View::make('reports.header');
    // for some reason $footer is not working (need to check this)
    // $footer = View::make('reports.footer');
    $pdf = PDF::loadView($viewName)->setOrientation('landscape');
    $pdf->setOption('enable-local-file-access', true);
    $pdf->setOption('header-html', $header);
    // $pdf->setOption('footer-html', $footer);
        
    // download pdf file
    return $pdf->download('report.pdf');

    //stream pdf file
    // return $pdf->download('report.pdf');

    //open pdf as view
    // return view($viewName);
}
```



