<?php

namespace App\Http\Controllers;

use App\OurSercive;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OurServiceDetailController extends Controller
{
    public function index(){
        $ourService = OurSercive::all();
        $data = DB::select("SELECT our_service_detail.id, our_service.our_name_service, our_service_detail.our_service_id, our_service_detail.description FROM our_service_detail JOIN our_service ON our_service.id = our_service_detail.our_service_id ORDER BY our_service.id, our_service_detail.id ASC");
        return view('our-service-detail.index', compact('ourService', 'data'));
    }
}
