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
            ['major' => '100', 'minor' => '100','position' => 'カフェスペース', ],
            ['major' => '200', 'minor' => '200','position' => '会議室', ],
            ['major' => '300', 'minor' => '300','position' => '会議室2', ],
            ['major' => '333', 'minor' => '333','position' => '飯田橋駅', ],
            ['major' => '400', 'minor' => '400','position' => '南国', ],

        ]);
    }
}
