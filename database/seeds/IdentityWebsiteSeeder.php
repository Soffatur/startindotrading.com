<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class IdentityWebsiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('identity_websites')->insert([
            [
                'name_website' => "XTream Forex",
                'logo' => "identitywebsite/logo/logo.png",
                'favicon' => "identitywebsite/favicon/favicon.png",
                'og_title' => "forex",
                'og_sitename' => "forex",
                'og_image' => "identitywebsite/og/og_image.png",
                'og_description' => "forex",
                'url' => "https://www.google.com/",
                'meta_keyword' => "meta k",
                'meta_description' => "meta d",
                'email' => "xtreamforex@gmail.com",
                'telepon' => "083116232970",
                'alamat' => "Perumahan Jatinegara Baru, Jl. Taman Asri I No.1-2, RW.16, Penggilingan, Kec. Cakung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13940",
                'facebook' => "#",
                'twitter' => "#",
                'instagram' => "#",
                'footer' => "<p> &copy; Copyright 2021 Tamai| All Rights Reserved.</p>",
                'title' => "PENYEBARAN KETAT KOMPETITIF",
                'content' => "
                XtreamForex menawarkan Harga paling Kompetitif di pasar, tidak tertandingi oleh pesaing kami. Pesanan Anda akan diteruskan langsung ke Penyedia Likuiditas kami - oleh karena itu tidak ada Dealing Desk Intervention..",
                'button' => "<a href='#' class='tamai-btn'>learn more</a>",
            ],
        ]);
    }
}
