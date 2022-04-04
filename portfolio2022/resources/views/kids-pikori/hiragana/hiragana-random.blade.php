@extends('layouts.kids-pikori.contents-header')
@section('kids-contents')
<head>
    <title>ひらがなランダム学習</title>
</head>
<div class ="container d-flex flex-column ">
    <div class="hiragana-title text-center">
<h2 class="fs-3 fw-bold">ひらがなプログラム</h2>
                                  <h3>ランダムひらがな</h3>
</div>
        <div class="d-flex justify-content-center mt-3">
            <div id="saikoro" class="">
            </div>
            <div id="saikoro2" class="">
        </div>
        </div>
        <div class="d-flex justify-content-center">
            <div id="saikoro3" ></div>
        <div class="  hover-zoom" id="saikoro4">
            <input type="button" id="btn" class="fs-3 btn hiragana-text mt-3 py-3 px-3" value="スタート" onclick="saikoro()">
        </div>
        </div>
            <form action="{{route('kids-pikori.show')}}" method="GET">
                <button class="btn btn-outline-danger fs-5 my-3">選択画面に戻る</button>
            </form>
        </div>
    </div>




        <script>
    "use strict";
    const hira = [...'あいうえおかきくけこさしすせそたちつてとなにぬねのはひふへほまみむめもやゆよらりるれろわをん'];
    let count;
    let $id = function(id){ return document.getElementById(id); };
    $id("saikoro").innerHTML = "<tbody><img src='" +"../img/kids-pikori/"  + "robo" + ".png" + "' width='250' ></tbody>";

    function shake(){
        let dice = Math.floor(Math.random() * 45)  ;        // ランダム設定

        $id("saikoro2").innerHTML = "<button class= 'btn hiragana-text random-btn'>" + hira[dice] + "</button>"
        $id("saikoro3").innerHTML = "<button class='btn btn-outline-success py-3 px-3 fs-3 me-5 mt-3' onclick= " +"hiragana()    > 音声  </button>";
        $id("saikoro4").innerHTML = "<button id='btn' class='btn hiragana-outline-text py-3 px-3 fs-3  mt-3' onclick= " +"saikoro()    > 次へ  </button>";
        $id("Sound").innerHTML="<audio id='number' preload='auto'> <source src='../sound/hiragana/" + dice + ".mp3' type='audio/mp3'> ";

        }

        let dice = Math.floor(Math.random() * 45)  ;        // ランダム設定
        function hiragana() {
            document.getElementById("number").play();
        }


        function anime(){
            if(count > 30){  // 20回ほど振る
                count = 0;
                $id("btn").disabled = "";   // ボタンを使える状態にする
                return 0;
            }
            shake();
            count++;
            setTimeout(anime, 25);  // 10ミリ秒間隔で表示切り替え
        }

        function saikoro(){
            $id("saikoro").innerHTML = "<img src='../img/kids-pikori/man-study.png' width='250px' class='me-3'>";
            count = 0;
            $id("btn").disabled = "true";   // ボタンを使用不可にする
            anime();                        // サイコロアニメ開始
        }
    </script>

@endsection
