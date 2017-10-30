<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pasok;
use App\Distributor;
use App\Buku;

class PasokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $as = Pasok::all();
        return view('pasok.index')->with('sa',$as);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $as = Buku::all();
      $bc = Distributor::all();
      return view('pasok.create')->with('sa',$as)->with('dis',$bc);
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
          'id_distributor' => 'required',
          'id_buku' => 'required',
          'jumlah' => 'required',
          'tanggal' => 'required',
        ]);

        $js = new Pasok();
        $js->id_distributor = $request->id_distributor;
        $js->id_buku = $request->id_buku;
        $js->jumlah = $request->jumlah;
        $js->tanggal = $request->tanggal;
        $js->save();

        return redirect('pasok');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $as = Pasok::find($id);
        return view('pasok.show')->with('sa',$as);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $as = Pasok::find($id);
      $dis = Distributor::all();
      $buk = Buku::all();
      return view('pasok.edit')->with('sa',$as)->with('ku',$buk)->with('but',$dis);
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
        'id_distributor' => 'required',
        'id_buku' => 'required',
        'jumlah' => 'required',
        'tanggal' => 'required',
      ]);

      $js = Pasok::find($id);
      $js->id_distributor = $request->id_distributor;
      $js->id_buku = $request->id_buku;
      $js->jumlah = $request->jumlah;
      $js->tanggal = $request->tanggal;
      $js->save();

      return redirect('pasok');
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
