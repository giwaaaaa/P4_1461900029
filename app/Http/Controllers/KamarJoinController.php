<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use DB;
use Illuminate\Http\Request;
use PDF;

class KamarJoinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kamarjoin = DB::table('kamar')->join('pasien','kamar.id_pasien','=','pasien.id')
        ->join('dokter','kamar.id_dokter','=','dokter.id')
        ->get();
        return view('kamarjoin0029', ['kamarjoin'=>$kamarjoin]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //
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
      //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       //
    }

    //dompdf
    public function generate()
    {
        $kamarjoin = DB::table('kamar')->join('pasien','kamar.id_pasien','=','pasien.id')
        ->join('dokter','kamar.id_dokter','=','dokter.id')
        ->get();
        $pdf = PDF::loadview('kamarjoin_pdf0029',['kamarjoin'=>$kamarjoin]);
        return $pdf->stream();
    }
}
