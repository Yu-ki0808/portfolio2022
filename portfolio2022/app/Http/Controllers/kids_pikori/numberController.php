<?php

namespace App\Http\Controllers\kids_pikori;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Libraries\Functions;


class numberController extends Controller
    {
        public function show_number(){
        $color = Functions::color();
        $random = rand(1, 50);
        $oneLines = range(1, 10);
        $twoLines = range(11, 20);
        $threeLines = range(21, 30);
        $fourLines = range(31, 40);
        $fiveLines = range(41, 50);

            return view('kids-pikori.number.number',compact('random','oneLines','twoLines','threeLines','fourLines','fiveLines' ,'color'));
        }
        public function show_number_random(){
        $color = Functions::color();


            return view('kids-pikori.number.number-random',compact('color'));
        }
    }

