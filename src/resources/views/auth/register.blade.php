@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth/register.css')}}">
@endsection

@section('content')
<div class="register-form">
    <h2 class="register-form__heading content__heading">会員登録</h2>
    <div class="register-form__inner">
        <form class="register-form__form" action="/register" method="post">
        @csrf
            <div class="register-form__group">
                <input class="register-form__input" type="text" name="name" id="name" placeholder="名前">
            </div>
            <div class="register-form__group">
                <input class="register-form__input" type="mail" name="email" id="email" placeholder="メールアドレス">
            </div>
            <div class="register-form__group">
                <input class="register-form__input" type="password" name="password" id="password" placeholder="パスワード">
            </div>
            <div class="register-form__group">
                <input class="register-form__input" type="password" name="password_confirmation" placeholder="確認用パスワード">
            </div>
            <dv class="register-form__group">
                <input class="register-form__btn btn" type="submit" value="会員登録">
            </div>
            <div class="register-link__group">
                <p class="register-link__group">アカウントをお持ちの方はこちらから</p>
                <a class="register-link__link" href="/login" style="text-decoration:none;">ログイン</a>
            </div>
        </form>
    </div>
</div>
@endsection('content')