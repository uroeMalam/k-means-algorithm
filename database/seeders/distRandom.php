<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class distRandom extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dist_random')->insert([
            'id'=>22,
            'center_name'=>'center 1',
            'tahun'=>2020,
            'id_kabupaten'=>7,
            'id_data'=>5,
            'created_at'=>NULL,
            'updated_at'=>NULL,
            'deleted_at'=>NULL
            ] );
                        
        DB::table('dist_random')->insert([
            'id'=>23,
            'center_name'=>'center 2',
            'tahun'=>2020,
            'id_kabupaten'=>7,
            'id_data'=>25,
            'created_at'=>NULL,
            'updated_at'=>NULL,
            'deleted_at'=>NULL
            ] );
                        
        DB::table('dist_random')->insert([
            'id'=>24,
            'center_name'=>'center 3',
            'tahun'=>2020,
            'id_kabupaten'=>7,
            'id_data'=>22,
            'created_at'=>NULL,
            'updated_at'=>NULL,
            'deleted_at'=>NULL
            ] );
                        
        DB::table('dist_random')->insert([
            'id'=>25,
            'center_name'=>'center 1',
            'tahun'=>2021,
            'id_kabupaten'=>7,
            'id_data'=>32,
            'created_at'=>NULL,
            'updated_at'=>NULL,
            'deleted_at'=>NULL
            ] );
                        
        DB::table('dist_random')->insert([
            'id'=>26,
            'center_name'=>'center 2',
            'tahun'=>2021,
            'id_kabupaten'=>7,
            'id_data'=>53,
            'created_at'=>NULL,
            'updated_at'=>NULL,
            'deleted_at'=>NULL
            ] );
                        
        DB::table('dist_random')->insert([
            'id'=>27,
            'center_name'=>'center 3',
            'tahun'=>2021,
            'id_kabupaten'=>7,
            'id_data'=>51,
            'created_at'=>NULL,
            'updated_at'=>NULL,
            'deleted_at'=>NULL
            ] );
                        
        DB::table('dist_random')->insert([
            'id'=>28,
            'center_name'=>'center 1',
            'tahun'=>2020,
            'id_kabupaten'=>6,
            'id_data'=>57,
            'created_at'=>NULL,
            'updated_at'=>NULL,
            'deleted_at'=>NULL
            ] );
                        
        DB::table('dist_random')->insert([
            'id'=>29,
            'center_name'=>'center 2',
            'tahun'=>2020,
            'id_kabupaten'=>6,
            'id_data'=>56,
            'created_at'=>NULL,
            'updated_at'=>NULL,
            'deleted_at'=>NULL
            ] );
                        
        DB::table('dist_random')->insert([
            'id'=>30,
            'center_name'=>'center 3',
            'tahun'=>2020,
            'id_kabupaten'=>6,
            'id_data'=>59,
            'created_at'=>NULL,
            'updated_at'=>NULL,
            'deleted_at'=>NULL
            ] );
                        
        DB::table('dist_random')->insert([
            'id'=>31,
            'center_name'=>'center 1',
            'tahun'=>2021,
            'id_kabupaten'=>6,
            'id_data'=>61,
            'created_at'=>NULL,
            'updated_at'=>NULL,
            'deleted_at'=>NULL
            ] );
                        
        DB::table('dist_random')->insert([
            'id'=>32,
            'center_name'=>'center 2',
            'tahun'=>2021,
            'id_kabupaten'=>6,
            'id_data'=>60,
            'created_at'=>NULL,
            'updated_at'=>NULL,
            'deleted_at'=>NULL
            ] );
                        
        DB::table('dist_random')->insert([
            'id'=>33,
            'center_name'=>'center 3',
            'tahun'=>2021,
            'id_kabupaten'=>6,
            'id_data'=>63,
            'created_at'=>NULL,
            'updated_at'=>NULL,
            'deleted_at'=>NULL
            ] );
    }
}
