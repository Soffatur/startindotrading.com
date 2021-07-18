<?php

namespace App\Http\Controllers\Api;
use File;
use App\Gallery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{
    public function store(Request $request)
    {
        $request->validate(
            [
                'photo'                    => 'required|mimes:png,jpg,jpeg,svg',
            ]
        );

        try {
            DB::beginTransaction();

            if($request->file('photo')) {
                $photo = request()->file('photo');
                $fileNamephoto = time() . '.' . $photo->extension();
                $photoUrl = $photo->storeAs("identitywebsite/gallery-photo", $fileNamephoto);
            }

            $data = Gallery::create([
                'gallery_name' => $photoUrl
            ]);

            DB::commit();

            $response = [
                'status' => true,
                'message' => 'Gallery added successfully!',
                'data' => [
                    'id'                      => $data->id,
                    'gallery_name'                    => $data->gallery_name,
                ]
            ];

            return response()->json($response, 200);
        } catch (\Exception $e) {
            DB::rollBack();

            $response = [
                'status' => false,
                'message' => $e->getMessage()
            ];

            return response()->json($response, 500);
        }
    }

    public function show($id)
    {
        $data = Gallery::where('id', $id)->first();

        $response = [
            'status' => true,
            'message' => 'Gallery found',
            'data' => [
                'id'          => $data->id,
                'photo'        => $data->gallery_name
            ]
        ];

        return response()->json($response, 200);
    }

    public function update(Request $request, $id)
    {
        $data = Gallery::where('id', $id)->first();
        $request->validate([
            'photo' => 'required|mimes:png,jpg,jpeg,svg',
        ]);

        try {
            DB::beginTransaction();

            if($request->file('photo')) {
                File::delete('storage/'.$data->gallery_name);
                $photo = request()->file('photo');
                $fileNamephoto = time() . '.' . $photo->extension();
                $photoUrl = $photo->storeAs("identitywebsite/gallery-photo", $fileNamephoto);
            }

            $data->gallery_name = $photoUrl;

            $data->save();

            DB::commit();

            $response = [
                'status' => true,
                'message' => 'gallery changed successfully!',
                'data' => [
                    'id'          => $data->id,
                    'gallery_name'        => $data->gallery_name,
                ]
            ];

            return response()->json($response, 200);
        } catch (\Exception $e) {
            DB::rollBack();

            $response = [
                'status' => false,
                'message' => $e->getMessage()
            ];

            return response()->json($e->getMessage(), 500);
        }
    }

    public function destroy($id)
    {
        $data = Gallery::where('id', $id)->first();

        try {
            File::delete('storage/'.$data->gallery_name);
            $data->delete();

            $response = [
                'status' => true,
                'message' => 'gallery delete successfully!!'
            ];

            return response()->json($response, 200);
        } catch (\Exception $e) {
            DB::rollBack();

            $response = [
                'status' => false,
                'message' => $e->getMessage()
            ];

            return response()->json($response, 500);
        }
    }
}
