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
        $biodata = Biodata::first();
        $pendidikan = Pendidikan::all();
        
        return view('cv.pendidikan', compact('biodata', 'pendidikan'));
    }

    public function pengalaman()
    {
        $biodata = Biodata::first();
        $pengalaman = Pengalaman::all();

        return view('cv.pengalaman', compact('biodata', 'pengalaman'));
    }

    public function keahlian()
    {
        $biodata = Biodata::first();
        $keahlian = Keahlian::all();

        return view('cv.keahlian', compact('biodata', 'keahlian'));
    }
}