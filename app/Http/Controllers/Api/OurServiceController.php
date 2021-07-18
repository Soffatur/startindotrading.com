<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\OurSercive;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OurServiceController extends Controller
{
    public function store(Request $request)
    {
        $request->validate(
            [
                'our_service'            => 'required',
            ]
        );

        try {
            DB::beginTransaction();


            $data = OurSercive::create([
                'our_name_service'       => $request->input('our_service'),
                'created_at'             => NOW()
            ]);

            DB::commit();

            $response = [
                'status' => true,
                'message' => 'Our Service added successfully!',
                'data' => [
                    'id'                      => $data->id,
                    'our_name_service'        => $data->our_service,
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
        $data = OurSercive::where('id', $id)->first();

        $response = [
            'status' => true,
            'message' => 'Our Service found',
            'data' => [
                'id'                    => $data->id,
                'our_name_service'      => $data->our_name_service,
            ]
        ];

        return response()->json($response, 200);
    }

    public function update(Request $request, $id)
    {
        $data = OurSercive::where('id', $id)->first();

        $request->validate([
            'our_service'     => 'required',
        ]);

        try {
            DB::beginTransaction();

            $data->our_name_service     = $request->our_service;

            $data->save();

            DB::commit();

            $response = [
                'status' => true,
                'message' => 'Our Service changed successfully!',
                'data' => [
                    'id'                => $data->id,
                    'our_service'       => $data->our_name_service,
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
        $data = OurSercive::where('id', $id)->first();

        try {
            $data->delete();

            $response = [
                'status' => true,
                'message' => 'our service delete successfully!!'
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
