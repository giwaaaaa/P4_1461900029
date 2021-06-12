<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;
use App\Imports\PasienImport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pasien = Pasien::all();
        return view('pasien0029', ['pasien'=>$pasien]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pasien_tambah0029');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pasien::create([
            'nama_pasien' => $request->nama_pasien,
            'alamat' => $request->alamat,
        ]);

        return redirect('pasien0029');
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
        $pasien = Pasien::find($id);
        return view('pasien_edit0029', ['pasien'=>$pasien]);
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
        $pasien = Pasien::find($id);
        $pasien->nama_pasien = $request->nama_pasien;
        $pasien->alamat = $request->alamat;
        $pasien->save();

        return redirect('pasien0029');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pasien = Pasien::find($id);
        $pasien->delete();

        return redirect('pasien0029');
    }

    //dompdf
    public function generate()
    {
        $pasien = \App\Models\Pasien::All();
        $pdf = PDF::loadview('pasien_pdf0029',['pasien'=>$pasien]);
        return $pdf->stream();
    }

    public function import(Request $request)
    {
        Excel::import(new PasienImport, $request->file);
        return redirect('pasien0029');
    }

    public function formimport()
    {
        return view('importpasien0029');
    }
}
