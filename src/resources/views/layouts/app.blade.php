<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atte</title>
    <link rel="stylesheet" href="https://unpkg.com/ress/ress.min.css" />
    <link rel="stylesheet" href="{{ asset('css/sanitize.css')}}">
    <link rel="stylesheet" href="{{ asset('css/common.css')}}">
    @yield('css')
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <div class="header-utilities">
                <h1 class="header__logo">Atte</h1>
                <nav>
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
                </naV>
            </div>
        </div>
        @yield('link')
    </header>
    <main>
        @yield('content')
        @yield('link')
    </main>
    <footer class="footer">
        <p>Atte,inc.</p>
    </footer>
</body>

</html>