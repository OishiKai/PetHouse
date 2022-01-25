@extends('layouts.base')

@section('content')
<ul class="breadcrumb">
    <li><a href="{{ route('home') }}">HOME</a></li>
    <li><a href="{{ route('register') }}">新規登録</a></li>
    <li>ログイン</li>
</ul>

<div class="login-container">
    <div class="logintitle">
        <h1>LOG IN</h1>
    </div>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="row">
            <div class="col-25">
                <span class="form">必須</span>
                <label for="email">メールアドレス</label>
            </div>
            <div class="col-75">
                <input type="text" name="email" placeholder="メールアドレスを入力" required>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <span>必須</span>
                <label for="psw">パスワード</label>
            </div>
            <div class="col-75">
                <input type="password" name="password" placeholder="パスワードを入力" pattern="(?=.*[a-z]).{8,}" required>
            </div>

        </div>
        <div style="width: 100%; text-align: center;">
            <input type="submit" id="login" value="ログイン">
        </div>


        <br><a id="forgotpwd" href="forgotpass.html">パスワードをお忘れですか？</a><br>
        <a id="signup" href="{{ route('register') }}">新規登録！</a>

    </form>
</div>
@endsection