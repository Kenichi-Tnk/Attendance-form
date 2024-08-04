@extends('layout.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/attendance.css')}}">
@endsection

@section('link')
<a class="header__link" href="/stamp">ホーム</a>
<a class="header__link" href="/attendance">日付一覧</a>
<a class="header__link" href="/login">ログアウト</a>
@endsection

@section('content')
@endsection