@extends('layouts.base')
@section('head')
<script src="{{ asset('js/confirmQuestionnaireFScript.js') }}" defer></script>
<link href="{{ asset('css/confirmQuestionnaireFStyle.css') }}" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
@endsection
@section('content')
<div class="largeFlame">
    <div class="middleFlame">
        <form method="POST" action="/answerQuestionnaire">
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
                            <td>同居人の有無</td>
                            <td>{{$data['switch']}}</td>
                            <input type='text' style='display: none;' value="{{$data['switch']}}">
                        </tr>
                        @if ($data['switch'] != 'なし(単身)')
                        <tr align="center">
                            <td>本人以外の同居人同居人</td>
                            <td>{{$data['housemateNumber']}}人</td>
                            <input type='text' style='display: none;' name='housemateNumber' value="{{$data['housemateNumber']}}">
                        </tr>
                        <tr align="center">
                            <td>同居人</td>
                            <td>
                                @foreach( $data['housemateDetailRelation'] as $housemate)
                                {{$housemate}}
                                <input type='text' style='display: none;' name='housemateDetailRelation[]' value="{{$housemate}}">
                                @endforeach
                                @foreach( $data['housemateDetailAge'] as $housemateDetailAge)
                                <input type='text' style='display: none;' name='housemateDetailAge[]' value="{{$housemateDetailAge}}">
                                @endforeach
                            </td>
                        </tr>
                        <tr align="center">
                            <td>家族全員のペット飼育同意同意</td>
                            <td>{{$data['housemateAgreement']}}</td>
                            <input type='text' style='display: none;' name='housemateAgreement' value="{{$data['housemateAgreement']}}">
                        </tr>
                        @endif
                        <tr align="center">
                            <td>アレルギーの有無</td> 
                            <td>{{$data['allergies']}}</td>
                            <input type='text' style='display: none;' name='allergies' value="{{$data['allergies']}}">
                        </tr>
                        @if ($data['switch'] != 'なし(単身)' && $data['allergies'] == 'あり')
                        <tr align="center">
                            <td>アレルギー患者続柄</td>
                            <td>
                                @foreach ($data['housemateAllergyDetailRelation'] as $relation)
                                {{$relation}}
                                <input type='text' style='display: none;' name='housemateAllergyDetailRelation[]' value="{{$relation}}">
                                @endforeach
                                @foreach ($data['housemateAllergyDetailAllergy'] as $allergy)
                                <input type='text' style='display: none;' name='housemateAllergyDetailAllergy[]' value="{{$allergy}}">
                                @endforeach
                            </td>
                        </tr>
                        @endif
                        <tr align="center">
                            <td>住居タイプ</td>
                            <td>{{$data['houseType']}}</td>
                            <input type='text' style='display: none;' name='houseType' value="{{$data['houseType']}}">
                        </tr>
                        <tr align="center">
                            <td>ペット飼育の可否</td>
                            <td>{{$data['landlordAgreement']}}</td>
                            <input type='text' style='display: none;' name='landlordAgreement' value="{{$data['landlordAgreement']}}">
                        </tr>
                        <tr align="center">
                            <td>一年以内の転居・転勤</td>
                            <td>{{$data['transfer']}}</td>
                            <input type='text' style='display: none;' name='transfer' value="{{$data['transfer']}}">
                        </tr>
                        <tr align="center">
                            <td>募集者による自宅訪問の可否</td>
                            <td>{{$data['visitable']}}</td>
                            <input type='text' style='display: none;' name='visitable' value="{{$data['visitable']}}">
                        </tr>
                        <tr align="center">
                            <td>飼育場所</td>
                            <td>{{$data['place']}}</td>
                            <input type='text' style='display: none;' name='breedingPlace' value="{{$data['place']}}">
                        </tr>
                        <tr align="center">
                            <td>ペットが単独になる時間</td>
                            <td>{{$data['aloneHours']}}</td>
                            <input type='text' style='display: none;' name='aloneHours' value="{{$data['aloneHours']}}">
                        </tr>
                        <tr align="center">
                            <td>ペット飼育経験の有無</td>
                            <td>{{$data['experience']}}</td>
                        </tr>
                        <tr align="center">
                            <td>現在のペット飼育状況</td>
                            <td>
                                @if (count($data['pets']) > 2)
                                    @foreach ($data['pets'] as $pet)
                                        @if ($pet != '飼っていない' && $pet != 'sample')
                                            {{$pet}}
                                        <input type='text' style='display: none;' name='pet[]' value="{{$pet}}">

                                        @endif
                                    @endforeach
                                @elseif (count($data['pets']) > 1)
                                    @foreach ($data['pets'] as $pet)
                                        @if ($pet != '飼っていない' && $pet != 'sample')
                                            {{$pet}}
                                        <input type='text' style='display: none;' name='pet[]' value="{{$pet}}">
                                        @elseif ($pet != 'sample')
                                            飼っていない
                                        <input type='text' style='display: none;' name='pet[]' value="飼っていない">
                                        @endif
                                    @endforeach
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- <input type="radio" style='display: none;'  name='data' value=''checked> -->
            <div class="buttons">
                <input type="button" value="内容を修正する" onclick="history.back(-1)" class="fixButton">
                <button type="submit" name="submit" class="submitButton">送信する</button>
            </div>
        </form>
    </div>
</div>
@endsection