<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKRSRequest;
use App\Http\Requests\UpdateKRSRequest;
use Illuminate\Http\Request;
use App\Models\KRS;
use App\Models\MataKuliah;
use Illuminate\Support\Facades\Auth;


class KRSController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function isiKRS()
    {
        $data = MataKuliah::all();
        return view('isikrs', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function addKRS(Request $request)
    {
        $ambilmk = $request->ambil;
        foreach ($ambilmk as $key => $value) {
            if($value == "on"){
                KRS::create([
                    'user_id' => Auth::user()->id,
                    'kodemk' => $key,
                ]);
            }
        }

        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKRSRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(KRS $kRS)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KRS $kRS)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKRSRequest $request, KRS $kRS)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KRS $kRS)
    {
        //
    }
}
