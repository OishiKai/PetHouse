@extends('layouts.base')

@section('head')
<link rel="stylesheet" href="{{ asset('css/fosterMyPageStyle.css') }}">
@endsection

@section('content')
<main-content>

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


    <!--main content-->
    <div class="MP-main">
        <h1>～ようこそ {{ $user['kanjiFamilyName'] }}
            {{ $user['kanjiFirstName'] }} 様～</h1>
        <p class="article">保護活動者とやり取りしていく上でお客様の詳細な情報が必要になっていきます。</p>
        <p class="article">以下のリンク先からアンケートのご登録をお願いいたします。</p>
        <br>
        <div class="MP-linkbtn">
            <a class="MP-link" href="{{ route('questionnaire') }}">アンケートの登録・変更ページへ向かう</a>
        </div>

        <br>
        <br>
        <br>
        <p class="article">ご質問・わからないことがございましたら、</p>
        <p class="article">▼こちらからご確認ください。</p>
        <br>

        <div class="MP-linkbtn">
            <a class="MP-link" href="{{ route('faq') }}">よくある質問</a>
        </div>

        <br>
        <br>
        <br>
        <p class="article">他の機能につきましては、左の【メニュー】一覧からご確認ください。</p>
        <br>
        <br>

    </div>

</main-content>
@endsection
