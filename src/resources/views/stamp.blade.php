@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/stamp.css')}}">
@endsection

@section('content')
<div class="stamp__alert">
    //メッセージ
</div>

<div class="stamp__content">
    <div class="stamp__panel">
        <form class="stamp__button">
            <button class="stamp__button-submit" type="submit">勤務開始</button>
        </form>
        <form class="stamp__button">
            <button class="stamp__button-submit" type="submit">勤務終了</button>
        </form>
        <form class="stamp__button">
            <button class="stamp__button-submit" type="submit">休憩開始</button>
        </form>
        <form class="stamp__button">
            <button class="stamp__button-submit" type="submit">休憩終了</button>
        </form>
    </div>
</div>
@endsection