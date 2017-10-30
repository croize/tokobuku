<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Penjualan;
use App\Buku;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $as = Penjualan::all();
      return view('penjualan.index')->with('sa',$as);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $as = Buku::all();
      $bc = User::all();
      return view('penjualan.create')->with('sa',$as)->with('dis',$bc);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request,[
        'id_kasir' => 'required',
        'id_buku' => 'required',
        'jumlah' => 'required',
        'total' => 'required',
        'tanggal' => 'required',
      ]);

      $js = new Penjualan();
      $js->id_kasir = $request->id_kasir;
      $js->id_buku = $request->id_buku;
      $js->jumlah = $request->jumlah;
      $js->total = $request->total;
      $js->tanggal = $request->tanggal;
      $js->save();

      return redirect('penjualan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $as = Penjualan::find($id);
      return view('penjualan.show')->with('sa',$as);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $as = Penjualan::find($id);
      $dis = User::all();
      $buk = Buku::all();
      return view('penjualan.edit')->with('sa',$as)->with('ku',$buk)->with('but',$dis);
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
      $this->validate($request,[
        'id_kasir' => 'required',
        'id_buku' => 'required',
        'jumlah' => 'required',
        'total' => 'required',
        'tanggal' => 'required',
      ]);

      $js = Penjualan::find($id);
      $js->id_kasir = $request->id_kasir;
      $js->id_buku = $request->id_buku;
      $js->jumlah = $request->jumlah;
      $js->total = $request->total;
      $js->tanggal = $request->tanggal;
      $js->save();

      return redirect('penjualan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $js = Penjualan::find($id);
          $js->delete();
          return redirect('penjualan');
    }
}
