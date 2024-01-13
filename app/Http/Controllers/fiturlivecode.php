<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\soalUKK;
use File;

class fiturlivecode extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pdf');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dump($request->file);
        $validateData = $request->validate([
            'file' => 'required|file'
        ]);
        $soalUkk = new SoalUkk();
        $extfile = "soalUkk";
        // $user = Auth::user()->name;
        $user = 'Aldhi';
        $extensi = $request->file->getClientOriginalExtension();
        $namaFile = $extfile . "-" . $user . "-" . time() . "." . $extensi;
        $path = $request->file->move('/tugas', $namaFile);
        $soalUkk->tugas = $namaFile;
        $soalUkk->save();
        return redirect()->route('soal.index')->with('store', "Berhasil Disimpan");
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
