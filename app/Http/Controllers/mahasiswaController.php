<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;

class mahasiswaController extends Controller
{
    public function index(){
        $mahasiswa = mahasiswa::all();
        return view('mahasiswa.index',compact(['mahasiswa']));
    }
    public function create()
    {
        return view('mahasiswa.create');
    }
    public function store(Request $request)
    {
        //dd($request->except(['_token','submit']));
        mahasiswa::create($request->except(['_token','submit']));
        return redirect('/mahasiswa');
    }
    public function edit($id)
    {
        $mahasiswa = mahasiswa::find($id);
        return view('mahasiswa.edit',compact(['mahasiswa']));
    }
    public function update($id, Request $request)
    {
        $mahasiswa = mahasiswa::find($id);
        $mahasiswa->update($request->except(['_token','submit']));
        return redirect('/mahasiswa');
    }
    public function destroy($id)
    {
        $mahasiswa = mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect('/mahasiswa');
    }
}