<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- 各ページごとにtitleタグを入れるために@yieldで空けておきます。 --}}
        <title>@yield('title')</title>

        <!-- Scripts -->
         {{-- Laravel標準で用意されているJavascriptを読み込みます --}}
        <script src="{{ secure_asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        {{-- Laravel標準で用意されているCSSを読み込みます --}}
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        {{-- この章の後半で作成するCSSを読み込みます --}}
        <link href="{{ secure_asset('css/rayouts.css') }}" rel="stylesheet">
        {{-- FontAwsomeAnimationを読み込む --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.0.10/font-awesome-animation.css" type="text/css" media="all" />
    </head>
    <body>
        {{-- ナビゲーションバー --}}
        <header >
             <div class="container">
                 <div class="navbar navbar-expand navbar-light bg-warning p-0">
                     <ul class="navbar-nav">
                         {{-- ログインしていなければトップページへのリンクを表示 --}}
                         @guest
                             <li class="nav-item"><a href="#" class="nav-link">トップページ</a></li>
                         @endguest
                　　       {{-- ログインしていればマイページへのリンクを表示 --}}
                　　       @auth
                             <li class="nav-item"><a href="#" class="nav-link">マイページ</a></li>
                         @endauth
                     </ul>
                     <ul class="navbar-nav ml-auto">
                         {{-- ログインしてなければログイン画面を表示 --}}
                         @guest
                             <li class="nav-item"><a href="#" class="nav-link">ログイン</a></li>
                         @endguest
                         {{-- ログインしていればログアウト画面を表示 --}}
                         @auth
                             <li class="nav-item"><a href="#" class="nav-link">ログアウト</a></li>
                         @endauth
                     </ul>
                 </div>
             </div>
        </header> 
        {{-- コンテンツ 上下のパディング1rem --}}
        <main>
            <div class="container">
                 @yield('content')
            </div>
           
        </main>


    </body>