<?php

namespace App\Http\Controllers;

use App\Models\data;
use App\Models\kabupaten;
use App\Models\kecamatan;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class PerhitunganController extends Controller
{

    public function index()
    {
        $data['title'] = "perhitungan";
        $data['kabupaten'] = kabupaten::all();
        $data['kecamatan'] = kecamatan::all();
        $data['tahun'] = data::groupBy('tahun')->get();
        $data['data'] = data::all();

        return view('perhitungan.index', $data);
    }

}
