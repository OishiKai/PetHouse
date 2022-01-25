@extends('layouts.baseAuthed')

@section('head')
<script src="{{ asset('js/lootScript.js') }}" defer></script>
<link href="{{ asset('css/registerLoginLootStyle.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section('content')
<div class="contents-container">
    <div class="slideshow-container">

        <div class="mySlides fade">
            <div>
                <img class="intro-img" src="{{ asset('lootImg/intro-img.png') }}" alt="intro-img">
                <div class="center">犬・猫が好きな方々大歓迎です</div>
                <div class="bottomright">Designed by Team D - O-Hara School</div>
            </div>
        </div>

        <div class="mySlides fade">
            <img class="intro-img" src="{{ asset('lootImg/3.jpg') }}">
        </div>

        <div class="mySlides fade">
            <img class="intro-img" src="{{ asset('lootImg/4.jpg')}}">
        </div>

        <div class="mySlides fade">
            <img class="intro-img" src="{{ asset('lootImg/5.jpg')}}">
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
                        <img src="{{ asset('lootImg/inu.jpg')}}" class="pic" alt="pets-picture">
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
                        <img src="{{ asset('lootImg/inu2.jpg')}}" class="pic" alt="pets-picture">
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
                        <img src="{{ asset('lootImg/inu3.jpg')}}" class="pic" alt="pets-picture">
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
                        <img src="{{ asset('lootImg/cat1.jpg')}}" class="pic" alt="pets-picture">
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
                        <img src="{{ asset('lootImg/cat2.jpg')}}" class="pic" alt="pets-picture">
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
                        <img src="{{ asset('lootImg/cat3.jpg')}}" class="pic" alt="pets-picture">
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

@endsection


