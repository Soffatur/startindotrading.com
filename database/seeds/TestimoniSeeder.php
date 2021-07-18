<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TestimoniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonis')->insert([
            [
                'name' => "Jhon Stalker",
                'position' => "CEO",
                'content' => "wow",
                'photo' => "identitywebsite/testimoni/team-2.jpg",
            ],
            [
                'name' => "Jhon Wijk",
                'position' => "CEO",
                'content' => "marveolus",
                'photo' => "identitywebsite/testimoni/team-3.jpg",
            ],
        ]);
    }
}
