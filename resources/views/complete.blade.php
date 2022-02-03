@extends('layouts.base')
<link rel="stylesheet" href="{{ asset('css/articleStyle.css') }}">
@section('head')

@endsection

@section('content')
<br><br>

<h1 class="label-title">投稿完了画面</h1>

<h2 class="label-title2">投稿いただきありがとうございます。</h2>

<a href="{{ route('home') }}">
    <input type="button" class="form-Btn3" value="HOMEへ">
</a>

<br><br>
@endsection