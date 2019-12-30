<?php

namespace App\Http\Controllers;

use App\Alternatif;
use App\alternatif_migration;
use App\result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ResultsHandler extends Controller
{
    public function index(){
        $results = result::all();

        return view('results/results', [
            'result' => $results
        ]);
    }

    public function view($id){
        $result = result::find($id);
        $alternatif = alternatif_migration::where('results_id', $id)->get();

        return view('results/result_details', [
            'result' => $result,
            'alternatif' => $alternatif
        ]);
    }

    public function migrate(Request $request){

        $result = json_decode($request['result'], true);
        $nama_perhitungan = $request['name'];

        arsort($result);

        $all_alternatif = Alternatif::all();
        $result_to_db = array();

        $resultz = new result();
        $resultz->nama_perhitungan = $nama_perhitungan;
        $resultz->top_ranking = array_key_first($result);
        $resultz->save();

        foreach ($all_alternatif as $alt){
            $migrate = new alternatif_migration();
            $migrate->nama = $alt->nama;
            $migrate->sc = $alt->sc;
            $migrate->sa = $alt->sa;
            $migrate->gcc = $alt->gcc;
            $migrate->pac = $alt->pac;
            $migrate->soi = $alt->soi;
            $migrate->gcpch = $alt->gcpch;
            $migrate->fcc = $alt->fcc;
            $migrate->cso = $alt->cso;
            $migrate->tet = $alt->tet;
            $migrate->mds = $alt->mds;
            $migrate->si = $alt->si;
            $migrate->cosmos = $alt->cosmos;
            $migrate->cto = $alt->cto;
            $migrate->hasil = $result[$alt->nama];
            $migrate->results_id = $resultz->id;

            $migrate->save();
        }

        return Redirect::to('/result');

    }
}
