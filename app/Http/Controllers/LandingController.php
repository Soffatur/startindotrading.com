<?php

namespace App\Http\Controllers;

use App\About;
use App\Gallery;
use App\IdentityTelp;
use Illuminate\Http\Request;
use App\IdentityWebsite;
use App\LinkMasterCT;
use App\OurSercive;
use App\OurServiceDetail;
use App\PaketEA;
use App\Tracker;
use App\Testimoni;
use Illuminate\Support\Facades\DB;

class LandingController extends Controller
{
    public function index(Request $request) {
        $identitywebsite = IdentityWebsite::where('id', 1)->first();
        $paketeas = PaketEA::all();
        $testimonis = Testimoni::all();
        $identityTelp = IdentityTelp::all();
        $ourService = DB::select("SELECT * FROM our_service ORDER BY id");
        $gallery = Gallery::all();
        $linkCt = LinkMasterCT::all()->first();
        $about = About::all()->first();
        if($about == null){
            if($about == null){
                $about = (object) ['id' => 1, 'description' => ''];
            }
        }

        Tracker::firstOrCreate([
            'ip'     => $request->ip(),
            'date'   => date('Y-m-d'),
        ])->save();

        return view('landing.index', compact('identitywebsite', 'paketeas', 'testimonis', 'identityTelp', 'ourService', 'gallery', 'linkCt', 'about'));
    }
}
