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
        $pendidikan = Pendidikan::all();
        return view('cv.pendidikan', compact('pendidikan'));
    }

    public function pengalaman()
    {
        $pengalaman = Pengalaman::all();
        return view('cv.pengalaman', compact('pengalaman'));
    }

    public function keahlian()
    {
        $keahlian = Keahlian::all();
        return view('cv.keahlian', compact('keahlian'));
    }
}
