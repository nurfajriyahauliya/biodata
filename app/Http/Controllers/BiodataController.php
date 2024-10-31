<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    

    public function menampilkanBiodata()
    {
        $dataNama = Biodata::$Nama;
        $dataKelas = Biodata::$kelas;
        $dataSekolah = Biodata ::$Sekolah;
        $dataAlamat = Biodata ::$Alamat;
        $dataHobi = Biodata ::$Hobi;
        $dataEmail = Biodata::$Email;
        $dataBesti = Biodata ::$Besti;
       
        return view('biodata',compact('dataNama','dataKelas','dataSekolah','dataAlamat','dataHobi','dataEmail','dataBesti'));
    }
}

