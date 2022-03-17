@extends('layouts.muscle-quest')
<div class="header-menu register-header">
        <img src="{{asset('img/muscle-quest/ran.png')}}" alt="" width="100">
        <img src="{{asset('img/muscle-quest/motion.png')}}" alt="" width="100">
        <h1 class="text-center"><a herf="{{route('muscle-quest/index')}}">Muscle-quest</a></h1>
        <img src="{{asset('img/muscle-quest/yoga.png')}}" alt=""width="100">
        <img src="{{asset('img/muscle-quest/swiming.png')}}" alt="" width="100">
</div>

          <div class="register-menu">
                         <!-- Validation Errors -->
                @if ($errors->any())
                 <div class="card-text text-left alert alert-danger">
                    <ul class="mb-0">
                @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                @endforeach
                    </ul>
                  </div>
                 @endif

              <h2>メールアドレスの認証が完了しました。</h2>
              <img src="{{asset('img/muscle-quest/mail.png')}}" alt="">
                <p class="mb-3 mt-3">下記内容に入力をお願いします。 </p>
                <div class="border d-inline-block pt-3 pb-3 sign-form">
                <div class="mb-3">
                    <form action="" method="POST">
                        @csrf
                    <label for="exampleInputEmail1" class="form-label">ニックネーム</label><br>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">性別</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="1" required >
                        <label class="form-check-label" for="inlineRadio1">男性</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="2">
                        <label class="form-check-label" for="inlineRadio2">女性</label>
                        <br>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">誕生日（西暦8桁）</label><br>
                    <input type="text" class="form-control" name="birthday" required >
                </div>

                <div class="mb-3">
                    <label for="height" class="form-label">身長</label><br>
                    <input type="number" class="form-control"  name="height" required >
                </div>
                <div class="mb-3">
                    <label for="weight" class="form-label" >体重</label><br>
                    <input type="number" class="form-control" name="weight" step="0.1" required >
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label">パスワード</label><br>
                    <input id="password" type="password" class="form-control"  name="password" required autocomplete="new-password">
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label" >再度パスワード</label><br>
                    <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required />
                </div>

            <div class="flex items-center justify-end mt-4">
                <a class=" underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('muscle-quest/index') }}">
                         TOP画面に戻る
                    </a>
                    <Br>
                        <button  class="btn btn-primary mt-3">会員登録</button>

                    </div>
                    </form>
                    </div>



