<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AkunController extends Controller
{
    public function profilmitra()
    {
      return view('halaman.profilmitra');
    }

    public function profilsupplier()
    {
      return view('halaman.profilsupplier');
    }

    public function update(Request $request,$id)
    {
      $user = \App\User::find($id);
      $user->update($request->all());
      if($request->hasFile('avatar')){
      $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
      $user->avatar=$request->file('avatar')->getClientOriginalName();
      $user->save();
    }
    return redirect('/profilmitra')->with('sukses','Data Berhasil diupdate');
    }

    public function update2(Request $request,$id)
    {
      $user = \App\pengguna::find($id);
      $user->update($request->all());
      if($request->hasFile('avatar')){
      $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
      $user->avatar=$request->file('avatar')->getClientOriginalName();
      $user->save();
    }
    return redirect('/profilsupplier')->with('sukses','Data Berhasil diupdate');
    }
}
