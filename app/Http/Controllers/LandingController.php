<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\IdentityTelp;
use Illuminate\Http\Request;
use App\IdentityWebsite;
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
        $getOurService = DB::select("SELECT * FROM our_service ORDER BY id");
        $gallery = Gallery::all();
        $ourService = [];

        $no = 0;
        foreach($getOurService as $ourRow){
            $ourService[$no]['id'] = $ourRow->id;
            $ourService[$no]['our_name_service'] = $ourRow->our_name_service;

            $getDetailOurService = DB::select("SELECT * FROM our_service_detail WHERE our_service_id = '$ourRow->id' ORDER BY our_service_id ASC");

            if($getDetailOurService != null){
                $ourService[$no]['detail_our_service'] = $getDetailOurService;
            }else{
                $ourService[$no]['detail_our_service'] = null;
            }

            $no++;
        }

        Tracker::firstOrCreate([
            'ip'     => $request->ip(),
            'date'   => date('Y-m-d'),
        ])->save();

        return view('landing.index', compact('identitywebsite', 'paketeas', 'testimonis', 'identityTelp', 'ourService', 'gallery'));
    }
}
