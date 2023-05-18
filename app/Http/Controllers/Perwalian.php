<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\KRS;
use Illuminate\Support\Facades\Auth;

class Perwalian extends Controller
{
    function getKRS(){
        $data = User::where('id_dosen_wali', Auth::user()->npm)->get();

        $dataKRS = [];

        foreach ($data as $key) {
            $tmp = KRS::where('user_id', $key->id)->get();
            
            array_push($dataKRS, $tmp);
        }

        return view('krsmhs', ['data'=> $dataKRS[0]]);
    }
}
