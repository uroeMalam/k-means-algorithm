<?php

namespace App\Http\Controllers;

use App\Models\data;
use App\Models\kabupaten;
use App\Models\kecamatan;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class UtamaController extends Controller
{

    public function index()
    {
        // map
        $data['kabupaten'] =  kabupaten::all();        
        $data['tahun'] = data::groupBy('tahun')->orderBy('id','desc')->get();

        // table
        $data['kabupaten'] = kabupaten::orderBy('id','desc')->get();
        $data['kecamatan'] = kecamatan::all();
        $data['tahun'] = data::groupBy('tahun')->orderBy('id','desc')->get();
        $data['data'] = data::all();
        return view('user.utama', $data);
    }

    
}
