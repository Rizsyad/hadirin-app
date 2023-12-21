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

    }

    public function absenpulang()
    {

    }

    public function suratizin()
    {

    }

    public function pengajuancuti()
    {

    }
}
