<?php

namespace App\Http\Controllers;

use App\Alternatif;
use Illuminate\Http\Request;

class CalculationController extends Controller
{
    public $logging;

    public function doCalculation(){
        $kriterias = \App\Kriteria::all();

        $all_alternatif = Alternatif::all();

        $normalised_mat = array();

        $xij_pow_2_v = array();
        $sqrt_xij_pow_2_v = array();



        foreach ($kriterias as $kriteria){
            $a_single_bobot = array();
            foreach ($all_alternatif as $alternatif){
                $a_single_bobot[] = $alternatif[$kriteria->name];
            }

            $powed_bobot = array();
            foreach ($a_single_bobot as $value){
                $powed_bobot[] = $value ** 2;
            }

            $xij_pow_2_v[$kriteria->name] = array_sum($powed_bobot);
            $sqrt_xij_pow_2_v[$kriteria->name] = sqrt(array_sum($powed_bobot));
        }

        $r_matrices = array();

        foreach ($all_alternatif as $alternatif){
            foreach ($sqrt_xij_pow_2_v as $key => $value){
                $r_matrices[$alternatif->nama][$key] = $alternatif[$key] / $value;
            }
        }

        $y_matrices = array();
        foreach ($all_alternatif as $alternatif){
            $spec_r_matrices = $r_matrices[$alternatif->nama];
            foreach ($spec_r_matrices as $key => $value){
                $bobot = \App\Kriteria::where('name', $key)->first();
                $y_matrices[$alternatif->nama][$key] = $value * $bobot->bobot;
            }
        }

        $y_plus = array();
        $y_min = array();

        foreach ($kriterias as $kriteria){
            $max_val = null;
            $min_val = null;
            foreach ($y_matrices as $y){
                $val = $y[$kriteria->name];

                if($kriteria->name == 'sc'){
                    var_dump($val);
                }

                if($val < $min_val || is_null($min_val)){
                    $min_val = $val;
                }

                if($val > $max_val || is_null($min_val)){
                    $max_val = $val;
                }
            }
            $y_plus[$kriteria->name] = $max_val;
            $y_min[$kriteria->name] = $min_val;
        }

        $yi_plus = array();
        $yi_min = array();

        foreach ($y_matrices as $ykey => $yvalue){
            $powed_and_substracted_val_yi_plus = array();
            $powed_and_substracted_val_yi_min = array();
            foreach ($y_plus as $key => $value){
                $powed_and_substracted_val_yi_plus[] = ($yvalue[$key] - $value) ** 2;
            }

            foreach ($y_min as $key => $value){
                $powed_and_substracted_val_yi_min[] = ($yvalue[$key] - $value) ** 2;
            }

            $yi_plus[$ykey] = array_sum($powed_and_substracted_val_yi_plus);
            $yi_min[$ykey] = array_sum($powed_and_substracted_val_yi_min);
        }

        $d_plus = array();
        $d_min = array();

        foreach ($yi_plus as $key => $value){
            $d_plus[$key] = sqrt($value);
        }

        foreach ($yi_min as $key => $value){
            $d_min[$key] = sqrt($value);
        }

        $final_result = array();
        foreach ($d_min as $dkey => $dvalue){
            $final_result[$dkey] = $dvalue / ($dvalue + $d_plus[$dkey]);
        }


        var_dump($final_result);

        return view('loggers');
    }
}
