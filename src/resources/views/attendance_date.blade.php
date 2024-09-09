@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/attendance.css')}}">
@endsection

@section('content')
<form class="header__content" action="{{ route('per/date') }}" method="post">
    @csrf
    <button class="date__change-button" name="prevDate"><</button>
    <input type="hidden" name="displayDate" value="{{ $displayDate }}">
    <p claSS="header__text">{{ $displayDate->format('Y-m-d') }}</p>
    <button class="date__change-button" name="nextDate">></button>
</form>

<div class="table__content">
    <table class="attendance__table">
        <tr class="attendance__row">
            <th class="attendance__label">名前</th>
            <th class="attendance__label">勤務開始</th>
            <th class="attendance__label">勤務終了</th>
            <th class="attendance__label">休憩時間</th>
            <th class="attendance__label">勤務時間</th>
        </tr>
        @foreach ($users as $user)
        <tr class="table__row">
            <td class="table__item">{{ $user->name }}</td>
            <td class="table__item">{{ $user->start }}</td>
            <td class="table__item">{{ $user->end }}</td>
            <td class="table__item">{{ $user->total_rest }}</td>
            <td class="table__item">{{ $user->total_work }}</td>
        </tr>
        @endforeach
    </table>
</div>
{{ $users->links('vendor/pagination/paginate') }}
@endsection
