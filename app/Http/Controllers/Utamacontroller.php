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
        $data['title'] = "/";

        return view('user.utama', $data);
    }

    
}
