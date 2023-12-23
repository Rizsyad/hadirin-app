<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function home()
    {
        return view('Page.Home');
    }

    public function presensi()
    {
        return view('Page.Presensi');
    }

    public function profile()
    {
        return view('Page.Profile');
    }

    public function absenmasuk()
    {
        return view('Page.absenmasuk');
    }

    public function absenpulang()
    {
        return view('Page.absenpulang');
    }

    public function suratizin()
    {
        return view('Page.suratizin');
    }

    public function pengajuancuti()
    {
        return view('Page.pengajuancuti');
    }

    public function cekstatus()
    {
        return view('Page.cekstatus');
    }
}
