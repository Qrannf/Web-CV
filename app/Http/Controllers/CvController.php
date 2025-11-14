<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;
use App\Models\Pendidikan;
use App\Models\Pengalaman;
use App\Models\Keahlian;

class CvController extends Controller
{
    public function index()
    {
        $biodata = Biodata::first();
        $pendidikan = Pendidikan::all();
        $pengalaman = Pengalaman::all();
        $keahlian = Keahlian::all();

        return view('cv.index', compact('biodata', 'pendidikan', 'pengalaman', 'keahlian'));
    }

    public function pendidikan()
    {
        // [PERBAIKAN] Tambahkan $biodata agar footer tidak error
        $biodata = Biodata::first();
        $pendidikan = Pendidikan::all();
        
        // [PERBAIKAN] Tambahkan 'biodata' ke compact()
        return view('cv.pendidikan', compact('biodata', 'pendidikan'));
    }

    public function pengalaman()
    {
        // [PERBAIKAN] Tambahkan $biodata agar footer tidak error
        $biodata = Biodata::first();
        $pengalaman = Pengalaman::all();

        // [PERBAIKAN] Tambahkan 'biodata' ke compact()
        return view('cv.pengalaman', compact('biodata', 'pengalaman'));
    }

    public function keahlian()
    {
        // [PERBAIKAN] Tambahkan $biodata agar footer tidak error
        $biodata = Biodata::first();
        $keahlian = Keahlian::all();

        // [PERBAIKAN] Tambahkan 'biodata' ke compact()
        return view('cv.keahlian', compact('biodata', 'keahlian'));
    }
}