<?php

namespace App\Http\Controllers;

use App\Alternatif;
use Illuminate\Http\Request;

class AlternatifController extends Controller
{
    public function index(){
        $alt = Alternatif::all();
        return view('alternatif/altview', ['alt' => $alt]);
    }

    public function edit($id){
        $alt = Alternatif::find($id);
        return view('alternatif/altedit', ['alt' => $alt]);
    }

    public function update($id, Request $request){
        $this->validate($request,[
            'nama' => 'required',
            'sc' => 'required | integer | between:1,4',
            'sa' => 'required | integer | between:1,4',
            'gcc' => 'required | integer | between:1,4',
            'pac' => 'required | integer | between:1,4',
            'soi' => 'required | integer | between:1,4',
            'gcpch' => 'required | integer | between:1,4',
            'fcc' => 'required | integer | between:1,4',
            'cso' => 'required | integer | between:1,4',
            'tet' => 'required | integer | between:1,4',
            'mds' => 'required | integer | between:1,4',
            'si' => 'required | integer | between:1,4',
            'cosmos' => 'required | integer | between:1,4',
            'cto' => 'required | integer | between:1,4'

        ]);

        $alt = Alternatif::find($id);
        $alt -> fill($request->post());
        $alt->save();

        return redirect('/alternatif');

    }

    public function delete($id){
        $alt = Alternatif::find($id);
        $alt->delete();

        return redirect('/alternatif');
    }

    public function addForm(){
        return view('alternatif/altadd');
    }

    public function store(Request $request){

        $this->validate($request,[
            'nama' => 'required',
            'sc' => 'required | integer | between:1,4',
            'sa' => 'required | integer | between:1,4',
            'gcc' => 'required | integer | between:1,4',
            'pac' => 'required | integer | between:1,4',
            'soi' => 'required | integer | between:1,4',
            'gcpch' => 'required | integer | between:1,4',
            'fcc' => 'required | integer | between:1,4',
            'cso' => 'required | integer | between:1,4',
            'tet' => 'required | integer | between:1,4',
            'mds' => 'required | integer | between:1,4',
            'si' => 'required | integer | between:1,4',
            'cosmos' => 'required | integer | between:1,4',
            'cto' => 'required | integer | between:1,4'

        ]);


        $alt = new Alternatif();
        $alt -> fill($request->post());
        $alt -> save();

        return redirect('/alternatif');
    }
}
