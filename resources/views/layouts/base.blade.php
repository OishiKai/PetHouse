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

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
        <!--header-->
        <div id="top" >
            <div class="top-logo">
                <a href="./index.html">
                    <img src="/css/img/logo.png" alt="logo-image" width="350px" height="150px">
                </a>
            </div>
            <div class="top-menu">
                    <a class="loginmenu1" href="#">会員ログイン</a>
                    <a class="loginmenu" href="#">お気に入り</a>
                    <a class="loginmenu" href="#">申し込み・お問い合わせ一覧</a>
                    <a class="loginmenu" href="#">よくある質問</a>
        </div>
        </div> 
        <!--header-->
        <!--navigation-->
            <div id="nav">
                <div class="bar-button-left">
                        <a  href="#">初めての方</a>
                        <a  href="#">里親応募者・希望者向けご案内</a>
                        <a href="#">ペットを探す</a>
                </div>
                <div class="bar-button-right">
                        <a href="#">サイトへのお問い合わせ</a>
                </div>
            </div>
        
    
    <!--navigation-->

        <!--wrapper-->
            <div id="wrapper">
                <div class="page-intro">
                    <p>Pet House......</p>
                </div>
                <div class="wp-menu">
                    <ul class="wp-mn-left">
                        <h1>里親になりたい方</h1>
                        <li><a href="#">募集中のペットを探す</a></li>
                        <li><a href="#">＞里親応募の流れ</a></li>
                    </ul>
                    <ul class="wp-mn-right">
                        <h1>里親を募集したい方</h1>
                        <li><a href="#">里親募集者登録を行う</a></li>
                        <li><a href="#">＞里親を見つけるまでの流れ</a></li>
                    </ul>
                </div>
            </div>
            
        
        <!--wrapper-->

        <!--main content-->

        @yield('content')

        <!--main content-->




        


        <!--footer-->
        <footer>
            <div id="footer">
                <div class="footer-logo">
                    <a href="./index.html">
                        <img src="/css/img/logo.png" alt="logo-image" width="200px" height="100px">
                    </a>
                </div>
                <div class="footer-content">
                
                    <ul>
                        <h2>ご利用案内</h2>
                        <li><a href="#">初めての方</a></li>
                        <li><a href="#">里親応募・募集案内</a></li>
                        <li><a href="#">サイトのご利用案内</a></li>
                        <li><a href="#">利用規約</a></li>
                        <li><a href="#">個人情報保護方針(プライバシーポリシー)</a></li>
                    </ul>
                    <ul>
                        <h2>会員</h2>
                        <li> <a href="#">会員ログイン</a> </li>
                        <li> <a href="#">会員登録(無料)</a></li>
                        <li><a href="#">お気に入り一覧</a></li>
                    </ul>
                    <ul>
                        <h2>その他</h2>
                        <li><a href="#">お気に入り登録</a></li>
                        <li><a href="#">特集記事</a></li>
                        <li><a href="#">ペット保障のお勧め</a></li>
                        <li><a href="#">ペットを探す</a></li>
                    </ul>
                    <ul>
                        <h2>サポート</h2>
                        <li><a href="#">よくある質問</a></li>
                        <li><a href="#">サイト(事務局)へのお問い合わせ</a></li>
                        <li><a href="#">メンテナンス</a></li>
                        <li><a href="#">保障情報</a></li>
                    </ul>
                </div>
            </div>
            <p class="copyright">COPYRIGHT© 2022 PET HOUSE ALL RIGHTS RESERVED.</p>
        </footer>
        <!--footer-->
    </body>
</html>
