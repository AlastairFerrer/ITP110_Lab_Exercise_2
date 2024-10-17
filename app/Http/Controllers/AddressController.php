<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\barangays;
use App\Models\citytowns;
use App\Models\provinces;
use App\Models\regions;

class AddressController
{
    function provinces(){
        $provinces = DB::select("SELECT * FROM provinces order by province_name asc ");
        $citytowns = DB::select("SELECT * FROM citytowns order by citytown_name asc ");

        return view('address', compact('provinces', 'citytowns'));
    }
}
