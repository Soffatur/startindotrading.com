<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\PaketEA;

class PaketEAController extends Controller
{
    public function index()
    {
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show($id)
    {
        $data = PaketEA::where('id', $id)->first();

        $response = [
            'status' => true,
            'message' => 'Ea package link found',
            'data' => [
                'id'           => $data->id,
                'name_deposit' => $data->name_deposit,
                'deposit'      => $data->deposit ?? null,
                'low_risk'     => $data->low_risk,
                'medium_risk'  => $data->medium_risk,
                'high_risk'    => $data->high_risk,
                'loss_limit'   => $data->loss_limit,
                'max_deposit'  => $data->max_deposit,
            ]
        ];

        return response()->json($response, 200);
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
        $data = PaketEA::where('id', $id)->first();

        $request->validate(
            [
                'name_deposit' => 'required',
                'low_risk' => 'required',
                'medium_risk' => 'required',
                'high_risk' => 'required',
                'loss_limit' => 'required',
                'max_deposit' => 'required',
            ]
        );

        try {
            DB::beginTransaction();

            $data->update([
                'name_deposit' => $request->input('name_deposit'),
                'deposit'      => $request->input('deposit'),
                'low_risk'     => $request->input('low_risk'),
                'medium_risk'  => $request->input('medium_risk'),
                'high_risk'    => $request->input('high_risk'),
                'loss_limit'   => $request->input('loss_limit'),
                'max_deposit'  => $request->input('max_deposit'),
            ]);

            DB::commit();

            $response = [
                'status' => true,
                'message' => 'Ea package link has been changed successfully!',
                'data' => [
                    'id'           => $data->id,
                    'name_deposit' => $data->name_deposit,
                    'deposit'      => $data->deposit ?? null,
                    'low_risk'     => $data->low_risk,
                    'medium_risk'  => $data->medium_risk,
                    'high_risk'    => $data->high_risk,
                    'loss_limit'   => $data->loss_limit,
                    'max_deposit'  => $data->max_deposit,
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

    }
}
