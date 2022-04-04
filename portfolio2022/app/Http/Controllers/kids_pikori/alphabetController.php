<?php

namespace App\Http\Controllers\kids_pikori;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Libraries\Functions;



class alphabetController extends Controller
    {
        public function show_alphabet(){
        $color_random = rand(1, 5);
        if ($color_random == 1) {
            $color = 'primary';
        }
        if ($color_random == 2) {
            $color = 'info';
        }
        if ($color_random == 3) {
            $color = 'danger';
        }
        if ($color_random == 4) {
            $color = 'warning';
        }
        if ($color_random == 5) {
            $color = 'success';
        }
        $color_random1 = rand(1, 5);
        if ($color_random1 == 1) {
            $color1 = 'primary';
        }
        if ($color_random1 == 2) {
            $color1 = 'info';
        }
        if ($color_random1 == 3) {
            $color1 = 'danger';
        }
        if ($color_random1 == 4) {
            $color1 = 'warning';
        }
        if ($color_random1 == 5) {
            $color1 = 'success';
        }
        $oneLines = (['A' => 1, 'B' => 2, 'C' => 3, 'D' => 4, 'E' => 5, 'F' => 6, 'G' => 7, 'H' => 8, ' I' => 9, 'J' => 10, 'K' => 11, 'L' => 12, 'M' => 13]);
        $twoLines = (['N' => 14, 'O' => 15, 'P' => 16, 'Q' => 17, 'R' => 18, 'S' => 19, 'T' => 20, 'U' => 21, 'V' => 22, 'W' => 23, 'X' => 24, 'Y' => 25, 'Z' => 26]);

        $random = rand(0, 25);
        $a = range('A', 'Z');

        return view('kids-pikori.alphabet.alphabet', compact('oneLines','twoLines','random','a','color','color1'));

        }
        public function show_alphabet_random(){
        $color_random = rand(1, 5);
        if ($color_random == 1) {
            $color = 'primary';
        }
        if ($color_random == 2) {
            $color = 'info';
        }
        if ($color_random == 3) {
            $color = 'danger';
        }
        if ($color_random == 4) {
            $color = 'warning';
        }
        if ($color_random == 5) {
            $color = 'success';
        }
        $color_random1 = rand(1, 5);
        if ($color_random1 == 1) {
            $color1 = 'primary';
        }
        if ($color_random1 == 2) {
            $color1 = 'info';
        }
        if ($color_random1 == 3) {
            $color1 = 'danger';
        }
        if ($color_random1 == 4) {
            $color1 = 'warning';
        }
        if ($color_random1 == 5) {
            $color1 = 'success';
        }
        $random = rand(1, 10);
        $oneLines = range(1, 10);
        $twoLines = range(11, 20);
        $threeLines = range(21, 30);
        $fourLines = range(31, 40);
        $fiveLines = range(41, 50);

        return view('kids-pikori.alphabet.alphabet-random', compact('oneLines','twoLines','threeLines','fourLines','random','color','color1'));

        }
    }

