<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

         DB::table('tb_kecamatan')->insert([
            'id'=>3,
            'id_kabupaten'=>6,
            'nama'=>'Muara Satu',
            'lat'=>'5.19282795',
            'lng'=>'97.07485565',
            'ket'=>'-',
            'created_at'=>'2022-07-31 00:59:54',
            'updated_at'=>'2022-08-14 03:04:12',
            'deleted_at'=>NULL
            ] );
                        
             DB::table('tb_kecamatan')->insert([
            'id'=>4,
            'id_kabupaten'=>6,
            'nama'=>'Banda Sakti',
            'lat'=>'5.1902534',
            'lng'=>'97.13856182',
            'ket'=>'-',
            'created_at'=>'2022-07-31 02:54:18',
            'updated_at'=>'2022-08-14 03:04:41',
            'deleted_at'=>NULL
            ] );
                        
             DB::table('tb_kecamatan')->insert([
            'id'=>5,
            'id_kabupaten'=>6,
            'nama'=>'Muara Dua',
            'lat'=>'5.16625025',
            'lng'=>'97.11720879',
            'ket'=>'-',
            'created_at'=>'2022-07-31 02:54:39',
            'updated_at'=>'2022-08-14 03:05:09',
            'deleted_at'=>NULL
            ] );
                        
             DB::table('tb_kecamatan')->insert([
            'id'=>6,
            'id_kabupaten'=>6,
            'nama'=>'Blang Mangat',
            'lat'=>'5.12381335',
            'lng'=>'97.13546175',
            'ket'=>'-',
            'created_at'=>'2022-07-31 02:55:10',
            'updated_at'=>'2022-08-14 03:05:28',
            'deleted_at'=>NULL
            ] );
                        
             DB::table('tb_kecamatan')->insert([
            'id'=>7,
            'id_kabupaten'=>7,
            'nama'=>'Muara Batu',
            'lat'=>'5.239684',
            'lng'=>'96.9139108',
            'ket'=>'-',
            'created_at'=>'2022-07-31 03:04:19',
            'updated_at'=>'2022-08-14 03:07:49',
            'deleted_at'=>NULL
            ] );
                        
             DB::table('tb_kecamatan')->insert([
            'id'=>8,
            'id_kabupaten'=>7,
            'nama'=>'Sawang',
            'lat'=>'5.0645474',
            'lng'=>'96.7482257',
            'ket'=>'-',
            'created_at'=>'2022-07-31 03:05:04',
            'updated_at'=>'2022-08-14 03:08:17',
            'deleted_at'=>NULL
            ] );
                        
             DB::table('tb_kecamatan')->insert([
            'id'=>9,
            'id_kabupaten'=>7,
            'nama'=>'Nisam',
            'lat'=>'5.1739716',
            'lng'=>'96.9756457',
            'ket'=>'-',
            'created_at'=>'2022-07-31 03:05:15',
            'updated_at'=>'2022-08-14 03:08:42',
            'deleted_at'=>NULL
            ] );
                        
             DB::table('tb_kecamatan')->insert([
            'id'=>10,
            'id_kabupaten'=>7,
            'nama'=>'Nisam Antara',
            'lat'=>'5.0136036',
            'lng'=>'96.7978827',
            'ket'=>'-',
            'created_at'=>'2022-07-31 03:05:42',
            'updated_at'=>'2022-08-14 03:09:00',
            'deleted_at'=>NULL
            ] );
                        
             DB::table('tb_kecamatan')->insert([
            'id'=>11,
            'id_kabupaten'=>7,
            'nama'=>'Banda Baro',
            'lat'=>'5.1841155',
            'lng'=>'96.9392327',
            'ket'=>'-',
            'created_at'=>'2022-07-31 03:09:20',
            'updated_at'=>'2022-08-14 03:09:21',
            'deleted_at'=>NULL
            ] );
                        
             DB::table('tb_kecamatan')->insert([
            'id'=>12,
            'id_kabupaten'=>7,
            'nama'=>'Dewantara',
            'lat'=>'5.2343055',
            'lng'=>'96.9714242',
            'ket'=>'-',
            'created_at'=>'2022-07-31 03:09:37',
            'updated_at'=>'2022-08-14 03:09:48',
            'deleted_at'=>NULL
            ] );
                        
             DB::table('tb_kecamatan')->insert([
            'id'=>13,
            'id_kabupaten'=>7,
            'nama'=>'Kuta Makmur',
            'lat'=>'5.0942472',
            'lng'=>'96.9731679',
            'ket'=>'-',
            'created_at'=>'2022-07-31 03:10:07',
            'updated_at'=>'2022-08-14 03:10:08',
            'deleted_at'=>NULL
            ] );
                        
             DB::table('tb_kecamatan')->insert([
            'id'=>14,
            'id_kabupaten'=>7,
            'nama'=>'Simpang Kramat',
            'lat'=>'5.053513',
            'lng'=>'96.9967658',
            'ket'=>'-',
            'created_at'=>'2022-07-31 03:10:32',
            'updated_at'=>'2022-08-14 03:10:29',
            'deleted_at'=>NULL
            ] );
                        
             DB::table('tb_kecamatan')->insert([
            'id'=>15,
            'id_kabupaten'=>7,
            'nama'=>'Syamtalira Bayu',
            'lat'=>'5.0825797',
            'lng'=>'97.1061498',
            'ket'=>'-',
            'created_at'=>'2022-07-31 03:10:55',
            'updated_at'=>'2022-08-14 03:10:53',
            'deleted_at'=>NULL
            ] );
                        
             DB::table('tb_kecamatan')->insert([
            'id'=>16,
            'id_kabupaten'=>7,
            'nama'=>'Geredong Pase',
            'lat'=>'4.9649893',
            'lng'=>'96.8721857',
            'ket'=>'-',
            'created_at'=>'2022-07-31 03:11:35',
            'updated_at'=>'2022-08-14 03:11:10',
            'deleted_at'=>NULL
            ] );
                        
             DB::table('tb_kecamatan')->insert([
            'id'=>17,
            'id_kabupaten'=>7,
            'nama'=>'Samudra',
            'lat'=>'5.0450312',
            'lng'=>'97.1830877',
            'ket'=>'-',
            'created_at'=>'2022-07-31 03:11:51',
            'updated_at'=>'2022-08-14 03:11:38',
            'deleted_at'=>NULL
            ] );
                        
             DB::table('tb_kecamatan')->insert([
            'id'=>18,
            'id_kabupaten'=>7,
            'nama'=>'Syamtalira Aron',
            'lat'=>'5.101235',
            'lng'=>'97.2220022',
            'ket'=>'-',
            'created_at'=>'2022-07-31 03:12:16',
            'updated_at'=>'2022-08-14 03:12:06',
            'deleted_at'=>NULL
            ] );
                        
             DB::table('tb_kecamatan')->insert([
            'id'=>19,
            'id_kabupaten'=>7,
            'nama'=>'Tanah Pasir',
            'lat'=>'5.1341261',
            'lng'=>'97.2295148',
            'ket'=>'-',
            'created_at'=>'2022-07-31 03:12:40',
            'updated_at'=>'2022-08-14 03:12:39',
            'deleted_at'=>NULL
            ] );
                        
             DB::table('tb_kecamatan')->insert([
            'id'=>20,
            'id_kabupaten'=>7,
            'nama'=>'Lapang',
            'lat'=>'5.1443601',
            'lng'=>'97.2558787',
            'ket'=>'-',
            'created_at'=>'2022-07-31 03:12:55',
            'updated_at'=>'2022-08-14 03:12:56',
            'deleted_at'=>NULL
            ] );
                        
             DB::table('tb_kecamatan')->insert([
            'id'=>21,
            'id_kabupaten'=>7,
            'nama'=>'Tanah Luas',
            'lat'=>'4.9827987',
            'lng'=>'96.9848577',
            'ket'=>'-',
            'created_at'=>'2022-07-31 03:13:19',
            'updated_at'=>'2022-08-14 03:13:19',
            'deleted_at'=>NULL
            ] );
                        
             DB::table('tb_kecamatan')->insert([
            'id'=>22,
            'id_kabupaten'=>7,
            'nama'=>'Nibong',
            'lat'=>'5.0448621',
            'lng'=>'97.1830878',
            'ket'=>'-',
            'created_at'=>'2022-07-31 03:13:32',
            'updated_at'=>'2022-08-14 03:13:38',
            'deleted_at'=>NULL
            ] );
                        
             DB::table('tb_kecamatan')->insert([
            'id'=>23,
            'id_kabupaten'=>7,
            'nama'=>'Matang Kuli',
            'lat'=>'5.0306326',
            'lng'=>'97.2377972',
            'ket'=>'-',
            'created_at'=>'2022-07-31 03:13:52',
            'updated_at'=>'2022-08-14 03:14:03',
            'deleted_at'=>NULL
            ] );
                        
             DB::table('tb_kecamatan')->insert([
            'id'=>24,
            'id_kabupaten'=>7,
            'nama'=>'Pirak Timu',
            'lat'=>'4.9890076',
            'lng'=>'97.2469218',
            'ket'=>'-',
            'created_at'=>'2022-07-31 03:14:28',
            'updated_at'=>'2022-08-14 03:14:21',
            'deleted_at'=>NULL
            ] );
                        
             DB::table('tb_kecamatan')->insert([
            'id'=>25,
            'id_kabupaten'=>7,
            'nama'=>'Paya Bakong',
            'lat'=>'4.9337458',
            'lng'=>'97.1615209',
            'ket'=>'-',
            'created_at'=>'2022-07-31 03:14:39',
            'updated_at'=>'2022-08-14 03:14:37',
            'deleted_at'=>NULL
            ] );
                        
             DB::table('tb_kecamatan')->insert([
            'id'=>26,
            'id_kabupaten'=>7,
            'nama'=>'Lhoksukon',
            'lat'=>'5.0354053',
            'lng'=>'97.2978613',
            'ket'=>'-',
            'created_at'=>'2022-07-31 03:14:57',
            'updated_at'=>'2022-08-14 03:14:59',
            'deleted_at'=>NULL
            ] );
                        
             DB::table('tb_kecamatan')->insert([
            'id'=>27,
            'id_kabupaten'=>7,
            'nama'=>'Cot Girek',
            'lat'=>'4.8617892',
            'lng'=>'97.2096691',
            'ket'=>'-',
            'created_at'=>'2022-07-31 03:15:16',
            'updated_at'=>'2022-08-14 03:15:19',
            'deleted_at'=>NULL
            ] );
                        
             DB::table('tb_kecamatan')->insert([
            'id'=>28,
            'id_kabupaten'=>7,
            'nama'=>'Baktiya',
            'lat'=>'5.0624565',
            'lng'=>'97.2681486',
            'ket'=>'-',
            'created_at'=>'2022-07-31 03:15:31',
            'updated_at'=>'2022-08-14 03:15:52',
            'deleted_at'=>NULL
            ] );
                        
             DB::table('tb_kecamatan')->insert([
            'id'=>29,
            'id_kabupaten'=>7,
            'nama'=>'Baktiya Barat',
            'lat'=>'5.1296336',
            'lng'=>'97.2749644',
            'ket'=>'-',
            'created_at'=>'2022-07-31 03:15:46',
            'updated_at'=>'2022-08-14 03:16:10',
            'deleted_at'=>NULL
            ] );
                        
             DB::table('tb_kecamatan')->insert([
            'id'=>30,
            'id_kabupaten'=>7,
            'nama'=>'Seunudon',
            'lat'=>'5.1979356',
            'lng'=>'97.3366938',
            'ket'=>'-',
            'created_at'=>'2022-07-31 03:16:04',
            'updated_at'=>'2022-08-14 03:16:40',
            'deleted_at'=>NULL
            ] );
                        
             DB::table('tb_kecamatan')->insert([
            'id'=>31,
            'id_kabupaten'=>7,
            'nama'=>'Tanah Jambo Aye',
            'lat'=>'5.1006693',
            'lng'=>'97.3220792',
            'ket'=>'-',
            'created_at'=>'2022-07-31 03:16:35',
            'updated_at'=>'2022-08-14 03:16:58',
            'deleted_at'=>NULL
            ] );
                        
             DB::table('tb_kecamatan')->insert([
            'id'=>32,
            'id_kabupaten'=>7,
            'nama'=>'Langkahan',
            'lat'=>'4.9212165',
            'lng'=>'97.2979212',
            'ket'=>'-',
            'created_at'=>'2022-07-31 03:16:45',
            'updated_at'=>'2022-08-14 03:17:37',
            'deleted_at'=>NULL
            ] );
                        
             DB::table('tb_kecamatan')->insert([
            'id'=>33,
            'id_kabupaten'=>7,
            'nama'=>'Meurah Mulia',
            'lat'=>'5.0609506',
            'lng'=>'97.1550682',
            'ket'=>'-',
            'created_at'=>'2022-07-31 03:18:53',
            'updated_at'=>'2022-08-14 03:17:54',
            'deleted_at'=>NULL
            ] );
            
                
    }
}
