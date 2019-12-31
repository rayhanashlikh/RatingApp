<?php

use Illuminate\Database\Seeder;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('places')->insert([
            'place_name' => 'Taman KB',
            'location' => 'Jalan Depan SMA 1',
            'date_opened' => '2015-10-10',
            'description' => 'Taman yang terletak di depan SMA 1 Semarang',
            'picture' => 'tamankb.jpeg'
        ]);
    }
}
