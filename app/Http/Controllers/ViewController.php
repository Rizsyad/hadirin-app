<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absen;
use App\Models\Setting;

class ViewController extends Controller
{
    public function home()
    {
        $hadir = Absen::where('status', '=', 'Hadir')->count();
        $tidak = Absen::where('status', '=', 'Tidak Hadir')->count();

        $izin = Absen::where('kategori', '=', 'Izin')->count();
        $cuti = Absen::where('kategori', '=', 'Cuti')->count();

        return view('Page.Home', [
            "hadir" => $hadir,
            "izin" => $izin + $cuti,
            "tidak" => $tidak - ($izin + $cuti)
        ]);
    }

    public function presensi()
    {
        $records = [];

        for ($day = 1; $day <= 31; $day++) {
            $date = sprintf('%d-%d-%d', date('Y'), date('m'), $day);
            $record = Absen::where('tanggal_absen', $date)->first();
            
            $records[] = (object) [
                'tanggal_absen' => $date,
                'jam_datang' => $record ? ($record->jam_datang ? $record->jam_datang : '-' ) : '-',
                'jam_pulang' => $record ? ($record->jam_pulang ? $record->jam_pulang : '-' )  : '-',
                'kategori' => $record ? $record->kategori : '',
                'status' => $record ? $record->status : '',
                'lokasi' => $record ? $record->lokasi : '-',
            ];
        }

        return view('Page.Presensi', compact('records'));
    }

    public function profile()
    {
        return view('Page.Profile');
    }

    public function absenmasuk()
    {
        $setting = Setting::first();

        return view('Page.absenmasuk', compact('setting'));
    }

    public function absenpulang()
    {
        $setting = Setting::first();

        return view('Page.absenpulang', compact('setting'));
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
