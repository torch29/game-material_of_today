<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>今日の素材</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>

<body>
    <header class="header">
        <nav class="header-nav">
            <h2 class="header-nav__ttl">
                <a href="/">
                    HOME
                </a>
            </h2>

            <div class="header-nav__list">
                <ul class="header-nav__item">
                    <li class="header-nav__link">
                        <a href="">素材</a>
                        <a href="">キャラクター</a>
                        <a href=""></a>
                        <a href=""></a>
                    </li>
                </ul>
                @if ( Auth::check() && Auth::user()->hasVerifiedEmail() )
                <ul class="header-nav__item user-menu">
                    <li class="header-nav__link">
                        <a href="">自社設定</a>
                        <a href="/mypage">マイページ</a>
                    </li>
                    <li class="header-nav__link auth-switching">
                        <form action="/logout" class="header-nav__form" method="post">
                            @csrf
                            <button class="header-nav__button">
                                ログアウト
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
            @endif
        </nav>
    </header>
</body>
<main>
    @yield('content')
</main>

</html>