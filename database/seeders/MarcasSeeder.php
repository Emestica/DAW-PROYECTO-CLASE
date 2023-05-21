<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarcasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array(
            [
                'nombre' => 'Nike',
                'created_at' => Carbon::now()
            ],
            [
                'nombre' => 'Adidas',
                'created_at' => Carbon::now()
            ]
        );

        DB::table('marcas')->insert($data);
    }
}
