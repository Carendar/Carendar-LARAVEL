<?php

namespace App\Http\Controllers;

use App\Models\Saloon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SaloonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        $Saloon= Saloon::all();
        return response()->json([
            'status' => 200,
            'message' => "Exitoso",
            'data' => [
                'saloons' => $Saloon,
            ]
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Saloon
     */
    public function create(Request $request)
    {
        $saloon = new Saloon;
        $saloon->sal_name = $request->sal_name;
        $saloon->sal_location = $request->sal_name;
        $saloon->sal_email = $request->sal_name;
        $saloon->sal_phone = $request->sal_name;
        $saloon->save();

        return $saloon;
    }



    /**
     * Display the specified resource.
     *
     * @param $sal_id
     * @return JsonResponse
     */
    public function show($sal_id)
    {
        $Saloon= Saloon::find($sal_id);
        return response()->json([
            'status' => 200,
            'message' => "Exitoso",
            'data' => [
                'saloon' => $Saloon,
            ]
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Saloon $saloon
     * @return Response
     */
    public function edit(Saloon $saloon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param $sal_id
     * @return Response
     */
    public function update(Request $request, $sal_id)
    {
        $saloon = Saloon::find($sal_id);
        $saloon->update($request->all());

        return $saloon;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Saloon $saloon
     * @return Response
     */
    public function destroy(Saloon $saloon)
    {
        //
    }
}