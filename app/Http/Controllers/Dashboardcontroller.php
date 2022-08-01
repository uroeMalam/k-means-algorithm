<?php

namespace App\Http\Controllers;

use App\Models\data;
use App\Models\kabupaten;
use App\Models\kecamatan;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class DashboardController extends Controller
{

    public function index()
    {
        $data['title'] = "/dashboard";

        return view('layout.dashboard', $data);
    }

    
}
