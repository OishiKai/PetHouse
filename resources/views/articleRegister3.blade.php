@extends('layouts.base')

@section('head')
<link rel="stylesheet" href="{{ asset('css/articleStyle.css') }}">
@endsection

@section('content')
<div class="contents-container">

    <h1 class="label-title">ペット情報登録　3/3</h1>

    <form id="pet_information3" method="POST" action="/confirmArticle" enctype="multipart/form-data">
        @csrf
        <div class="pet_information3">

            <dl>

                <h2>ペット紹介写真</h2>

                <dt><span class="must">必須</span>写真1</dt>
                <dd>
                    <input type="file" name="img[]" id="pet_photo1" accept="image/jpg, image/jpeg, image/png" required>
                </dd>
                <dt><span class="any">任意</span>写真2</dt>
                <dd>
                    <input type="file" name="img[]" id="pet_photo2" accept="image/jpg, image/jpeg, image/png">
                </dd>
                <dt><span class="any">任意</span>写真3</dt>
                <dd>
                    <input type="file" name="img[]" id="pet_photo3" accept="image/jpg, image/jpeg, image/png">
                </dd>
                <dt><span class="any">任意</span>写真4</dt>
                <dd>
                    <input type="file" name="img[]" id="pet_photo4" accept="image/jpg, image/jpeg, image/png">
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
        <input type="text" name="name" style='display: none;' value="{{$data['name']}}">
        <input type="text" name="background" style='display: none;' value="{{$data['background']}}">
        <input type="text" name="personality" style='display: none;' value="{{$data['personality']}}">
        <input type="text" name="health" style='display: none;' value="{{$data['health']}}">
        <input type="text" name="remarks" style='display: none;' value="{{$data['remarks']}}">
        <input type="text" name="uuid" style='display: none;' value="">
        <button type="submit" class="form-Btn">次 へ</button>

        <a href="javascript:history.back()">
            <input type="button" class="form-Btn" value="戻 る">
        </a>
    </form>

    <div class="scrolltoTopbtn">
        <i class="fas fa-angle-up" style="font-size:60px;" title="トップページへ"></i><br>
    </div>
</div>
@endsection