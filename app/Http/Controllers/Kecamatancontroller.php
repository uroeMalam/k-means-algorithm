<?php

namespace App\Http\Controllers;

use App\Models\kabupaten;
use App\Models\kecamatan;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class KecamatanController extends Controller
{

    public function index()
    {
        $data['title'] = "kecamatan";
        $data['kabupaten'] = kabupaten::all();

        return view('kecamatan.index', $data);
    }

    public function create()
    {
        $data['kabupaten'] = kabupaten::all();
        $data['title'] = 'kecamatan';
        return view('kecamatan.create',$data);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'id_kabupaten'=>'required',
            'nama'=>'required',
            'ket'=>'',
            'lat' => 'required|numeric',
            'lng' => 'required|numeric',
        ]);
        kecamatan::create($data);
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
        $data['data'] = kecamatan::where('id', $id)->first();
        return view('kecamatan.edit', $data);
    }

    public function update(Request $request)
    {
        
        kecamatan::where('id', $request->id)->update([
            'nama' => $request->nama,
            'ket' => $request->ket,
            'lat' => $request->lat,
            'lng' => $request->lng,
            
        ]);
        return response()->json(['status' => true, 'message' => 'berhasil']);
    }

    public function destroy(Request $request)
    {
        kecamatan::findOrFail($request->id)->delete();
        return response()->json(['status' => true, 'message' => 'berhasil']);
    }

    public function DataTable(Request $request)
    {
        if ($request->id_kabupaten == "all") {
            $table = kecamatan::all();
        }else{
            $table = kecamatan::where('id_kabupaten', $request->id_kabupaten)->get();
        }
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
