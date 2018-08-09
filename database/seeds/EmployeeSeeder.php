<?php

use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Employees')->insert([
            ['family_name' => '岸元', 'given_name' => '直治', 'family_name_kana' => 'きしもと', 'given_name_kana' => 'なおはる','position' => '0', ],
            ['family_name' => '山田', 'given_name' => '広斗', 'family_name_kana' => 'きしもと', 'given_name_kana' => 'なおはる','position' => '0', ],
            ['family_name' => '小林', 'given_name' => 'ゴンザレス', 'family_name_kana' => 'きしもと', 'given_name_kana' => 'なおはる','position' => '0', ],
        ]);
    }
}
