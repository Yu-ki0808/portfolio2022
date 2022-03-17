@extends('layouts.muscle-quest')
<div class="header-menu">
    <h1 class="text-start">Muscle-quest</h1>
    <div class="header-list">
            <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary fw-bold" data-bs-toggle="modal" data-bs-target="#LoginModal">
            ログイン
        </button>
        <a class="btn btn-info text-white fw-bold" data-bs-toggle="modal" href="#Signup_ModalToggle" role="button">無料会員登録</a>
    </div>
</div>


<div class="container">
    <div class="pc-main-image">
        <img src="{{asset('img/muscle-quest/ran.png')}}" alt="">
        <img src="{{asset('img/muscle-quest/motion.png')}}" alt="">
        <img src="{{asset('img/muscle-quest/yoga.png')}}" alt="">
        <img src="{{asset('img/muscle-quest/swiming.png')}}" alt="">
    </div>
    <div class="sp-main-image">
         <div class="row">
            <div class="col">
                <img src="{{asset('img/muscle-quest/ran.png')}}" alt="">
            </div>
            <div class="col">
                <img src="{{asset('img/muscle-quest/motion.png')}}" alt="">
            </div>
         </div>
            <div class="row">
                <div class="col">
                    <img src="{{asset('img/muscle-quest/yoga.png')}}" alt="">
                </div>
                <div class="col">
                    <img src="{{asset('img/muscle-quest/swiming.png')}}" alt="">
                </div>
            </div>
    </div>

            <h2 class="text-center fw-bold mt-2">運動や筋トレの行動を<br>「経験値化」して継続しよう。</h2>
            <div class="text-center">
                <a class="btn btn-info text-white fw-bold" data-bs-toggle="modal" href="#Signup_ModalToggle" role="button">無料会員登録</a>
            </div>
        </div>

        <h2 class="contents-h2">Contents</h2>
            <div class="contents mt-2 ">
                <div>
                    <img src="{{asset('img/muscle-quest/book.png')}}" alt="" width="250px">
                    <p>運動メニューの作成と記録し、<br>筋肉日記を残す</p>
                </div>
                <div>
                    <img src="{{asset('img/muscle-quest/stutas.png')}}" alt="" width="250px">
                    <p>自分の運動パラメータである<br>基礎代謝や総消費カロリーの把握</p>
                </div>
                <div>
                    <img src="{{asset('img/muscle-quest/color-begi.png')}}" alt="" width="250px">
                    <p>目標摂取カロリーを<br>PFCで表示</p>
                </div>
                <div>
                    <img src="{{asset('img/muscle-quest/level-uper.png')}}" alt="" width="250px">
                    <p>作成したメニューを達成していくと<br>レベルアップ</p>
                </div>
            </div>

            <div class="sp-contents-image">
                <div class="row">
                    <div class="col">
                        <img src="{{asset('img/muscle-quest/book.png')}}" alt="" width="250px">
                        <p>運動メニューの作成と記録し、<br>筋肉日記を残す</p>
                    </div>
                    <div class="col">
                        <img src="{{asset('img/muscle-quest/stutas.png')}}" alt="" width="250px">
                        <p>自分の運動パラメータである<br>基礎代謝や総消費カロリーの把握</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <img src="{{asset('img/muscle-quest/color-begi.png')}}" alt="" width="250px">
                        <p>目標摂取カロリーを<br>PFCで表示</p>
                    </div>
                    <div class="col">
                        <img src="{{asset('img/muscle-quest/level-uper.png')}}" alt="" width="250px">
                        <p>作成したメニューを達成していくと<br>レベルアップ</p>
                    </div>
                </div>
            </div>

            <h2 class="introduction-h2">Introduction</h2>
        <div class="introduction-contents">
        <div class="introduction mt-2 ">
                <h3 class=>運動メニュー</h3>

                <div class="menu-task">
                    <div class="menu py-2">
                        <h4>Arm</h4>
                        <p>アームカール 15kg<BR>
                        ３セット✖10</p>
                    </div>
                    <div class="menu-check">
                        <input type="checkbox">
                    </div>
                    </div>
                    <div class="menu-task mt-3">
                        <div class="menu2 py-2">
                            <h4>Chest</h4>
                            <p>ベンチプレス 70kg<Br>
                            ３セット✖7</p>
                        </div>
                        <div class="px-3">
                            <input type="checkbox">
                        </div>
                        </div>

                </div>

            <div class="introduction mt-2 ">
                <h3 class="mb-5">自分の運動パラメータを把握</h3>
                <div class="border d-inline-flex  align-items-center justify-content-center">
                    <div class="parameter">
                        <p>年齢・身長・体重から<br>ハリス・ベネディクト方式改良版にて計算。</p>
                        <p>基礎代謝：<span>1,710Kcal</span></p>
                        <p>総消費カロリー：<span>2,908kcal</span></p>
                        <p>摂取カロリー中央値：<span>2,309kcal</span></p>

                    </div>
                    </div>
                </div>
            </div>

    <div class="introduction-contents">
        <div class="introduction mt-2 ">
                <h3 class=>摂取カロリー中央値のPFCを表示</h3>

                <div class="border pfc-menu  align-items-center">
                    <div class=" bg-protein py-2">
                        <h4>Protein<br>タンパク質</h4>
                    </div>
                    <div class="kcal">
                      <p><span>461.8kcal<br>（20％）</span></p>
                    </div>
                    </div>
                <div class="border pfc-menu  align-items-center ">
                    <div class="bg-fat py-2">
                        <h4>Fat<br>脂質</h4>
                    </div>
                    <div class="kcal">
                      <p><span>577.25kcal<Br>（25％）</span></p>
                    </div>
                    </div>
                    <div class="border pfc-menu  align-items-center">
                        <div class=" bg-carbohydrate py-2">
                            <h4>Carbohydrate<br>炭水化物</h4>
                        </div>
                        <div class="kcal">
                            <p><span>1,269.95kcal<br>（55％）</span></p>
                        </div>
                        </div>

                </div>
                        <div class="introduction mt-2 ">
                <h3 class=>経験値を貯めてレベルアップ！</h3>
                <div class="d-inline-flex  align-items-center justify-content-center">
                    <div class="p-3">
                        <meter	min="0"	max="100"	value="100"></meter>
                         <img src="{{asset('img/muscle-quest/level.png')}}" alt="" width="250px">

                    </div>
                    </div>
                </div>
            </div>

        <div class="start-contents">
            <h3>さっそく始めよう</h3>
             <p>運動を継続すること<Br>でいつまでも若く元気な人生を楽しもう。</p>
            <a class="btn btn-info text-white fw-bold" data-bs-toggle="modal" href="#Signup_ModalToggle" role="button">無料会員登録</a>
        </div>

        <footer>
            <p>© 2022 Muscle-Quest</p>

        </footer>

        <script>
    $('.send').on('click', evt => {
    form.submit();
    form[0].reset();

    //任意の実行したい処理
    return false;
})
</script>



