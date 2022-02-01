@extends('layouts.base')
@section('head')
<!-- <script src="{{ asset('js/confirmQuestionnaireFScript.js') }}" defer></script> -->
<link href="{{ asset('css/inquiryStyle.css') }}" rel="stylesheet">
@endsection
@section('content')
<h1 class="form-title">サイトへのお問い合わせ</h1>
<div class="go-to-login">
    <h3 class="go-login1">既出の質問などは→</h3>
    <a class="go-login" href="Question.html">よくある質問へ</a>

</div>


<div class="form-container">


    <form action="/action_page.php">
        <div id="formA">
            <div class="row">
                <div class="col-25">
                    <span class="form">必須</span>
                    <label for="nameA">お名前</label>
                </div>
                <div class="col-35">
                    <input type="text" id="fnameA" name="firstnameA" placeholder="姓名" />
                </div>
                <div class="col-35">
                    <input type="text" id="lnameA" name="lastnameA" placeholder="氏名" />
                </div>
                <h6 class="h6-required">※全角<br />例（山田　太郎）</h6>
            </div>

            <div class="row">
                <div class="col-25">
                    <span class="form">必須</span>
                    <label for="email">メールアドレス</label>
                </div>
                <div class="col-75">
                    <input type="text" id="email" name="email" placeholder="メールアドレスを入力" />

                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <span class="form">必須</span>
                    <label for="contact-item">お問い合わせ</label>
                </div>
                <div class="col-75">
                    <form>
                        ■お問い合わせ内容(入力欄)：<br>
                        <textarea id="targetbox"></textarea>
                    </form>
                </div>
            </div>

            <script>
                // ▼①フォーカスを得た場合
                function gotfocus() {
                    this.style.height = "10em"; // 高さを10文字分にする
                    this.style.backgroundColor = "#ffe"; // 背景色を薄い黄色にする
                }
                // ▼②フォーカスを失った場合
                function lostfocus() {
                    if (this.value.length == 0) {
                        // 文字数がゼロなら
                        this.style.height = "3em"; // 高さを3文字分にする
                    }
                    this.style.backgroundColor = "#fff"; // 背景色を白色にする
                }

                // ③テキストエリアのイベントに、上記関数を割り当てる
                document.getElementById("targetbox").onfocus = gotfocus; // フォーカスを得た場合
                document.getElementById("targetbox").onblur = lostfocus; // フォーカスを失った場合

            </script>

        </div>
</div>
</form>
</div>
<div style="width: 100%; text-align: center;">
    <input type="submit" id="login" value="送信">
</div>
</div>
@endsection