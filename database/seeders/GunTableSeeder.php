<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GunTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('guns')->insert([
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
            [
                'id' => '11',
                'wepon_id' => '2',
                'name' => 'AS VAL 9x39 special assault rifle',    
            ],
            [
                'id' => '12',
                'wepon_id' => '2',
                'name' => 'CMMG Mk47 Mutant 7.62x39 assault rifle',    
            ],
            [
                'id' => '13',
                'wepon_id' => '2',
                'name' => 'Colt M4A1 5.56x45 assault rifle',    
            ],
            [
                'id' => '14',
                'wepon_id' => '2',
                'name' => 'DS Arms SA-58 7.62x51 assault rifle',    
            ],
            [
                'id' => '15',
                'wepon_id' => '2',
                'name' => 'Desert Tech MDR 5.56x45 assault rifle',    
            ],
            [
                'id' => '16',
                'wepon_id' => '2',
                'name' => 'Desert Tech MDR 7.62x51 assault rifle',    
            ],
            [
                'id' => '17',
                'wepon_id' => '2',
                'name' => 'FN SCAR-H 7.62x51 assault rifle',    
            ],
            [
                'id' => '18',
                'wepon_id' => '2',
                'name' => 'FN SCAR-L 5.56x45 assault rifle',    
            ],
            [
                'id' => '19',
                'wepon_id' => '2',
                'name' => 'HK 416A5 5.56x45 assault rifle',    
            ],
            [
                'id' => '20',
                'wepon_id' => '2',
                'name' => 'HK G36 5.56x45 assault rifle',    
            ],
            [
                'id' => '21',
                'wepon_id' => '2',
                'name' => 'Kalashnikov AK-101 5.56x45 assault rifle',    
            ],
            [
                'id' => '22',
                'wepon_id' => '2',
                'name' => 'Kalashnikov AK-102 5.56x45 assault rifle',    
            ],
            [
                'id' => '23',
                'wepon_id' => '2',
                'name' => 'Kalashnikov AK-103 7.62x39 assault rifle',    
            ],
            [
                'id' => '24',
                'wepon_id' => '2',
                'name' => 'Kalashnikov AK-104 7.62x39 assault rifle',    
            ],
            [
                'id' => '25',
                'wepon_id' => '2',
                'name' => 'Kalashnikov AK-105 5.45x39 assault rifle',    
            ],
            [
                'id' => '26',
                'wepon_id' => '2',
                'name' => 'Kalashnikov AK-74 5.45x39 assault rifle',    
            ],
            [
                'id' => '27',
                'wepon_id' => '2',
                'name' => 'Kalashnikov AK-74M 5.45x39 assault rifle',    
            ],
            [
                'id' => '28',
                'wepon_id' => '2',
                'name' => 'Kalashnikov AK-74N 5.45x39 assault rifle',    
            ],
            [
                'id' => '29',
                'wepon_id' => '2',
                'name' => 'Kalashnikov AKM 7.62x39 assault rifle',    
            ],
            [
                'id' => '30',
                'wepon_id' => '2',
                'name' => 'Kalashnikov AKMN 7.62x39 assault rifle',    
            ],
            [
                'id' => '31',
                'wepon_id' => '2',
                'name' => 'Kalashnikov AKMS 7.62x39 assault rifle',    
            ],
            [
                'id' => '32',
                'wepon_id' => '2',
                'name' => 'Kalashnikov AKMSN 7.62x39 assault rifle',    
            ],
            [
                'id' => '33',
                'wepon_id' => '2',
                'name' => 'Kalashnikov AKS-74N 5.45x39 assault rifle',    
            ],
            [
                'id' => '34',
                'wepon_id' => '2',
                'name' => 'Kalashnikov AKS-74U 5.45x39 assault rifle',    
            ],
            [
                'id' => '35',
                'wepon_id' => '2',
                'name' => 'Kalashnikov AKS-74UB 5.45x39 assault rifle',    
            ],
            [
                'id' => '36',
                'wepon_id' => '2',
                'name' => 'Kalashnikov AKS-74UN 5.45x39 assault rifle',    
            ],
            [
                'id' => '37',
                'wepon_id' => '2',
                'name' => 'Rifle Dynamics RD-704 7.62x39 assault rifle',    
            ],
            [
                'id' => '38',
                'wepon_id' => '2',
                'name' => 'SIG MCX .300 Blackout assault rifle',    
            ],
            [
                'id' => '39',
                'wepon_id' => '2',
                'name' => 'Steyr AUG A1 5.56×45 assult rifle',    
            ],
            [
                'id' => '40',
                'wepon_id' => '2',
                'name' => 'Steyr AUG A3 5.56×45 assult rifle',    
            ],
            [
                'id' => '41',
                'wepon_id' => '3',
                'name' => 'Accuracy International AXMC .338 LM bolt-action sniper rifle',    
            ],
            [
                'id' => '42',
                'wepon_id' => '3',
                'name' => 'Lobaev Arms DVL-10 7.62x51 bolt-action sniper rifle',    
            ],
            [
                'id' => '43',
                'wepon_id' => '3',
                'name' => 'Molot VPO-215 "Gornostay" .366 TKM bolt-action rifle',    
            ],
            [
                'id' => '44',
                'wepon_id' => '3',
                'name' => 'Mosin 7.62x54R bolt-action rifle (Infantry)',    
            ],
            [
                'id' => '45',
                'wepon_id' => '3',
                'name' => 'Mosin 7.62x54R bolt-action rifle (Sniper)',    
            ],
            [
                'id' => '46',
                'wepon_id' => '3',
                'name' => 'ORSIS T-5000M 7.62x51 bolt-action sniper rifle',    
            ],
            [
                'id' => '47',
                'wepon_id' => '3',
                'name' => 'Remington Model 700 7.62x51 bolt-action sniper rifle',    
            ],
            [
                'id' => '48',
                'wepon_id' => '3',
                'name' => 'SV-98 7.62x54R bolt-action sniper rifle',    
            ],
            [
                'id' => '49',
                'wepon_id' => '4',
                'name' => 'RPK-16 5.45x39 light machine gun',
            ],
            [
                'id' => '50',
                'wepon_id' => '5',
                'name' => 'HK G28 7.62x51 marksman rifle',    
            ],
            [
                'id' => '51',
                'wepon_id' => '5',
                'name' => 'Knights Armament Company SR-25 7.62x51 marksman rifle',    
            ],
            [
                'id' => '52',
                'wepon_id' => '5',
                'name' => 'Remington R11 RSASS 7.62x51 marksman rifle',    
            ],
            [
                'id' => '53',
                'wepon_id' => '5',
                'name' => 'SVDS 7.62x54R sniper rifle',    
            ],
            [
                'id' => '54',
                'wepon_id' => '5',
                'name' => 'SWORD International Mk-18 .338 LM marksman rifle',    
            ],
            [
                'id' => '55',
                'wepon_id' => '5',
                'name' => 'Springfield Armory M1A 7.62x51 rifle',    
            ],
            [
                'id' => '56',
                'wepon_id' => '6',
                'name' => 'APB 9x18PM silenced machine pistol',    
            ],
            [
                'id' => '57',
                'wepon_id' => '6',
                'name' => 'Beretta M9A3 9x19 pistol',    
            ],
            [
                'id' => '58',
                'wepon_id' => '6',
                'name' => 'Chiappa Rhino 200DS 9x19 revolver',    
            ],
            [
                'id' => '59',
                'wepon_id' => '6',
                'name' => 'Chiappa Rhino 50DS .357 revolver',    
            ],
            [
                'id' => '60',
                'wepon_id' => '6',
                'name' => 'Colt M1911A1 .45 ACP pistol',    
            ],
            [
                'id' => '61',
                'wepon_id' => '6',
                'name' => 'FN Five-seveN MK2 5.7x28 pistol',    
            ],
            [
                'id' => '62',
                'wepon_id' => '6',
                'name' => 'Glock 17 9x19 pistol',    
            ],
            [
                'id' => '63',
                'wepon_id' => '6',
                'name' => 'Glock 18C 9x19 machine pistol',    
            ],
            [
                'id' => '64',
                'wepon_id' => '6',
                'name' => 'Glock 19X 9x19 pistol',    
            ],
            [
                'id' => '65',
                'wepon_id' => '6',
                'name' => 'HK USP .45 ACP pistol',    
            ],
            [
                'id' => '66',
                'wepon_id' => '6',
                'name' => 'Lebedev PL-15 9x19 pistol',    
            ],
            [
                'id' => '67',
                'wepon_id' => '6',
                'name' => 'Makarov PM 9x18PM pistol',    
            ],
            [
                'id' => '68',
                'wepon_id' => '6',
                'name' => 'PB 9x18PM silenced pistol',    
            ],
            [
                'id' => '69',
                'wepon_id' => '6',
                'name' => 'SIG P226R 9x19 pistol',    
            ],
            [
                'id' => '70',
                'wepon_id' => '6',
                'name' => 'Serdyukov SR-1MP Gyurza 9x21 pistol',    
            ],
            [
                'id' => '71',
                'wepon_id' => '6',
                'name' => 'Stechkin APS 9x18PM machine pistol',    
            ],
            [
                'id' => '72',
                'wepon_id' => '6',
                'name' => 'TT-33 7.62x25 TT pistol',    
            ],
            [
                'id' => '73',
                'wepon_id' => '6',
                'name' => 'Yarygin MP-443 "Grach" 9x19 pistol', 
            ],
            [
                'id' => '74',
                'wepon_id' => '7',
                'name' => 'B&T MP9 9x19 submachine gun',    
            ],
            [
                'id' => '75',
                'wepon_id' => '7',
                'name' => 'FN P90 5.7x28 submachine gun',    
            ],
            [
                'id' => '76',
                'wepon_id' => '7',
                'name' => 'HK MP5 9x19 submachine gun (Navy 3 Round Burst)',    
            ],
            [
                'id' => '77',
                'wepon_id' => '7',
                'name' => 'HK MP5K 9x19 submachine gun',    
            ],
            [
                'id' => '78',
                'wepon_id' => '7',
                'name' => 'HK MP7A1 4.6x30 submachine gun',    
            ],
            [
                'id' => '79',
                'wepon_id' => '7',
                'name' => 'HK MP7A2 4.6x30 submachine gun',    
            ],
            [
                'id' => '80',
                'wepon_id' => '7',
                'name' => 'HK UMP .45 ACP submachine gun',    
            ],
            [
                'id' => '81',
                'wepon_id' => '7',
                'name' => 'PP-19-01 "Vityaz" 9x19 submachine gun',    
            ],
            [
                'id' => '82',
                'wepon_id' => '7',
                'name' => 'PP-9 "Klin" 9x18PMM submachine gun',    
            ],
            [
                'id' => '83',
                'wepon_id' => '7',
                'name' => 'PP-91 "Kedr" 9x18PM submachine gun',    
            ],
            [
                'id' => '84',
                'wepon_id' => '7',
                'name' => 'PP-91-01 "Kedr-B" 9x18PM submachine gun',    
            ],
            [
                'id' => '85',
                'wepon_id' => '7',
                'name' => 'PPSh-41 7.62x25 submachine gun',    
            ],
            [
                'id' => '86',
                'wepon_id' => '7',
                'name' => 'SIG MPX 9x19 submachine gun',    
            ],
            [
                'id' => '87',
                'wepon_id' => '7',
                'name' => 'SR-2M "Veresk" 9×21 submachine gun',    
            ],
            [
                'id' => '88',
                'wepon_id' => '7',
                'name' => 'Saiga-9 9x19 carbine',    
            ],
            [
                'id' => '89',
                'wepon_id' => '7',
                'name' => 'Soyuz-TM STM-9 Gen.2 9x19 carbine',    
            ],
            [
                'id' => '90',
                'wepon_id' => '7',
                'name' => 'TDI KRISS Vector Gen.2 .45 ACP submachine gun',    
            ],
            [
                'id' => '91',
                'wepon_id' => '7',
                'name' => 'TDI KRISS Vector Gen.2 9x19 submachine gun',    
            ],
            [
                'id' => '92',
                'wepon_id' => '8',
                'name' => 'Benelli M3 Super 90 dual-mode 12ga shotgun',    
            ],
            [
                'id' => '93',
                'wepon_id' => '8',
                'name' => 'MP-133 12ga pump-action shotgun',    
            ],
            [
                'id' => '94',
                'wepon_id' => '8',
                'name' => 'MP-153 12ga semi-automatic shotgun',    
            ],
            [
                'id' => '95',
                'wepon_id' => '8',
                'name' => 'MP-155 12ga semi-automatic shotgun',    
            ],
            [
                'id' => '96',
                'wepon_id' => '8',
                'name' => 'MP-18 7.62x54R single-shot rifle',    
            ],
            [
                'id' => '97',
                'wepon_id' => '8',
                'name' => 'MP-43-1C 12ga double-barrel shotgun',    
            ],
            [
                'id' => '98',
                'wepon_id' => '8',
                'name' => 'MTs-255-12 12ga shotgun',    
            ],
            [
                'id' => '99',
                'wepon_id' => '8',
                'name' => 'Mossberg 590A1 12ga pump-action shotgun',    
            ],
            [
                'id' => '100',
                'wepon_id' => '8',
                'name' => 'Remington Model 870 12ga pump-action shotgun',    
            ],
            [
                'id' => '101',
                'wepon_id' => '8',
                'name' => 'Saiga 12ga ver.10 12/76 semi-automatic shotgun',    
            ],
            [
                'id' => '102',
                'wepon_id' => '8',
                'name' => 'TOZ-106 20ga bolt-action shotgun',    
            ],
            
            
            
            
            
            
            
        ]);
    }
}
