<?php

namespace App\Http\Controllers;

use App\Models\vehicles;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index()
    {
        $kendaraan = vehicles::all();
        return view('kendaraan.daftarkendaraan', compact('kendaraan'));
    }

}
// NOVAL ABDURRAMADAN - 6706223103