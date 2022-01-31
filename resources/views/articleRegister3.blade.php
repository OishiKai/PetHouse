@extends('layouts.base')

@section('head')
<script src="{{ asset('js/articleScript.js') }}" defer></script>
<link rel="stylesheet" href="{{ asset('css/articleStyle.css') }}">
@endsection

@section('content')
<h1 class="label-title">応募者の条件について</h1>

<div id="main_1">

    <section>
        <form method="POST" action="{{ route('articleStore') }}">
            @csrf

            <h2 class="form-label"><span class="form-require">必須</span>単身者の応募</h2>
            <dd>
                <label><input type="radio" name="singlePerson" id="seinior person1" value="不可" checked>不可</label>
                <label><input type="radio" name="singlePerson" id="seinior person2" value="可">可</label>
            </dd><br>

            <h2 class="form-label"><span class="form-require">必須</span>高齢者の応募</h2>
            <dd>
                <label><input type="radio" name="elderPerson" id="single person1" value="不可" checked>不可</label>
                <label><input type="radio" name="elderPerson" id="single person2" value="可">可</label>
            </dd><br>

            <h2 class="form-label"><span class="form-require">必須</span>既にペットを飼っている場合の応募</h2>
            <dd>
                <label><input type="radio" name="keeper" id="domestic pets1" value="不可" checked>不可</label>
                <label><input type="radio" name="keeper" id="domestic pets2" value="可">可</label>
            </dd><br>

            <input type="text" name="switch" style='display: none;'
                value="{{ $data['switch'] }}">
            <input type="text" name="species" style='display: none;'
                value="{{ $data['species'] }}">

            <input type="text" name="gender" style='display: none;'
                value="{{ $data['gender'] }}">
            <input type="text" name="vaccination" style='display: none;'
                value="{{ $data['vaccination'] }}">
            <input type="text" name="castration" style='display: none;'
                value="{{ $data['castration'] }}">
            <input type="text" name="name" style='display: none;' value="{{ $data['name'] }}">
            <input type="text" name="pattern" style='display: none;'
                value="{{ $data['pattern'] }}">
            <input type="text" name="size" style='display: none;' value="{{ $data['size'] }}">
            <input type="text" name="age" style='display: none;' value="{{ $data['age'] }}">
            <input type="text" name="month" style='display: none;' value="{{ $data['month'] }}">
            
            <input type="text" name="title" style='display: none;' value="{{ $data['title'] }}">
            <input type="text" name="background" style='display: none;'
                value="{{ $data['background'] }}">
            <input type="text" name="personality" style='display: none;'
                value="{{ $data['personality'] }}">
            <input type="text" name="zipCode" style='display: none;'
                value="{{ $data['zipCode'] }}">
            <input type="text" name="prefecture" style='display: none;'
                value="{{ $data['prefecture'] }}">
            <input type="text" name="health" style='display: none;'
                value="{{ $data['health'] }}">
            <input type="text" name="city" style='display: none;' value="{{ $data['city'] }}">
            <input type="text" name="building" style='display: none;'
                value="{{ $data['building'] }}">
            <input type="text" name="remarks" style='display: none;'
                value="{{ $data['remarks'] }}">

            <button type="submit" class="form-Btn">次 へ</button>

            <br><br>
        </form>
    </section>
</div>
@endsection
