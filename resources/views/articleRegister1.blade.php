@extends('layouts.base')

@section('head')
<script src="{{ asset('js/articleStyle.js') }}" defer></script>
<link rel="stylesheet" href="{{ asset('css/articleScript.css') }}">
@endsection

@section('content')
<h1 class="label-title">仮登録フォーム</h1>

<div id="main_1">
    <section>
        <form id="karitoukou post">


            <!--ペット種別-->
            <h2 class="form-label"><span class="form-require">必須</span>ペット種別</h2>
            <dd>
                <label><input type="radio" name="pet" id="pet1" value="犬">犬</label>
                <label><input type="radio" name="pet" id="pet2" value="猫">猫</label>
            </dd><br>
            <!--ペット種別-->


            <!--性別-->
            <h2 class="form-label"><span class="form-require">必須</span>性別</h2>
            <dd>
                <label><input type="radio" name="sex" id="sex1" value="オス">オス</label>
                <label><input type="radio" name="sex" id="sex2" value="メス">メス</label>
                <label><input type="radio" name="sex" id="sex3" value="不明">不明</label>
            </dd><br>
            <!--性別-->


            <!--ペット紹介写真-->
            <h2 class="form-label"><span class="form-require">必須</span>ペット紹介写真</h2>
            <p class="form-label"><span class="form-require3"><b>必須</b></span>写真1</p>
            <dd>
                <label><input type="file" name="sample" accept="image/jpeg, image/png, image/gif" multiple></label><br>
                <label><input type="text" name="photo1" id="photolabel1" placeholder="例）11/8撮影"></label>
            </dd><br>
            <p class="form-label"><span class="form-require4"><b>任意</b></span>写真2</p>
            <dd>
                <label><input type="file" name="sample" accept="image/jpeg, image/png, image/gif" multiple></label><br>
                <label><input type="text" name="photo2" id="photolabel2"></label>
            </dd><br>
            <p class="form-label"><span class="form-require4"><b>任意</b></span>写真3</p>
            <dd>
                <label><input type="file" name="sample" accept="image/jpeg, image/png, image/gif" multiple></label><br>
                <label><input type="text" name="photo3" id="photolabel3"></label>
            </dd><br>
            <p class="form-label"><span class="form-require4"><b>任意</b></span>写真4</p>
            <dd>
                <label><input type="file" name="sample" accept="image/jpeg, image/png, image/gif" multiple></label><br>
                <label><input type="text" name="photo4" id="photolabel4"></label>
            </dd><br>
            <p class="form-label"><span class="form-require4"><b>任意</b></span>写真5</p>
            <dd>
                <label><input type="file" name="sample" accept="image/jpeg, image/png, image/gif" multiple></label><br>
                <label><input type="text" name="photo5" id="photolabel5"></label>
            </dd><br>
            <p class="form-label"><span class="form-require4"><b>任意</b></span>写真6</p>
            <dd>
                <label><input type="file" name="sample" accept="image/jpeg, image/png, image/gif" multiple></label><br>
                <label><input type="text" name="photo6" id="photolabel6"></label>
            </dd><br>
            <!--ペット紹介写真-->


            <a href="./oubosya.html">
                <input type="button" class="form-Btn" value="次 へ">
            </a>
        </form>
    </section>

</div>

<br><br>
@endsection