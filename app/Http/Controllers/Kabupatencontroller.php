<?php

namespace App\Http\Controllers;

use App\Models\kabupaten;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class KabupatenController extends Controller
{

    public function index()
    {
        $data['title'] = "Kabupaten";

        return view('kabupaten.index', $data);
    }

    public function create()
    {
        return view('kabupaten.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama'=>'required',
            'ket'=>''
        ]);
        kabupaten::create($data);
        return response()->json(['status' => true, 'message' => 'berhasil']);
    }

    // public function show($id)
    // {
    //     //
    // }

    public function edit($id)
    {        
        $data['id'] = $id;
        $data['data'] = kabupaten::where('id', $id)->first();
        return view('kabupaten.edit', $data);
    }

    public function update(Request $request)
    {
        
        kabupaten::where('id', $request->id)->update([
            'nama' => $request->nama,
            'ket' => $request->ket,
        ]);
        return response()->json(['status' => true, 'message' => 'berhasil']);
    }

    public function destroy(Request $request)
    {
        kabupaten::findOrFail($request->id)->delete();
        return response()->json(['status' => true, 'message' => 'berhasil']);
    }

    public function DataTable()
    {
        $table = kabupaten::select('*');
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
