<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Sub_machineGunsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('sub_machineguns')->insert([
            [
                'id' => '1',
                'wepon_id' => '7',
                'name' => 'B&T MP9 9x19 submachine gun',    
            ],
            [
                'id' => '2',
                'wepon_id' => '7',
                'name' => 'FN P90 5.7x28 submachine gun',    
            ],
            [
                'id' => '3',
                'wepon_id' => '7',
                'name' => 'HK MP5 9x19 submachine gun (Navy 3 Round Burst)',    
            ],
            [
                'id' => '4',
                'wepon_id' => '7',
                'name' => 'HK MP5K 9x19 submachine gun',    
            ],
            [
                'id' => '5',
                'wepon_id' => '7',
                'name' => 'HK MP7A1 4.6x30 submachine gun',    
            ],
            [
                'id' => '6',
                'wepon_id' => '7',
                'name' => 'HK MP7A2 4.6x30 submachine gun',    
            ],
            [
                'id' => '7',
                'wepon_id' => '7',
                'name' => 'HK UMP .45 ACP submachine gun',    
            ],
            [
                'id' => '8',
                'wepon_id' => '7',
                'name' => 'PP-19-01 "Vityaz" 9x19 submachine gun',    
            ],
            [
                'id' => '9',
                'wepon_id' => '7',
                'name' => 'PP-9 "Klin" 9x18PMM submachine gun',    
            ],
            [
                'id' => '10',
                'wepon_id' => '7',
                'name' => 'PP-91 "Kedr" 9x18PM submachine gun',    
            ],
            [
                'id' => '11',
                'wepon_id' => '7',
                'name' => 'PP-91-01 "Kedr-B" 9x18PM submachine gun',    
            ],
            [
                'id' => '12',
                'wepon_id' => '7',
                'name' => 'PPSh-41 7.62x25 submachine gun',    
            ],
            [
                'id' => '13',
                'wepon_id' => '7',
                'name' => 'SIG MPX 9x19 submachine gun',    
            ],
            [
                'id' => '14',
                'wepon_id' => '7',
                'name' => 'SR-2M "Veresk" 9×21 submachine gun',    
            ],
            [
                'id' => '15',
                'wepon_id' => '7',
                'name' => 'Saiga-9 9x19 carbine',    
            ],
            [
                'id' => '16',
                'wepon_id' => '7',
                'name' => 'Soyuz-TM STM-9 Gen.2 9x19 carbine',    
            ],
            [
                'id' => '17',
                'wepon_id' => '7',
                'name' => 'TDI KRISS Vector Gen.2 .45 ACP submachine gun',    
            ],
            [
                'id' => '18',
                'wepon_id' => '7',
                'name' => 'TDI KRISS Vector Gen.2 9x19 submachine gun',    
            ],
        ]);
    }
}
