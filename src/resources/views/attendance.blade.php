@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/attendance.css')}}">
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