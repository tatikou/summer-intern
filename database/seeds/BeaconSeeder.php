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
            ['major' => '333', 'minor' => '333','position' => '0', ],
            ['major' => '400', 'minor' => '400','position' => '1', ],
            ['major' => '333', 'minor' => '333','position' => '0', ],
        ]);
    }
}
