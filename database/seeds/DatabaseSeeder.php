<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(DataAdminSeeder::class);
         $this->call(DataProductSeeder::class);
         $this->call(DataShopSeeder::class);
         $this->call(DataStoreSeeder::class);
    }
}
