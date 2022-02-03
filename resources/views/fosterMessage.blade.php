@extends('layouts.base')

@section('head')
<!-- <script src="{{ asset('js/articleScript.js') }}" defer></script> -->
<link rel="stylesheet" href="{{ asset('css/fosterMessageStyle.css') }}">
@endsection

@section('content')
<ul class="breadcrumb">
    <li><a href="{{ route('home') }}">HOME</a></li>
    <li><a href="{{ route('myPage') }}">マイページTOP</a></li>
    <li>メッセージ一覧</li>
</ul>

<main-content>

    <!-----side----->
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
        <h1>保護活動者からのお問い合わせ一覧</h1>
        <br>
        <br>
        <!--table-->
        <table>
            @if($messages != null)
                <thead>
                    <tr>
                        <th>該当の記事</th>
                        <th>メッセージ<br><span style="font-size:12px;">以下リンク先で各保護活動者とのチャットページに飛びます</span></th>
                        <th>着信日時</th>
                    </tr>
                </thead>

                <tbody>
                    @for($i=0;$i < count($titles);$i++)
                        <tr>
                            <td class="icon">{{ $titles[$i] }}</td>
                            <td><a class="li-member"
                                    href="{{ route('messageDetail', ['id' => $messages[$i]['id']]) }}">内容を確認する</a>
                            </td>
                            <td><time
                                    datetime="2022-01-28">{{ $messages[$i]['created_at']->format('Y年m月d日') }}</time>
                            </td>
                        </tr>
                    @endfor
                </tbody>
            @else
                メッセージはありません
            @endif
        </table>


        <!--PAGE NO-->
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


    </div>


</main-content>
<br>
<br>
<br>
<br>
<br>
<br>
@endsection
