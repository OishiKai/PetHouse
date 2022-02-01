@extends('layouts.base')
@section('head')
<script src="{{ asset('js/confirmQuestionnaireFScript.js') }}" defer></script>
<link href="{{ asset('css/confirmQuestionnaireFStyle.css') }}" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
@endsection
@section('content')
<div class="largeFlame">
    <div class="middleFlame">
        <form method="POST" action="/answerQuestionnaire" enctype="multipart/form-data">
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
                            <td>保護活動者属性</td>
                            <td>{{ $data['conservationStatus'] }}</td>
                            <input type='text' style='display: none;' name='conservationStatus'
                                value="{{ $data['conservationStatus'] }}">
                        </tr>
                        <tr align="center">
                            <td>団体名・法人名または活動名</td>
                            <td>{{ $data['activityName'] }}</td>
                            <input type='text' style='display: none;' name='activityName'
                                value="{{ $data['activityName'] }}">

                        </tr>
                        <tr align="center">
                            <td>活動拠点の郵便番号</td>
                            <td>〒{{ $data['zip21'] }} -
                                {{ $data['zip22'] }}</td>
                            <input type='text' style='display: none;' name='zipCode'
                                value="{{ $data['zip21'] }}-{{ $data['zip22'] }}">
                        </tr>
                        <tr align="center">
                            <td>活動拠点の住所</td>
                            <td>{{ $data['addr21'] }}</td>
                            <input type='text' style='display: none;' name='address'
                                value="{{ $data['addr21'] }}">
                        </tr>
                        <tr align="center">
                            <td>主な保護施設</td>
                            <td>
                                @foreach($data['shelter'] as $shelter)
                                    {{ $shelter }}
                                    <input type='text' style='display: none;' name='shelter[]' value='{{ $shelter }}'>
                                @endforeach
                                @if($data['othertext'] != null)
                                    {{ $data['othertext'] }}
                                    <input type='text' style='display: none;' name='otherText'
                                        value="{{ $data['othertext'] }}">
                                @else
                                <input type='text' style='display: none;' name='otherText'>
                                @endif
                            </td>
                        </tr>
                        <tr align="center">
                            <td>保護しているペット種別</td>
                            <td>
                                @foreach($data['pet'] as $pet)
                                    {{ $pet }}
                                    <input type='text' style='display: none;' name='pet[]' value='{{ $pet }}'>
                                @endforeach
                            </td>
                        </tr>
                        <tr align="center">
                            <td>応募可能な地域</td>
                            <td>
                                @foreach($data['area'] as $area)
                                    {{ $area }}
                                    <input type='text' style='display: none;' name='area[]' value='{{ $area }}'>
                                @endforeach
                            </td>
                        </tr>
                        <input type='text' name="profile" value="{{$data['profile']}}" style='display: none;'>
                        <input type='text' name="profileImg" value="{{$data['profileImg']}}" style='display: none;'>
                        @foreach($data['url'] as $url)
                            @if($url != null)
                                <tr align="center">
                                    <td>活動サイト</td>
                                    <td>
                                        {{ $url }}
                                        <input type='text' style='display: none;' name='url[]' value='{{ $url }}'>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
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
