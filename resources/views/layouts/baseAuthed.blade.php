
<!DOCTYPE html>
<html lang='ja'>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>犬・猫</title>
        <link href="{{ asset('css/registerLoginLootStyle.css') }}" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="/img/favicon1.png">
      
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://kit.fontawesome.com/307140e2a3.js"></script>
      
      @yield('head')
    </head>
    <body>
    <!--header-->
        <div id="top" >
            <div class="top-logo">
                <a href="./base.html">
                    <img src="{{ asset('js/img/logo-removebg-preview (3).png') }}" alt="logo-image">
                </a>
            </div>{{$user['kanjiFamilyName']}}様
            
                <div class="top-menu">
                {{$user['kanjiFamilyName']}}様
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
                        <a class="loginmenu" href="{{ route('logout') }}" title="ログアウト" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        
                            <i class="far fa-user-circle" style="font-size: 40px;"></i><br>ログアウト
                        </a>
                    </form>
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
                    
                     <a class="bar-room" id="bar-room-popup" href="pet-seach.html">PET ROOM<br>--犬・猫 検索--</a>
                     
                    <a class="bar-contact" href="#">お問い合わせ<br>--サイトに対して--</a>
            </div>
        </div>

        @yield('content')
        
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

        <script>
           
        </script>
    </body>
        <!--Library-->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="{{ asset('js/lootScript.js') }}" defer></script>
</html>