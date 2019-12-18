<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Kriteria extends Controller
{
    public function index(){
        $krit = \App\Kriteria::all();
        return view('kriteria/kriteriatab', ['krit' => $krit]);
    }

    public function edit($id){
        $krit = \App\Kriteria::find($id);
        return view('kriteria/kriteriaedit', ['krit' => $krit]);
    }

    public function update($id, Request $request){
        $this->validate($request,[
            'name' => 'required',
            'bobot' => 'required'
        ]);

        $kriteria = \App\Kriteria::find($id);
        $kriteria -> name = $request->name;
        $kriteria -> bobot = $request->bobot;
        $kriteria->save();

        return redirect('/kriteria');
    }
}
