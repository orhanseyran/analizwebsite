<?php

namespace App\Http\Controllers;

use App\Exports\PmaExport;
use App\Models\Pma;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PmaController extends Controller
{
   public function adminindexpma(){
    $pma = Pma::latest()->get();
    return view("admin.PotansiyelMüşteriAnalizi.index",[
        "pma"=> $pma
    ]);



   }
   public function pmaexport(){
    return  Excel::download(new PmaExport, 'Pma.xlsx', );
}
}
