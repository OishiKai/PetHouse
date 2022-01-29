@extends('layouts.base')

@section('head')
<script src="{{ asset('js/articleStyle.js') }}" defer></script>
<link rel="stylesheet" href="{{ asset('css/articleScript.css') }}">
@endsection

@section('content')
<h1 class="label-title">応募者条件判定フォーム</h1>

<div id="main_1">

    <section>
        <form id="oubosya post">


            <!--応募者-->
            <h2 class="form-label"><span class="form-require">必須</span>応募者</h2>
            <dd>
                <select class="same-width-list">
                    <option value="#" selected>選択してください</option>
                    <option value="single">単身者</option>
                    <option value="seinior">高齢者</option>
                    <option value="domestic">飼養ペット</option>
                </select>
            </dd><br>
            <!--応募者-->


            <!--単身者/応募者で単身者が選択された時に表示する。-->
            <h2 class="form-label"><span class="form-require">必須</span>単身者</h2>
            <dd>
                <label><input type="radio" name="single person" id="seinior person1" value="不可">不可</label>
                <label><input type="radio" name="single person" id="seinior person2" value="可">可</label>
            </dd><br>
            <!--単身者/応募者で単身者が選択された時に表示する。-->


            <!--高齢者/応募者で高齢者が選択された時に表示する。-->
            <h2 class="form-label"><span class="form-require">必須</span>高齢者</h2>
            <dd>
                <label><input type="radio" name="seinior person" id="single person1" value="不可">不可</label>
                <label><input type="radio" name="seinior person" id="single person2" value="可">可</label>
            </dd><br>
            <!--高齢者/応募者で高齢者が選択された時に表示する。-->


            <!--飼養ペット/応募者で飼養ペットが選択された時に表示する。-->
            <h2 class="form-label"><span class="form-require">必須</span>飼養ペット</h2>
            <dd>
                <label><input type="radio" name="domestic pets" id="domestic pets1" value="不可">不可</label>
                <label><input type="radio" name="domestic pets" id="domestic pets2" value="可">可</label>
            </dd><br>
            <!--飼養ペット/応募者で飼養ペットが選択された時に表示する。-->


            <a href="./zyoutosya.html">
                <input type="button" class="form-Btn" value="次 へ">
            </a>
            <a href="./karitouroku.html">
                <input type="button" class="form-Btn" value="戻 る">
            </a>

            <br><br>
        </form>
    </section>
    <!--scroll to top button-->
</div>
@endsection
