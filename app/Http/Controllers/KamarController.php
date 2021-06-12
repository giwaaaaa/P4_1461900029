<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;
use PDF;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kamar = Kamar::all();
        return view('kamar0029', ['kamar'=>$kamar]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kamar_tambah0029');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Kamar::create([
            'id' => $request->id,
            'id_pasien' => $request->id_pasien,
            'id_dokter' => $request->id_dokter,
        ]);

        return redirect('kamar0029');
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
        $kamar = Kamar::find($id);
        return view('kamar_edit0029', ['kamar'=>$kamar]);
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
        $kamar = Kamar::find($id);
        $kamar->id = $request->id;
        $kamar->id_pasien = $request->id_pasien;
        $kamar->id_dokter = $request->id_dokter;
        $kamar->save();

        return redirect('kamar0029');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kamar = Kamar::find($id);
        $kamar->delete();

        return redirect('kamar0029');
    }

    //dompdf
    public function generate()
    {
        $kamar = \App\Models\Kamar::All();
        $pdf = PDF::loadview('kamar_pdf0029',['kamar'=>$kamar]);
        return $pdf->stream();
    }
}
