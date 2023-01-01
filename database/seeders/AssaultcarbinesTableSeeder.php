<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssaultcarbinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('assault_carbines')->insert([
            [
                'id' => '1',
                'wepon_id' => '1',
                'name' => 'ADAR 2-15 5.56×45 carbine',    
            ],
            [
                'id' => '2',
                'wepon_id' => '1',
                'name' => 'Kel-Tec RFB 7.62×51 rifle',    
            ],
            [
                'id' => '3',
                'wepon_id' => '1',
                'name' => 'Lone Star TX-15 DML 5.56×45 carbine',    
            ],
            [
                'id' => '4',
                'wepon_id' => '1',
                'name' => 'Molot VPO-101 "Vepr-Hunter" 7.62×51 carbine',    
            ],
            [
                'id' => '5',
                'wepon_id' => '1',
                'name' => 'Molot VPO-136 "Vepr-KM" 7.62×39 carbine',    
            ],
            [
                'id' => '6',
                'wepon_id' => '1',
                'name' => 'Molot VPO-209 .366TKM carbine',    
            ],
            [
                'id' => '7',
                'wepon_id' => '1',
                'name' => 'SAG AK-545 5.45×39 carbine',    
            ],
            [
                'id' => '8',
                'wepon_id' => '1',
                'name' => 'SAG AK-545 Short 5.45×39 carbine',    
            ],
            [
                'id' => '9',
                'wepon_id' => '1',
                'name' => 'Simonov OP-SKS 7.62×39 carbine (Hunting Rifle Version)',    
            ],
            [
                'id' => '10',
                'wepon_id' => '1',
                'name' => 'Siomonov SKS 7.62×39 carbine',    
            ],
            
            
        ]);
    }
}
