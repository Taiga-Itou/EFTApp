<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShotgunsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('shotguns')->insert([
            [
                'id' => '1',
                'wepon_id' => '8',
                'name' => 'Benelli M3 Super 90 dual-mode 12ga shotgun',    
            ],
            [
                'id' => '2',
                'wepon_id' => '8',
                'name' => 'MP-133 12ga pump-action shotgun',    
            ],
            [
                'id' => '3',
                'wepon_id' => '8',
                'name' => 'MP-153 12ga semi-automatic shotgun',    
            ],
            [
                'id' => '4',
                'wepon_id' => '8',
                'name' => 'MP-155 12ga semi-automatic shotgun',    
            ],
            [
                'id' => '5',
                'wepon_id' => '8',
                'name' => 'MP-18 7.62x54R single-shot rifle',    
            ],
            [
                'id' => '6',
                'wepon_id' => '8',
                'name' => 'MP-43-1C 12ga double-barrel shotgun',    
            ],
            [
                'id' => '7',
                'wepon_id' => '8',
                'name' => 'MTs-255-12 12ga shotgun',    
            ],
            [
                'id' => '8',
                'wepon_id' => '8',
                'name' => 'Mossberg 590A1 12ga pump-action shotgun',    
            ],
            [
                'id' => '9',
                'wepon_id' => '8',
                'name' => 'Remington Model 870 12ga pump-action shotgun',    
            ],
            [
                'id' => '10',
                'wepon_id' => '8',
                'name' => 'Saiga 12ga ver.10 12/76 semi-automatic shotgun',    
            ],
            [
                'id' => '11',
                'wepon_id' => '8',
                'name' => 'TOZ-106 20ga bolt-action shotgun',    
            ],
        ]);
    }
}
