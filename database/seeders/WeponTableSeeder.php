<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WeponTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('wepons')->insert([
            [
                'id' => '1',
                'name' => 'Assault carbines',
            ],
            [
                'id' => '2',
                'name' => 'Assault rifles',
            ],
            [
                'id' => '3',
                'name' => 'Bolt-action rifles',
            ],
            [
                'id' => '4',
                'name' => 'Machine guns',
            ],
            [
                'id' => '5',
                'name' => 'Marksman rifles',
            ],
            [
                'id' => '6',
                'name' => 'Pistols',
            ],
            [
                'id' => '7',
                'name' => 'Sub-machine guns',
            ],
            [
                'id' => '8',
                'name' => 'Shotguns',
            ],
        ]);
    }
}
