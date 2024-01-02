<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class ProcessDataController extends Controller
{
    public function proses_data(Request $request) {
        $input = $request->input('inputan');

        $explodeData = explode(' ', $input);

        $name = ucwords(strtoupper($explodeData[0]));
        $age = ucwords(strtoupper($explodeData[1]));
        $city = ucwords(strtoupper(implode(' ', array_slice( $explodeData, 2))));

        // dd($kota);

        $data = new Data();
        $data->NAME = $name;  
        $data->AGE = $age; 
        $data->CITY = $city; 
        
        $data->save();

        return back();
    }

}