<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;
use App\Imports\DokterImport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dokter = Dokter::all();
        return view('dokter0029', ['dokter'=>$dokter]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dokter_tambah0029');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Dokter::create([
            'nama_dokter' => $request->nama_dokter,
            'jabatan' => $request->jabatan,
        ]);

        return redirect('dokter0029');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dokter = Dokter::find($id);
        return view('dokter_edit0029', ['dokter'=>$dokter]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dokter = Dokter::find($id);
        $dokter->nama_dokter = $request->nama_dokter;
        $dokter->jabatan = $request->jabatan;
        $dokter->save();

        return redirect('dokter0029');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dokter = Dokter::find($id);
        $dokter->delete();

        return redirect('dokter0029');
    }

    //dompdf
    public function generate()
    {
        $dokter = \App\Models\Dokter::All();
        $pdf = PDF::loadview('dokter_pdf0029',['dokter'=>$dokter]);
        return $pdf->stream();
    }

    public function import(Request $request)
    {
        Excel::import(new DokterImport, $request->file);
        return redirect('dokter0029');
    }

    public function formimport()
    {
        return view('importdokter0029');
    }
}
