@extends('layouts.base')
@section('head')
<script src="{{ asset('js/confirmQuestionnaireFScript.js') }}" defer></script>
<link href="{{ asset('css/confirmQuestionnaireFStyle.css') }}" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
@endsection
@section('content')
<div class="largeFlame">
    <div class="middleFlame">
        <form method="POST">
            @csrf
            <div class="texts">
                <h2>入力内容確認</h2>
                <p>入力内容はこちらで宜しいでしょうか？<br>よろしければ「送信する」ボタンを押して下さい。</p>
                <br>
            </div>

            <div class="smallFlame">


                <table width="420px" height="500px">
                    <tbody>
                        <tr align="center">
                            <td>応募タイトル</td>
                            <td>{{ $data['title'] }}</td>
                            <input type='text' style='display: none;' name='title'
                                value="{{ $data['title'] }}">
                        </tr>
                        <tr align="center">
                            <td>募集ペット</td>
                            <td>{{ $data['switch'] }}</td>
                            <input type='text' style='display: none;' name='switch'
                                value="{{ $data['switch'] }}">

                        </tr>
                        <tr align="center">
                            <td>種類</td>
                            <td>{{ $data['species'] }}</td>
                            <input type='text' style='display: none;' name='species' value="{{ $data['species'] }}">
                        </tr>
                        <tr align="center">
                            <td>性別</td>
                            <td>{{ $data['gender'] }}</td>
                            <input type='text' style='display: none;' name='gender'
                                value="{{ $data['gender'] }}">
                        </tr>
                        <tr align="center">
                            <td>ワクチン接種状況</td>
                            <td>{{ $data['vaccination'] }}</td>
                            <input type='text' style='display: none;' name='vaccination'
                                value="{{ $data['vaccination'] }}">
                        </tr>
                        <tr align="center">
                            <td>去勢・避妊手術施術状況</td>
                            <td>{{ $data['castration'] }}</td>
                            <input type='text' style='display: none;' name='castration'
                                value="{{ $data['castration'] }}">
                        </tr>
                        <tr align="center">
                            <td>ペットの名前</td>
                            <td>{{ $data['name'] }}</td>
                            <input type='text' style='display: none;' name='castration'
                                value="{{ $data['castration'] }}">
                        </tr>
                        <tr align="center">
                            <td>単身者の応募</td>
                            <td>{{ $data['singlePerson'] }}</td>
                            <input type='text' style='display: none;' name='singlePerson'
                                value="{{ $data['singlePerson'] }}">
                        </tr>
                        <tr align="center">
                            <td>高齢者の応募</td>
                            <td>{{ $data['elderPerson'] }}</td>
                            <input type='text' style='display: none;' name='elderPerson'
                                value="{{ $data['elderPerson'] }}">
                        </tr>
                        <tr align="center">
                            <td>既にペットを飼っている場合の応募</td>
                            <td>{{ $data['keeper'] }}</td>
                            <input type='text' style='display: none;' name='keeper'
                                value="{{ $data['keeper'] }}">
                        </tr>
                        <tr align="center">
                            <td>募集の経緯</td>
                            <td>{{ $data['background'] }}</td>
                            <input type='text' style='display: none;' name='background'
                                value="{{ $data['background'] }}">
                        </tr>
                        <tr align="center">
                            <td>性格・特徴</td>
                            <td>{{ $data['personality'] }}</td>
                            <input type='text' style='display: none;' name='personality'
                                value="{{ $data['personality'] }}">
                        </tr>
                        <tr align="center">
                            <td>引き渡し場所の郵便番号</td>
                            <td>{{ $data['zipCode'] }}</td>
                            <input type='text' style='display: none;' name='zipCode'
                                value="{{ $data['zipCode'] }}">
                        </tr>
                        <tr align="center">
                            <td>引き渡し場所の住所</td>
                            <td>{{ $data['prefecture'] }}{{ $data['city'] }}{{ $data['building'] }}</td>
                            <input type='text' style='display: none;' name='address'
                                value="{{ $data['prefecture'] }}{{ $data['city'] }}{{ $data['building'] }}">
                        </tr>
                        @if ($data['remarks'] != null)
                        <tr align="center">
                            <td>その他備考</td>
                            <td>{{ $data['remarks'] }}</td>
                            <input type='text' style='display: none;' name='remarks' value="{{ $data['remarks'] }}">
                        </tr>
                        @endif
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
