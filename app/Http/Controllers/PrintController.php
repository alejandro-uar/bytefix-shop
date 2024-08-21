<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Barryvdh\DomPDF\Facade\Pdf;

class PrintController extends Controller
{
    public function print(){
        $data = Product::all();
        $pdf = Pdf::loadView('pdf.invetoryAll', $data);
        return $pdf->download('InventoryAllProducts');
    }
}
