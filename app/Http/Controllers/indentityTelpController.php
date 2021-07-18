<?php

namespace App\Http\Controllers;

use App\IdentityTelp;
use Illuminate\Http\Request;

class indentityTelpController extends Controller
{
    public function index(){
        $identityTelp = IdentityTelp::all();

        return view('telp.index', compact('identityTelp'));
    }
}
