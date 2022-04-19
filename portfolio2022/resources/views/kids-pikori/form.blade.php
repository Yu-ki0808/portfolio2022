@extends('layouts.kids-pikori.contents-header')
@section('kids-contents')
<h1>アイデア・ご意見箱</h1>
    <div class="fs-3 ">
    {{session('message')}}
    </div>
<form action="{{route('contact')}}" method="post">
    @csrf
<div class="contact-form">
    <label for="">ニックネーム</label>
    <input type="name" name="name" required value="{{old('name')}}">
    <label for="">メールアドレス(返信希望の場合)</label>
    <input type="email" name="email" value="{{old('email')}}">
    <label for="">アイデア・ご意見箱</label>
    <textarea name="contacts" id="" cols="30" rows="10" value="{{old('contacts')}}" required></textarea>
    <input type="submit" class="btn btn-primary mt-3" value="送信">
</div>
</form>


@endsection

