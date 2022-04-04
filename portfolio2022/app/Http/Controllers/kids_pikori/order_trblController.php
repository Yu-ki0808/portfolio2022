<?php

namespace App\Http\Controllers\kids_pikori;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class order_trblController extends Controller
    {
        public function show_order(){
        $Lines = ([1 => '../img/kids-pikori/order/walking1.png', 2 => '../img/kids-pikori/order/walking2.png', 3  => '../img/kids-pikori/order/walking3.png', 4 => '../img/kids-pikori/order/walking4.png', 5 => '../img/kids-pikori/order/walking5.png']);

        $front_back = rand(1, 2);
        $random = rand(1, 5);

        $answer = $front_back  + $random;
        if ($front_back == 1) {
            $number = $answer - 1;
        } elseif ($front_back == 2) {

            if ($answer == 7) {
                $number = 1;
            }
            if ($answer == 6) {
                $number = 2;
            }
            if ($answer == 5) {
                $number = 3;
            }
            if ($answer == 4) {
                $number = 4;
            }
            if ($answer == 3) {
                $number = 5;
            }
        }
            return view('kids-pikori.order-trbl.order',compact('number','Lines','front_back','random'));
        }

        public function show_order_random(){
        $Lines = ([1 => '../img/kids-pikori/order/walking1.png', 2 => '../img/kids-pikori/order/walking2.png', 3  => '../img/kids-pikori/order/walking3.png', 4 => '../img/kids-pikori/order/walking4.png', 5 => '../img/kids-pikori/order/walking5.png']);

        $front_back = rand(1, 2);
        $random_human = rand(1, 5);

        if ($random_human == 1) {
            $front_back = 2;
            $random = rand(1, 4);
            $answer = $random_human + $random;
        } elseif ($random_human == 2) {
            if ($front_back == 1) {
                $random = 1;
                $answer = $random_human - 1;
            } else {
                $random = rand(1, 3);
                $answer = $random_human + $random;
            }
        } elseif ($random_human == 3) {
            if ($front_back == 1) {
                $random = rand(1, 2);
                $answer = $random_human - $random;
            } else {
                $random = rand(1, 2);
                $answer = $random_human + $random;
            }
        } elseif ($random_human == 4) {
            if ($front_back == 1) {
                $random = rand(1, 3);
                $answer = $random_human - $random;
            } else {
                $random = 1;
                $answer = $random_human + $random;
            }
        } elseif ($random_human == 5) {
            $front_back = 1;
            $random = rand(1, 4);
            $answer = $random_human - $random;
        }
        return view('kids-pikori.order-trbl.order-random', compact('answer', 'Lines', 'front_back', 'random_human','random'));

        }


        public function show_trbl(){
        $oneLines = ([0 => '', 1 => '../img/kids-pikori/direction/car.png', 0 => '',]);
        $twoLines = ([4 => '../img/kids-pikori/direction/ten.png', 0 => '../img/kids-pikori/direction/tree.png', 2 => '../img/kids-pikori/direction/koinobori.png',]);
        $threeLines = ([0 => '', 3 => '../img/kids-pikori/direction/cow.png', 0 => '',]);

        $random = rand(1, 4);

        if ($random == 1) {
            $direction = '上（うえ）';
        } elseif ($random == 2) {
            $direction = '右（みぎ）';
        } elseif ($random == 3) {
            $direction = '下（した）';
        } elseif ($random == 4) {
            $direction = '左（ひだり）';
        }
            return view('kids-pikori.order-trbl.left-right-top-down',compact('oneLines','twoLines','threeLines','random','direction'));
        }
    }

