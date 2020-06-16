<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class WilayahController extends Controller
{
    //PROVINSI
    public function getAllProvince()
    {
        $provinces = DB::table('provinces')->get();

        return response()->json([
            'message' => 'success',
            'data' => $provinces
        ], 200);
    }

    public function filterProvince(Request $request)
    {
        $filter = strtoupper($request->filter);
        $provinces = DB::table('provinces')->where('name', 'like', "%$filter%")->get();

        return response()->json([
            'message' => 'success',
            'data' => $provinces
        ], 200);
    }
    //KOTA
    public function getAllKota()
    {
        $regencies = DB::table('regencies')->get();

        return response()->json([
            'message' => 'success',
            'data' => $regencies
        ], 200);
    }

    public function filterKota(Request $request)
    {
        $filter = strtoupper($request->filter);
        $regencies = DB::table('regencies')->where('name', 'like', "%$filter%")->get();

        return response()->json([
            'message' => 'success',
            'data' => $regencies
        ], 200);
    }
    //DISTRIK
    public function getAllDistricts()
    {
        $districts = DB::table('districts')->get();

        return response()->json([
            'message' => 'success',
            'data' => $districts
        ], 200);
    }

    public function filterDistricts(Request $request)
    {
        $filter = strtoupper($request->filter);
        $districts = DB::table('districts')->where('name', 'like', "%$filter%")->get();

        return response()->json([
            'message' => 'success',
            'data' => $districts
        ], 200);
    }
    //DESA
    public function getAllVillages()
    {
        $villages = DB::table('villages')->get();

        return response()->json([
            'message' => 'success',
            'data' => $villages
        ], 200);
    }

    public function filterVillages(Request $request)
    {
        $filter = strtoupper($request->filter);
        $villages = DB::table('villages')->where('name', 'like', "%$filter%")->get();

        return response()->json([
            'message' => 'success',
            'data' => $villages
        ], 200);
    }
}