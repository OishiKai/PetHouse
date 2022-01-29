@extends('layouts.base')

@section('head')
<script src="{{ asset('js/articleStyle.js') }}" defer></script>
<link rel="stylesheet" href="{{ asset('css/articleScript.css') }}">
@endsection

@section('content')
<h1 class="label-title">譲渡者フォーム</h1>

<div id="main_1">

    <section>
        <form id="oubosya post">


            <!--応募タイトル-->
            <h2 class="form-label"><span class="form-require">必須</span>応募タイトル</h2>
            <dd>
                <label><input type="text" name="title" id="titlelabel" size=30 maxlength="25"></label><br>
                (25字以内)※募集タイトルを入力してください。
            </dd><br>
            <!--応募タイトル-->


            <!--募集の経緯-->
            <h2 class="form-label"><span class="form-require">必須</span>募集の経緯</h2>
            <dd>
                <textarea name="recruitment" rows="5" cols="50"></textarea><br>
                (入力例:経済的に飼えなくなったため募集します。)
            </dd><br>
            <!--募集の経緯-->


            <!--性格や特徴-->
            <h2 class="form-label"><span class="form-require">必須</span>性格や特徴</h2>
            <dd>
                <textarea name="Personality and characteristics" rows="5" cols="100"></textarea><br>
                (入力例:とてもおとなしい性格です。少し臆病な一面もあります。)
            </dd><br>
            <!--性格や特徴-->


            <!--健康状態-->
            <h2 class="form-label"><span class="form-require">必須</span>健康状態</h2>
            <dd>
                <textarea name="" rows="5" cols="100"></textarea><br>
                (入力例:健康面は特に問題ありません。)
            </dd><br>
            <!--健康状態-->


            <!--引き渡し場所-->
            <h2 class="form-label"><span class="form-require">必須</span>引き渡し場所</h2>
            <dd>
                <div>
                    <form method="post" action="#" style="width: fit-content; margin: 0 auto;">
                        <b>郵便番号<br></b>
                        <input type="text" name="zip_code" style="width:100px" id="zip_code">
                        <input type="button" value="住所検索" id="search_address_btn">
                        <input type="button" value="クリア" id="search_clear_btn">
                        <br />
                        <b>都道府県<br></b>
                        <input type="text" name="address1" style="width:500px" id="address1"><br />
                        <b>市区町村<br></b>
                        <input type="text" name="address2" style="width:500px" id="address2"><br />
                        <b>その他<br></b>
                        <input type="text" name="address3" style="width:500px" id="address3"><br />
                        <b>建物名など<br></b>
                        <input type="text" name="address4" style="width:500px"><br />
                        <br>
                    </form>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                    <script src="script/postal_api.js"></script>
                </div>



            </dd>
            <!--引き渡し場所-->


            <!--複数頭の譲渡-->
            <h2 class="form-label"><span class="form-require">必須</span>複数頭の譲渡</h2>
            <dd>
                <input type="checkbox" name="kibou" value="kibou" id="kiboulabel">
                複数頭の譲渡を希望<br>

                <select class="same-width-list">
                    <option value="#" selected>選択してください</option>
                    <option value="2 pets">2匹</option>
                    <option value="3 pets">3匹</option>
                    <option value="Many pets">多数頭</option>
                </select><br>
            </dd><br>
            <!--複数頭の譲渡-->


            <!--理 由-->
            <h2 class="form-label"><span class="form-require2">任意</span>理 由</h2>
            <dd>
                <textarea name="example" rows="5" cols="100"></textarea>
            </dd><br>
            <!--理 由-->


            <!--その他備考-->
            <h2 class="form-label"><span class="form-require2">任意</span>その他備考</h2>
            <dd>
                <textarea name="example" rows="5" cols="100"></textarea><br>
            </dd>
        </form>
        <!--その他備考-->


        <a href="./kakunin.html">
            <input type="button" class="form-Btn" value="次 へ">
        </a>

        <a href="./oubosya.html">
            <input type="button" class="form-Btn" value="戻 る">
        </a>

        <br><br>
        <!--scroll to top button-->
    </section>
</div>
@endsection