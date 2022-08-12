<?php

namespace App\Http\Controllers;

use App\Models\data;
use App\Models\kabupaten;
use Illuminate\Http\Request;


class MapController extends Controller
{
    public function index()
    {
        $data['kabupaten'] =  kabupaten::all();        
        $data['tahun'] = data::groupBy('tahun')->orderBy('id','desc')->get();
        return view('map.index',$data);
    }
}
