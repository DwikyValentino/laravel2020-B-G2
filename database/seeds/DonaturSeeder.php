<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Donatur;

class DonaturSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $id_user = Donatur::all()->pluck('id_user')->toArray();

    	for($i = 1; $i <= 100; $i++){

    	      // insert data ke table donatur menggunakan Faker
    		DB::table('donatur')->insert([
                'id_user' => $i,
    			'nama_depan' => $faker->name,
                'nama_belakang' => $faker->name,
                'email' => $faker->unique()->email,
                'password' => bcrypt('secret'),
                'no_hp' => $faker->numberBetween(25,40),
                'alamat' => $faker->address,
                'umur' => $faker->numberBetween(25,40)
    		]);

    	}
    }
}
