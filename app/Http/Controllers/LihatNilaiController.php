<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LihatNilaiController extends Controller
{
    //
    public function dataMahasiswa(){
        $mhs1 = 'AlHadar'; $asal1 = 'Jakarta';
        $mhs2 = 'Halimah'; $asal2 = 'Indramayu';
        return view('coba.data', compact('mhs1', 'mhs2', 'asal1', 'asal2'));
    }

}
