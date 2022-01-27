@extends('layouts.base')
@section('head')
<script src="{{ asset('js/FosterquestionnaireScript.js') }}" defer></script>
<link href="{{ asset('css/FosterquestionnaireStyle.css') }}" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
@endsection

@section('content')
<div id="wrapper">
    <ul class="breadcrumb">
        <li><a href="{{ route('home') }}">HOME</a></li>
        <li><a href="{{ route('register') }}">マイページ</a></li>
        <li>アンケート</li>
    </ul>

    <div id="a">
        <h1>※一般（里親希望者）のみ</h1>
        <h2>アンケート登録・編集</h2>
        <p>保護活動者（里親募集者）はこのアンケート情報をもとに里親の適正の判断をします<br>
            なるべく詳細な情報の提供にご協力ください</p>
    </div>

    <form method="POST" action="/confirmQuestionnaire">
        @csrf
        <div id="b">
            <div class="cohabit">
                <p class="l">同居について</p>
                <dl>
                    <dt><span class="must">必須</span>同居人の有無</dt>
                    <dd>
                        <label><input type="radio" name="switch"
                                onclick="document.getElementById('xyz').style.display = 'block';document.getElementById('al').style.display = 'block';document.getElementById('re').style.display = 'none';"
                                value='あり(家族)' checked>あり(家族)</label>
                        <label><input type="radio" name="switch"
                                onclick="document.getElementById('xyz').style.display = 'block';document.getElementById('al').style.display = 'block';document.getElementById('re').style.display = 'none';"
                                value='あり(家族以外)'>あり(家族以外)</label>
                        <label><input type="radio" name="switch"
                                onclick="document.getElementById('xyz').style.display = 'none';document.getElementById('al').style.display = 'none';document.getElementById('re').style.display = 'block';"
                                value='なし(単身)'>なし(単身)</label>
                    </dd>

                    <div id="xyz">

                        <dt><span class="must">必須</span>本人以外の同居人</dt>
                        <dd>
                            人数
                            <select name="housemateNumber" id='housemateNumber'>
                                <option value="1" selected>1人</option>
                                <option value="2">2人</option>
                                <option value="3">3人</option>
                                <option value="4">4人</option>
                                <option value="5">5人</option>
                                <option value="6">6人</option>
                                <option value="7">7人以上</option>
                            </select>
                        </dd>


                        <script>
                            window.addEventListener('DOMContentLoaded', function () {
                                $(function ($) {
                                    $('#housemateNumber').change(function () {
                                        $('#P').empty();
                                        for (var i = 0; i < $(this).val(); i++) {
                                            var addForm = $(
                                                '<p>続柄・関係<select name="housemateDetailRelation[]" id="relationship1"><option value="配偶者" selected>配偶者</option><option value="子ども">子ども</option><option value="父">父</option><option value="母">母</option><option value="兄弟・姉妹">兄弟・姉妹</option><option value="祖父">祖父</option><option value="祖母">祖母</option><option value="叔父">叔父</option><option value="叔母">叔母</option><option value="孫">孫</option><option value="甥姪">甥姪</option><option value="その他">その他</option></select>年齢<select name="housemateDetailAge[]" id="age"><option value="3歳未満">3歳未満</option><option value="3歳～6歳未満">3歳～6歳未満</option><option value="6歳～10歳未満">6歳～10歳未満</option><option value="10歳～20歳未満">10歳～20歳未満</option><option value="20歳～30歳未満">20歳～30歳未満</option><option value="30歳～40歳未満">30歳～40歳未満</option><option value="40歳～50歳未満">40歳～50歳未満</option><option value="50歳～60歳未満">50歳～60歳未満</option><option value="60歳～70歳未満">60歳～70歳未満</option><option value="70歳～80歳未満">70歳～80歳未満</option><option value="80歳～90歳未満">80歳～90歳未満</option><option value="90歳～100歳未満">90歳～100歳未満</option><option value="100歳以上">100歳以上</option></select>歳</p>'
                                            );
                                            $('#P').append(addForm);

                                        }
                                    });
                                });
                            });

                        </script>



                        <dd id="P">
                            続柄・関係
                            <select name="housemateDetailRelation[]" id="relationship1">
                                <option value="配偶者" selected>配偶者</option>
                                <option value="配偶者">子ども</option>
                                <option value="父">父</option>
                                <option value="母">母</option>
                                <option value="兄弟・姉妹">兄弟・姉妹</option>
                                <option value="祖父">祖父</option>
                                <option value="祖母">祖母</option>
                                <option value="叔父">叔父</option>
                                <option value="叔母">叔母</option>
                                <option value="孫">孫</option>
                                <option value="甥姪">甥姪</option>
                                <option value="その他">その他</option>
                            </select>

                            年齢
                            <select name="housemateDetailAge[]" id="age">
                                <option value="3歳未満" selected>3歳未満</option>
                                <option value="3歳～6歳未満">3歳～6歳未満</option>
                                <option value="6歳～10歳未満">6歳～10歳未満</option>
                                <option value="10歳～20歳未満">10歳～20歳未満</option>
                                <option value="20歳～30歳未満">20歳～30歳未満</option>
                                <option value="30歳～40歳未満">30歳～40歳未満</option>
                                <option value="40歳～50歳未満">40歳～50歳未満</option>
                                <option value="50歳～60歳未満">50歳～60歳未満</option>
                                <option value="60歳～70歳未満">60歳～70歳未満</option>
                                <option value="70歳～80歳未満">70歳～80歳未満</option>
                                <option value="80歳～90歳未満">80歳～90歳未満</option>
                                <option value="90歳～100歳未満">90歳～100歳未満</option>
                                <option value="100歳以上">100歳以上</option>
                            </select>
                            歳
                        </dd>
                        <dt><span class="must">必須</span>家族全員のペット飼育同意</dt>
                        <dd>
                            <label><input type="radio" name="housemateAgreement" value='あり' checked>あり</label>
                            <label><input type="radio" name="housemateAgreement" value='なし'>なし</label>
                        </dd>
                    </div>

                    <dt><span class="must">必須</span>アレルギーの有無</dt>
                    <dd>
                        <p>※ご本人・または同居している方にアレルギー保有の有無を選択してください</p>
                        <label><input type="radio" name="allergies"
                                onclick="document.getElementById('abc').style.display = 'block';" value='あり'
                                checked>あり</label>
                        <label><input type="radio" name="allergies"
                                onclick="document.getElementById('abc').style.display = 'none';" value='なし'>なし</label>
                    </dd>

                    <div id="abc">

                        <script type="module">
                            window.addEventListener('DOMContentLoaded', function () {
                                $(document).on("click", ".add", function () {
                                $(this).parent().clone(true).insertAfter($(this).parent());
                                }); 
                                $(document).on("click", ".del", function () {
                                var target = $(this).parent();
                                if (target.parent().children().length > 1) {
                                    target.remove();
                                }
                            });
                            });

                        </script>

                        <dd id='al'>
                            <div id="input_pluralBox">
                                <div id="input_plural">

                                    続柄・関係
                                    <select name="housemateAllergyDetailRelation[]" id="relationship2">
                                        <option value="自分" selected>自分</option>
                                        <option value="配偶者">配偶者</option>
                                        <option value="子ども">子ども</option>
                                        <option value="父">父</option>
                                        <option value="母">母</option>
                                        <option value="兄弟・姉妹">兄弟・姉妹</option>
                                        <option value="祖父">祖父</option>
                                        <option value="祖母">祖母</option>
                                        <option value="叔父">叔父</option>
                                        <option value="叔母">叔母</option>
                                        <option value="孫">孫</option>
                                        <option value="甥姪">甥姪</option>
                                        <option value="その他">その他</option>
                                    </select>

                                    アレルギー
                                    <select name="housemateAllergyDetailAllergy[]" id="allergy">
                                        <option value="犬アレルギー" selected>犬アレルギー</option>
                                        <option value="猫アレルギー">猫アレルギー</option>
                                    </select>

                                    <input type="button" value="＋選択追加" class="add pluralBtn">
                                    <input type="button" value="削除" class="del pluralBtn">
                                </div>
                            </div>
                        </dd>
                        <dd id='re' style='display: none;'>
                            アレルギー
                            <select name="housemateAllergyDetailAllergySolo" id="allergy">
                                <option value="犬アレルギー" selected>犬アレルギー</option>
                                <option value="猫アレルギー">猫アレルギー</option>
                            </select>
                        </dd>
                    </div>
                </dl>
            </div>

            <div class="house">
                <p class="l">お住まいについて</p>
                <dl>
                    <dt><span class="must">必須</span>住居タイプ</dt>
                    <dd>
                        【自家】
                        <label><input type="radio" name="houseType" value='持ち家:戸建て' checked>戸建て</label>
                        <label><input type="radio" name="houseType" value='持ち家:マンション'>マンション</label>
                    <dd>
                        【賃貸】
                        <label><input type="radio" name="houseType" value='賃貸:戸建て'>戸建て</label>
                        <label><input type="radio" name="houseType" value='賃貸:マンション'>マンション</label>
                        <label><input type="radio" name="houseType" value='賃貸:アパート'>アパート</label>
                        <label><input type="radio" name="houseType" value='賃貸:社宅・寮・公営住宅'>社宅・寮・公営住宅</label>
                        <label><input type="radio" name="houseType" value='賃貸:その他'>その他</label>
                    </dd>
                    <dt><span class="must">必須</span>ペット飼育の可否</dt>
                    <dd>
                        <label><input type="radio" name="landlordAgreement" value='可' checked>可</label>
                        <label><input type="radio" name="landlordAgreement" value='不可'>不可</label>
                    </dd>
                    <dt><span class="must">必須</span>一年以内の転居・転勤</dt>
                    <dd>
                        <label><input type="radio" name="transfer" value='なし' checked>なし</label>
                        <label><input type="radio" name="transfer" value='あり'>あり</label>
                    </dd>
                    <dt><span class="must">必須</span>募集者による自宅訪問の可否</dt>
                    <dd>
                        <label><input type="radio" name="visitable" value='可' checked>可</label>
                        <label><input type="radio" name="visitable" value='不可'>不可</label>
                        <p>※募集者が飼育環境の確認のため、自宅へ訪問する場合があります。</p>
                    </dd>
                </dl>
            </div>

            <div class="breeding">
                <p class="l">ペット飼育について</p>
                <dl>
                    <dt><span class="must">必須</span>飼育場所</dt>
                    <dd>
                        <label><input type="radio" name="place" value='室内' checked>室内</label>
                        <label><input type="radio" name="place" value='屋外'>室外</label>
                    </dd>
                    <dt><span class="must">必須</span>ペットが単独になる時間</dt>
                    <dd>
                        <select name='aloneHours'>
                            <option value='1時間未満' selected>1時間未満</option>
                            <option value='約1時間'>約1時間</option>
                            <option value='約2時間'>約2時間</option>
                            <option value='約3時間'>約3時間</option>
                            <option value='約4時間'>約4時間</option>
                            <option value='約5時間'>約5時間</option>
                            <option value='約6時間'>約6時間</option>
                            <option value='約7時間'>約7時間</option>
                            <option value='約8時間以上'>約8時間以上</option>
                        </select>
                    </dd>
                    <dt><span class="must">必須</span>ペット飼育経験の有無</dt>
                    <dd>
                        <label><input type="radio" name="experience" value='あり' checked>あり</label>
                        <label><input type="radio" name="experience" value='なし'>なし</label>
                    </dd>
                    <dt><span class="must">必須</span>現在のペット飼育状況</dt>
                    <dd>
                        <label><input type="checkbox" name="pets[]" value="猫">猫</label>
                        <label><input type="checkbox" name="pets[]" value="犬">犬</label>
                        <label><input type="checkbox" name="pets[]" value="小動物">小動物</label>
                        <label><input type="checkbox" name="pets[]" value="鳥">鳥</label>
                        <label><input type="checkbox" name="pets[]" value="爬虫類">爬虫類</label>
                        <label><input type="checkbox" name="pets[]" value="その他">その他</label>
                        <label><input type="checkbox" name="pets[]" value="飼っていない" checked>飼っていない</label>
                        <input type="checkbox" name="pets[]" value="sample" style='display: none;' checked>
                    </dd>
                </dl>
            </div>
        </div>

        <div id="c">
            <div class="d">
                <h2>ご入力いただいたアンケート内容は里親募集者(保護活動者)に開示いたします</h2>
                <h4>個人情報の取り扱いについて</h4>
            </div>

            <div class="e">
                <p>下記の個人情報の取り扱いについてご確認の上、【同意して確認画面へ】ボタンを押してください</p>


                <p id="submit_button">
                    <input type="submit" value="同意して確認画面へ">
                </p>
            </div>
        </div>
    </form>
</div>
@endsection
