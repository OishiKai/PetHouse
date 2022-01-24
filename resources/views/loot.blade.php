<!-- <!DOCTYPE html>
<html lang='ja'>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>犬・猫</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="/img/favicon1.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/307140e2a3.js"></script>


</head> -->
@extends('layouts.base')

@section('head')
<script src="{{ asset('js/articleDetailScript.js') }}" defer></script>
<link href="{{ asset('css/articleDetailStyle.css') }}" rel="stylesheet">
@endsection

@section('content')

<body>

    <div id="nav">
        <div class="bar-button-left">
            <a class="bar-home" href="base.html">HOME<br>--Pet House Top--</a>

            <a class="bar-room" id="bar-room-popup" href="pet-seach.html">PET ROOM<br>--犬・猫 検索--</a>

            <a class="bar-contact" href="#">お問い合わせ<br>--サイトに対して--</a>
        </div>
    </div>

    <!--Base contents-->
    <div class="contents-container">
        <div class="slideshow-container">

            <div class="mySlides fade">
                <div><img class="intro-img" src="img/intro-img.png" alt="intro-img">
                    <div class="center">犬・猫が好きな方々大歓迎です</div>
                    <div class="bottomright">Designed by Team D - O-Hara School</div>
                </div>
            </div>
            <div class="mySlides fade">
                <video class="intro-img" controls>
                    <source src="img/pet-video.mp4" type="video/mp4">
                </video>
            </div>

            <div class="mySlides fade">
                <img class="intro-img" src="img/3.jpg">
            </div>

            <div class="mySlides fade">
                <img class="intro-img" src="img/4.jpg">
            </div>

            <div class="mySlides fade">
                <img class="intro-img" src="img/5.jpg">
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
        </div>
        <!--main content-->
        <div class="page-intro">
            <h1 class="h1-page-intro">ご一緒に帰りませんか？</h1>
            <div class="intro-content">
                <h1>ペッとを愛する方へ</h1>
                <p>“ぼくたちはあなたをあいしています。<br>あなたはぼくたちをあいしていますか？”</p>
            </div>
        </div>

        <!-----main----->

        <div class="pet-main">
            <div class="dog-box">
                <h4 class="pets-tittle">ワンちゃん</h4>

                <ul class="pets">
                    <li class="flex-item">
                        <a href="">
                            <img src="img/inu.jpg" class="pic" alt="pets-picture">
                            <h2 class="new">NEW</h2>
                            <div class="details_container">
                                <details>
                                    <summary>
                                        <span class="open">もっと見る</span>
                                        <span class="close">閉じる</span>
                                    </summary>
                                    <div class="details-content">
                                        <p>題名</p>
                                        <p>種類</p>
                                        <p>年齢</p>
                                        <p>性別</p>
                                        <p>所在地</p>
                                        <p>応募可能地域</p>
                                        <p>掲載期間</p>
                                    </div>
                                </details>
                            </div>
                        </a>
                    </li>
                    <li class="flex-item">
                        <a href="">
                            <img src="img/inu2.jpg" class="pic" alt="pets-picture">
                            <h2 class="new">NEW</h2>
                            <div class="details_container">
                                <details>
                                    <summary>
                                        <span class="open">もっと見る</span>
                                        <span class="close">閉じる</span>
                                    </summary>
                                    <div class="details-content">
                                        <p>題名</p>
                                        <p>種類</p>
                                        <p>年齢</p>
                                        <p>性別</p>
                                        <p>所在地</p>
                                        <p>応募可能地域</p>
                                        <p>掲載期間</p>
                                    </div>
                                </details>
                            </div>
                        </a>
                    </li>
                    <li class="flex-item">
                        <a href="">
                            <img src="img/inu3.jpg" class="pic" alt="pets-picture">
                            <h2 class="new">NEW</h2>
                            <div class="details_container">
                                <details>
                                    <summary>
                                        <span class="open">もっと見る</span>
                                        <span class="close">閉じる</span>
                                    </summary>
                                    <div class="details-content">
                                        <p>題名</p>
                                        <p>種類</p>
                                        <p>年齢</p>
                                        <p>性別</p>
                                        <p>所在地</p>
                                        <p>応募可能地域</p>
                                        <p>掲載期間</p>
                                    </div>
                                </details>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="cat-box">
                <h4 class="pets-tittle">ネコちゃん</h4>
                <ul class="pets">
                    <li class="flex-item">
                        <a href="">
                            <img src="img/cat1.jpg" class="pic" alt="pets-picture">
                            <h2 class="new">NEW</h2>
                            <div class="details_container">
                                <details>
                                    <summary>
                                        <span class="open">もっと見る</span>
                                        <span class="close">閉じる</span>
                                        　</summary>
                                    <div class="details-content">
                                        <p>題名</p>
                                        <p>種類</p>
                                        <p>年齢</p>
                                        <p>性別</p>
                                        <p>所在地</p>
                                        <p>応募可能地域</p>
                                        <p>掲載期間</p>
                                    </div>
                                </details>
                            </div>
                        </a>
                    </li>

                    <li class="flex-item">
                        <a href="">
                            <img src="img/cat2.jpg" class="pic" alt="pets-picture">
                            <h2 class="new">NEW</h2>
                            <div class="details_container">
                                <details>
                                    <summary>
                                        <span class="open">もっと見る</span>
                                        <span class="close">閉じる</span>
                                        　</summary>
                                    <div class="details-content">
                                        <p>題名</p>
                                        <p>種類</p>
                                        <p>年齢</p>
                                        <p>性別</p>
                                        <p>所在地</p>
                                        <p>応募可能地域</p>
                                        <p>掲載期間</p>
                                    </div>
                                </details>
                            </div>
                        </a>
                    </li>

                    <li class="flex-item">
                        <a href="">
                            <img src="img/cat3.jpg" class="pic" alt="pets-picture">
                            <h2 class="new">NEW</h2>
                            <div class="details_container">
                                <details>
                                    <summary>
                                        <span class="open">もっと見る</span>
                                        <span class="close">閉じる</span>
                                    </summary>
                                    <div class="details-content">
                                        <p>題名</p>
                                        <p>種類</p>
                                        <p>年齢</p>
                                        <p>性別</p>
                                        <p>所在地</p>
                                        <p>応募可能地域</p>
                                        <p>掲載期間</p>
                                    </div>
                                </details>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>

        </div>


        <div class="pager">
            <ul class="pagination">
                <li><a href="">«</a></li>
                <li><a class="active" href="">1</a></li>
                <li><a href="">2</a></li>
                <li><a href="">3</a></li>
                <li><a href="">4</a></li>
                <li><a href="">5</a></li>
                <li><a href="">6</a></li>
                <li><a href="">7</a></li>
                <li><a href="">8</a></li>
                <li><a href="">»</a></li>
            </ul>
        </div>

        <!--scroll to top button-->
        <div class="scrolltoTopbtn">
            <i class="fas fa-angle-up" style="font-size:60px;" title="トップページへ"></i><br>
        </div>
    </div>

    <!--footer-->
    <footer>
        <div id="footer_nav">
            <a class="footer-logo" href="./base.html">
                <img src="img/logo-removebg-preview (3).png" alt="footer-logo-image">
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
@endsection
<!--Library-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="script/script.js"></script>


