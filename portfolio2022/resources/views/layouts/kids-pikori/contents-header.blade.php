<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel ="stylesheet" href="{{secure_asset('/css/style.css')}}">
    <link rel ="stylesheet" href="{{secure_asset('/css/style1024.css')}}">
    <link rel ="stylesheet" href="{{secure_asset('/css/style599.css')}}">

    <script>
function seikai() {
document.getElementById("seikai").play();
}
function bathu() {
document.getElementById("bathu").play();
}
</script>
</head>
<body>
    <div class="header-menu">
        <div class="text-center kids-container">
            <header class="">
               <a href="{{route('kids-pikori')}}"> <img src="{{asset('img/kids-pikori/kids-pikori.png')}}" alt="" class="text-left my-2 " ></a>
            </header>

        @yield('kids-contents')
        <footer class="text-center bg-block">
                <div class="header-menu my-3 ">
                    <a class="btn me-3">アイデア・ご意見箱</a> <a class="btn me-3">サイトの利用方法</a>
                    <div id="Sound"></div>
                    <div id="innerHTMLtxt"></div>
                </div>
            ©{{date('Y')}} kids-pikori.com
        </footer>

    <audio id="seikai" preload="auto">
    <source src="{{asset('sound/seikai.mp3')}}" type="audio/mp3">
    </audio>
    <audio id="bathu" preload="auto" >
    <source src="{{asset('sound/bathu.mp3')}}" type="audio/mp3">
    </audio>


<script>
var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
  return new bootstrap.Popover(popoverTriggerEl)
});
</script>

    </body>

