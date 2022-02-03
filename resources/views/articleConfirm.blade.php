@extends('layouts.base')

@section('head')
<link rel="stylesheet" href="{{ asset('css/articleStyle.css') }}">
@endsection

@section('content')
<div class="contents-container">

    <h1 class="label-title">ペット情報登録　確認</h1>

    <form id="pet_information4" method="POST" action="{{ route('articleStore') }}">
    @csrf
        <div class="pet_information4">

            <dl>
                <!--ペット種別-->
                <dt><span class="must">必須</span>ペット種別</dt>
                <dd>
                    <label>{{$data['switch']}}</label><br>
                    <label>{{$data['species']}}</label>
                </dd>

                <!--性別-->
                <dt><span class="must">必須</span>性別</dt>
                <dd>
                    <label>{{$data['gender']}}</label>
                </dd>

                <!--サイズ-->
                <dt><span class="must">必須</span>サイズ</dt>
                <dd>
                    <label>{{$data['size']}}</label>
                </dd>

                <!--ペットの年齢-->
                <dt><span class="must">必須</span>ペットの年齢</dt>
                <dd>
                    <label>{{$data['age']}}{{$data['month']}}</label>
                </dd>

                <!--ワクチン接種-->
                <dt><span class="must">必須</span>ワクチン接種</dt>
                <dd>
                    <label>{{$data['vaccination']}}</label>
                </dd>

                <!--去勢・避妊-->
                <dt><span class="must">必須</span>去勢・避妊</dt>
                <dd>
                    <label>{{$data['castration']}}</label>
                </dd>
            </dl>

            <h2>募集条件について</h2>

            <dl>
                <!--単身者応募-->
                <dt><span class="must">必須</span>単身者応募</dt>
                <dd>
                    <label>{{$data['singlePerson']}}</label>
                </dd>

                <!--高齢者応募-->
                <dt><span class="must">必須</span>高齢者応募</dt>
                <dd>
                    <label>{{$data['elderPerson']}}</label>
                </dd>

                <!--先住ペット-->
                <dt><span class="must">必須</span>先住ペットがいる方</dt>
                <dd>
                    <label>{{$data['keeper']}}</label>
                    <!-- <input type="text" name="living_text" id="living_text" disabled readonly> -->
                </dd>

                <!--引き渡し場所-->
                <dt><span class="must">必須</span>引き渡し場所</dt>
                <dd>
                    <label>{{$data['transfer']}}</label>
                </dd>



                <!--応募タイトル-->
                <dt><span class="must">必須</span>応募タイトル</dt>
                <dd>
                    <input type="text" name="title" id="title" maxlength="25" value="{{$data['title']}}" readonly>
                    <p>※25字以内</p>
                </dd>

                <!--募集の経緯-->
                <dt><span class="must">必須</span>募集の経緯</dt>
                <dd>
                    <textarea name="background" id="background" cols="30" rows="5" readonly>{{$data['background']}}</textarea>
                </dd>

                <!--性格や特徴-->
                <dt><span class="must">必須</span>性格や特徴</dt>
                <dd>
                    <textarea name="chatacter" id="chatacter" cols="30" rows="5" readonly>{{$data['personality']}}</textarea>
                </dd>

                <!--健康状態-->
                <dt><span class="must">必須</span>健康状態</dt>
                <dd>
                    <textarea name="health" id="health" cols="30" rows="5" readonly>{{$data['health']}}</textarea>
                </dd>

                <!--その他備考-->
                <dt><span class="any">任意</span>その他備考</dt>
                <dd>
                    <textarea name="remarks" id="remarks" cols="30" rows="5" readonly>{{$data['remarks']}}</textarea>
                </dd>
            </dl>

        </div>
        <input type="text" name="switch" style='display: none;' value="{{$data['switch']}}">
        <input type="text" name="species" style='display: none;' value="{{$data['species']}}">
        <input type="text" name="gender" style='display: none;' value="{{$data['gender']}}">
        <input type="text" name="size" style='display: none;' value="{{$data['size']}}">
        <input type="text" name="age" style='display: none;' value="{{$data['age']}}">
        <input type="text" name="month" style='display: none;' value="{{$data['month']}}">
        <input type="text" name="vaccination" style='display: none;' value="{{$data['vaccination']}}">
        <input type="text" name="castration" style='display: none;' value="{{$data['castration']}}">
        <input type="text" name="singlePerson" style='display: none;' value="{{$data['singlePerson']}}">
        <input type="text" name="elderPerson" style='display: none;' value="{{$data['elderPerson']}}">
        <input type="text" name="keeper" style='display: none;' value="{{$data['keeper']}}">
        <input type="text" name="transfer" style='display: none;' value="{{$data['transfer']}}">
        <input type="text" name="title" style='display: none;' value="{{$data['title']}}">
        <input type="text" name="background" style='display: none;' value="{{$data['background']}}">
        <input type="text" name="name" style='display: none;' value="{{$data['name']}}">
        <input type="text" name="personality" style='display: none;' value="{{$data['personality']}}">
        <input type="text" name="health" style='display: none;' value="{{$data['health']}}">
        <input type="text" name="remarks" style='display: none;' value="{{$data['remarks']}}">
        <input type="text" name="uuid" style='display: none;' value="{{$data['uuid']}}">
        @foreach ($ex as $e)
        <input type="text" name="exts[]" style='display: none;' value="{{$e}}">
        @endforeach
        <!-- <a href="toukou.html">
            <input type="button" class="form-Btn" value="次 へ">
        </a>
        <a href="photo.html">
            <input type="button" class="form-Btn" value="戻 る">
        </a> -->
        <button type="submit" class="form-Btn">投稿する</button>
    </form>

    <div class="scrolltoTopbtn">
        <i class="fas fa-angle-up" style="font-size:60px;" title="トップページへ"></i><br>
    </div>
</div>
@endsection
