@extends('adminlte::page')
@section('title', 'カロリー計算')
@section('content_header')
@extends('layouts.muscle-quest.login-muscle-quest')
@section('content')

    <div class="contaner text-center calorie">
        <h2 class="pt-4">総消費カロリー&目的別摂取カロリー計算</h2>
        <img src="{{asset('img/muscle-quest/calcation.png')}}" alt="">
        <br>
        <div class="bg-white calorie-dis pt-3 ">
            <p><b>総消費カロリー</b>は、基礎代謝から1日の活動レベルを加えることで1日に消費するカロリーの概算を把握することできます。</p>
            <p>下記の選択肢で目的を入力して「計算」を押すと総消費カロリーと目的にあった参考摂取カロリーが表示されます。</p>
        </div>
        <form action="{{route('muscle-quest/calculation')}}" method="POST">
            @csrf
             @if ($errors->any())
                <div class="alert alert-danger mt-3">
                    <ul>
                       @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                        @endforeach
                     </ul>
                 </div>
                 @endif
        <select name="level" id="" class="mt-3 py-1">
            <option value="" hidden>活動レベル選択してください</option>
            <option value="1.2">全く運動しない</option>
            <option value="1.375">週１～２回程度の運動</option>
            <option value="1.55">週2～3回程度の運動</option>
            <option value="1.75">週3～4回程度の運動</option>
            <option value="1.9">ほぼ毎日激しいの運動</option>
        </select>
            <br>
        <select name="target" id="" class="mt-3 py-1">
            <option value="" hidden>目的を選択してください</option>
            <option value="muscle">筋肥大</option>
            <option value="diet">減量</option>
        </select>
            <br>
        <input type="submit"  class="btn btn-primary mt-3" value="送信">
            @if(isset($basic))
             <div class="introduction  mt-4 " id="result">
                <div class="d-inline-flex  align-items-center justify-content-center">
                    <div class="parameter calorie-result bg-white">
                        <h3>計算結果</h3>
                        <p>登録された年齢・身長・体重から<br>ハリス・ベネディクト方式改良版にて計算。</p>
                        <p>基礎代謝：<span>{{$basic}}Kcal</span></p>
                        <p>総消費カロリー：<span> {{$total}} kcal</span></p>
                    </div>
                    </div>
                    <div>
                        @if($line == 'muscle-line')
                        <h3 class="mt-3 {{$line}}">PFC割合<Br>総消費カロリーの<span class="fs-1 fw-bold text-blue">+200Kcal</span>を目指す</h3>
                            @else
                            <h3 class="mt-3 {{$line}}">PFC割合<Br>総消費カロリーの<span class="text-red fs-1 fw-bold">-200Kcal</span>を目指す</h3>
                            @endif
                            </div>

                                <div class="introduction-contents">
        <div class="introduction mt-2 ">
                <h3 class=>Kcal（カロリー）表記</h3>
                <div class="border pfc-menu  align-items-center">
                    <div class=" bg-protein py-2">
                        <h4>Protein<br>タンパク質</h4>
                    </div>
                    <div class="kcal re-kal">
                      <p><span>{{$muscle_calories[0][0]}}kcal<br>（{{$pars[0]}}）</span></p>
                    </div>
                    </div>
                <div class="border pfc-menu  align-items-center ">
                    <div class="bg-fat py-2">
                        <h4>Fat<br>脂質</h4>
                    </div>
                    <div class="kcal re-kal">
                        <p><span>{{$muscle_calories[1][0]}}kcal<Br>（{{$pars[1]}}）</span></p>
                    </div>
                </div>
                    <div class="border pfc-menu  align-items-center">
                        <div class=" bg-carbohydrate py-2">
                            <h4>Carbohydrate<br>炭水化物</h4>
                        </div>
                        <div class="kcal re-kal">
                            <p><span>{{$muscle_calories[2][0]}}kcal<br>（{{$pars[2]}}）</span></p>
                        </div>
                    </div>
                    <div class=" total-border pfc-menu  align-items-center">
                        <div class=" bg-total py-2">
                            <h4>総摂取<Br>カロリー</h4>
                        </div>
                        <div class="kcal re-kal">
                            <p><span>{{$total_sum}}kcal<br>(100%)</span></p>
                        </div>
                    </div>
                </div>

        <div class="introduction mt-2 ">
                <h3 class=>g(グラム)表記</h3>
                <div class="border pfc-menu  align-items-center">
                    <div class=" bg-protein py-2">
                        <h4>Protein<br>タンパク質</h4>
                    </div>
                    <div class="kcal re-kal">
                      <p><span>{{$muscle_calories[0][1]}}g<br>（20％）</span></p>
                    </div>
                    </div>
                <div class="border pfc-menu  align-items-center ">
                    <div class="bg-fat py-2">
                        <h4>Fat<br>脂質</h4>
                    </div>
                    <div class="kcal re-kal">
                        <p><span>{{$muscle_calories[1][1]}}g<Br>（25％）</span></p>
                    </div>
                </div>
                    <div class="border pfc-menu  align-items-center">
                        <div class=" bg-carbohydrate py-2">
                            <h4>Carbohydrate<br>炭水化物</h4>
                        </div>
                        <div class="kcal re-kal">
                            <p><span>{{$muscle_calories[2][1]}}g<br>（55％）</span></p>
                        </div>
                    </div>
                    <div class="total-border pfc-menu  align-items-center">
                        <div class=" bg-total py-2">
                            <h4>総摂取<br>グラム</h4>
                        </div>
                        <div class="kcal re-kal">
                            <p><span>{{$total_g}}g <Br>(100%)</span></p>
                        </div>
                    </div>
                </div>
            </div>
                @endif
<script>document.getElementById("result").scrollIntoView(true)</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@stop

