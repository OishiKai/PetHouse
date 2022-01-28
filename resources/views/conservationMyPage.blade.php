@extends('layouts.base')

@section('head')
<link rel="stylesheet" href="{{ asset('css/conservationMyPageStyle.css') }}">
<!-- <link rel="stylesheet" href="{{ asset('css/fosterMyPageStyle.css') }}"> -->
@endsection

@section('content')
<ul class="breadcrumb">
    <li><a href="base.html">HOME</a></li>
    <li>保護活動者マイページTOP</li>
</ul>



<!--content-->
<main-content>

    <!-----side----->
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

    <!--main content-->
    <div class="MP-main">
        <h1>～ようこそ〇〇様～</h1>
        <p class="article">里親希望者とのやり取りや記事の掲載ページ情報に保護活動者様の情報を提供していただきます。</p>
        <p class="article">以下のリンクからプロ―フィールの登録をお願いいたします。</p>
        <br>
        <div class="linkbtn">
            <a href="">アンケートの登録・変更ページへ向かう</a>
        </div>

        <br>
        <br>
        <br>
        <p class="article">ご質問・わからないことがございましたら、</p>
        <p class="article">▼こちらからご確認ください。</p>
        <br>

        <div class="linkbtn">
            <a href="">よくある質問</a>
        </div>

        <br>
        <br>
        <br>
        <p class="article">他の機能につきましては、左の【メニュー】一覧からご確認ください。</p>
        <br>
        <br>
        <br>

        <h2 class="notice">メッセージ</h2><br>
        <div>
            <li><a class="li-msg1" href="">"〇〇"様から返信が来ています</a></li><br>
            <li><a class="li-msg1" href="">"〇〇"様から返信が来ています</a></li><br>
            <li><a class="li-msg1" href="">"〇〇"様から返信が来ています</a></li><br>
        </div>
        <br>
        <div class="linkbtn">
            <a href="">里親希望者からのメッセージ一覧 ページへ向かう</a>
        </div>
        <br>
        <br>
        <br>
        <br>



        <h2 class="notice">希望者からの申請</h2><br>
        <div>
            <li><a class="li-msg2" onclick="this.classList.add('active')" href="">"〇〇〇"(題名)のペットに里親希望者から申請が届いています
                    <span class="MP-badge2">1</span>
                </a>
            </li>
            <br>

            <li><a class="li-msg2" onclick="this.classList.add('active')" href="">"〇〇〇"(題名)のペットに里親希望者から申請が届いています
                    <span class="MP-badge2">10</span>
                </a>
            </li>
            <br>
            <li><a class="li-msg2" onclick="this.classList.add('active')" href="">"〇〇〇"(題名)のペットに里親希望者から申請が届いています
                    <span class="MP-badge2">100</span>
                </a>
            </li>
            <br>

        </div>
        <br>
        <br>
        <div class="linkbtn">
            <a href="">登録ペット一覧 ページへ向かう</a>
        </div>

    </div>

</main-content>
@endsection