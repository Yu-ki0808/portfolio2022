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
    <!-- Bootstrap5 css&js -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('/css/app1024.css')}}">
    <link rel="stylesheet" href="{{asset('/css/app599.css')}}">

</head>
<!-- LoginModal -->
<form action="{{route('login')}}" method="POST">
    @csrf
<div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="LoginModal" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="LoginModal">ログイン</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
          <label for="" class="login">ログイン</label>
          <input type="text" class="mb-3" name="email"><br>
          <label for="" class="login">パスワード</label>
        <input type="password" name="password">
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-primary" value="ログイン">
    </div>
</div>
    </div>
</div>
</form>

<form action="{{route('register')}}" method="post" target="register">
    @csrf
<div class="modal fade" id="Signup_ModalToggle" aria-hidden="true" aria-labelledby="Signup_ModalToggleLabel" tabindex="-1">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Signup_ModalToggleLabel">無料会員登録</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <label for="" class="login">メールアドレス</label>
            <input type="email" name="email" placeholder="メールアドレス" maxlength="50" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  required>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">閉じる</button>
        <button class="btn btn-primary" data-bs-target="#Signup_ModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">送信</button>
    </div>
</div>
</div>
</div>
</form>
<iframe name="register" scrolling="no" frameborder="no"></iframe>


<div class="modal fade" id="Signup_ModalToggle2" aria-hidden="true" aria-labelledby="Signup_ModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Signup_ModalToggleLabel2">仮登録の完了</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        送信されたメールに記載されている<Br>URLから登録をお願いします。
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
