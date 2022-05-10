@extends('adminlte::page')
@extends('layouts.muscle-quest.login-muscle-quest')
@section('title', 'HOME')
@section('content_header')
<div class="contaner text-center home">

    <div class="home-menu">
        <a href="{{route('muscle-quest/profile')}}">
        <div class=" home-contents">
            <div class="content-text">
                <h3>プロフィール編集</h3>
            </div>
            <div>
                <img src="{{asset('img/muscle-quest/search.png')}}" alt="" width="300">
            </div>
        </div>
        </a>
    </div>

    <div class="home-menu">
        <div class=" home-contents  flex-row-reverse">
            <div class="content-text">
                <a href="{{url('muscle-quest/calorie')}}">
                <h3>消費カロリー・PFC<br>摂取目安計算</h3>
            </div>
            <div>
                <img src="{{asset('img/muscle-quest/color-begi.png')}}" alt="" width="300">
            </div>
        </div>
    </a>
    </div>

    <div class="home-menu">
        <a href="{{url('muscle-quest/todo?' .date('Y-m-d'))}}">
        <div class=" home-contents">
            <div class="content-text">
                <h3>運動メニュー登録・確認</h3>
            </div>
            <div>
                <img src="{{asset('img/muscle-quest/diary.png')}}" alt="" width="300">
            </div>
        </div>
        </a>
    </div>









</div>
    @stop

@section('content')









@stop

