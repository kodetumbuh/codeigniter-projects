<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Dompdf\Dompdf;

class PdfController extends BaseController
{
    public function index()
    {
        return view('pdf_view');
    }

    public function generate()
    {
    	$filename = date('y-m-d-H-i-s'). '-qadr-labs-report';
    
    	// instantiate and use the dompdf class
    	$dompdf = new Dompdf();

    	// load HTML content
    	$dompdf->loadHtml(view('pdf_view'));

    	$dompdf->setPaper('A4', 'landscape');

    	$dompdf->render();

    	$dompdf->stream($filename);
    }
}
