<?php

namespace App\Http\Controllers;

use App\Models\data;
use App\Models\kabupaten;
use App\Models\kecamatan;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class DataController extends Controller
{

    public function index()
    {
        $data['title'] = "data";
        $data['kabupaten'] = kabupaten::all();
        $data['tahun'] = data::groupBy('tahun')->get();

        return view('data.index', $data);
    }

    public function create()
    {
        $data['kabupaten'] = kabupaten::all();
        $data['kecamatan'] = kecamatan::all();
        $data['title'] = 'data';
        return view('data.create',$data);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'id_kabupaten'=>'required',
            'id_kecamatan'=>'required',
            'tahun'=>'required',
            'luas_tanam'=>'required',
            'luas_panen'=>'required',
            'produktivitas'=>'required',
            'produksi'=>'required'
        ]);
        data::create($data);
        return response()->json(['status' => true, 'message' => 'berhasil']);
    }

    // public function show($id)
    // {
    //     //
    // }

    public function edit($id)
    {        
        $data['id'] = $id;
        $data['kabupaten'] = kabupaten::all();
        $data['kecamatan'] = kecamatan::all();
        $data['data'] = data::where('id', $id)->first();
        $data['tahun'] = data::groupBy('tahun')->get();
        return view('data.edit', $data);
    }

    public function update(Request $request)
    {
        
        data::where('id', $request->id)->update([
            'id_kabupaten' => $request->id_kabupaten,
            'id_kecamatan' => $request->id_kecamatan,
            'tahun' => $request->tahun,
            'luas_tanam' => $request->luas_tanam,
            'luas_panen' => $request->luas_panen,
            'produktivitas' => $request->produktivitas,
            'produksi' => $request->produksi,
        ]);
        return response()->json(['status' => true, 'message' => 'berhasil']);
    }

    public function destroy(Request $request)
    {
        data::findOrFail($request->id)->delete();
        return response()->json(['status' => true, 'message' => 'berhasil']);
    }

    public function DataTable()
    {
        $table = data::select('tb_data.*','tb_kecamatan.nama')->join('tb_kecamatan','tb_kecamatan.id' ,'=' ,'tb_data.id_kecamatan')->get();
        return DataTables::of($table)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $btn_edit = '<button type="button" class="btn btn-sm btn-info" id="edit" data-id="' . $row->id . '"><i class="fas fa-edit"></i></button>';
                $btn_hapus = '<button type="button" class="btn btn-sm btn-danger" id="hapusData" data-id="' . $row->id . '" data-Text="' . $row->nama . '"><i class="fas fa-trash"></i></button>';

                $btn = '<div class="btn-group" role="group" aria-label="LihatData">' .
                    $btn_edit .
                    $btn_hapus .
                    '</div>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }
}
