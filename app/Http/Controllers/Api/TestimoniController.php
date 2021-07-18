<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Testimoni;

class TestimoniController extends Controller
{
    public function index()
    {
    }
    public function create()
    {
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'name'                    => 'required',
                'position'                => 'required',
                'content'                 => 'required',
            ]
        );

        try {
            DB::beginTransaction();

            if($request->file('photo')) {
                $photo = request()->file('photo');
                $fileNamephoto = time() . '.' . $photo->extension();
                $photoUrl = $photo->storeAs("identitywebsite/testimoni", $fileNamephoto);
            }

            $data = Testimoni::create([
                'name'                    => $request->input('name'),
                'position'                 => $request->input('position'),
                'content'                 => $request->input('content'),
                'photo'                   => $photoUrl
            ]);

            DB::commit();

            $response = [
                'status' => true,
                'message' => 'testimony added successfully!',
                'data' => [
                    'id'                      => $data->id,
                    'name'                    => $data->name,
                    'position'                => $data->position,
                    'content'                 => $data->content,
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
        $data = Testimoni::where('id', $id)->first();

        $response = [
            'status' => true,
            'message' => 'testimoni found',
            'data' => [
                'id'          => $data->id,
                'name'        => $data->name,
                'position'    => $data->position,
                'content'     => $data->content,
            ]
        ];

        return response()->json($response, 200);
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
        $data = Testimoni::where('id', $id)->first();

        $request->validate([
            'name'     => 'required',
            'position' => 'required',
            'content'  => 'required',
        ]);

        try {
            DB::beginTransaction();

            if($request->file('photo')) {
                $photo = request()->file('photo');
                $fileNamephoto = time() . '.' . $photo->extension();
                $photoUrl = $photo->storeAs("identitywebsite/testimoni", $fileNamephoto);
                $data->photo = $photoUrl;
            }

            $data->name     = $request->name;
            $data->position = $request->position;
            $data->content  = $request->content;

            $data->save();

            DB::commit();

            $response = [
                'status' => true,
                'message' => 'testimony changed successfully!',
                'data' => [
                    'id'          => $data->id,
                    'name'        => $data->name,
                    'position'    => $data->positon,
                    'content'     => $data->content,
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
        $data = Testimoni::where('id', $id)->first();

        try {
            $data->delete();

            $response = [
                'status' => true,
                'message' => 'testimony delete successfully!!'
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
