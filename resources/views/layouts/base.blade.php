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

    <div id="nav">
        <div class="bar-button-left">
            <a class="bar-home" href="base.html">HOME<br>--Pet House Top--</a>

            <a class="bar-room" id="bar-room-popup" href="#modal-01">PET ROOM<br>--犬・猫 検索--</a>

            <a class="bar-contact" href="#">お問い合わせ<br>--サイトに対して--</a>
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
                                        <p class="pet-name">雑daf種</p>
                                    </a>
                                </li>
                                <li class="acd-contents1">
                                    <a href="#">
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
                                    <a href="pet-seach.html">
                                        <img src="img/%E3%83%88%E3%82%A4%E3%83%97%E3%83%BC%E3%83%89%E3%83%AB.jpg">
                                        <p class="pet-name">トイプードル</p>
                                    </a>
                                </li>
                                <li class="acd-contents1">
                                    <a href="pet-seach.html">
                                        <img
                                            src="img/%E3%83%80%E3%83%83%E3%82%AF%E3%82%B9%E3%83%95%E3%83%B3%E3%83%88.jpg">
                                        <p class="pet-name">ダックスフント</p>
                                    </a>
                                </li>
                                <li class="acd-contents1">
                                    <a href="pet-seach.html">
                                        <img src="img/%E3%82%B3%E3%83%BC%E3%82%AE%E3%83%BC.jpg">
                                        <p class="pet-name">コーギー</p>
                                    </a>
                                </li>
                                <li class="acd-contents1">
                                    <a href="pet-seach.html">
                                        <img src="img/%E3%83%81%E3%83%AF%E3%83%AF.jpg">
                                        <p class="pet-name">チワワ</p>
                                    </a>
                                </li>
                                <li class="acd-contents1">
                                    <a href="/search/その他犬">
                                        <img src="img/%E3%81%9D%E3%81%AE%E4%BB%96%E7%8A%AC.jpg">
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
                                    <a href="pet-seach.html">
                                        <img src="img/%E9%9B%91%E7%A8%AE%E7%8C%AB.jpg">
                                        <p class="pet-name">雑種</p>
                                    </a>
                                </li>
                                <li class="acd-contents2">
                                    <a href="pet-seach.html">
                                        <img
                                            src="img/%E3%82%A2%E3%83%A1%E3%83%AA%E3%82%AB%E3%83%B3%E3%82%B7%E3%83%A7%E3%83%BC%E3%83%88.jpg">
                                        <p class="pet-name">アメリカン<br>ショート</p>
                                    </a>
                                <li class="acd-contents2">
                                    <a href="pet-seach.html">
                                        <img src="img/%E3%83%9E%E3%83%B3%E3%83%81%E3%82%AB%E3%83%B3.jpg">
                                        <p class="pet-name">マンチカン</p>
                                    </a>
                                </li>
                                <li class="acd-contents2">
                                    <a href="pet-seach.html">
                                        <img
                                            src="img/%E3%82%B9%E3%82%B3%E3%83%86%E3%82%A3%E3%83%83%E3%82%B7%E3%83%A5%E3%83%95%E3%82%A9%E3%83%BC%E3%83%AB%E3%83%89.jpg">
                                        <p class="pet-name">スコティッシュ<br>フォールド</p>
                                    </a>
                                </li>
                                <li class="acd-contents2">
                                    <a href="pet-seach.html">
                                        <img
                                            src="img/%E3%82%A8%E3%82%AD%E3%82%BE%E3%83%81%E3%83%83%E3%82%AF%E3%82%B7%E3%83%A7%E3%83%BC%E3%83%88%E3%83%98%E3%82%A2.jpg">
                                        <p class="pet-name">エキゾチック<br>ショートヘア</p>
                                    </a>
                                </li>
                                <li class="acd-contents2">
                                    <a href="pet-seach.html">
                                        <img src="img/%E3%83%9F%E3%83%8C%E3%82%A8%E3%83%83%E3%83%88.jpg">
                                        <p class="pet-name">ミヌエット</p>
                                    </a>
                                </li>
                                <li class="acd-contents2">
                                    <a href="pet-seach.html">
                                        <img
                                            src="img/%E3%83%96%E3%83%AA%E3%83%86%E3%82%A3%E3%83%83%E3%82%B7%E3%83%A5%E3%82%B7%E3%83%A7%E3%83%BC%E3%83%88%E3%83%98%E3%82%A2.jpg">
                                        <p class="pet-name">ブリティッシュ<br>ショートヘア</p>
                                    </a>
                                </li>
                                <li class="acd-contents2">
                                    <a href="pet-seach.html">
                                        <img src="img/%E3%81%9D%E3%81%AE%E4%BB%96%E7%8C%AB.jpg">
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
                    <li><a href="#">TOPページ</a></li>
                    <li><a href="#">よくある質問</a></li>
                    <li><a href="#">サイトのお問い合わせ</a></li>
                </ul>
                <ul>
                    <h2>会員</h2>
                    <li><a href="#">会員ログイン</a></li>
                    <li><a href="#">会員登録(無料)</a></li>
                </ul>
                <ul>
                    <h2>その他</h2>
                    <li><a href="#">お気に入り一覧</a></li>
                    <li><a href="#">メッセージ</a></li>
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
