<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\BahanBakar;
use App\Transaksi;
use App\MemberKendaraan;

class PertaliteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Pertalite = BahanBakar::Where('name_bb','Pertalite')->first();
      // dd(Auth::user()->id);
      return view('purchasepertalite',['pertalite'=>$Pertalite]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $Pertalite = MemberKendaraan::find(Auth::user()->memberkendaraan->no_plat)->get();
      // dd(Auth::user()->id);
      return view('purchasepertalite',['pertalite'=>$Pertalite]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data = $request->all();
      $data['id_user_staff'] = Auth::user()->id;
      $Kendaraan=MemberKendaraan::where('no_plat',$request->no_plat)->first();
      $data['tgl_transaksi'] = date('Y-m-d');
      $data['id_user_member'] = $Kendaraan->id_member;
      Transaksi::create($data);
      return redirect()->back();
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
}
