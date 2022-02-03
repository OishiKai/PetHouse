@extends('layouts.base')

@section('head')
<link rel="stylesheet" href="{{ asset('css/articleStyle.css') }}">
@endsection

@section('content')
<div class="contents-container">

    <h1 class="label-title">ペット情報登録　2/3</h1>

    <form id="pet_information2" method="POST" action="{{ route('articleRegisterB') }}">
        @csrf
        <div class="pet_information2">

            <dl>
                <!--応募タイトル-->
                <dt><span class="must">必須</span>応募タイトル</dt>
                <dd>
                    <input type="text" name="title" id="title" placeholder="ペットの名前などの応募タイトルを入力してください" maxlength="25" required>
                    <p>※25字以内</p>
                </dd>

                <!--募集の経緯-->
                <dt><span class="must">必須</span>募集の経緯</dt>
                <dd>
                    <textarea name="background" id="background" cols="30" rows="5" placeholder="入力例：経済的に飼えなくなったため募集します。"
                        required></textarea>
                </dd>

                <dt><span class="must">必須</span>ペットの名前</dt>
                <dd>
                    <input type="text" name="name" id="title" placeholder="今のペットの名前" maxlength="25" required>
                </dd>

                <!--性格や特徴-->
                <dt><span class="must">必須</span>性格や特徴</dt>
                <dd>
                    <textarea name="personality" id="chatacter" cols="30" rows="5"
                        placeholder="入力例：とてもおとなしい性格です。少し臆病な一面もあります。" required></textarea>
                </dd>

                <!--健康状態-->
                <dt><span class="must">必須</span>健康状態</dt>
                <dd>
                    <textarea name="health" id="health" cols="30" rows="5" placeholder="入力例：健康面は特に問題ありません。"
                        required></textarea>
                </dd>

                <!--その他備考-->
                <dt><span class="any">任意</span>その他備考</dt>
                <dd>
                    <textarea name="remarks" id="remarks" cols="30" rows="5" value=''></textarea>
                </dd>
            </dl>

        </div>
        <input type="text" name="switch" style='display: none;' value="{{$data['switch']}}">
        @if ($data['switch'] == '犬')
            <input type="text" name="species" style='display: none;' value="{{$data['speciesDog']}}">
        @else
            <input type="text" name="species" style='display: none;' value="{{$data['speciesCat']}}">
        @endif
        <input type="text" name="gender" style='display: none;' value="{{$data['gender']}}">
        <input type="text" name="size" style='display: none;' value="{{$data['size']}}">
        <input type="text" name="age" style='display: none;' value="{{$data['age']}}">
        <input type="text" name="month" style='display: none;' value="{{$data['month']}}">
        <input type="text" name="vaccination" style='display: none;' value="{{$data['vaccination']}}">
        <input type="text" name="castration" style='display: none;' value="{{$data['castration']}}">
        <input type="text" name="singlePerson" style='display: none;' value="{{$data['singlePerson']}}">
        <input type="text" name="elderPerson" style='display: none;' value="{{$data['elderPerson']}}">
        <input type="text" name="keeper" style='display: none;' value="{{$data['keeper']}}">
        @if ($data['transfer'] == '里親の家まで届ける')
            <input type="text" name="transfer" style='display: none;' value="{{$data['transfer']}}">
        @else
            <input type="text" name="transfer" style='display: none;' value="〒{{$data['zip3']}}-{{$data['zip4']}} {{$data['prefecture']}}{{$data['city']}}{{$data['building']}}">
        @endif

        <button type="submit" class="form-Btn">次 へ</button>


        <!-- <button type="submit" class="form-Btn">次 へ</button> -->

    </form>
</div>
@endsection
