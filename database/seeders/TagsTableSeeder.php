<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('tags')->insert([
            [
                'id' => '1',
                'name' => '初心者/Beginner',
            ],
            [
                'id' => '2',
                'name' => '金策/Funding',
            ],
            [
                'id' => '3',
                'name' => '最強/strongest',
            ],
            [
                'id' => '4',
                'name' => '面白/funny',
            ],
            
            
            
        ]);
    }
}
