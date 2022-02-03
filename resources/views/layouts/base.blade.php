<!DOCTYPE html>
<html lang='ja'>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>犬・猫</title>
    <link href="{{ asset('css/registerLoginLootStyle.css') }}" rel="stylesheet">
    <link href="{{ asset('css/myPage.css') }}" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/img/favicon1.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/307140e2a3.js"></script>

    @yield('head')
</head>

<body>
    <!--header-->
    <div id="top">
        <div class="top-logo">
            <a href="{{ route('home') }}">
                <img src="{{ asset('js/img/logo-removebg-preview (3).png') }}" alt="logo-image">
            </a>
        </div>
        <div class="top-menu">
            @guest
                <a class="loginmenu" href="{{ route('register') }}" title="会員登録・ログイン">
                    <i class="far fa-user-circle" style="font-size: 40px;"></i><br>会員登録・ログイン
                </a>
            @else
                {{ $user['kanjiFamilyName'] }}様
                <a class="loginmenu" href="{{ route('logout') }}" title="ログアウト" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                    <i class="far fa-user-circle" style="font-size: 40px;"></i><br>ログアウト
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                    style="display: none;">@csrf</form>
            @endguest
            <a class="loginmenu" href="{{ route('articleFavorite') }}" title="お気に入り">
                <i class="fas fa-heart" style="font-size: 40px;"></i><br>お気に入り
            </a>
            <a class="loginmenu" href="{{ route('message') }}" title="メッセージ">
                <i class="fas fa-comments" style="font-size: 40px;"></i><br>メッセージ
            </a>
            <a class="loginmenu" href="{{ route('faq') }}" title="よくある質問">
                <i class="fas fa-question" style="font-size: 40px;"></i><br>よくある質問
            </a>

        </div>
    </div>

    <div id="nav">
        <div class="bar-button-left">
            <a class="bar-home" href="{{ route('home') }}">HOME<br>--Pet House Top--</a>

            <a class="bar-room" id="bar-room-popup" href="#modal-01">PET ROOM<br>--犬・猫 検索--</a>

            <a class="bar-contact" href="{{ route('inquiry') }}">お問い合わせ<br>--サイトに対して--</a>
        </div>
    </div>

    @yield('content')
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="modal-wrapper" id="modal-01">
        <a href="#!" class="modal-overlay"></a>
        <div class="modal-window">
            <div class="pop-up">
                <i class="fa-solid fa-magnifying-glass"></i>
                <h1>-Search-</h1>
                <p>検索したい種類を選択してください</p>

                <div class="modal-seach">
                    <div class="accordion">
                        <div class="det1">
                            　 <div class="acd-menu1">犬種で探す
                            </div>

                            <div class="acd-content">
                                <li class="acd-contents1">
                                    <a href="/search/犬/雑種">
                                        <img src="{{ asset('lootImg/雑種犬.jpg')}}">
                                        <p class="pet-name">雑種</p>
                                    </a>
                                </li>
                                <li class="acd-contents1">
                                    <a href="/search/犬/柴犬">
                                        <img src="{{ asset('lootImg/柴犬.jpg')}}">
                                        <p class="pet-name">柴犬</p>
                                    </a>
                                <li class="acd-contents1">
                                    <a href="/search/犬/ポメラニアン">
                                        <img src="{{ asset('lootImg/ポメラニアン.jpg')}}">
                                        <p class="pet-name">ポメラニアン</p>
                                    </a>
                                </li>
                                <li class="acd-contents1">
                                    <a href="/search/犬/トイプードル">
                                        <img src="{{ asset('lootImg/トイプードル.jpg')}}">
                                        <p class="pet-name">トイプードル</p>
                                    </a>
                                </li>
                                <li class="acd-contents1">
                                    <a href="/search/犬/ダックスフント">
                                        <img
                                            src="{{ asset('lootImg/ダックスフント.jpg')}}">
                                        <p class="pet-name">ダックスフント</p>
                                    </a>
                                </li>
                                <li class="acd-contents1">
                                    <a href="/search/犬/コーギー">
                                        <img src="{{ asset('lootImg/コーギー.jpg')}}">
                                        <p class="pet-name">コーギー</p>
                                    </a>
                                </li>
                                <li class="acd-contents1">
                                    <a href="/search/犬/チワワ">
                                        <img src="{{ asset('lootImg/チワワ.jpg')}}">
                                        <p class="pet-name">チワワ</p>
                                    </a>
                                </li>
                                <li class="acd-contents1">
                                    <a href="/search/その他犬">
                                        <img src="{{ asset('lootImg/その他犬.jpg')}}">
                                        <p class="pet-name">その他</p>
                                    </a>
                                </li>
                            </div>
                        </div>


                        <div class="det2">
                            　 <div class="acd-menu2">猫種で探す
                            </div>

                            <div class="acd-content">
                                <li class="acd-contents2">
                                    <a href="/search/猫/雑種">
                                        <img src="{{ asset('lootImg/雑種猫.jpg')}}">
                                        <p class="pet-name">雑種</p>
                                    </a>
                                </li>
                                <li class="acd-contents2">
                                    <a href="/search/猫/アメリカンショート">
                                        <img
                                            src="{{ asset('lootImg/アメリカンショート.jpg')}}">
                                        <p class="pet-name">アメリカン<br>ショート</p>
                                    </a>
                                <li class="acd-contents2">
                                    <a href="/search/猫/マンチカン">
                                        <img src="{{ asset('lootImg/マンチカン.jpg')}}">
                                        <p class="pet-name">マンチカン</p>
                                    </a>
                                </li>
                                <li class="acd-contents2">
                                    <a href="/search/猫/スコティッシュフォールド">
                                        <img
                                            src="{{ asset('lootImg/スコティッシュフォールド.jpg')}}">
                                        <p class="pet-name">スコティッシュ<br>フォールド</p>
                                    </a>
                                </li>
                                <li class="acd-contents2">
                                    <a href="/search/猫/エキゾチックショートヘア">
                                        <img
                                            src="{{ asset('lootImg/エキゾチックショートヘア.jpg')}}">
                                        <p class="pet-name">エキゾチック<br>ショートヘア</p>
                                    </a>
                                </li>
                                <li class="acd-contents2">
                                    <a href="/search/猫/ミヌエット">
                                        <img src="{{ asset('lootImg/ミヌエット.jpg')}}">
                                        <p class="pet-name">ミヌエット</p>
                                    </a>
                                </li>
                                <li class="acd-contents2">
                                    <a href="/search/猫/ブリティッシュショートヘア">
                                        <img
                                            src="{{ asset('lootImg/ブリティッシュショートヘア.jpg')}}">
                                        <p class="pet-name">ブリティッシュ<br>ショートヘア</p>
                                    </a>
                                </li>
                                <li class="acd-contents2">
                                    <a href="/search/猫/雑種">
                                        <img src="{{ asset('lootImg/その他猫.jpg')}}">
                                        <p class="pet-name">その他</p>
                                    </a>
                                </li>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>

    <div class="scrolltoTopbtn">
        <i class="fas fa-angle-up" style="font-size:60px;" title="トップページへ"></i><br>
    </div>

    <footer>

        <div id="footer_nav">
            <a class="footer-logo" href="./base.html">
                <img src="{{ asset('js/img/logo-removebg-preview (3).png') }}"
                    alt="footer-logo-image">
            </a>
            <div class="footer-main">
                <ul>
                    <h2>サイト案内</h2>
                    <li><a href="{{ route('home') }}">TOPページ</a></li>
                    <li><a href="{{ route('faq') }}">よくある質問</a></li>
                    <li><a href="{{ route('inquiry') }}">サイトのお問い合わせ</a></li>
                </ul>
                <ul>
                    <h2>会員</h2>
                    <li><a href="{{ route('login') }}">会員ログイン</a></li>
                    <li><a href="{{ route('register') }}">会員登録(無料)</a></li>
                </ul>
                <ul>
                    <h2>その他</h2>
                    <li><a href="{{ route('articleFavorite') }}">お気に入り一覧</a></li>
                    <li><a href="{{ route('message') }}">メッセージ</a></li>
                </ul>
            </div>
        </div>
        <small>&copy; copyright</small>

    </footer>

    <script>

    </script>
</body>
<!--Library-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('js/lootScript.js') }}" defer></script>

</html>
