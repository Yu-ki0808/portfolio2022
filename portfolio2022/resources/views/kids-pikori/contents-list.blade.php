@extends('layouts.kids-pikori.contents-header')
@section('kids-contents')
<div class="contents-list-primary text-center mt-5">
                <div>
                    <div>
                            <h2 class="fs-1 mt-3">順番と方向<br>プログラム<h2>
                                <a href="{{route('kids-pikori.trbl')}}" class="btn btn-outline-primary mt-3">上下左右</a>
                                <a href="{{route('kids-pikori.order')}}" class="btn btn-outline-primary  mt-3">前から後から何番目</a>
                        <a href="{{route('kids-pikori.order-random')}}" class="btn btn-outline-primary mt-3">前から後から何番目（ランダム）</a>
                     </div>
                     <img src="{{asset('img/kids-pikori/pc-boy.png')}}" width="190px" height="182px" class="mt-3">
                    </div>
            </div>

            <div class="contents-list-pink text-center mt-5">
                <div>
                    <div>
                            <h2 class="fs-1 mt-3">ひらがな<br>プログラム<h2>
                        <a href="{{route('kids-pikori.hiragana')}}" class="btn btn-outline-pink mt-3">ひらがな探す</a>
                        <a href="{{route('kids-pikori.hiragana_random_image')}}" class="btn btn-outline-pink mt-3">ランダム1文字（イラストヒント）</a>
                        <a href="{{route('kids-pikori.hiragana_random')}}" class="btn btn-outline-pink mt-3">ランダム1文字</a>
                        {{-- <br>
                        <a href="../controllers/hiragana-2_controller.php" class="btn btn-outline-pink mt-2">ひらがな単語2文字</a>
                        <a href="../controllers/hiragana-3_controller.php" class="btn btn-outline-pink mt-2">ひらがな単語3文字</a> --}}

                    </div>
                     <img src="{{asset('img/kids-pikori/pc-boy1.png')}}" width="200px" height="182px" class="mt-3">
                    </div>
            </div>

            <div class="contents-list-purple text-center mt-5">
                <div>
                    <div>
                        <div>
                            <h2 class="fs-1 mt-3">カタカナ<br>プログラム<h2>
                            </div>
                            <a href="{{route('kids-pikori.katakana')}}" class="btn btn-outline-purple  mt-3 ">カタカナを探す</a>
                            <a href="{{route('kids-pikori.katakana-random-image')}}" class="btn btn-outline-purple  mt-3">ランダム1文字（イラストヒント）</a>
                            <a href="{{route('kids-pikori.katakana-random')}}" class="btn btn-outline-purple  mt-3">ランダム1文字</a>
                            {{-- <br>
                            <a href="../controllers/katakana-2_controller.php" class="btn btn-outline-purple mt-2 ">2単語カタカナ</a>
                            <a href="../controllers/katakana-3_controller.php" class="btn btn-outline-purple mt-2">3単語カタカナ</a> --}}
                        </div>
                        <img src="{{asset('img/kids-pikori/letter-boy.png')}}" width="190px" height="182px" class="mt-3">
                    </div>
            </div>

            <div class="contents-list-green text-center mt-5">
                <div>
                    <div >
                            <h2 class="fs-1 mt-3">数字<br>プログラム<h2>
                        <a href="{{route('kids-pikori.number')}}" class="btn btn-outline-green  mt-3">数字を探す（50まで）</a>
                        <a href = "{{route('kids-pikori.number_random')}}" class="btn btn-outline-green mt-3 ">ランダム数字（50まで）</a>
                        {{-- <br>
                        <a href="../controllers/number-calculation-i_controller.php" class="btn btn-outline-green mt-3 ">足し算・引き算（イラスト付き）</a>
                        <a href="../controllers/number-calculation_controller.php" class="btn btn-outline-green mt-3 ">足し算・引き算</a> --}}
                     </div>
                     <img src="{{asset('img/kids-pikori/pc-girl1.pn')}}g" width="190px" height="182px" class="mt-3">
                    </div>
            </div>

            <div class="contents-list-warning text-center mt-5">
                <div >
                    <div>
                            <h2 class="fs-1 mt-3">アルファベット<br>プログラム<h2>
                        <a href="{{route('kids-pikori.alphabet')}}" class="btn btn-outline-warning  mt-3">アルファベットを探す</a>
                        <a href="{{route('kids-pikori.alphabet-random')}}" class="btn btn-outline-warning  mt-3">ランダムアルファベット</a>
                        <br>
                        <!-- <button class="btn btn-outline-green mt-2 ">食べ英単語</button>
                        <button class="btn btn-outline-green mt-2">身近なもの英単語</button> -->
                     </div>
                     <img src="{{asset('img/kids-pikori/kaigai.png')}}" width="190px" height="182px" class="mt-3">
                    </div>
            </div>




@endsection

