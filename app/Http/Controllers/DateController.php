<?php

namespace App\Http\Controllers;

use App\Models\Date;
use Illuminate\Http\Request;

class DateController extends Controller
{
    function getcreateDatePage() {
        return view("createDate");
    }

    function createDate(Request $request) {
        $request->validate([
            "Tanggal" => "required",
            "Bulan" => ["required", "integer", "min:1", "max:12"],
            "Jam" => ["required", "integer", "min:8", "max:21"]
        ], [
            "Tanggal.required" => "Masukan Tanggal.",
            "Bulan.required" => "Masukan Bulan",
            "Bulan.min" => "1-12",
            "Bulan.max" => "1-12",
            "Jam.min" => "8-21",
            "Jam.max" => "8-21"
        ]);

        Date::create([
            "Tanggal" => $request->Tanggal,
            "Bulan" => $request->Bulan,
            "Jam" => $request->Jam
        ]);

        return redirect(route('getcreateDatePage'));
    }
}
