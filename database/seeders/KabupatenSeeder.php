<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KabupatenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_kabupaten')->insert([
            'id'=>6,
            'nama'=>'Kota Lhokseumawe',
            'ket'=>'-',
            'created_at'=>'2022-07-31 07:58:22',
            'updated_at'=>'2022-07-31 07:58:22',
            'deleted_at'=>NULL
            ] );
            
            
                        
            DB::table('tb_kabupaten')->insert([
            'id'=>7,
            'nama'=>'Aceh Utara',
            'ket'=>'-',
            'created_at'=>'2022-07-31 07:58:49',
            'updated_at'=>'2022-07-31 07:58:49',
            'deleted_at'=>NULL
            ] );
            
            
    }
}
