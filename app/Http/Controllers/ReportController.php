<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use Barryvdh\Snappy\Facades\SnappyPdf as PDF;
use Illuminate\Support\Facades\App;
use View;
class ReportController extends Controller
{


    public function index()
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

}
