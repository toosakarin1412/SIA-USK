<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMataKuliahRequest;
use App\Http\Requests\UpdateMataKuliahRequest;
use Illuminate\Http\Request;
use App\Models\MataKuliah;

class MataKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function adminMK()
    {
        $data = MataKuliah::all();
        
        return view('adminmatakuliah', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function addMK(Request $request)
    {
        MataKuliah::create([
            'kodemk' => $request->kodemk,
            'namamk' => $request->namamk,
            'sks' => $request->sks,
            'kelas' => $request->kelas,
            'pengajar' => $request->pengajar,
            'ruang' => $request->ruang,
        ]);

        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMataKuliahRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(MataKuliah $mataKuliah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MataKuliah $mataKuliah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMataKuliahRequest $request, MataKuliah $mataKuliah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MataKuliah $mataKuliah)
    {
        //
    }
}
