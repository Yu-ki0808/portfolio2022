<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yu-ki Portfolio2022</title>

    <!-- Google-fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <!-- Bootstrap5 css&js -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="{{secure_asset('/css/app.css')}}">
    <link rel="stylesheet" href="{{secure_asset('/css/app1024.css')}}">
    <link rel="stylesheet" href="{{secure_asset('/css/app599.css')}}">
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('/css/app1024.css')}}">
    <link rel="stylesheet" href="{{asset('/css/app599.css')}}">
    <script src="{{ asset('js/modal.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
</head>
<body>
<!-- LoginModal -->
<div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="LoginModal" aria-hidden="true">
    <form action="{{route('login')}}" method="POST">
        @csrf
    <div class="modal-dialog ">
        <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="LoginModal">ログイン</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        @if(!session('error')  ==1)
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    </div>
                @endif
            @endif

          <label for="" class="login">メールアドレス</label>
          <input type="text" class="mb-3" name="email"><br>
          <label for="" class="login">パスワード</label>
        <input type="password" name="password">
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-primary" value="ログイン">
    </div>
</div>
    </div>
</form>
</div>

<!-- RegisterModal -->
<div class="modal fade" id="RegisterModal" tabindex="-1" aria-labelledby="RegisterModal" aria-hidden="true">
    <form action="{{route('register')}}" method="POST">
        @csrf
    <div class="modal-dialog ">
        <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="LoginModal">無料会員登録</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
          @if( session('error')  ==1)
                    @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            @endif

          <label for="" class="login">メールアドレス</label>
          <input type="text" class="mb-3" name="email"><br>
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-primary" value="送信">
    </div>
</div>
    </div>
</form>
</div>

<!-- Mail-Modal -->
<div class="modal fade" id="result-modal" tabindex="-1" aria-labelledby="result-modal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">仮登録完了</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        登録したメールアドレスのURLから登録をお願いします。
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@yield('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

