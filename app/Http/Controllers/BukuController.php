<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sa = Buku::all();
        return view('buku.index')->with('as',$sa);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buku.create');
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
          'judul' => 'required',
          'noisbn' => 'required',
          'penulis' => 'required',
          'penerbit' => 'required',
          'tahun' => 'required',
          'stok' => 'required',
          'harga_pokok' => 'required',
          'harga_jual' => 'required',
          'ppn' => 'required',
          'diskon' => 'required',
        ]);

        $sa = new Buku();
        $sa->judul = $request->judul;
        $sa->noisbn = $request->noisbn;
        $sa->penulis = $request->penulis;
        $sa->penerbit = $request->penerbit;
        $sa->tahun = $request->tahun;
        $sa->stok = $request->stok;
        $sa->harga_pokok = $request->harga_pokok;
        $sa->harga_jual = $request->harga_jual;
        $sa->ppn = $request->ppn;
        $sa->diskon = $request->diskon;
        $sa->save();

        return redirect('buku');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $as = Buku::find($id);
      return view('buku.show')->with('sa',$as);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $as = Buku::find($id);
      return view('buku.edit')->with('sa',$as);
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
        'judul' => 'required',
        'noisbn' => 'required',
        'penulis' => 'required',
        'penerbit' => 'required',
        'tahun' => 'required',
        'stok' => 'required',
        'harga_pokok' => 'required',
        'harga_jual' => 'required',
        'ppn' => 'required',
        'diskon' => 'required',
      ]);

      $sa = Buku::find($id);
      $sa->judul = $request->judul;
      $sa->noisbn = $request->noisbn;
      $sa->penulis = $request->penulis;
      $sa->penerbit = $request->penerbit;
      $sa->tahun = $request->tahun;
      $sa->stok = $request->stok;
      $sa->harga_pokok = $request->harga_pokok;
      $sa->harga_jual = $request->harga_jual;
      $sa->ppn = $request->ppn;
      $sa->diskon = $request->diskon;
      $sa->save();

      return redirect('buku');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $sa = Buku::find($id);
          $sa->delete();

          return redirect('buku');
    }
}
