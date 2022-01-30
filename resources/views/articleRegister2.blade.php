@extends('layouts.base')

@section('head')
<script src="{{ asset('js/articleScript.js') }}" defer></script>
<script src="{{ asset('js/postal_api.js') }}" defer></script>
<link rel="stylesheet" href="{{ asset('css/articleStyle.css') }}">
@endsection

@section('content')
<h1 class="label-title">譲渡者フォーム</h1>

<div id="main_1">

    <section>
        <form method="POST" action="{{ route('articleRegisterB') }}">
            @csrf


            <!--応募タイトル-->
            <h2 class="form-label"><span class="form-require">必須</span>応募タイトル</h2>
            <dd>
                <label><input type="text" name="title" class="@error('title') is-invalid @enderror" size=30
                        maxlength="25" required></label><br>
                (25字以内)※募集タイトルを入力してください。
                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </dd><br>
            <!--応募タイトル-->


            <!--募集の経緯-->
            <h2 class="form-label"><span class="form-require">必須</span>募集の経緯</h2>
            <dd>
                <textarea name="background" class="@error('background') is-invalid @enderror" rows="5" cols="50"
                    required></textarea><br>
                (入力例:経済的に飼えなくなったため募集します。)
                @error('background')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </dd><br>
            <!--募集の経緯-->


            <!--性格や特徴-->
            <h2 class="form-label"><span class="form-require">必須</span>性格や特徴</h2>
            <dd>
                <textarea name="personality" class="@error('personality') is-invalid @enderror" rows="5" cols="100"
                    required></textarea><br>
                (入力例:とてもおとなしい性格です。少し臆病な一面もあります。)

                @error('personality')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </dd><br>
            <!--性格や特徴-->


            <!--健康状態-->
            <h2 class="form-label"><span class="form-require">必須</span>健康状態</h2>
            <dd>
                <textarea name="health" class="@error('health') is-invalid @enderror" rows="5" cols="100"
                    required></textarea><br>
                (入力例:健康面は特に問題ありません。)

                @error('health')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </dd><br>
            <!--健康状態-->


            <!--引き渡し場所-->
            <h2 class="form-label"><span class="form-require">必須</span>引き渡し場所</h2>
            <dd>
                <b>郵便番号<br></b>
                <input type="text" name="zipCode" style="width:100px" id="zip_code" required>
                <input type="button" value="住所検索" id="search_address_btn">
                <input type="button" value="クリア" id="search_clear_btn">
                <br />
                <b>都道府県<br></b>
                <input type="text" name="prefecture" style="width:500px" id="address1" required><br />
                <b>市区町村<br></b>
                <input type="text" name="city" style="width:500px" id="address2" required><br />
                <b>番地・建物名<br></b>
                <input type="text" name="building" style="width:500px" required><br />
            </dd>

            <!--その他備考-->
            <h2 class="form-label"><span class="form-require2">任意</span>その他備考</h2>
            <dd>
                <textarea name="remarks" rows="5" cols="100" value=''></textarea><br>
            </dd>
            <!--その他備考-->

            <input type="text" name="switch" style='display: none;'
                value="{{ $data['switch'] }}">
            @if($data['switch'] == "犬")
                <input type="text" name="species" style='display: none;'
                    value="{{ $data['speciesDog'] }}">
            @else
                <input type="text" name="species" style='display: none;'
                    value="{{ $data['speciesCat'] }}">
            @endif
            <input type="text" name="gender" style='display: none;'
                value="{{ $data['gender'] }}">
            <input type="text" name="vaccination" style='display: none;'
                value="{{ $data['vaccination'] }}">
            <input type="text" name="castration" style='display: none;'
                value="{{ $data['castration'] }}">
            <input type="text" name="name" style='display: none;' value="{{ $data['name'] }}">

            <button type="submit" class="form-Btn">次 へ</button>
        </form>
        <br><br>
        <!--scroll to top button-->
    </section>
</div>
@endsection
