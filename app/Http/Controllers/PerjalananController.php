<?php

namespace App\Http\Controllers;

use App\models\perjalanan;
use Illuminate\Http\Request;
use \App\User;
use Auth;

class PerjalananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perjalanan = perjalanan::where('user_id', Auth::user()->id)->paginate(5);
        return view ('perjalanan.index', compact('perjalanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {      
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data = [
           'tanggal'=>$request->tanggal,
           'jam'=>$request->jam,
           'lokasi'=>$request->lokasi,
           'suhu_tubuh'=>$request->suhu_tubuh,
           'user_id'=>Auth::user()->id
       ];
       Perjalanan::create($data);
       return redirect('/perjalanan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\perjalanan  $perjalanan
     * @return \Illuminate\Http\Response
     */
    public function show(perjalanan $perjalanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\perjalanan  $perjalanan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit=perjalanan::find($id);
        return view ('perjalanan.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\perjalanan  $perjalanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $edit=perjalanan::find($id);
        $edit->tanggal=$request->tanggal;
        $edit->jam=$request->jam;
        $edit->lokasi=$request->lokasi;
        $edit->suhu_tubuh=$request->suhu_tubuh;

        $edit->save();
        return redirect ('/perjalanan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\perjalanan  $perjalanan
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        perjalanan::find($id)->delete();
        return redirect ('/perjalanan');
    }
}
