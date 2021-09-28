<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChallengeController extends Controller
{
    public function index(){
        return view('optionalChallenge');
    }

    public function process(Request $request){
        $rahasia = $request->rahasia;
        $tebakan = $request->tebakan;

        $len1 = strlen($rahasia);

        $arr_rahasia = str_split($rahasia);
        $arr_tebakan = str_split($tebakan);

        for($i=0; $i<$len1; $i++){
            if($arr_rahasia[$i] == $arr_tebakan[$i]){
                $arr_x[] = $arr_tebakan[$i];
            }else{
                $arr_y[] = $arr_tebakan[$i];
            }
        }
        error_reporting(0);
        $result= [
            'true' => $arr_x,
            'false' => $arr_y
        ];

        return view('result', $result);
    }
}
