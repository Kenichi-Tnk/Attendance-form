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
<table class="attendance__table">
    <tr class="attendance__row">
        <th class="attendance__label">名前</th>
        <th class="attendance__label">勤務開始</th>
        <th class="attendance__label">勤務終了</th>
        <th class="attendance__label">休憩時間</th>
        <th class="attendance__label">勤務時間</th>
    </tr>
</table>
@endsection