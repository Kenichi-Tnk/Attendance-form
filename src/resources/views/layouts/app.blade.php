<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atte</title>
    <link rel="stylesheet" href="https://unpkg.com/ress/ress.min.css" />
    <link rel="stylesheet" href="{{ asset('css/common.css')}}">
    @yield('css')
</head>
<body>
    <div class="app">
        <header class="header">
            <h1 class="header__heading">Atte</h1>
            <ul class="header-nav">
                @if (Auth::check())
                <li class="header-nav__item">
                    <a class="header-nav__link" href="/stamp">ホーム</a>
                </li>
                <li class="header-nav__item">
                    <a class="header-nav__link" href="/attendance">日付一覧</a>
                </li>
                <li class="header-nav__item">
                    <form action="/logout" method="post">
                        @csrf
                        <button class="header-nav_button">ログアウト</button>
                    </form>
                </li>
                @endif
            </ul>
            @yield('link')
        </header>
        <div class="content">
            @yield('content')
            @yield('link')
        </div>
        <footer class="footer">
            <p>Atte,inc.</p>
        </footer>
    </dv>
</body>

</html>