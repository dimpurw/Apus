<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class RecapDataSeeder extends Seeder
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
    		DB::table('recap_datas')->insert([
    			'nama_kucing' => $faker->name,
    			'jenis_penyakit' => $faker->realText($faker->numberBetween(10,20)),
    			'presentase' => $faker->numberBetween(20,100)
    		]);
        }
    }
}
