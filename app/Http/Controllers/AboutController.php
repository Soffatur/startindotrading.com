<?php

namespace App\Http\Controllers;

use App\About;
use App\IdentityWebsite;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $identitywebsite = IdentityWebsite::where('id', 1)->first();
        $about = About::all()->first();
        if($about == null){
            $about = (object) ['id' => 1, 'description' => ''];
        }

        return view('about.index', compact('about'));
    }

    public function update($id, Request $request){
        $request->validate([
            'description' => 'required'
        ]);

        $data = About::all()->first();
        if($data == null){
            $about = About::create([
                'description' => $request->description
            ]);
            return redirect('/about');
        }

        $data->description = $request->description;
        $data->save();
        return redirect('/about');
    }
}
