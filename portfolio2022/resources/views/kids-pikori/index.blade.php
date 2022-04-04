@extends('layouts.kids-pikori.contents-header')
@section('kids-contents')

    <div class="top-contents">
        <h2 class="text-center pt-3 fs-1">５歳から<span class="family">親子</span>で<div class="sb-br"></div> 始めるWEB学習</h2>
        <img src="{{asset('img/kids-pikori/online.png')}}"  alt="" >
        <h3 class="text-center pb-3 mt-3 pc-h3">ひらがな、カタカナ、数字などを<br>PCやタブレット１台あれば、<span class="fs-1">今すぐ</span>学習できます。</h3>
        <h3 class="text-center pb-3 mt-3 sp-h3">ひらがな、カタカナ、数字などを<br>PCやタブレット１台あれば、<Br><span class="fs-1">今すぐ</span>学習できます。</h3>
            <a href="{{route('kids-pikori.show')}}" class="btn btn-outline-dark text-center btn-lg my-3">学習を始める</a>
    </div>
        <div class="kids-description ">
                <div class="home-contents my-3 kids-contents" >
                    <div class="study-kids py-5" >
                        <h2 class="align-self-center">学習の特徴</h2>
                    </div>
                <div class="d-flex justify-content-center kids-contents">
                <div class="d-flex flex-column kids-content">
                    <img src="{{asset('img/kids-pikori/discription.png')}}" alt="">
                    <p>順番や<br>方向を理解する。</p>
                </div>
                <div class="d-flex flex-column kids-content">
                    <img src="{{asset('img/kids-pikori/family.png')}}" alt="">
                    <p>家族で、<br>カンタンに学べる。</p>
                </div>
                <div class="d-flex flex-column kids-content">
                    <img src="{{asset('img/kids-pikori/hirameki.png')}}" alt="">
                <p>クリックすると<br>正解が分かる！</p>
                </div>
                </div>
                <div>
                <a href="{{route('kids-pikori.show')}}" class="btn btn-outline-dark text-center btn-lg my-3">学習を始める</a>
            </div>
        </div>
    </div>
<div>
@endsection
