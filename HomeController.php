<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use PDF;
use App\Customer;
class HomeController extends Controller
{
    public function getpdf(){
      $customers-Customer::all)();
      $pdf=PDF::loadView('pdf.Customer',['customers'=>$customers]);
      return $pdf->stream('Customer.pdf');
    }

}
