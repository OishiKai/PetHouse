@extends('layouts.base')

@section('head')
<script src="{{ asset('js/messageDetail.js') }}" defer></script>
<link rel="stylesheet" href="{{ asset('css/messageDetail.css') }}">
@if( $user['status'] == '0')
    <link rel="stylesheet" href="{{ asset('css/fosterMyPageStyle.css') }}">
@else
    <link rel="stylesheet" href="{{ asset('css/conservationMyPageStyle.css') }}">
@endif
@endsection
@section('content')
<main-content>

    <!-----side----->
    @if( $user['status'] == '1')
    <aside>
            <nav class="sideBox">
                <div class="menu-title">メニュー</div>
                <ul>
                    <li><a href="{{ route('myPage') }}">マイページTOP</a></li>
                    <li><a href="{{ route('articleList') }}">登録ペット一覧</a></li>
                    <li><a href="{{ route('article') }}">ペット新規登録</a></li>
                    <li><a href="{{ route('message') }}">里親希望者からの<br>メッセージ</a></li>
                    <li><a href="{{ route('questionnaire') }}">プロフィール<br>登録・変更</a></li>
                </ul>
        </aside>
    @else
        <aside>
            <nav class="MP-sideBox">
                <div class="menu-title">メニュー</div>
                <ul>
                    <li><a href="{{ route('myPage') }}">マイページTOP</a></li>
                    <li><a href="{{ route('articleFavorite') }}">お気に入り一覧</a></li>
                    <li><a href="{{ route('message') }}">保護活動者からの<br>メッセージ</a></li>
                    <li><a href="{{ route('questionnaire') }}">アンケート登録・変更</a></li>
                </ul>
        </aside>
    @endif

    <!--main content-->
    <div class="MP-main" style='height: 624px;'>
        <div class="mainField">
            <div class="field1">
                <img src="https://pethouse1984.s3.ap-northeast-1.amazonaws.com/article/{{ $msg['articleId'] }}(1).{{ $ex }}"
                    alt="du" class="du" width="160" height="160">
            </div>
            <div class="field2">
                <h3>{{ $art['title'] }}</h3>
                <ul>
                    <li>種類 : {{ $art['species'] }}</li>
                    <li>サイズ : {{ $art['size'] }}</li>
                    <li>年齢 : {{ $art['age'] }}</li>
                </ul>
                <ul>
                    <li>性別 : {{ $art['gender'] }}</li>
                    <li>募集状況 : {{ $art['status'] }}</li>
                </ul>
            </div>
        </div>

        <div class="section s_01">

            <div class="accordion_one open">
                <div class="accordion_header">
                    <img src="{{ asset('lootImg/someone.png') }}" alt="icon" class="icon">
                    <h3 class="name">{{ $msg['fromName'] }} :
                        {{ $msg['subject'] }}</h3>
                    <p class="privateInformation">{{ $msg['fromAge'] }}歳 /
                        {{ $msg['fromGender'] }}</p>
                    <p class="sendTime">
                        {{ $msg['created_at']->format('Y年m月d日') }}
                    </p>
                    <div class="i_box"><i class="one_i"></i></div>
                </div>
                <div class="accordion_inner" style='display: block;'>
                    <div class="box_one">
                        <p class="txt_a_ac">
                            {{ $msg['comment'] }}
                        </p>
                    </div>

                </div>
            </div>
            <a
                href="/messageForm/{{ $msg['articleId'] }}/{{ $msg['id'] }}">
                <h2>返信する<h2>
            </a>
        </div>
    </div>


</main-content>
<!--/main-content-->
@endsection
