<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class RuangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
    	for($i = 1; $i <= 100; $i++){
    	    // insert data ke table ruang menggunakan Faker
    		DB::table('ruang')->insert([
    			'nama_ruang' => 'R'.$i
    		]);
    	}
    }
}
