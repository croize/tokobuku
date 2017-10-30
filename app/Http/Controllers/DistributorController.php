<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Distributor;

class DistributorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $as = Distributor::all();
        return view('distributor.index')->with('sa',$as);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('distributor.create');
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
          'nama_distributor' => 'required',
          'alamat' => 'required',
          'telepon' => 'required',
        ]);

        $sa = new Distributor();
        $sa->nama_distributor = $request->nama_distributor;
        $sa->alamat = $request->alamat;
        $sa->telepon = $request->telepon;
        $sa->save();

        return redirect('distributor');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $as = Distributor::find($id);
      return view('distributor.show')->with('sa',$as);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $as = Distributor::find($id);
      return view('distributor.edit')->with('sa',$as);
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
        'nama_distributor' => 'required',
        'alamat' => 'required',
        'telepon' => 'required',
      ]);

      $sa = Distributor::find($id);
      $sa->nama_distributor = $request->nama_distributor;
      $sa->alamat = $request->alamat;
      $sa->telepon = $request->telepon;
      $sa->save();

      return redirect('distributor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sa = Distributor::find($id);
        $sa->delete();
        return redirect('distributor');
    }
}
