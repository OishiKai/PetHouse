@extends('layouts.base')

@section('head')
<script src="{{ asset('js/lootScript.js') }}" defer></script>
<!-- <link href="{{ asset('css/registerLoginLootStyle.css') }}" rel="stylesheet"> -->
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
            <img class="intro-img" src="{{ asset('lootImg/4.jpg') }}">
        </div>

        <div class="mySlides fade">
            <img class="intro-img" src="{{ asset('lootImg/5.jpg') }}">
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
            <h4 class="pets-tittle">犬の最新募集</h4>

            <ul class="pets">
                <li class="flex-item">
                    <a href="/search/トイプードル">
                        <img src="{{ asset('lootImg/トイプードル.jpg') }}" class="pic" alt="pets-picture">
                        <h2 class="new">NEW</h2>
                    </a>
                </li>
                <li class="flex-item">
                    <a href="/search/雑種">
                        <img src="{{ asset('lootImg/雑種犬.jpg') }}" class="pic" alt="pets-picture">
                        <h2 class="new">NEW</h2>
                    </a>
                </li>
                <li class="flex-item">
                    <a href="/search/ダックスフント">
                        <img src="{{ asset('lootImg/ダックスフント.jpg') }}" class="pic" alt="pets-picture">
                        <h2 class="new">NEW</h2>
                    </a>
                </li>
            </ul>
        </div>

        <div class="cat-box">
            <h4 class="pets-tittle">猫の最新募集</h4>
            <ul class="pets">
                <li class="flex-item">
                    <a href="/search/ブリティッシュショートヘア">
                        <img src="{{ asset('lootImg/ブリティッシュショートヘア.jpg') }}" class="pic" alt="pets-picture">
                        <h2 class="new">NEW</h2>
                    </a>
                </li>

                <li class="flex-item">
                    <a href="/search/マンチカン">
                        <img src="{{ asset('lootImg/マンチカン.jpg') }}" class="pic" alt="pets-picture">
                        <h2 class="new">NEW</h2>
                    </a>
                </li>

                <li class="flex-item">
                    <a href="/search/その他猫">
                        <img src="{{ asset('lootImg/その他猫.jpg') }}" class="pic" alt="pets-picture">
                        <h2 class="new">NEW</h2>
                    </a>
                </li>
            </ul>
        </div>

    </div>
    <!--scroll to top button-->
    <div class="scrolltoTopbtn">
        <i class="fas fa-angle-up" style="font-size:60px;" title="トップページへ"></i><br>
    </div>
</div>

@endsection
