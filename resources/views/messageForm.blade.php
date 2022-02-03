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
            <nav class="MP-sideBox" >
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
    <div class="MP-main" style='height: 460px;'>
        <div class="messageform">
            <form>
                <h1>MESSAGE</h1>
                <table>
                    <tr>
                        <th><label>宛先</label></th>
                        <td><input type="text" class="text" size="45" value="" /></td>
                    </tr>
                    <tr>
                        <th><label>件名</label></th>
                        <td><input type="text" class="text" size="45" value="" /></td>
                    </tr>

                    <tr>
                        <th><label>メッセージ</label></th>
                        <td><textarea cols="60" rows="5" name="comments" id="comments"></textarea></td>
                    </tr>

                </table>
                <input type="submit" class="submit" value="送信する" />
            </form>
        </div>
    </div>



</main-content>
<!--/main-content-->

@endsection
