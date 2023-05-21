<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductosSeeder extends Seeder
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
                'nombre' => 'Nike Sb Chrom',
                'precio' => 29.99,
                'marca' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Nike Air',
                'precio' => 59.98,
                'marca' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Adidas Cload Foam',
                'precio' => 39.65,
                'marca' => 2,
                'created_at' => Carbon::now(),
            ]
        );
        DB::table('productos')->insert($data);
    }
}
