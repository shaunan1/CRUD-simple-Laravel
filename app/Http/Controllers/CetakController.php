<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;

use Illuminate\Http\Request;

class CetakController extends Controller
{
    public function cetak(){
    $data=array(
        "nama"=>"nama"
    );
    $pdf = Pdf::loadView('cetak', $data);
    return $pdf->download('cetak.pdf');
    }
}
