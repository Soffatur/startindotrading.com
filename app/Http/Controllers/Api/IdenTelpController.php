<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\IdentityTelp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IdenTelpController extends Controller
{
    public function index(){

    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'name_number'            => 'required',
                'no_telp'                => 'required',
            ]
        );


        try {
            DB::beginTransaction();


            $data = IdentityTelp::create([
                'name_number'            => $request->input('name_number'),
                'number'                 => $request->input('no_telp'),
                'created_at'             => NOW()
            ]);

            DB::commit();

            $response = [
                'status' => true,
                'message' => 'Identity Telp added successfully!',
                'data' => [
                    'id'                      => $data->id,
                    'name_number'             => $data->name_number,
                    'number'                  => $data->number,
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
        $data = IdentityTelp::where('id', $id)->first();

        $response = [
            'status' => true,
            'message' => 'Identity telp found',
            'data' => [
                'id'          => $data->id,
                'name_number'        => $data->name_number,
                'number'    => $data->number,
            ]
        ];

        return response()->json($response, 200);
    }

    public function update(Request $request, $id)
    {
        $data = IdentityTelp::where('id', $id)->first();

        $request->validate([
            'name_number'     => 'required',
            'no_telp'         => 'required',
        ]);

        try {
            DB::beginTransaction();

            $data->name_number     = $request->name_number;
            $data->number = $request->no_telp;

            $data->save();

            DB::commit();

            $response = [
                'status' => true,
                'message' => 'identity telp changed successfully!',
                'data' => [
                    'id'          => $data->id,
                    'name'        => $data->name_number,
                    'position'    => $data->no_telp,
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
        $data = IdentityTelp::where('id', $id)->first();

        try {
            $data->delete();

            $response = [
                'status' => true,
                'message' => 'identity telp delete successfully!!'
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
