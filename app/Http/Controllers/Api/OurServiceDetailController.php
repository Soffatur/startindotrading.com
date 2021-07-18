<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\OurServiceDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OurServiceDetailController extends Controller
{
    public function store(Request $request)
    {
        $request->validate(
            [
                'our_service'            => 'required',
                'detail_our_service'     => 'required',
            ]
        );

        try {
            DB::beginTransaction();

            $data = OurServiceDetail::create([
                'our_service_id'       => $request->input('our_service'),
                'description'          => $request->input('detail_our_service'),
                'created_at'           => NOW()
            ]);

            DB::commit();

            $response = [
                'status' => true,
                'message' => ' Detail Our Service added successfully!',
                'data' => [
                    'id'                 => $data->id,
                    'our_service'        => $data->our_service_id,
                    'description'        => $data->description,
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
        $data = OurServiceDetail::where('id', $id)->first();

        $response = [
            'status' => true,
            'message' => 'Detail Our Service found',
            'data' => [
                'id'                    => $data->id,
                'our_service_id'        => $data->our_service_id,
                'description'           => $data->description,
            ]
        ];

        return response()->json($response, 200);
    }

    public function update(Request $request, $id)
    {
        $data = OurServiceDetail::where('id', $id)->first();

        $request->validate([
            'our_service'            => 'required',
            'detail_our_service'     => 'required',
        ]);

        try {
            DB::beginTransaction();

            $data->our_service_id  = $request->our_service;
            $data->description     = $request->detail_our_service;

            $data->save();

            DB::commit();

            $response = [
                'status' => true,
                'message' => 'Detail Our Service changed successfully!',
                'data' => [
                    'id'                => $data->id,
                    'our_service'       => $data->our_service_id,
                    'description'       => $data->description,
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
        $data = OurServiceDetail::where('id', $id)->first();

        try {
            $data->delete();

            $response = [
                'status' => true,
                'message' => 'detail our service delete successfully!!'
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
