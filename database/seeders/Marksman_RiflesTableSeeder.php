<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Marksman_RiflesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('marksman_rifles')->insert([
            [
                'id' => '1',
                'wepon_id' => '5',
                'name' => 'HK G28 7.62x51 marksman rifle',    
            ],
            [
                'id' => '2',
                'wepon_id' => '5',
                'name' => 'Knights Armament Company SR-25 7.62x51 marksman rifle',    
            ],
            [
                'id' => '3',
                'wepon_id' => '5',
                'name' => 'Remington R11 RSASS 7.62x51 marksman rifle',    
            ],
            [
                'id' => '4',
                'wepon_id' => '5',
                'name' => 'SVDS 7.62x54R sniper rifle',    
            ],
            [
                'id' => '5',
                'wepon_id' => '5',
                'name' => 'SWORD International Mk-18 .338 LM marksman rifle',    
            ],
            [
                'id' => '6',
                'wepon_id' => '5',
                'name' => 'Springfield Armory M1A 7.62x51 rifle',    
            ],
        ]);
    }
}
