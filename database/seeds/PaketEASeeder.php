<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PaketEASeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paket_e_a_s')->insert([
            [
                'name_deposit' => "Bombastic EA",
                'deposit'   => null,
                'low_risk'  => 500,
                'medium_risk' => 400,
                'high_risk' => 300,
                'loss_limit' => 30,
                'max_deposit' => 150
            ],
            [
                'name_deposit' => "Fantastic EA",
                'deposit'   => null,
                'low_risk'  => 1000,
                'medium_risk' => 800,
                'high_risk' => 600,
                'loss_limit' => 30,
                'max_deposit' => 300
            ],
        ]);
    }
}
