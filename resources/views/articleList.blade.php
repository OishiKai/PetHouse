@extends('layouts.base')

@section('head')
<link rel="stylesheet" href="{{ asset('css/articleList.css') }}">
@endsection

@section('content')
<ul class="breadcrumb">
    <li><a href="{{ route('home') }}">HOME</a></li>
    <li><a href="{{ route('myPage') }}">マイぺージTOP</a></li>
    <li>登録ペット一覧</li>
</ul>



<!--content-->
<main-content>

    <!-----side----->
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

    <!--main content-->
    <div class="MP-main">
        <h1>登録ペット一覧</h1>
        <br>
        <br>
        <!--table-->
        <table>
            @if($articles != null)
                <thead>
                    <tr>
                        　<th>投稿日時</th>
                        <th>投稿したペット<br><span style="font-size:12px;">以下リンク先で各詳細ページに飛びます</span></th>
                        <th>記事削除</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($articles as $art)
                        <tr>
                            <td><time>{{ $art['created_at']->format('Y年m月d日') }}</time>
                            </td>
                            <td><a class="li-member"
                                    href="/articleDetail/{{ $art['id'] }}">{{ $art['title'] }}</a>
                            </td>
                            <td>
                                <!-- 　<button class="button05"><a href="#" class="simple_square_btn5">編集</a></button> -->
                                　<button class="button05"><a
                                        href="/articleDelete/{{ $art['id'] }}">削除</a></button>
                                　</td>
                        </tr>
                    @endforeach
                </tbody>
            @else
                <h2>投稿した募集記事はありません</h2>
            @endif
        </table>

    </div>


</main-content>
@endsection
