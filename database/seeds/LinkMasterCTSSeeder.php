<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LinkMasterCTSSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('link_master_c_t_s')->insert([
            [
                'link_master_ct' => "https://www.google.com/",
            ],
        ]);
    }
}
