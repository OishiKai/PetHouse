@extends('layouts.base')
@section('head')
<script src="{{ asset('js/confirmQuestionnaireFScript.js') }}" defer></script>
<link href="{{ asset('css/confirmQuestionnaireFStyle.css') }}" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
@endsection
@section('content')
<div class="largeFlame">
    <div class="middleFlame">
        <form action="#" method="post">
            <div class="texts">
                <h2>入力内容確認</h2>
                <p>入力内容はこちらで宜しいでしょうか？<br>よろしければ「送信する」ボタンを押して下さい。</p>
                <br>
            </div>

            <div class="smallFlame">

                <table width="420px" height="500px">
                    <tbody>
                        <tr align="center">
                            <td>同居人の有無</td>
                            <td></td>
                        </tr>
                        <tr align="center">
                            <td>本人以外の同居人同居人</td>
                            <td>aiueo</td>
                        </tr>
                        <tr align="center">
                            <td>家族全員のペット飼育同意同意</td>
                            <td>aiueo</td>
                        </tr>
                        <tr align="center">
                            <td>アレルギーの有無</td>
                            <td>aiueo</td>
                        </tr>
                        <tr align="center">
                            <td>住居タイプ</td>
                            <td>aiueo</td>
                        </tr>
                        <tr align="center">
                            <td>ペット飼育の可否</td>
                            <td>aiueo</td>
                        </tr>
                        <tr align="center">
                            <td>一年以内の転居・転勤</td>
                            <td>aiueo</td>
                        </tr>
                        <tr align="center">
                            <td>募集者による自宅訪問の可否</td>
                            <td>aiueo</td>
                        </tr>
                        <tr align="center">
                            <td>飼育場所</td>
                            <td>aiueo</td>
                        </tr>
                        <tr align="center">
                            <td>ペットが単独になる時間</td>
                            <td>aiuoe</td>
                        </tr>
                        <tr align="center">
                            <td>ペット飼育経験の有無</td>
                            <td>aiuoe</td>
                        </tr>
                        <tr align="center">
                            <td>現在のペット飼育状況</td>
                            <td>aiuoe</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="buttons">
                <input type="button" value="内容を修正する" onclick="history.back(-1)" class="fixButton">
                <button type="submit" name="submit" class="submitButton">送信する</button>
            </div>
        </form>
    </div>
</div>
@endsection