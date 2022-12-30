<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssaultRiflesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('assault_rifles')->insert([
            [
                'id' => '1',
                'wepon_id' => '2',
                'name' => 'AS VAL 9x39 special assault rifle',    
            ],
            [
                'id' => '2',
                'wepon_id' => '2',
                'name' => 'CMMG Mk47 Mutant 7.62x39 assault rifle',    
            ],
            [
                'id' => '3',
                'wepon_id' => '2',
                'name' => 'Colt M4A1 5.56x45 assault rifle',    
            ],
            [
                'id' => '4',
                'wepon_id' => '2',
                'name' => 'DS Arms SA-58 7.62x51 assault rifle',    
            ],
            [
                'id' => '5',
                'wepon_id' => '2',
                'name' => 'Desert Tech MDR 5.56x45 assault rifle',    
            ],
            [
                'id' => '6',
                'wepon_id' => '2',
                'name' => 'Desert Tech MDR 7.62x51 assault rifle',    
            ],
            [
                'id' => '7',
                'wepon_id' => '2',
                'name' => 'FN SCAR-H 7.62x51 assault rifle',    
            ],
            [
                'id' => '8',
                'wepon_id' => '2',
                'name' => 'FN SCAR-L 5.56x45 assault rifle',    
            ],
            [
                'id' => '9',
                'wepon_id' => '2',
                'name' => 'HK 416A5 5.56x45 assault rifle',    
            ],
            [
                'id' => '10',
                'wepon_id' => '2',
                'name' => 'HK G36 5.56x45 assault rifle',    
            ],
            [
                'id' => '11',
                'wepon_id' => '2',
                'name' => 'Kalashnikov AK-101 5.56x45 assault rifle',    
            ],
            [
                'id' => '12',
                'wepon_id' => '2',
                'name' => 'Kalashnikov AK-102 5.56x45 assault rifle',    
            ],
            [
                'id' => '13',
                'wepon_id' => '2',
                'name' => 'Kalashnikov AK-103 7.62x39 assault rifle',    
            ],
            [
                'id' => '14',
                'wepon_id' => '2',
                'name' => 'Kalashnikov AK-104 7.62x39 assault rifle',    
            ],
            [
                'id' => '15',
                'wepon_id' => '2',
                'name' => 'Kalashnikov AK-105 5.45x39 assault rifle',    
            ],
            [
                'id' => '16',
                'wepon_id' => '2',
                'name' => 'Kalashnikov AK-74 5.45x39 assault rifle',    
            ],
            [
                'id' => '17',
                'wepon_id' => '2',
                'name' => 'Kalashnikov AK-74M 5.45x39 assault rifle',    
            ],
            [
                'id' => '18',
                'wepon_id' => '2',
                'name' => 'Kalashnikov AK-74N 5.45x39 assault rifle',    
            ],
            [
                'id' => '19',
                'wepon_id' => '2',
                'name' => 'Kalashnikov AKM 7.62x39 assault rifle',    
            ],
            [
                'id' => '20',
                'wepon_id' => '2',
                'name' => 'Kalashnikov AKMN 7.62x39 assault rifle',    
            ],
            [
                'id' => '21',
                'wepon_id' => '2',
                'name' => 'Kalashnikov AKMS 7.62x39 assault rifle',    
            ],
            [
                'id' => '22',
                'wepon_id' => '2',
                'name' => 'Kalashnikov AKMSN 7.62x39 assault rifle',    
            ],
            [
                'id' => '23',
                'wepon_id' => '2',
                'name' => 'Kalashnikov AKS-74N 5.45x39 assault rifle',    
            ],
            [
                'id' => '24',
                'wepon_id' => '2',
                'name' => 'Kalashnikov AKS-74U 5.45x39 assault rifle',    
            ],
            [
                'id' => '25',
                'wepon_id' => '2',
                'name' => 'Kalashnikov AKS-74UB 5.45x39 assault rifle',    
            ],
            [
                'id' => '26',
                'wepon_id' => '2',
                'name' => 'Kalashnikov AKS-74UN 5.45x39 assault rifle',    
            ],
            [
                'id' => '27',
                'wepon_id' => '2',
                'name' => 'Rifle Dynamics RD-704 7.62x39 assault rifle',    
            ],
            [
                'id' => '28',
                'wepon_id' => '2',
                'name' => 'SIG MCX .300 Blackout assault rifle',    
            ],
            [
                'id' => '29',
                'wepon_id' => '2',
                'name' => 'Steyr AUG A1 5.56×45 assult rifle',    
            ],
            [
                'id' => '30',
                'wepon_id' => '2',
                'name' => 'Steyr AUG A3 5.56×45 assult rifle',    
            ],
        ]);    
    }
}
