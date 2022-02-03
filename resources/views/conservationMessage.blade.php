@extends('layouts.base')

@section('head')
<!-- <script src="{{ asset('js/articleScript.js') }}" defer></script> -->
<link rel="stylesheet" href="{{ asset('css/conservationMessageStyle.css') }}">
@endsection

@section('content')
<ul class="breadcrumb">
    <li><a href="base.html">HOME</a></li>
    <li><a href="MyPage-General.html">マイページTOP</a></li>
    <li>メッセージ一覧</li>
</ul>

<main-content>

    <!-----side----->
    <aside>
        <nav class="sideBox">
            <div class="menu-title">メニュー</div>
            <ul>
                <li><a href="MyPage-Activist.html">マイページTOP</a></li>
                <li><a href="">登録ペット一覧</a></li>
                <li><a href="">ペット新規登録</a></li>
                <li><a href="MP-Act-messege.html">里親希望者からの<br>メッセージ</a></li>
                <li><a href="">プロフィール<br>登録・変更</a></li>
            </ul>
    </aside>

    <!--main content-->
    <div class="MP-main">
        <h1>里親希望者からのお問い合わせ一覧</h1>
        <br>
        <br>
        <!--table-->
        <table>

            <thead>
                <tr>
                    <th>お名前</th>
                    <th>メッセージ<br><span style="font-size:12px;">以下リンク先でメッセージ詳細ページに飛びます</span></th>
                    <th>着信日時</th>
                </tr>
            </thead>

            <tbody>
                @if ($messages != null)
                    @foreach ($messages as $msg)
                    <tr>
                        <td class="icon">{{$msg['fromName']}} さん</td>
                        <td><a class="li-member" href="{{ route('messageDetail', ['id' => $msg['id']]) }}">内容を確認する</a></td>
                        <td><time datetime="2022-01-28">{{$msg['created_at']->format('Y年m月d日')}}</time></td>
                    </tr>
                    @endforeach
                @else
                    メッセージはありません
                @endif
            </tbody>

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
@endsection