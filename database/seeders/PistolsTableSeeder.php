<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PistolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('pistols')->insert([
            [
                'id' => '1',
                'wepon_id' => '6',
                'name' => 'APB 9x18PM silenced machine pistol',    
            ],
            [
                'id' => '2',
                'wepon_id' => '6',
                'name' => 'Beretta M9A3 9x19 pistol',    
            ],
            [
                'id' => '3',
                'wepon_id' => '6',
                'name' => 'Chiappa Rhino 200DS 9x19 revolver',    
            ],
            [
                'id' => '4',
                'wepon_id' => '6',
                'name' => 'Chiappa Rhino 50DS .357 revolver',    
            ],
            [
                'id' => '5',
                'wepon_id' => '6',
                'name' => 'Colt M1911A1 .45 ACP pistol',    
            ],
            [
                'id' => '6',
                'wepon_id' => '6',
                'name' => 'FN Five-seveN MK2 5.7x28 pistol',    
            ],
            [
                'id' => '7',
                'wepon_id' => '6',
                'name' => 'Glock 17 9x19 pistol',    
            ],
            [
                'id' => '8',
                'wepon_id' => '6',
                'name' => 'Glock 18C 9x19 machine pistol',    
            ],
            [
                'id' => '9',
                'wepon_id' => '6',
                'name' => 'Glock 19X 9x19 pistol',    
            ],
            [
                'id' => '10',
                'wepon_id' => '6',
                'name' => 'HK USP .45 ACP pistol',    
            ],
            [
                'id' => '11',
                'wepon_id' => '6',
                'name' => 'Lebedev PL-15 9x19 pistol',    
            ],
            [
                'id' => '12',
                'wepon_id' => '6',
                'name' => 'Makarov PM 9x18PM pistol',    
            ],
            [
                'id' => '13',
                'wepon_id' => '6',
                'name' => 'PB 9x18PM silenced pistol',    
            ],
            [
                'id' => '14',
                'wepon_id' => '6',
                'name' => 'SIG P226R 9x19 pistol',    
            ],
            [
                'id' => '15',
                'wepon_id' => '6',
                'name' => 'Serdyukov SR-1MP Gyurza 9x21 pistol',    
            ],
            [
                'id' => '16',
                'wepon_id' => '6',
                'name' => 'Stechkin APS 9x18PM machine pistol',    
            ],
            [
                'id' => '17',
                'wepon_id' => '6',
                'name' => 'TT-33 7.62x25 TT pistol',    
            ],
            [
                'id' => '18',
                'wepon_id' => '6',
                'name' => 'Yarygin MP-443 "Grach" 9x19 pistol',    
            ],
        ]);
    }
}
