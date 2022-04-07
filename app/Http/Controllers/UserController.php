<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use Auth;
use PDF;

class UserController extends Controller
{
  public function index()
  {
    $data = User::where('user_id',Auth::user()->id);
    return view('user.profile', compact('data'));
  }
  
  public function datauser()
  {
    $data = User::all();
    return view('user.datauser', compact('data'));
  }

 public function delete($id)
    {
        user::find($id)->delete();
        return redirect ('/datauser');
    }
    
  public function cetakpdf()
  {
    $data = User::all();
    
    $pdf = PDF::loadview('user.cetak-pdf',compact('data'));
    return $pdf->stream();
  }
  
  public function dashboard()
  {
    return view('user.dashboard');
  }

  public function edit($id)
  {
    $data = User::find($id);
    return view('user.profile', compact('data'));
   }


   public function update(Request $request, $id)
   {
    $data = User::find($id);
    $data->update($request->all());
    if ($request->hasFile('avatar')) {
      $request->file('avatar')->move('image/',$request->file('avatar')->getClientOriginalName());
      $data->avatar = $request->file('avatar')->getClientOriginalName();
      $data->save();
    }
   
      return redirect("/user/$id");
     
  }


}