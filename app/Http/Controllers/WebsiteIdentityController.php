<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\IdentityWebsite;

class WebsiteIdentityController extends Controller
{
    public function index()
    {
        $identitywebsite = IdentityWebsite::where('id', 1)->first();

        return view('website-identity.index', compact('identitywebsite'));
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

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {
        $data = IdentityWebsite::where('id', 1)->first();

        $request->validate([
            'name_website'     => 'required|max:255',
            'og_title'         => 'required|max:255',
            'og_sitename'      => 'required|max:255',
            'og_description'   => 'required|max:255',
            'url'              => 'required|max:255',
            'email'            => 'required|max:255',
            'telepon'          => 'required|max:255',
            'alamat'           => 'required|max:255',
            'facebook'         => 'required|max:255',
            'twitter'          => 'required|max:255',
            'instagram'        => 'required|max:255',
            'meta_keyword'     => 'required|max:255',
            'meta_description' => 'required|max:255',
            'footer'           => 'required|max:255',
            'title'            => 'required|max:255',
            'content'          => 'required',
            'button'           => 'required|max:255',
        ]);

        try {
            DB::beginTransaction();

            if($request->file('logo')) {
                $logo = request()->file('logo');
                $fileNameLogo = time() . '.' . $logo->extension();
                $logoUrl = $logo->storeAs("identitywebsite/logo", $fileNameLogo);
                $data->logo = $logoUrl;
            }

            if($request->file('og_image')) {
                $og = request()->file('og_image');
                $fileNameOg = time() . '.' . $og->extension();
                $ogUrl = $og->storeAs("identitywebsite/og", $fileNameOg);
                $data->og_image         = $ogUrl;
            }

            if($request->file('favicon')) {
                $favicon = request()->file('favicon');
                $fileNameFavicon = time() . '.' . $favicon->extension();
                $faviconUrl = $favicon->storeAs("identitywebsite/favicon", $fileNameFavicon);
                $data->favicon          = $faviconUrl;
            }

            $data->name_website     = $request->name_website;
            $data->og_title         = $request->og_title;
            $data->og_sitename      = $request->og_sitename;
            $data->og_description   = $request->og_description;
            $data->url              = $request->url;
            $data->email            = $request->email;
            $data->telepon          = $request->telepon;
            $data->alamat           = $request->alamat;
            $data->facebook         = $request->facebook;
            $data->twitter          = $request->twitter;
            $data->instagram        = $request->instagram;
            $data->meta_keyword     = $request->meta_keyword;
            $data->meta_description = $request->meta_description;
            $data->footer           = $request->footer;
            $data->title            = $request->title;
            $data->content          = $request->content;
            $data->button           = $request->button;

            $data->save();

            DB::commit();

            return redirect()->back();
        } catch (\Exception $e) {
            DB::rollBack();

            $response = [
                'status' => false,
                'message' => $e->getMessage()
            ];

            return response()->json($e->getMessage(), 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}
