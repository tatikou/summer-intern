<?php

use Illuminate\Database\Seeder;

class BeaconSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('beacons')->insert([
            ['major' => '3333', 'minor' => '1', 'position' => 'カフェ' ],
            ['major' => '3333', 'minor' => '2', 'position' => '会議室バンコク' ],
            ['major' => '3333', 'minor' => '3', 'position' => '会議室マレーシア' ],
            ['major' => '3333', 'minor' => '4', 'position' => '会議室ジャカルタ' ],
            ['major' => '2222', 'minor' => '1111', 'position' => 'エントランス' ],

        ]);
    }
}
