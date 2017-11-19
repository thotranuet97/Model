<?php

use Illuminate\Database\Seeder;

class FlightsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
             DB::table('flights')->insert([
            'id'=>'2',
            'user_id'=>'1',
            'account_id'=>'1',
            'airline_id'=>'113',
            'name'=>'HN',
            'destination'=>'HN to hK',
            'departure'=>'hK',
            'delayed'=>'0',
            'active'=>'1',
            'price'=>'20000',
            'legs'=>'1',
        ]);
    }
}
