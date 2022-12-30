<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MachineGunsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('machineguns')->insert([
            [
                'id' => '1',
                'wepon_id' => '4',
                'name' => 'RPK-16 5.45x39 light machine gun',
            ], 
        ]);
    }
}
