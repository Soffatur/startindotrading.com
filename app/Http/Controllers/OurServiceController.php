<?php

namespace App\Http\Controllers;

use App\OurSercive;
use Illuminate\Http\Request;

class OurServiceController extends Controller
{
    public function index(){
        $ourService = OurSercive::all();

        return view('our-service.index', compact('ourService'));
    }
}
