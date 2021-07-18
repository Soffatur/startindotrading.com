<?php

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
        $this->call(UserSeeder::class);
        $this->call(IdentityWebsiteSeeder::class);
        $this->call(LinkReferalSeeder::class);
        $this->call(LinkMasterCTSSeeder::class);
        $this->call(LinkEASeeder::class);
        $this->call(PaketEASeeder::class);
        $this->call(TestimoniSeeder::class);
    }
}
