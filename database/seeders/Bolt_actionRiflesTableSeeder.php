<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Bolt_actionRiflesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('bolt_action_rifles')->insert([
            [
                'id' => '1',
                'wepon_id' => '3',
                'name' => 'Accuracy International AXMC .338 LM bolt-action sniper rifle',    
            ],
            [
                'id' => '2',
                'wepon_id' => '3',
                'name' => 'Lobaev Arms DVL-10 7.62x51 bolt-action sniper rifle',    
            ],
            [
                'id' => '3',
                'wepon_id' => '3',
                'name' => 'Molot VPO-215 "Gornostay" .366 TKM bolt-action rifle',    
            ],
            [
                'id' => '4',
                'wepon_id' => '3',
                'name' => 'Mosin 7.62x54R bolt-action rifle (Infantry)',    
            ],
            [
                'id' => '5',
                'wepon_id' => '3',
                'name' => 'Mosin 7.62x54R bolt-action rifle (Sniper)',    
            ],
            [
                'id' => '6',
                'wepon_id' => '3',
                'name' => 'ORSIS T-5000M 7.62x51 bolt-action sniper rifle',    
            ],
            [
                'id' => '7',
                'wepon_id' => '3',
                'name' => 'Remington Model 700 7.62x51 bolt-action sniper rifle',    
            ],
            [
                'id' => '8',
                'wepon_id' => '3',
                'name' => 'SV-98 7.62x54R bolt-action sniper rifle',    
            ],
        ]);
    }
}
