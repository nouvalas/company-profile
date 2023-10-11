<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
   public function index(Request $request)
   {
    $material = $request->input('material');
    $panjang = $request->input('panjang');
    $tinggi = $request->input('tinggi');
     $hasil = 0;
     if ($material == 'bb_hpl'){
        $hasil = 2500000 * $panjang * $tinggi;
     }elseif ($material == 'bb_duco'){
        $hasil = 2800000 * $panjang * $tinggi;
     }elseif ($material == 'fl_hpl'){
        $hasil = 3000000 * $panjang * $tinggi;
     }elseif ($material == 'fl_duco'){
        $hasil = 3200000 * $panjang * $tinggi;
     }else{
        $hasil = 0;
     }

     return redirect('/kalkulator')->with('message', ''.$hasil);

    }
}
