<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PaketEA;

class PaketEAController extends Controller
{
    public function index()
    {
        $paketeas = PaketEA::all();

        return view('paket-ea.index', compact('paketeas'));
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show($id)
    {

    }

    function edit($id)
    {
        $paketea = PaketEA::find($id);
        return response()->json($paketea);
    }

    public function update(Request $request)
    {
    }

    public function destroy($id)
    {
    }
}
