<?php

namespace App\Http\Controllers;

use App\Models\data;
use App\Models\dataCenter;
use App\Models\kabupaten;
use App\Models\kecamatan;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class PerhitunganController extends Controller
{

    public function index()
    {
        $data['title'] = "perhitungan";
        $data['kabupaten'] = kabupaten::orderBy('id','desc')->get();
        $data['kecamatan'] = kecamatan::all();
        $data['tahun'] = data::groupBy('tahun')->orderBy('id','desc')->get();
        $data['data'] = data::all();
        // $data['hasil'] = $this->rawData(2020,7);

        return view('perhitungan.index', $data);
    }

    public function DataTableTotal(Request $request)
    {
        $data = $this->rawData($request->tahun,$request->id_kabupaten);
        $count = array_count_values(array_column($data,'class'));
        $total = [
            [
                'class_i' => $count[1],
                'class_ii' => $count[2],
                'class_iii' => $count[3],
            ]
        ];

        return DataTables::of($total)
            ->addColumn('class_i_color', function ($row) {
                return '<h1 class=" text-bold text-center text-success">'.$row['class_i'].'</h1>';
            })
            ->addColumn('class_ii_color', function ($row) {
                return '<h1 class=" text-bold text-center text-warning">'.$row['class_ii'].'</h1>';
            })
            ->addColumn('class_iii_color', function ($row) {
                return '<h1 class=" text-bold text-center text-danger">'.$row['class_iii'].'</h1>';
            })
            ->rawColumns(['class_i_color','class_ii_color','class_iii_color'])
            ->make(true);
    }

    public function DataTable(Request $request)
    {
        $data = $this->rawData($request->tahun,$request->id_kabupaten);

        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('color_class', function ($row) {
                if ($row['class'] == 1) {
                    $warna = 'success';
                }
                elseif ($row['class'] == 2) {
                    $warna = 'warning';
                }
                elseif ($row['class'] == 3) {
                    $warna = 'danger';
                }
                else{
                    $warna = 'secondary';
                }
                return '<h4><span class="badge badge-'.$warna.' p-2">Class '.$row['class'].'</span></h4>';
            })
            ->rawColumns(['color_class'])
            ->make(true);
    }

    public function rawData($tahun,$id_kabupaten)
    {
        // get raw data from database
        $data = data::select(
                            'id', 
                            'id_kabupaten', 
                            'tahun', 
                            'luas_tanam',
                            'luas_panen',
                            'produktivitas',
                            'produksi',
                            )
                        ->where([
                            'tahun'=> $tahun,
                            'id_kabupaten'=> $id_kabupaten
                            ])
                        ->get();

        // get length of data
        $lenData = count($data); 

        // data center
        $dataCenter = [];

        // find max data in object
        $center = [
            'center_i' => dataCenter::select('tb_data.*')->join('tb_data','tb_data.id', '=', 'dist_random.id_data')->where('dist_random.id_kabupaten', $id_kabupaten)->where('dist_random.tahun', $tahun)->where('center_name', "center 1")->first(),
            'center_ii' => dataCenter::select('tb_data.*')->join('tb_data','tb_data.id', '=', 'dist_random.id_data')->where('dist_random.id_kabupaten', $id_kabupaten)->where('dist_random.tahun', $tahun)->where('center_name', "center 2")->first(),
            'center_iii' => dataCenter::select('tb_data.*')->join('tb_data','tb_data.id', '=', 'dist_random.id_data')->where('dist_random.id_kabupaten', $id_kabupaten)->where('dist_random.tahun', $tahun)->where('center_name', "center 3")->first(),
        ];

        // looping for get center data
        for ($i=0; $i < $lenData; $i++) { 
            $temp = [];
            $temp['data']['id'] = $data[$i]->id;
            $temp['data']['id_kabupaten'] = $data[$i]->id_kabupaten;
            $temp['data']['tahun'] = $data[$i]->tahun;
            // data raw
            $temp['data']['luas_tanam'] = $data[$i]->luas_tanam;
            $temp['data']['luas_panen'] = $data[$i]->luas_panen;
            $temp['data']['produktivitas'] = $data[$i]->produktivitas;
            $temp['data']['produksi'] = $data[$i]->produksi;
            $temp['data_raw']['luas_tanam'] = $data[$i]->luas_tanam;
            $temp['data_raw']['luas_panen'] = $data[$i]->luas_panen;
            $temp['data_raw']['produktivitas'] = $data[$i]->produktivitas;
            $temp['data_raw']['produksi'] = $data[$i]->produksi;
            // $temp['center_i']['id'] = $center['center_i']->id;
            // $temp['center_i']['id_kabupaten'] = $center['center_i']->id_kabupaten;
            // $temp['center_i']['tahun'] = $center['center_i']->tahun;
            $temp['center_i']['luas_tanam'] = $center['center_i']->luas_tanam;
            $temp['center_i']['luas_panen'] = $center['center_i']->luas_panen;
            $temp['center_i']['produktivitas'] = $center['center_i']->produktivitas;
            $temp['center_i']['produksi'] = $center['center_i']->produksi;
            // $temp['center_ii']['id'] = $center['center_ii']->id;
            // $temp['center_ii']['id_kabupaten'] = $center['center_ii']->id_kabupaten;
            // $temp['center_ii']['tahun'] = $center['center_ii']->tahun;
            $temp['center_ii']['luas_tanam'] = $center['center_ii']->luas_tanam;
            $temp['center_ii']['luas_panen'] = $center['center_ii']->luas_panen;
            $temp['center_ii']['produktivitas'] = $center['center_ii']->produktivitas;
            $temp['center_ii']['produksi'] = $center['center_ii']->produksi;
            // $temp['center_iii']['id'] = $center['center_iii']->id;
            // $temp['center_iii']['id_kabupaten'] = $center['center_iii']->id_kabupaten;
            // $temp['center_iii']['tahun'] = $center['center_iii']->tahun;
            $temp['center_iii']['luas_tanam'] = $center['center_iii']->luas_tanam;
            $temp['center_iii']['luas_panen'] = $center['center_iii']->luas_panen;
            $temp['center_iii']['produktivitas'] = $center['center_iii']->produktivitas;
            $temp['center_iii']['produksi'] = $center['center_iii']->produksi;
            array_push($dataCenter,$temp);
        }

        // kalau mau check data di browser
        // return response()->json($dataCenter);

        // get center data
        return $this->dataCenter($dataCenter, $lenData,$data);
        // return response()->json($this->dataCenter($dataCenter, $lenData,$data));
    }

    public function dataCenter($data, $lenData,$originData)
    {
        $dataCenter=[];

        for ($i=0; $i < $lenData; $i++) { 
            $temp = [];
            $temp['id'] = $data[$i]['data']['id'];
            $temp['id_kabupaten'] = $data[$i]['data']['id_kabupaten'];
            $temp['tahun'] = $data[$i]['data']['tahun'];
            // dc_i
            $temp['dc_i'] = sqrt(
                                        pow($data[$i]['center_i']['luas_tanam'] - $data[$i]['data']['luas_tanam'],2) +
                                        pow($data[$i]['center_i']['luas_panen'] - $data[$i]['data']['luas_panen'],2) +
                                        pow($data[$i]['center_i']['produktivitas'] - $data[$i]['data']['produktivitas'],2) +
                                        pow($data[$i]['center_i']['produksi'] - $data[$i]['data']['produksi'],2)
                                    );
            // dc_ii
            $temp['dc_ii'] = sqrt(
                                        pow($data[$i]['center_ii']['luas_tanam'] - $data[$i]['data']['luas_tanam'],2) +
                                        pow($data[$i]['center_ii']['luas_panen'] - $data[$i]['data']['luas_panen'],2) +
                                        pow($data[$i]['center_ii']['produktivitas'] - $data[$i]['data']['produktivitas'],2) +
                                        pow($data[$i]['center_ii']['produksi'] - $data[$i]['data']['produksi'],2)
                                    );
            // dc_iii
            $temp['dc_iii'] = sqrt(
                                        pow($data[$i]['center_iii']['luas_tanam'] - $data[$i]['data']['luas_tanam'],2) +
                                        pow($data[$i]['center_iii']['luas_panen'] - $data[$i]['data']['luas_panen'],2) +
                                        pow($data[$i]['center_iii']['produktivitas'] - $data[$i]['data']['produktivitas'],2) +
                                        pow($data[$i]['center_iii']['produksi'] - $data[$i]['data']['produksi'],2)
                                    );
            array_push($dataCenter,$temp);
        }
        // return $dataCenter;
        return $this->getClass($dataCenter,$lenData,$originData);
    }

    public function getClass($data,$lenData,$originData)
    {
        $getClass = [];
        for ($i=0; $i < $lenData; $i++) { 
            $temp=[];
            $temp['id'] = $data[$i]['id'];
            $temp['id_kabupaten'] = $data[$i]['id_kabupaten'];
            $temp['tahun'] = $data[$i]['tahun'];
            $temp['dc_i'] = $data[$i]['dc_i'];
            $temp['dc_ii'] = $data[$i]['dc_ii'];
            $temp['dc_iii'] = $data[$i]['dc_iii'];
            if ($data[$i]['dc_i'] == min($data[$i]['dc_i'],$data[$i]['dc_ii'],$data[$i]['dc_iii'])) {
                $temp['class'] = '1';
            } else if ($data[$i]['dc_ii'] == min($data[$i]['dc_i'],$data[$i]['dc_ii'],$data[$i]['dc_iii'])) {
                $temp['class'] = '2';
            } else {
                $temp['class'] = '3';
            }
            array_push($getClass,$temp);
        }
        // return response()->json($getClass);
        return $this->newDataCenter($getClass,$lenData,$originData);
    }

    // add class data to origin data
    public function newDataCenter($getClass,$lenData,$originData)
    {
        // $originData = berisi data mentah berikut dengan class nya
        // $getClass = berisi data dc_i, dc_ii, dc_iii dan classnya
        // $lenData = jumlah data yang ada di $originData

        // combine origin data with get class
        for ($i=0; $i < $lenData; $i++) {
            if ($originData[$i]['id'] == $getClass[$i]['id']) {
                $originData[$i]['class'] = $getClass[$i]['class'];
            }
        }

        // generate new data center
        $center = [
            'center_i' => [
                'count' => 0,
                'luas_tanam' => 0,
                'luas_panen' => 0,
                'produktivitas' => 0,
                'produksi' => 0
            ],
            'center_ii' => [
                'count' => 0,
                'luas_tanam' => 0,
                'luas_panen' => 0,
                'produktivitas' => 0,
                'produksi' => 0
            ],
            'center_iii' => [
                'count' => 0,
                'luas_tanam' => 0,
                'luas_panen' => 0,
                'produktivitas' => 0,
                'produksi' => 0
            ]
        ];
        foreach ($originData as $key => $value) {
            if ($value['class'] == '1') {
                $center['center_i']['count'] += 1;
                $center['center_i']['luas_tanam'] = $center['center_i']['luas_tanam'] + $value['luas_tanam'];
                $center['center_i']['luas_panen'] = $center['center_i']['luas_panen'] + $value['luas_panen'];
                $center['center_i']['produktivitas'] = $center['center_i']['produktivitas'] + $value['produktivitas'];
                $center['center_i']['produksi'] = $center['center_i']['produksi'] + $value['produksi'];
            }
            if ($value['class'] == '2') {
                $center['center_ii']['count'] += 1;
                $center['center_ii']['luas_tanam'] = $center['center_ii']['luas_tanam'] + $value['luas_tanam'];
                $center['center_ii']['luas_panen'] = $center['center_ii']['luas_panen'] + $value['luas_panen'];
                $center['center_ii']['produktivitas'] = $center['center_ii']['produktivitas'] + $value['produktivitas'];
                $center['center_ii']['produksi'] = $center['center_ii']['produksi'] + $value['produksi'];
            }
            if ($value['class'] == '3') {
                $center['center_iii']['count'] += 1;
                $center['center_iii']['luas_tanam'] = $center['center_iii']['luas_tanam'] + $value['luas_tanam'];
                $center['center_iii']['luas_panen'] = $center['center_iii']['luas_panen'] + $value['luas_panen'];
                $center['center_iii']['produktivitas'] = $center['center_iii']['produktivitas'] + $value['produktivitas'];
                $center['center_iii']['produksi'] = $center['center_iii']['produksi'] + $value['produksi'];
            }
        }

        // data $cente akan menghasilkan error DivisionByZeroError
        // hal ini terjadi karna kita mencoba membagi antara jumlah data dengan 0

        // calculate new data center
        $center['center_i']['luas_tanam'] = $center['center_i']['luas_tanam'] / ($center['center_i']['count'] == 0 ? 1 : $center['center_i']['count']);
        $center['center_i']['luas_panen'] = $center['center_i']['luas_panen'] / ($center['center_i']['count'] == 0 ? 1 : $center['center_i']['count']);
        $center['center_i']['produktivitas'] = $center['center_i']['produktivitas'] / ($center['center_i']['count'] == 0 ? 1 : $center['center_i']['count']);
        $center['center_i']['produksi'] = $center['center_i']['produksi'] / ($center['center_i']['count'] == 0 ? 1 : $center['center_i']['count']);
        $center['center_ii']['luas_tanam'] = $center['center_ii']['luas_tanam'] / ($center['center_ii']['count'] == 0 ? 1 : $center['center_ii']['count']);
        $center['center_ii']['luas_panen'] = $center['center_ii']['luas_panen'] / ($center['center_ii']['count'] == 0 ? 1 : $center['center_ii']['count']);
        $center['center_ii']['produktivitas'] = $center['center_ii']['produktivitas'] / ($center['center_ii']['count'] == 0 ? 1 : $center['center_ii']['count']);
        $center['center_ii']['produksi'] = $center['center_ii']['produksi'] / ($center['center_ii']['count'] == 0 ? 1 : $center['center_ii']['count']);
        $center['center_iii']['luas_tanam'] = $center['center_iii']['luas_tanam'] / ($center['center_iii']['count'] == 0 ? 1 : $center['center_iii']['count']);
        $center['center_iii']['luas_panen'] = $center['center_iii']['luas_panen'] / ($center['center_iii']['count'] == 0 ? 1 : $center['center_iii']['count']);
        $center['center_iii']['produktivitas'] = $center['center_iii']['produktivitas'] / ($center['center_iii']['count'] == 0 ? 1 : $center['center_iii']['count']);
        $center['center_iii']['produksi'] = $center['center_iii']['produksi'] / ($center['center_iii']['count'] == 0 ? 1 : $center['center_iii']['count']);

        // first gen done, return new data center

        // kalau mau nampilin data gen berikutnya
        // return response()->json($getClass);

        // goto next gen
        return $this->nextGen($originData,$lenData,$center);
    }

    // looping start from here !
    public function nextGen($originData,$lenData,$center)
    {
        // generate new data
        // willinng save all data raw class with center 1   2   3
        $newData = [];
        for ($i=0; $i < $lenData; $i++) {
            $temp = [];
            $temp['raw']['id'] = $originData[$i]['id'];
            $temp['raw']['id_kabupaten'] = $originData[$i]['id_kabupaten'];
            $temp['raw']['tahun'] = $originData[$i]['tahun'];
            $temp['raw']['class'] = $originData[$i]['class'];

            $temp['data']['luas_tanam'] = $originData[$i]['luas_tanam'];
            $temp['data']['luas_panen'] = $originData[$i]['luas_panen'];
            $temp['data']['produktivitas'] = $originData[$i]['produktivitas'];
            $temp['data']['produksi'] = $originData[$i]['produksi'];

            $temp['center_i']['luas_tanam'] = $center['center_i']['luas_tanam'];
            $temp['center_i']['luas_panen'] = $center['center_i']['luas_panen'];
            $temp['center_i']['produktivitas'] = $center['center_i']['produktivitas'];
            $temp['center_i']['produksi'] = $center['center_i']['produksi'];

            $temp['center_ii']['luas_tanam'] = $center['center_ii']['luas_tanam'];
            $temp['center_ii']['luas_panen'] = $center['center_ii']['luas_panen'];
            $temp['center_ii']['produktivitas'] = $center['center_ii']['produktivitas'];
            $temp['center_ii']['produksi'] = $center['center_ii']['produksi'];

            $temp['center_iii']['luas_tanam'] = $center['center_iii']['luas_tanam'];
            $temp['center_iii']['luas_panen'] = $center['center_iii']['luas_panen'];
            $temp['center_iii']['produktivitas'] = $center['center_iii']['produktivitas'];
            $temp['center_iii']['produksi'] = $center['center_iii']['produksi'];

            array_push($newData, $temp);
        }

        // calculate DC
        // willinng calculate DC 1   2   3
        $dc = [];
        for ($i=0; $i < $lenData; $i++) {
            $temp = [];
            $temp['id'] = $originData[$i]['id'];
            $temp['id_kabupaten'] = $originData[$i]['id_kabupaten'];
            $temp['tahun'] = $originData[$i]['tahun'];
            $temp['previous_class'] = $originData[$i]['class'];
            // dc_i
            $temp['dc_i'] = sqrt(
                                    pow($newData[$i]['center_i']['luas_tanam'] - $newData[$i]['data']['luas_tanam'],2) +
                                    pow($newData[$i]['center_i']['luas_panen'] - $newData[$i]['data']['luas_panen'],2) +
                                    pow($newData[$i]['center_i']['produktivitas'] - $newData[$i]['data']['produktivitas'],2) +
                                    pow($newData[$i]['center_i']['produksi'] - $newData[$i]['data']['produksi'],2)
                                );
            // dc_ii
            $temp['dc_ii'] = sqrt(
                                    pow($newData[$i]['center_ii']['luas_tanam'] - $newData[$i]['data']['luas_tanam'],2) +
                                    pow($newData[$i]['center_ii']['luas_panen'] - $newData[$i]['data']['luas_panen'],2) +
                                    pow($newData[$i]['center_ii']['produktivitas'] - $newData[$i]['data']['produktivitas'],2) +
                                    pow($newData[$i]['center_ii']['produksi'] - $newData[$i]['data']['produksi'],2)
                                );
            // dc_iii
            $temp['dc_iii'] = sqrt(
                                    pow($newData[$i]['center_iii']['luas_tanam'] - $newData[$i]['data']['luas_tanam'],2) +
                                    pow($newData[$i]['center_iii']['luas_panen'] - $newData[$i]['data']['luas_panen'],2) +
                                    pow($newData[$i]['center_iii']['produktivitas'] - $newData[$i]['data']['produktivitas'],2) +
                                    pow($newData[$i]['center_iii']['produksi'] - $newData[$i]['data']['produksi'],2)
                                );
            array_push($dc, $temp);   
        }

        // calculate new class
        $newClass = [];
        for ($i=0; $i < $lenData; $i++) {
            $temp = [];
            $temp['id'] = $originData[$i]['id'];
            $temp['id_kabupaten'] = $originData[$i]['id_kabupaten'];
            $temp['tahun'] = $originData[$i]['tahun'];
            $temp['previous_class'] = $originData[$i]['class'];

            $temp['dc_i'] = $dc[$i]['dc_i'];
            $temp['dc_ii'] = $dc[$i]['dc_ii'];
            $temp['dc_iii'] = $dc[$i]['dc_iii'];

            // new class
            if ($dc[$i]['dc_i'] == min($dc[$i]['dc_i'],$dc[$i]['dc_ii'],$dc[$i]['dc_iii'])) {
                $temp['class'] = '1';
            } else if ($dc[$i]['dc_ii'] == min($dc[$i]['dc_i'],$dc[$i]['dc_ii'],$dc[$i]['dc_iii'])) {
                $temp['class'] = '2';
            } else {
                $temp['class'] = '3';
            }
            array_push($newClass, $temp);
        }

        // find galat
        $galat = [];
        for ($i=0; $i < $lenData; $i++) {
            $temp = [];
            $temp['id'] = $newClass[$i]['id'];
            $temp['id_kabupaten'] = $newClass[$i]['id_kabupaten'];
            $temp['tahun'] = $newClass[$i]['tahun'];
            $temp['previous_class'] = $newClass[$i]['previous_class'];
            $temp['current_class'] = $newClass[$i]['class'];
            $temp['galat'] = $newClass[$i]['class'] - $newClass[$i]['previous_class'];
            array_push($galat, $temp);
        }

        // return response()->json($originData);
        // return response()->json($dc);
        // return response()->json($newClass);
        // return response()->json($galat);

        // new originData
        $returnData = [];
        for ($i=0; $i < $lenData; $i++) { 
            $join = data::select('tb_kecamatan.nama','tb_data.*')->where('tb_data.id', $newClass[$i]['id'])->join('tb_kecamatan','tb_kecamatan.id','=','tb_data.id_kecamatan')->get();
            $temp = [];
            $temp['id'] = $newClass[$i]['id'];
            $temp['id_kabupaten'] = $newClass[$i]['id_kabupaten'];
            $temp['kecamatan'] = $join[0]['nama'];
            $temp['tahun'] = $newClass[$i]['tahun'];
            $temp['luas_tanam'] = $join[0]['luas_tanam'];
            $temp['luas_panen'] = $join[0]['luas_panen'];
            $temp['produktivitas'] = $join[0]['produktivitas'];
            $temp['produksi'] = $join[0]['produksi'];
            $temp['class'] = $newClass[$i]['class'];
            array_push($returnData, $temp);
        }

        // if $galat['galat] == 0, stop loop
        // else $galat['galat] != 0, calculate new center
        $checkGalat = array_count_values(array_column($galat, 'galat'));
        if (($checkGalat['0'] ?? 0) == $lenData) {
            // return response()->json("selamat K mean anda selesai");
            // return response()->json($returnData);
            return $returnData;
        } else {
            // return response()->json("Perlu Looping Lagi !");
            $reconData = [];
            for ($i=0; $i <$lenData ; $i++) { 
                $temp = [];
                $temp['id'] = $originData[$i]['id'];
                $temp['id_kabupaten'] = $originData[$i]['id_kabupaten'];
                $temp['tahun'] = $originData[$i]['tahun'];
                $temp['luas_tanam'] = $originData[$i]['luas_tanam'];
                $temp['luas_panen'] = $originData[$i]['luas_panen'];
                $temp['produktivitas'] = $originData[$i]['produktivitas']; 
                $temp['produksi'] = $originData[$i]['produksi'];
                $temp['class'] = $newClass[$i]['class'];
                array_push($reconData, $temp);
            }

            // generate new data center
            $reconCenter  = [
                'center_i' => [
                    'count' => 0,
                    'luas_tanam' => 0,
                    'luas_panen' => 0,
                    'produktivitas' => 0,
                    'produksi' => 0
                ],
                'center_ii' => [
                    'count' => 0,
                    'luas_tanam' => 0,
                    'luas_panen' => 0,
                    'produktivitas' => 0,
                    'produksi' => 0
                ],
                'center_iii' => [
                    'count' => 0,
                    'luas_tanam' => 0,
                    'luas_panen' => 0,
                    'produktivitas' => 0,
                    'produksi' => 0
                ]
            ];
            foreach ($returnData as $key => $value) {
                if ($value['class'] == '1') {
                    $reconCenter['center_i']['count'] += 1;
                    $reconCenter['center_i']['luas_tanam'] = $reconCenter['center_i']['luas_tanam'] + $value['luas_tanam'];
                    $reconCenter['center_i']['luas_panen'] = $reconCenter['center_i']['luas_panen'] + $value['luas_panen'];
                    $reconCenter['center_i']['produktivitas'] = $reconCenter['center_i']['produktivitas'] + $value['produktivitas'];
                    $reconCenter['center_i']['produksi'] = $reconCenter['center_i']['produksi'] + $value['produksi'];
                }
                if ($value['class'] == '2') {
                    $reconCenter['center_ii']['count'] += 1;
                    $reconCenter['center_ii']['luas_tanam'] = $reconCenter['center_ii']['luas_tanam'] + $value['luas_tanam'];
                    $reconCenter['center_ii']['luas_panen'] = $reconCenter['center_ii']['luas_panen'] + $value['luas_panen'];
                    $reconCenter['center_ii']['produktivitas'] = $reconCenter['center_ii']['produktivitas'] + $value['produktivitas'];
                    $reconCenter['center_ii']['produksi'] = $reconCenter['center_ii']['produksi'] + $value['produksi'];
                }
                if ($value['class'] == '3') {
                    $reconCenter['center_iii']['count'] += 1;
                    $reconCenter['center_iii']['luas_tanam'] = $reconCenter['center_iii']['luas_tanam'] + $value['luas_tanam'];
                    $reconCenter['center_iii']['luas_panen'] = $reconCenter['center_iii']['luas_panen'] + $value['luas_panen'];
                    $reconCenter['center_iii']['produktivitas'] = $reconCenter['center_iii']['produktivitas'] + $value['produktivitas'];
                    $reconCenter['center_iii']['produksi'] = $reconCenter['center_iii']['produksi'] + $value['produksi'];
                }
            }

            // calculate new data center
            $reconCenter['center_i']['luas_tanam'] = $reconCenter['center_i']['luas_tanam'] / $reconCenter['center_i']['count'];
            $reconCenter['center_i']['luas_panen'] = $reconCenter['center_i']['luas_panen'] / $reconCenter['center_i']['count'];
            $reconCenter['center_i']['produktivitas'] = $reconCenter['center_i']['produktivitas'] / $reconCenter['center_i']['count'];
            $reconCenter['center_i']['produksi'] = $reconCenter['center_i']['produksi'] / $reconCenter['center_i']['count'];
            $reconCenter['center_ii']['luas_tanam'] = $reconCenter['center_ii']['luas_tanam'] / $reconCenter['center_ii']['count'];
            $reconCenter['center_ii']['luas_panen'] = $reconCenter['center_ii']['luas_panen'] / $reconCenter['center_ii']['count'];
            $reconCenter['center_ii']['produktivitas'] = $reconCenter['center_ii']['produktivitas'] / $reconCenter['center_ii']['count'];
            $reconCenter['center_ii']['produksi'] = $reconCenter['center_ii']['produksi'] / $reconCenter['center_ii']['count'];
            $reconCenter['center_iii']['luas_tanam'] = $reconCenter['center_iii']['luas_tanam'] / $reconCenter['center_iii']['count'];
            $reconCenter['center_iii']['luas_panen'] = $reconCenter['center_iii']['luas_panen'] / $reconCenter['center_iii']['count'];
            $reconCenter['center_iii']['produktivitas'] = $reconCenter['center_iii']['produktivitas'] / $reconCenter['center_iii']['count'];
            $reconCenter['center_iii']['produksi'] = $reconCenter['center_iii']['produksi'] / $reconCenter['center_iii']['count'];
                
        
            // new origin data => $returnData
            // new length data => $lenData
            // new center => $reconCenter
            // return response()->json($reconCenter);
            
            // goto next gen
            return $this->nextGen($returnData,$lenData,$reconCenter);
        }
    }
}
