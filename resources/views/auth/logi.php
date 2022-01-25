@extends('layouts.base')

@section('content')
<ul class="breadcrumb">
    <li><a href="base.html">HOME</a></li>
    <li><a href="form.html">会員ログイン</a></li>
    <li>ログイン</li>
</ul>

<div class="login-container">
    <div class="logintitle">
        <h1>LOG IN</h1>
    </div>
    <form method="POST" action="{{ route('login') }}">
        <div class="row">
            <div class="col-25">
                <span class="form">必須</span>
                <label for="email">メールアドレス</label>
            </div>
            <div class="col-75">
                <input type="text" id="email" name="email" placeholder="メールアドレスを入力" required>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <span>必須</span>
                <label for="psw">パスワード</label>
            </div>
            <div class="col-75">
                <input type="password" id="psw" name="psw" placeholder="パスワードを入力" pattern="(?=.*[a-z]).{8,}" required>
            </div>

        </div>
        <div style="width: 10%; text-align: center;">
            <input type="submit" value="ログイン">
        </div>


        <br><a id="forgotpwd" href="forgotpass.html">パスワードをお忘れですか？</a><br>
        <a id="signup" href="form.html">新規登録！</a>

    </form>
</div>
@endsection