<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/baseScript.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/baseStyle.css') }}" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/307140e2a3.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>
        <!--header-->
        <div id="top" >
            <div class="top-logo">
                <a href="./base.html">
                    <img src="{{ asset('js/img/logo-removebg-preview (3).png') }}" alt="logo-image">
                </a>
            </div>
                <div class="top-menu">
                    <a class="loginmenu" href="form.html" title="会員登録・ログイン">
                        <i class="far fa-user-circle" style="font-size: 40px;"></i><br>会員登録・ログイン
                    </a>
                    <a class="loginmenu" href="#" title="お気に入り">
                        <i class="fas fa-heart" style="font-size: 40px;"></i><br>お気に入り
                    </a>
                    <a class="loginmenu" href="#" title="メッセージ">
                        <i class="fas fa-comments" style="font-size: 40px;"></i><br>メッセージ
                    </a>
                    <a class="loginmenu" href="#" title="よくある質問">
                        <i class="fas fa-question" style="font-size: 40px;"></i><br>よくある質問
                    </a>
               
                </div>
        </div> 
    
        <!--navigation-->
        <div id="nav">
            <div class="bar-button-left">
                    <a class="bar" href="base.html">HOME<br>--Pet House Top--</a>
                    <a class="bar" href="#">PET ROOM<br>--犬・猫 検索--</a>
                    <a class="bar" href="#">お問い合わせ<br>--サイトに対して--</a>
            </div>
        </div>

        <br><br>
        
        <main class="py-4">
            @yield('content')
        </main>
        
        <br><br>
    </div>
    
    
    
    <div class="scrolltoTopbtn">
      <i class="fas fa-angle-up" style="font-size:60px;" title="トップページへ"></i><br>
      
    </div>


        <!--footer-->
        <footer>
            <div id="footer_nav">
                <a class="footer-logo" href="./base.html">
                    <img src="{{ asset('js/img/logo-removebg-preview (3).png') }}" alt="footer-logo-image">
                </a>
                <div class="footer-main">
                <ul><h2>サイト案内</h2>
                    <li><a href="#">TOPページ</a></li>
                    <li><a href="#">よくある質問</a></li>
                    <li><a href="#">サイトのお問い合わせ</a></li>
                </ul>
                <ul><h2>会員</h2>
                    <li><a href="#">会員ログイン</a></li>
                    <li><a href="#">会員登録(無料)</a></li>
                </ul>
                <ul><h2>その他</h2>
                    <li><a href="#">お気に入り一覧</a></li>
                    <li><a href="#">メッセージ</a></li>
                </ul>
                </div>
            </div>
            <small>&copy; copyright</small>
            
        </footer>
    </body>
</html>
