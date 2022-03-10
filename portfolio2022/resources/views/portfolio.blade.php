@extends('layouts.portfolio')
<div class="container text-center">
    <section class="main-title">
        <h1>Portfolio</h1>
        <h2>by Yu-ki</h2>
        </section>
        <div class="profile-area">
        <img src="{{asset('img/portfolio/my-icon.png')}}" alt="">
        </div>
        <div class="profile  p-3 flex-column text-start mb-5">
            <p><span class="fs-4 me-2"> Name:</span>Yu-ki</p>
            <p><span class="fs-4 me-2">height:</span>174cm</p>
            <p><span class="fs-4 me-2">weight:</span>73kg(target:65kg)</p>
        </div>

        <h2 class="h2-title">About</h2>
        <div class="About fs-4">
            <img src="{{asset('img/portfolio/about.png')}}" alt="Yu-kiについての自己紹介" >
            <h3 class="h3-tittle">学習言語</h3>
            <div class="language">
            <p><span class="html">HTML</span>/<span class="css">CSS</span>/<span class="php">PHP</span>/<span class="laravel">Laravel</span>/<span class="javascript">JavaScript</span>/<span class="git">Git</span>/<span class="my">My</span><span class="sql">SQL</span></p>
            </div>
            <div class="fs-5 mt-3">
            <p>新聞配達をしながら専門学校で「FP技能士２級」と「日商簿記２級」などを取得。</p>
            <p>1児のパパで、プログラミングを活用した教育システムを少しずつ作成。</p>
            <p>趣味は、筋トレやサッカーにゲームにクロスバイクで琵琶湖一周や淡路島一周を実施。</p>
        </div>
    </div>

        <h2 class="h2-title-work">Work</h2>
            <div class="work d-flex">
                <div class="d-flex align-items-center me-5">
                    <div class="flex-column">
                <h3 class="fs-1">muscle-quest</h3>
                <h4>経験値を貯めながら筋トレ実施の累計数やレベルアップで継続を目指す！</h4>
                </div>
            </div>
                <img src="{{asset('img/portfolio/oo.png')}}" alt="" class="bg-info">
        </div>
        <div class="work d-flex flex-row-reverse">
            <div class="d-flex align-items-center ms-5">
                <div class="flex-column">
                    <h3 class="fs-1">KIDS PIKORI</h3>
                    <h4>Web端末一台でカンタンにできる子供学習サイト</h4>
                </div>
            </div>
            <img src="{{asset('img/portfolio/oo.png')}}" alt="" class="bg-info">
        </div>

        <h2 class="h2-title">Contact</h2>
            <div class="About fs-4 mb-5">
                <p>ーお気軽にお問い合わせ下さいー</p>
                <img src="{{asset('img/portfolio/mail.png')}}" alt="連絡手段の説明-詐欺以外気軽にご連絡ください-" >
                <div class="mt-5 d-flex justify-content-center">
                    <a href=""><i class="fa fa-2x fa-twitter me-3" aria-hidden="true" style="color:#00acee;"></i></a>
                    <a href="mailto:y.tamura2146@gmail.com"><i class="fa fa-2x fa-envelope" aria-hidden="true" style="color:#28AFEA;"></i></a>
                </div>
            </div>
</div>


</div>
