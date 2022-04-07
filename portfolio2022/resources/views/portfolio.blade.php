@include('layouts.portfolio')
<body>
<div class="all-body">
    <div class="container text-center">
        <section class="main-title">
            <h1>Portfolio</h1>
            <h2>by Yu-ki</h2>
            </section>
            <div class="portfolio-profile-area">
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
                <h3 class="h3-tittle fw-bold">学習言語</h3>
                <div class="language">
                    <p><span class="html">HTML</span>/<span class="css">CSS</span>/<span class="php">PHP</span>/<span class="laravel">Laravel</span>/<span class="javascript">JavaScript</span>/</p>
                    <p><span class="git">Git</span>/<span class="my">My</span><span class="sql">SQL</span></p>
                </div>
                <div class="language-sp">
                    <p><span class="html">HTML</span>/<span class="css">CSS</span>/<span class="php">PHP</span>/<span class="laravel">Laravel</span>/<br>
                    <span class="javascript">JavaScript</span>/<span class="git">Git</span>/<span class="my">My</span><span class="sql">SQL</span></p>
                </div>
                <div class="fs-5 mt-3 About-description profile-description">
                    <p>新聞配達をしながら専門学校で</p><div class="br"></div><p><b>FP技能士２級</b>と<b>日商簿記２級</b>を取得。</p>
                    <p>1児のパパで、プログラミングを活用した</p><div class="br"></div><p>学習サイトを少しずつ作成。</p>
                    <p>趣味は、筋トレ、サッカー、ゲーム、</p><div class="br"></div><p>クロスバイクで琵琶湖、淡路島一周を実施。</p>
            </div>
        </div>

            <h2 class="h2-title-work">Work</h2>

            <div class="work work-white">
                <img src="{{asset('img/portfolio/muscle-quest.png')}}" alt="" class="bg-info">
                <div class="work-items align-items-center">
                    <div class="flex-column">
                        <h3 class="fs-1">muscle-Quest</h3>
                        <h4 class="fw-bold">筋トレ記録サイト。<br>経験値が貯まりレベルアップする仕組みを導入。<br>Laravel/MySQL/JavaScriptを利用しています。</h4>
                            <div class="button-area">
                                <a href="{{route('muscle-quest/index')}}" class="link text-black">
                                    <button class="btn dark">Site</button>
                                </a>
                                <button class="btn btn-outline-dark">Github</button>
                            </div>
                    </div>
                </div>
            </div>

            <div class="work work-black ">
                <div class="work-items align-items-center ">
                    <div class="flex-column text-white">
                        <h3 class="fs-1">KIDS PIKORI</h3>
                        <h4 class="fw-bold">Web端末一台でカンタンにできる<Br>子供学習サイト</h4>
                           <div class="button-area">
                                <a href="{{route('kids-pikori')}}" class="link text-black">
                                    <button class="btn btn-outline-light me-5">Site</button>
                                </a>
                                <button class="btn light ">Github</button>
                            </div>
                        </div>
                <img src="{{asset('img/portfolio/oo.png')}}" alt="" class="bg-info">
            </div>
        </div>

                 <h2 class="h2-title-work">Contact</h2>
                <div class="fs-4 contact-contents">
                    <p>ーお気軽にお問い合わせ下さいー</p>
                    <img src="{{asset('img/portfolio/mail.png')}}" alt="連絡手段の説明-詐欺以外気軽にご連絡ください-" >
                    <div>
                        <div class="mt-1 About-inquiry">
                            <a href="https://twitter.com/yu_ki_info2016" class="inquiry"><img src="{{asset('img/portfolio/tw.png')}}" alt="" class="inquiry-img"></a>
                            <a href="mailto:y.tamura2146@gmail.com"><img src="{{asset('img/portfolio/mail-img.png')}}" alt="" class="inquiry-img"></a>
                            <a href="https://docs.google.com/forms/d/1sk4ZLEjQ0bKXwaYxHkYvgZEoTr3qvQHJ6NjMFuGquC4/viewform?edit_requested=true"><img src="{{asset('img/portfolio/form.png')}}" alt="" class="inquiry-img"></a>
                        </div>
                    </div>
                </div>
    </div>
</div>

</body>
</html>
