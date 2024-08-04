@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/auth/login.css')}}">
@endsection

@section('content')
<div class="login-form">
    <h2 class="login-form__heading content__heading">ログイン</h2>
    <div class="login-form__inner">
        <form class="login-form__form" action="/login" method="post">
        @csrf
            <div class="login-form__group">
                <input class="login-form__input" type="mail" name="email" id="email" placeholder="メールアドレス">
            </div>
            <div class="login-form__group">
                <input class="login-form__input" type="password" name="password" id="password" placeholder="パスワード">
            </div>
            <input class="login-form__btn btn" type="submit" value="ログイン">
            <div class="login-link__group">
                <p class="login-link__group">アカウントをお持ちでない方はこちらから</p>
                <a class="login-link__group" href="/register" style="text-decoration:none;">会員登録</a>
            </div>
        </form>
    </div>
</div>
@endsection('content')