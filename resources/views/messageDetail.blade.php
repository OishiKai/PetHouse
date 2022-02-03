@extends('layouts.base')

@section('head')
<link rel="stylesheet" href="{{ asset('css/messageFormStyle.css') }}">
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
                    <li><a href="MyPage-Activist.html">マイページTOP</a></li>
                    <li><a href="">登録ペット一覧</a></li>
                    <li><a href="">ペット新規登録</a></li>
                    <li><a href="">里親希望者からの<br>メッセージ</a></li>
                    <li><a href="">プロフィール<br>登録・変更</a></li>
                </ul>
        </aside>
    @else
        <aside>
            <nav class="MP-sideBox">
                <div class="menu-title">メニュー</div>
                <ul>
                    <li><a href="MyPage-General.html">マイページTOP</a></li>
                    <li><a href="">お問い合わせ中の<br>ペット</a></li>
                    <li><a href="">お気に入り一覧</a></li>
                    <li><a href="MP-Gene-messege.html">保護活動者からの<br>メッセージ</a></li>
                    <li><a href="">アンケート登録・変更</a></li>
                </ul>
        </aside>
    @endif

    <!--main content-->
    <div class="MP-main">
        <div class="mainField">
            <div class="field1">
                <img src="img/favicon1.png" alt="du" class="du">
            </div>
            <div class="field2">
                <h3>題名</h3>
                <ul>
                    <li>種類</li>
                    <li>所在地</li>
                    <li>年齢</li>
                </ul>
                <ul>
                    <li>応募可能地</li>
                    <li>性別</li>
                    <li>募集状況</li>
                </ul>
            </div>
        </div>

        <div class="section s_01">

            <div class="accordion_one">
                <div class="accordion_header">
                    <img src="img/icon.png" alt="icon" class="icon">
                    <h3 class="name">名前</h3>
                    <p class="privateInformation">都道府県/年齢/性別</p>
                    <p class="sendTime">0000/00/00 00:00 AM</p>
                    <div class="i_box"><i class="one_i"></i></div>
                </div>
                <div class="accordion_inner">
                    <div class="box_one">
                        <p class="txt_a_ac">
                            本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文2
                        </p>
                    </div>
                </div>
            </div>

            <div class="accordion_one">
                <div class="accordion_header">
                    <img src="img/icon.png" alt="icon" class="icon">
                    <h3 class="name">名前</h3>
                    <p class="privateInformation">都道府県/年齢/性別</p>
                    <p class="sendTime">0000/00/00 00:00 AM</p>
                    <div class="i_box"><i class="one_i"></i></div>
                </div>
                <div class="accordion_inner">
                    <div class="box_one">
                        <p class="txt_a_ac">
                            本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文2
                        </p>
                    </div>
                </div>
            </div>

            <div class="accordion_one">
                <div class="accordion_header">
                    <img src="img/icon.png" alt="icon" class="icon">
                    <h3 class="name">名前</h3>
                    <p class="privateInformation">都道府県/年齢/性別</p>
                    <p class="sendTime">0000/00/00 00:00 AM</p>
                    <div class="i_box"><i class="one_i"></i></div>
                </div>
                <div class="accordion_inner">
                    <div class="box_one">
                        <p class="txt_a_ac">
                            本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文2
                        </p>
                    </div>
                </div>
            </div>
        </div>



</main-content>
<!--/main-content-->

<br>
<br>
<br>
<br>
<br>
@endsection