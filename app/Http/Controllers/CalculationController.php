<?php

namespace App\Http\Controllers;

use App\Alternatif;
use Illuminate\Http\Request;

class CalculationController extends Controller
{
    public $logging;

    public $kriterias;
    public $all_alternatif;

    public $xij_pow_2_v;
    public $sqrt_xij_pow_2_v;

    public $r_matrices;
    public $y_matrices;

    public $y_plus;
    public $y_min;

    public $yi_plus;
    public $yi_min;

    public $d_plus;
    public $d_min;

    public $final_result;

    public function doCalculation(){
        $this->kriterias = \App\Kriteria::all();

        $this->all_alternatif = Alternatif::all();


        $this->xij_pow_2_v = array();
        $this->sqrt_xij_pow_2_v = array();

        foreach ($this->kriterias as $kriteria){
            $a_single_bobot = array();
            foreach ($this->all_alternatif as $alternatif){
                $a_single_bobot[] = $alternatif[$kriteria->name];
            }

            $powed_bobot = array();
            foreach ($a_single_bobot as $value){
                $powed_bobot[] = $value ** 2;
            }

            $this->xij_pow_2_v[$kriteria->name] = array_sum($powed_bobot);
            $this->sqrt_xij_pow_2_v[$kriteria->name] = sqrt(array_sum($powed_bobot));
        }

        $this->r_matrices = array();

        foreach ($this->all_alternatif as $alternatif){
            foreach ($this->sqrt_xij_pow_2_v as $key => $value){
                $this->r_matrices[$alternatif->nama][$key] = $alternatif[$key] / $value;
            }
        }

        $this->y_matrices = array();
        foreach ($this->all_alternatif as $alternatif){
            $spec_r_matrices = $this->r_matrices[$alternatif->nama];
            foreach ($spec_r_matrices as $key => $value){
                $bobot = \App\Kriteria::where('name', $key)->first();
                $this->y_matrices[$alternatif->nama][$key] = $value * $bobot->bobot;
            }
        }

        $this->y_plus = array();
        $this->y_min = array();

        foreach ($this->kriterias as $kriteria){
            $max_val = null;
            $min_val = null;
            foreach ($this->y_matrices as $y){
                $val = $y[$kriteria->name];

                if($val < $min_val || is_null($min_val)){
                    $min_val = $val;
                }

                if($val > $max_val || is_null($max_val)){
                    $max_val = $val;
                }
            }
            $this->y_plus[$kriteria->name] = $max_val;
            $this->y_min[$kriteria->name] = $min_val;
        }


        $this->yi_plus = array();
        $this->yi_min = array();

        foreach ($this->y_matrices as $ykey => $yvalue){
            $powed_and_substracted_val_yi_plus = array();
            $powed_and_substracted_val_yi_min = array();
            foreach ($this->y_plus as $key => $value){
                $powed_and_substracted_val_yi_plus[] = ($yvalue[$key] - $value) ** 2;
            }

            foreach ($this->y_min as $key => $value){
                $powed_and_substracted_val_yi_min[] = ($yvalue[$key] - $value) ** 2;
            }

            $this->yi_plus[$ykey] = array_sum($powed_and_substracted_val_yi_plus);
            $this->yi_min[$ykey] = array_sum($powed_and_substracted_val_yi_min);
        }

        $this->d_plus = array();
        $this->d_min = array();

        foreach ($this->yi_plus as $key => $value){
            $this->d_plus[$key] = sqrt($value);
        }

        foreach ($this->yi_min as $key => $value){
            $this->d_min[$key] = sqrt($value);
        }


        $this->final_result = array();
        foreach ($this->d_min as $dkey => $dvalue){
            $this->final_result[$dkey] = $dvalue / ($dvalue + $this->d_plus[$dkey]);
        }

        arsort($this->final_result);

        return view('result', [
            'final_result' => $this->final_result,
            'kriteria' => $this->kriterias,
            'alternatifs' => $this->all_alternatif,
            'xij_pow_2_v' => $this->xij_pow_2_v,
            'sqrt_xij_pow_2_v' => $this->sqrt_xij_pow_2_v,
            'y_matrices' => $this->y_matrices,
            'r_matrices' => $this->r_matrices,
            'y_plus' => $this->y_plus,
            'y_min' => $this->y_min,
            'yi_plus' => $this->yi_plus,
            'yi_min' => $this->yi_min,
            'd_plus' => $this->d_plus,
            'd_min' => $this->d_min,
        ]);
    }
}
