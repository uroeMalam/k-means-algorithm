<?php

namespace App\Http\Controllers;

use App\Models\data;
use App\Models\dataCenter;
use App\Models\kabupaten;
use App\Models\kecamatan;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class DataCenterController extends Controller
{

    public function index()
    {
        $data['title'] = "data";
        $data['kabupaten'] = kabupaten::all();
        $data['tahun'] = data::groupBy('tahun')->get();

        return view('data_center.index', $data);
    }

    public function create($id_kabupaten,$tahun)
    {
        $data['tahun'] = $tahun;
        $data['id_kabupaten'] = $id_kabupaten;
        $data['data'] = data::select('tb_data.id as id_data','tb_kecamatan.*')
                            ->join('tb_kecamatan', 'tb_data.id_kecamatan', '=', 'tb_kecamatan.id')
                            ->where('tb_data.id_kabupaten', $id_kabupaten)
                            ->where('tb_data.tahun',$tahun)
                            ->get();
        return view('data_center.create',$data);
    }

    // public function getPaketByNama($nama)
    // {
    //     $id=ThPaketKrs::where('id',$nama)->first();
    //     $th_paket_krs = new ThPaketKrs();
    //     $data = $th_paket_krs->getPaket($id->nama_paket);
    //     echo json_encode($data);
    // }

    public function store(Request $request)
    {
        $request->validate([
            'id_datacenter_1'=>'required',
            'id_datacenter_2'=>'required',
            'id_datacenter_3'=>'required',
        ]);
        $compare = dataCenter::where('id_kabupaten', $request->id_kabupaten)->where('tahun', $request->tahun)->first();
        if ($compare == null) {
            $data = [
                        ['center_name' => $request->center_1,'id_kabupaten' => $request->id_kabupaten,'tahun' => $request->tahun,'id_data' => $request->id_datacenter_1],
                        ['center_name' => $request->center_2,'id_kabupaten' => $request->id_kabupaten,'tahun' => $request->tahun,'id_data' => $request->id_datacenter_2],
                        ['center_name' => $request->center_3,'id_kabupaten' => $request->id_kabupaten,'tahun' => $request->tahun,'id_data' => $request->id_datacenter_3],
                    ];
            dataCenter::insert($data);
            return response()->json(['status' => true, 'message' => 'berhasil']);
        }else{
            return response()->json(['status' => false, 'message' => 'Data Center sudah ada']);
        }
    }

    public function edit($id)
    {        
        $data['id'] = $id;
        $data['kabupaten'] = kabupaten::all();
        $data['kecamatan'] = kecamatan::all();
        $data['data'] = data::where('id', $id)->first();
        return view('data_center.edit', $data);
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
        dataCenter::where('tahun',$request->text)->where('id_kabupaten',$request->id)->delete();
        return response()->json(['status' => true, 'message' => 'berhasil']);
    }

    public function DataTable(Request $request)
    {
        $table = dataCenter::select('dist_random.*','tb_kabupaten.nama','tb_data.luas_tanam','tb_data.luas_panen','tb_data.produktivitas','tb_data.produksi')
                            ->join('tb_kabupaten','tb_kabupaten.id' ,'=' ,'dist_random.id_kabupaten')
                            ->join('tb_data','tb_data.id' ,'=' ,'dist_random.id_data')
                            ->where('dist_random.id_kabupaten', $request->id_kabupaten)
                            ->where('dist_random.tahun', $request->tahun)
                            ->get();
        return DataTables::of($table)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $btn_edit = '<button type="button" class="btn btn-sm btn-info" id="edit" data-id="' . $row->id . '"><i class="fas fa-edit"></i></button>';

                $btn = '<div class="btn-group" role="group" aria-label="LihatData">' .
                    $btn_edit .
                    '</div>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }
}
