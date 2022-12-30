<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            WeponTableSeeder::class,
            AssaultcarbinesTableSeeder::class,
            AssaultRiflesTableSeeder::class,
            Bolt_actionRiflesTableSeeder::class,
            MachineGunsTableSeeder::class,
            Marksman_RiflesTableSeeder::class,
            PistolsTableSeeder::class,
            Sub_machineGunsTableSeeder::class,
            ShotgunsTableSeeder::class,
            TagsTableSeeder::class,
        ]);
    }
}
