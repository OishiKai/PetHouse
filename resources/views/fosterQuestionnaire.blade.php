@extends('layouts.app')

@section('head')
<script src="{{ asset('js/formSwitchThird.js') }}" defer></script>
<script src="{{ asset('js/renderPulldown.js') }}" defer></script>
<!-- <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script> -->
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('里親アンケート') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- 同居人の有無-->
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('同居人の有無') }}</label>
                            <div class="col-md-6">
                                <form>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="switch" value='あり(家族)' onclick=" formSwitchThird()" checked>
                                        <label class="form-check-label"> あり(家族)</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="switch" value='あり(家族以外)' onclick=" formSwitchThird()">
                                        <label class="form-check-label"> あり(家族以外)</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="switch" value='なし'onclick="formSwitchThird()">
                                        <label class="form-check-label"> なし</label>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- 同居人の人数-->
                        <div id='default'>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('本人以外の同居人') }}</label>
                                <div class="col-md-6">
                                    <select id='housemate' name='housemateNumber' onchange='renderPulldown(1)'>
                                        <option value='1' selected>1人</option>
                                        <option value='2'>2人</option>
                                        <option value='3'>3人</option>
                                        <option value='4'>4人</option>
                                        <option value='5'>5人</option>
                                        <option value='6'>6人</option>
                                        <option value='7'>7人</option>
                                        <option value='8'>8人</option>
                                        <option value='9'>9人</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('同居人の続柄/年齢') }}</label>
                                <div class="col-md-6">
                                    <div id='pd1' class='form-group row'>
                                        <select name='housemateDetail1relation'>
                                            <option value='配偶者'>配偶者</option><option value='子ども'>子ども</option><option value='父'>父</option><option value='母'>母</option><option value='兄弟・姉妹'>兄弟・姉妹</option><option value='祖父'>祖父</option><option value='祖母'>祖母</option><option value='孫'>孫</option><option value='その他'>その他</option>
                                        </select>
                                        <select name='housemateDetail1age'>
                                            <option value='3歳未満'>3歳未満</option><option value='6歳未満'>6歳未満</option><option value='10歳未満'>10歳未満</option><option value='10歳以上'>10歳以上</option><option value='20歳以上'>20歳以上</option><option value='30歳以上'>30歳以上</option><option value='40歳以上'>40歳以上</option><option value='50歳以上'>50歳以上</option><option value='60歳以上'>60歳以上</option><option value='70歳以上'>70歳以上</option><option value='80歳以上'>80歳以上</option><option value='90歳以上'>90歳以上</option><option value='100歳以上'>100歳以上</option>
                                        </select>
                                    </div>
                                    <div id='pd2' class='form-group row' style="display: none;">
                                        <select name='housemateDetail2relation'>
                                            <option value='配偶者'>配偶者</option><option value='子ども'>子ども</option><option value='父'>父</option><option value='母'>母</option><option value='兄弟・姉妹'>兄弟・姉妹</option><option value='祖父'>祖父</option><option value='祖母'>祖母</option><option value='孫'>孫</option><option value='その他'>その他</option>
                                        </select>
                                        <select name='housemateDetail2age'>
                                            <option value='3歳未満'>3歳未満</option><option value='6歳未満'>6歳未満</option><option value='10歳未満'>10歳未満</option><option value='10歳以上'>10歳以上</option><option value='20歳以上'>20歳以上</option><option value='30歳以上'>30歳以上</option><option value='40歳以上'>40歳以上</option><option value='50歳以上'>50歳以上</option><option value='60歳以上'>60歳以上</option><option value='70歳以上'>70歳以上</option><option value='80歳以上'>80歳以上</option><option value='90歳以上'>90歳以上</option><option value='100歳以上'>100歳以上</option>
                                        </select>
                                    </div>
                                    <div id='pd3' class='form-group row' style="display: none;">
                                        <select name='housemateDetail3relation'>
                                            <option value='配偶者'>配偶者</option><option value='子ども'>子ども</option><option value='父'>父</option><option value='母'>母</option><option value='兄弟・姉妹'>兄弟・姉妹</option><option value='祖父'>祖父</option><option value='祖母'>祖母</option><option value='孫'>孫</option><option value='その他'>その他</option>
                                        </select>
                                        <select name='housemateDetail3age' >
                                            <option value='3歳未満'>3歳未満</option><option value='6歳未満'>6歳未満</option><option value='10歳未満'>10歳未満</option><option value='10歳以上'>10歳以上</option><option value='20歳以上'>20歳以上</option><option value='30歳以上'>30歳以上</option><option value='40歳以上'>40歳以上</option><option value='50歳以上'>50歳以上</option><option value='60歳以上'>60歳以上</option><option value='70歳以上'>70歳以上</option><option value='80歳以上'>80歳以上</option><option value='90歳以上'>90歳以上</option><option value='100歳以上'>100歳以上</option>
                                        </select>
                                    </div>
                                    <div id='pd4' class='form-group row' style="display: none;">
                                        <select name='housemateDetail4relation'>
                                            <option value='配偶者'>配偶者</option><option value='子ども'>子ども</option><option value='父'>父</option><option value='母'>母</option><option value='兄弟・姉妹'>兄弟・姉妹</option><option value='祖父'>祖父</option><option value='祖母'>祖母</option><option value='孫'>孫</option><option value='その他'>その他</option>
                                        </select>
                                        <select name='housemateDetail4age'>
                                            <option value='3歳未満'>3歳未満</option><option value='6歳未満'>6歳未満</option><option value='10歳未満'>10歳未満</option><option value='10歳以上'>10歳以上</option><option value='20歳以上'>20歳以上</option><option value='30歳以上'>30歳以上</option><option value='40歳以上'>40歳以上</option><option value='50歳以上'>50歳以上</option><option value='60歳以上'>60歳以上</option><option value='70歳以上'>70歳以上</option><option value='80歳以上'>80歳以上</option><option value='90歳以上'>90歳以上</option><option value='100歳以上'>100歳以上</option>
                                        </select>
                                    </div>
                                    <div id='pd5' class='form-group row' style="display: none;">
                                        <select name='housemateDetail5relation'>
                                            <option value='配偶者'>配偶者</option><option value='子ども'>子ども</option><option value='父'>父</option><option value='母'>母</option><option value='兄弟・姉妹'>兄弟・姉妹</option><option value='祖父'>祖父</option><option value='祖母'>祖母</option><option value='孫'>孫</option><option value='その他'>その他</option>
                                        </select>
                                        <select name='housemateDetail5age'>
                                            <option value='3歳未満'>3歳未満</option><option value='6歳未満'>6歳未満</option><option value='10歳未満'>10歳未満</option><option value='10歳以上'>10歳以上</option><option value='20歳以上'>20歳以上</option><option value='30歳以上'>30歳以上</option><option value='40歳以上'>40歳以上</option><option value='50歳以上'>50歳以上</option><option value='60歳以上'>60歳以上</option><option value='70歳以上'>70歳以上</option><option value='80歳以上'>80歳以上</option><option value='90歳以上'>90歳以上</option><option value='100歳以上'>100歳以上</option>
                                        </select>
                                    </div>
                                    <div id='pd6' class='form-group row' style="display: none;">
                                        <select name='housemateDetail6relation'>
                                            <option value='配偶者'>配偶者</option><option value='子ども'>子ども</option><option value='父'>父</option><option value='母'>母</option><option value='兄弟・姉妹'>兄弟・姉妹</option><option value='祖父'>祖父</option><option value='祖母'>祖母</option><option value='孫'>孫</option><option value='その他'>その他</option>
                                        </select>
                                        <select name='housemateDetail6age'>
                                            <option value='3歳未満'>3歳未満</option><option value='6歳未満'>6歳未満</option><option value='10歳未満'>10歳未満</option><option value='10歳以上'>10歳以上</option><option value='20歳以上'>20歳以上</option><option value='30歳以上'>30歳以上</option><option value='40歳以上'>40歳以上</option><option value='50歳以上'>50歳以上</option><option value='60歳以上'>60歳以上</option><option value='70歳以上'>70歳以上</option><option value='80歳以上'>80歳以上</option><option value='90歳以上'>90歳以上</option><option value='100歳以上'>100歳以上</option>
                                        </select>
                                    </div>
                                    <div id='pd7' class='form-group row' style="display: none;">
                                        <select name='housemateDetail7relation'>
                                            <option value='配偶者'>配偶者</option><option value='子ども'>子ども</option><option value='父'>父</option><option value='母'>母</option><option value='兄弟・姉妹'>兄弟・姉妹</option><option value='祖父'>祖父</option><option value='祖母'>祖母</option><option value='孫'>孫</option><option value='その他'>その他</option>
                                        </select>
                                        <select name='housemateDetail7age'>
                                            <option value='3歳未満'>3歳未満</option><option value='6歳未満'>6歳未満</option><option value='10歳未満'>10歳未満</option><option value='10歳以上'>10歳以上</option><option value='20歳以上'>20歳以上</option><option value='30歳以上'>30歳以上</option><option value='40歳以上'>40歳以上</option><option value='50歳以上'>50歳以上</option><option value='60歳以上'>60歳以上</option><option value='70歳以上'>70歳以上</option><option value='80歳以上'>80歳以上</option><option value='90歳以上'>90歳以上</option><option value='100歳以上'>100歳以上</option>
                                        </select>
                                    </div>
                                    <div id='pd8' class='form-group row' style="display: none;">
                                        <select name='housemateDetail8relation'>
                                            <option value='配偶者'>配偶者</option><option value='子ども'>子ども</option><option value='父'>父</option><option value='母'>母</option><option value='兄弟・姉妹'>兄弟・姉妹</option><option value='祖父'>祖父</option><option value='祖母'>祖母</option><option value='孫'>孫</option><option value='その他'>その他</option>
                                        </select>
                                        <select name='housemateDetail8age'>
                                            <option value='3歳未満'>3歳未満</option><option value='6歳未満'>6歳未満</option><option value='10歳未満'>10歳未満</option><option value='10歳以上'>10歳以上</option><option value='20歳以上'>20歳以上</option><option value='30歳以上'>30歳以上</option><option value='40歳以上'>40歳以上</option><option value='50歳以上'>50歳以上</option><option value='60歳以上'>60歳以上</option><option value='70歳以上'>70歳以上</option><option value='80歳以上'>80歳以上</option><option value='90歳以上'>90歳以上</option><option value='100歳以上'>100歳以上</option>
                                        </select>
                                    </div>
                                    <div id='pd9' class='form-group row' style="display: none;">
                                        <select name='housemateDetail9relation'>
                                            <option value='配偶者'>配偶者</option><option value='子ども'>子ども</option><option value='父'>父</option><option value='母'>母</option><option value='兄弟・姉妹'>兄弟・姉妹</option><option value='祖父'>祖父</option><option value='祖母'>祖母</option><option value='孫'>孫</option><option value='その他'>その他</option>
                                        </select>
                                        <select name='housemateDetail9age'>
                                            <option value='3歳未満'>3歳未満</option><option value='6歳未満'>6歳未満</option><option value='10歳未満'>10歳未満</option><option value='10歳以上'>10歳以上</option><option value='20歳以上'>20歳以上</option><option value='30歳以上'>30歳以上</option><option value='40歳以上'>40歳以上</option><option value='50歳以上'>50歳以上</option><option value='60歳以上'>60歳以上</option><option value='70歳以上'>70歳以上</option><option value='80歳以上'>80歳以上</option><option value='90歳以上'>90歳以上</option><option value='100歳以上'>100歳以上</option>
                                        </select>
                                    </div>
                                </div>

                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('同居人の合意') }}</label>
                                <div class="col-md-6">
                                    <form>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="housemateAgreement" value='あり' checked>
                                            <label class="form-check-label"> あり</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="housemateAgreement" value='なし'>
                                            <label class="form-check-label"> なし</label>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('アレルギーの有無') }}</label>
                                <div class="col-md-6">
                                    <select id='allergy' name='housemateAllergy' onchange='renderPulldown(2)'>
                                        <option value='なし'>なし</option>
                                        <option value='1'>1人</option>
                                        <option value='2'>2人</option>
                                        <option value='3'>3人</option>
                                        <option value='4'>4人</option>
                                        <option value='5'>5人</option>
                                        <option value='6'>6人</option>
                                        <option value='7'>7人</option>
                                        <option value='8'>8人</option>
                                        <option value='9'>9人</option>
                                    </select>
                                </div>
                            </div>
                        

                            <div class="form-group row" id='allergyDetail' style="display: none;">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('アレルギーの詳細') }}</label>
                                <div class="col-md-6">
                                    <div id='al1' class='form-group row'>
                                        <select name='housemateAllergyDetail1relation'>
                                        <option value='本人'>本人</option><option value='配偶者'>配偶者</option><option value='子ども'>子ども</option><option value='父'>父</option><option value='母'>母</option><option value='兄弟・姉妹'>兄弟・姉妹</option><option value='祖父'>祖父</option><option value='祖母'>祖母</option><option value='孫'>孫</option><option value='その他'>その他</option>
                                        </select>
                                        <select name='housemateAllergyDetail1allergy'>
                                        <option value='犬アレルギー'>犬アレルギー</option><option value='猫アレルギー'>猫アレルギー</option>
                                        </select>
                                    </div>
                                    <div id='al2' class='form-group row'>
                                        <select name='housemateAllergyDetail2relation'>
                                        <option value='本人'>本人</option><option value='配偶者'>配偶者</option><option value='子ども'>子ども</option><option value='父'>父</option><option value='母'>母</option><option value='兄弟・姉妹'>兄弟・姉妹</option><option value='祖父'>祖父</option><option value='祖母'>祖母</option><option value='孫'>孫</option><option value='その他'>その他</option>
                                        </select>
                                        <select name='housemateAllergyDetail2allergy'>
                                        <option value='犬アレルギー'>犬アレルギー</option><option value='猫アレルギー'>猫アレルギー</option>
                                        </select>
                                    </div>
                                    <div id='al3' class='form-group row'>
                                        <select name='housemateAllergyDetail3relation'>
                                        <option value='本人'>本人</option><option value='配偶者'>配偶者</option><option value='子ども'>子ども</option><option value='父'>父</option><option value='母'>母</option><option value='兄弟・姉妹'>兄弟・姉妹</option><option value='祖父'>祖父</option><option value='祖母'>祖母</option><option value='孫'>孫</option><option value='その他'>その他</option>
                                        </select>
                                        <select name='housemateAllergyDetail3allergy'>
                                        <option value='犬アレルギー'>犬アレルギー</option><option value='猫アレルギー'>猫アレルギー</option>
                                        </select>
                                    </div>
                                    <div id='al4' class='form-group row'>
                                        <select name='housemateAllergyDetail4relation'>
                                        <option value='本人'>本人</option><option value='配偶者'>配偶者</option><option value='子ども'>子ども</option><option value='父'>父</option><option value='母'>母</option><option value='兄弟・姉妹'>兄弟・姉妹</option><option value='祖父'>祖父</option><option value='祖母'>祖母</option><option value='孫'>孫</option><option value='その他'>その他</option>
                                        </select>
                                        <select name='housemateAllergyDetail4allergy'>
                                        <option value='犬アレルギー'>犬アレルギー</option><option value='猫アレルギー'>猫アレルギー</option>
                                        </select>
                                    </div>
                                    <div id='al5' class='form-group row'>
                                        <select name='housemateAllergyDetail5relation'>
                                        <option value='本人'>本人</option><option value='配偶者'>配偶者</option><option value='子ども'>子ども</option><option value='父'>父</option><option value='母'>母</option><option value='兄弟・姉妹'>兄弟・姉妹</option><option value='祖父'>祖父</option><option value='祖母'>祖母</option><option value='孫'>孫</option><option value='その他'>その他</option>
                                        </select>
                                        <select name='housemateAllergyDetail5allergy'>
                                        <option value='犬アレルギー'>犬アレルギー</option><option value='猫アレルギー'>猫アレルギー</option>
                                        </select>
                                    </div>
                                    <div id='al6' class='form-group row'>
                                        <select name='housemateAllergyDetail6relation'>
                                        <option value='本人'>本人</option><option value='配偶者'>配偶者</option><option value='子ども'>子ども</option><option value='父'>父</option><option value='母'>母</option><option value='兄弟・姉妹'>兄弟・姉妹</option><option value='祖父'>祖父</option><option value='祖母'>祖母</option><option value='孫'>孫</option><option value='その他'>その他</option>
                                        </select>
                                        <select name='housemateAllergyDetail6allergy'>
                                        <option value='犬アレルギー'>犬アレルギー</option><option value='猫アレルギー'>猫アレルギー</option>
                                        </select>
                                    </div>
                                    <div id='al7' class='form-group row'>
                                        <select name='housemateAllergyDetail7relation'>
                                        <option value='本人'>本人</option><option value='配偶者'>配偶者</option><option value='子ども'>子ども</option><option value='父'>父</option><option value='母'>母</option><option value='兄弟・姉妹'>兄弟・姉妹</option><option value='祖父'>祖父</option><option value='祖母'>祖母</option><option value='孫'>孫</option><option value='その他'>その他</option>
                                        </select>
                                        <select name='housemateAllergyDetail7allergy'>
                                        <option value='犬アレルギー'>犬アレルギー</option><option value='猫アレルギー'>猫アレルギー</option>
                                        </select>
                                    </div>
                                    <div id='al8' class='form-group row'>
                                        <select name='housemateAllergyDetail8relation'>
                                        <option value='本人'>本人</option><option value='配偶者'>配偶者</option><option value='子ども'>子ども</option><option value='父'>父</option><option value='母'>母</option><option value='兄弟・姉妹'>兄弟・姉妹</option><option value='祖父'>祖父</option><option value='祖母'>祖母</option><option value='孫'>孫</option><option value='その他'>その他</option>
                                        </select>
                                        <select name='housemateAllergyDetail8allergy'>
                                        <option value='犬アレルギー'>犬アレルギー</option><option value='猫アレルギー'>猫アレルギー</option>
                                        </select>
                                    </div>
                                    <div id='al9' class='form-group row'>
                                        <select name='housemateAllergyDetail9relation'>
                                        <option value='本人'>本人</option><option value='配偶者'>配偶者</option><option value='子ども'>子ども</option><option value='父'>父</option><option value='母'>母</option><option value='兄弟・姉妹'>兄弟・姉妹</option><option value='祖父'>祖父</option><option value='祖母'>祖母</option><option value='孫'>孫</option><option value='その他'>その他</option>
                                        </select>
                                        <select name='housemateAllergyDetail9allergy'>
                                        <option value='犬アレルギー'>犬アレルギー</option><option value='猫アレルギー'>猫アレルギー</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div id='another'>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('アレルギーの有無') }}</label>
                                <div class="col-md-6">
                                    <select id='allergy' name='housemateAllergy'>
                                        <option value='なし'>なし</option>
                                        <option value='1'>犬アレルギー</option>
                                        <option value='2'>猫アレルギー</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('住居タイプ') }}</label>
                            <div class="col-md-6">
                                <select name='houseType'>
                                    <option value='持ち家:戸建て'>持ち家:戸建て</option>
                                    <option value='持ち家:マンション'>持ち家:マンション</option>
                                    <option value='賃貸:戸建て'>賃貸:戸建て</option>
                                    <option value='賃貸:マンション'>賃貸:マンション</option>
                                    <option value='賃貸:アパート'>賃貸:アパート</option>
                                    <option value='賃貸:社宅・寮・公営住宅'>賃貸:社宅・寮・公営住宅</option>
                                    <option value='賃貸:その他'>賃貸:その他</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('住居のペット飼育の可否') }}</label>
                            <div class="col-md-6">
                                <form>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="landlordAgreement" value='可' checked>
                                        <label class="form-check-label"> 可</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="landlordAgreement" value='不可'>
                                        <label class="form-check-label"> 不可</label>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('一年以内の転居・転勤') }}</label>
                            <div class="col-md-6">
                                <form>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="transfer" value='なし' checked>
                                        <label class="form-check-label"> なし</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="transfer" value='あり'>
                                        <label class="form-check-label"> あり</label>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('募集者による自宅訪問可否') }}</label>
                            <div class="col-md-6">
                                <form>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="visitable" value='可' checked>
                                        <label class="form-check-label"> 可</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="visitable" value='不可'>
                                        <label class="form-check-label"> 不可</label>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('飼育場所') }}</label>
                            <div class="col-md-6">
                                <form>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="breedingPlace" value='室内' checked>
                                        <label class="form-check-label"> 室内</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="breedingPlace" value='屋外'>
                                        <label class="form-check-label"> 屋外</label>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('ペットが単独になる時間') }}</label>
                            <div class="col-md-6">
                                <select name='aloneHours'>
                                    <option value='1時間未満'>1時間未満</option>
                                    <option value='約1時間'>約1時間</option>
                                    <option value='約2時間'>約2時間</option>
                                    <option value='約3時間'>約3時間</option>
                                    <option value='約4時間'>約4時間</option>
                                    <option value='約5時間'>約5時間</option>
                                    <option value='約6時間'>約6時間</option>
                                    <option value='約7時間'>約7時間</option>
                                    <option value='約8時間以上'>約8時間以上</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('現在飼育中のペット状況') }}</label>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="chk01" value="飼っていない">
                                    <label class="form-check-label" for="chk01">飼っていない</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="chk02" value="犬">
                                    <label class="form-check-label" for="chk02">犬</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="chk03" value="猫">
                                    <label class="form-check-label" for="chk03">猫</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="chk04" value="小動物">
                                    <label class="form-check-label" for="chk03">小動物</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="chk05" value="鳥類">
                                    <label class="form-check-label" for="chk03">鳥類</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="chk06" value="爬虫類">
                                    <label class="form-check-label" for="chk03">爬虫類</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="chk07" value="その他">
                                    <label class="form-check-label" for="chk03">その他</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('回答') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
