<?php

namespace App\Http\Controllers\kids_pikori;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Libraries\Functions;

class hiraganaController extends Controller
    {
        public function show_hiragana(){
        $color = Functions::color();
        $oneLines = (['わ' => 44, 'ら' => 39, 'や' => 36, 'ま' => 31, 'は' => 26, 'な' => 21, 'た' => 16, 'さ' => 11, 'か' => 6, 'あ' => 1]);
        $twoLines = (['を' => 45, 'り' => 40, '', 'み' => 32, 'ひ' => 27, 'に' => 22, 'ち' => 17, 'し' => 12, 'き' => 7, 'い' => 2]);
        $threeLines = (['ん' => 46, 'る' => 41, 'ゆ' => 37, 'む' => 33, 'ふ' => 28, 'ぬ' => 23, 'つ' => 18, 'す' => 13, 'く' => 8, 'う' => 3]);
        $fourLines = (['', 'れ' => 42, '', 'め' => 34, 'へ' => 29, 'ね' => 24, 'て' => 19, 'せ' => 14, 'け' => 9, 'え' => 4]);
        $fiveLines = (['', 'ろ' => 43, 'よ' => 38, 'も' => 35, 'ほ' => 30, 'の' => 25, 'と' => 20, 'そ' => 15, 'こ' => 10, 'お' => 5]);

        $random = rand(1, 46);

        $arr = preg_split("//u", "あいうえおかきくけこさしすせそたちつてとなにぬねのはひふへほまみむめもやゆよらりるれろわをん");

            return view('kids-pikori.hiragana.hiragana',compact('oneLines', 'twoLines', 'threeLines', 'fourLines' ,'fiveLines', 'random', 'arr', 'color'));
        }

        public function show_hiragana_random(){
            return view('kids-pikori.hiragana.hiragana-random');
        }
        public function show_hiragana_random_image(){
            return view('kids-pikori.hiragana.hiragana-random-image');
        }
    }

