@section('title', 'mendan-カンタン面談予約サービス-')
@extends('layouts.mendan.mendan-layouts')
@section('content')

<main>
    <div class="container text-center">
    <section class="text-center my-5">
        <h1><span class="text-primary">mendan</span><br> -カンタン面談予約サービス-</h1>
            </section>
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
                        <div class="tabs">
                            <input id="all" type="radio" name="tab_item" checked>
                            <label class="tab_item" for="all">ログイン</label>
                            <input id="programming" type="radio" name="tab_item">
                            <label class="tab_item tab2" for="programming">会員登録</label>
                            <div class="tab_content" id="all_content">
                            <div class="tab_content_description">
                                <label for="">メールアドレス</label>
                                <input type="email" name="email" class="mb-3">
                                <label for="">パスワード</label>
                                <input type="password" name="password" class="mb-3">
                                <button type="submit" class="btn btn-primary py-1 fs-4 mt-3">ログイン</button>
                                </div>
                            </div>
                            <div class="tab_content" id="programming_content">
                                <form action="{{route('mendan-register')}}" method="POST">
                                    @csrf
                                <div class="tab_content_description">
                                <label for="">ニックネーム</label>
                                <input type="name" name="name" class="mb-3">
                                <label for="">メールアドレス</label>
                                <input type="email" name="email" class="mb-3">
                                <label for="">パスワード</label>
                                <input type="password" name="password" class="mb-3" autocomplete="new-password">
                                <label for="password_confirmation" class="" >再度パスワード</label>
                                <input id="password_confirmation" type="password" class="mb-5" name="password_confirmation" >
                                <button type="submit" class="btn btn-success py-1 fs-4 mt-3">会員登録</button>
                                </div>
                            </form>
                            </div>
                        </div>



    </main>
@endsection
