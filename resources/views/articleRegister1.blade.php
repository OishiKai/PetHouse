@extends('layouts.base')

@section('head')
<link rel="stylesheet" href="{{ asset('css/articleStyle.css') }}">
@endsection

@section('content')
<div class="contents-container">

    <h1 class="label-title">ペット情報登録　1/3</h1>

    <form id="pet_information" method="POST" action="{{ route('articleRegisterA') }}">
        @csrf
        <div class="pet_information">

            <dl>
                <!--ペット種別-->
                <dt><span class="must">必須</span>ペット種別</dt>
                <dd>
                    <label><input type="radio" name="switch" id="pet1" value="犬"
                            onclick="connectbreed1(this.checked);" checked>犬</label>
                    <label><input type="radio" name="switch" id="pet2" value="猫"
                            onclick="connectbreed2(this.checked);">猫</label><br>

                    <select name="speciesDog" id="dog_breed">
                        <!-- <option disabled selected>犬種を選択してください</option> -->
                        <option value="雑種" selected>雑種</option>
                        <option value="柴犬">柴犬</option>
                        <option value="ポメラニアン">ポメラニアン</option>
                        <option value="トイプードル">トイプードル</option>
                        <option value="ダックスフント">ダックスフント</option>
                        <option value="コーギー">コーギー</option>
                        <option value="チワワ">チワワ</option>
                        <option value="その他">その他</option>
                    </select>

                    <select name="speciesCat" id="cat_breed" disabled>
                        <!-- <option disabled selected>猫種を選択してください</option> -->
                        <option value="雑種" selected>雑種</option>
                        <option value="アメリカンショート">アメリカンショート</option>
                        <option value="マンチカン">マンチカン</option>
                        <option value="スコティッシュフォールド">スコティッシュフォールド</option>
                        <option value="エキゾチックショートヘアー">エキゾチックショートヘアー</option>
                        <option value="ミヌエット">ミヌエット</option>
                        <option value="ブリティッシュショートヘアー">ブリティッシュショートヘアー</option>
                        <option value="その他">その他</option>
                    </select>
                </dd>

                <script>
                    function connectbreed1(ischecked) {
                        if (ischecked == true) {
                            document.getElementById("dog_breed").disabled = false;
                            document.getElementById("cat_breed").disabled = true;
                        } else {
                            document.getElementById("dog_breed").disabled = true;
                            document.getElementById("cat_breed").disabled = false;
                        }
                    }

                    function connectbreed2(ischecked) {
                        if (ischecked == true) {
                            document.getElementById("dog_breed").disabled = true;
                            document.getElementById("cat_breed").disabled = false;
                        } else {
                            document.getElementById("dog_breed").disabled = false;
                            document.getElementById("cat_breed").disabled = true;
                        }
                    }
                </script>

                <!--性別-->
                <dt><span class="must">必須</span>性別</dt>
                <dd>
                    <label><input type="radio" name="gender" id="sex1" value="オス" checked>オス</label>
                    <label><input type="radio" name="gender" id="sex2" value="メス">メス</label>
                    <label><input type="radio" name="gender" id="sex3" value="不明">不明</label>
                </dd>

                <!--サイズ-->
                <dt><span class="must">必須</span>サイズ</dt>
                <dd>
                    <label><input type="radio" name="size" id="size1" value="小型" checked>小型</label>
                    <label><input type="radio" name="size" id="size2" value="中型">中型</label>
                    <label><input type="radio" name="size" id="size3" value="大型">大型</label>
                </dd>

                <!--ペットの年齢-->
                <dt><span class="must">必須</span>ペットの年齢</dt>
                <dd>
                    <select name="age" id="pat_age1" required>
                        <!-- <option disabled selected>選択してください</option> -->
                        <option value="0歳" selected>0歳</option>
                        <option value="1歳">1歳</option>
                        <option value="2歳">2歳</option>
                        <option value="3歳">3歳</option>
                        <option value="4歳">4歳</option>
                        <option value="5歳">5歳</option>
                        <option value="6歳">6歳</option>
                        <option value="7歳">7歳</option>
                        <option value="8歳">8歳</option>
                        <option value="9歳">9歳</option>
                        <option value="10歳">10歳</option>
                        <option value="11歳">11歳</option>
                        <option value="12歳">12歳</option>
                        <option value="13歳">13歳</option>
                        <option value="14歳">14歳</option>
                        <option value="15歳">15歳</option>
                        <option value="15歳以上">15歳以上</option>
                    </select>
                    <select name="month" id="pat_age2" required>
                        <!-- <option disabled selected>選択してください</option> -->
                        <option value="0ヵ月" selected>0ヵ月</option>
                        <option value="1ヵ月">1ヵ月</option>
                        <option value="2ヵ月">2ヵ月</option>
                        <option value="3ヵ月">3ヵ月</option>
                        <option value="4ヵ月">4ヵ月</option>
                        <option value="5ヵ月">5ヵ月</option>
                        <option value="6ヵ月">6ヵ月</option>
                        <option value="7ヵ月">7ヵ月</option>
                        <option value="8ヵ月">8ヵ月</option>
                        <option value="9ヵ月">9ヵ月</option>
                        <option value="10ヵ月">10ヵ月</option>
                        <option value="11ヵ月">11ヵ月</option>
                    </select>
                </dd>

                <!--ワクチン接種-->
                <dt><span class="must">必須</span>ワクチン接種</dt>
                <dd>
                    <label><input type="radio" name="vaccination" id="vaccination1" value='接種済み' checked>済み</label>
                    <label><input type="radio" name="vaccination" id="vaccination2" value='未定'>未定</label>
                </dd>

                <!--去勢・避妊-->
                <dt><span class="must">必須</span>去勢・避妊</dt>
                <dd>
                    <label><input type="radio" name="castration" id="castration1" value='施術済み' checked>施術済み</label>
                    <label><input type="radio" name="castration" id="castration2"  value='未定'>未定</label>
                </dd>
            </dl>

            <h2>募集条件について</h2>

            <dl>
                <!--単身者応募-->
                <dt><span class="must">必須</span>単身者応募</dt>
                <dd>
                    <label><input type="radio" name="singlePerson" id="singlePerson1" value="可" checked>可</label>
                    <label><input type="radio" name="singlePerson" id="singlePerson2" value="不可">不可</label>
                </dd>

                <!--高齢者応募-->
                <dt><span class="must">必須</span>高齢者応募</dt>
                <dd>
                    <label><input type="radio" name="elderPerson" id="elderPerson1" value="可" checked>可</label>
                    <label><input type="radio" name="elderPerson" id="elderPerson2" value="不可">不可</label>
                </dd>

                <!--先住ペット-->
                <dt><span class="must">必須</span>先住ペットがいる方</dt>
                <dd>
                    <label><input type="radio" name="keeper" id="living_pet1"
                            onclick="connecttext1('living_text',this.checked);" value="可" checked>可</label>
                    <label><input type="radio" name="keeper" id="living_pet2"
                            onclick="connecttext1('living_text',this.checked);" value="不可">不可</label>
                    <label><input type="radio" name="living_pet" id="living_pet3"
                            onclick="connecttext2('living_text',this.checked);">条件付き</label>
                    <input type="text" name="keeper" id="living_text" placeholder="入力例：子犬なら可, 犬以外なら可　など" disabled>
                </dd>

                <script>
                    function connecttext1(textid, ischecked) {
                        // チェック状態に合わせて有効・無効を切り替える
                        document.getElementById(textid).disabled = ischecked;
                    }

                    function connecttext2(textid, ischecked) {
                        // チェック状態に合わせて有効・無効を切り替える
                        document.getElementById(textid).disabled = !ischecked;
                    }

                    function connecttext3(textid1, textid2, ischecked) {
                        // チェック状態に合わせて有効・無効を切り替える
                        document.getElementById(textid1).disabled = !ischecked;
                        document.getElementById(textid2).disabled = !ischecked;
                    }

                    function connecttext4(textid1, textid2, textid3, textid4, textid5, textid6, ischecked) {
                        // チェック状態に合わせて有効・無効を切り替える
                        document.getElementById(textid1).disabled = ischecked;
                        document.getElementById(textid2).disabled = ischecked;
                        document.getElementById(textid3).disabled = ischecked;
                        document.getElementById(textid4).disabled = ischecked;
                        document.getElementById(textid5).disabled = ischecked;
                        document.getElementById(textid6).disabled = ischecked;
                    }

                    function connecttext5(textid1, textid2, textid3, textid4, textid5, textid6, ischecked) {
                        // チェック状態に合わせて有効・無効を切り替える
                        document.getElementById(textid1).disabled = !ischecked;
                        document.getElementById(textid2).disabled = !ischecked;
                        document.getElementById(textid3).disabled = !ischecked;
                        document.getElementById(textid4).disabled = !ischecked;
                        document.getElementById(textid5).disabled = !ischecked;
                        document.getElementById(textid6).disabled = !ischecked;
                    }
                </script>

                <!--複数頭の譲渡-->
                <!-- <dt><span class="must">必須</span>複数頭の譲渡</dt>
                <dd>
                    <label><input type="checkbox" name="multi" value="希望"
                            onclick="connecttext3('multi1','multi2',this.checked);">複数頭の譲渡希望</label>
                    <select name="multi1" id="multi1" disabled>
                        <option desabled selected>選択してください</option>
                        <option value="2頭">2頭</option>
                        <option value="3頭">3頭</option>
                        <option value="3頭以上">3頭以上</option>
                    </select><br> -->

                <!--理由-->
                <!-- <textarea name="multi2" id="multi2" cols="30" rows="3" placeholder="理由　（3頭以上を選んだ方は何頭かも記入してください）"
                        disabled></textarea>
                </dd> -->

                <!--引き渡し場所-->
                <dt><span class="must">必須</span>引き渡し場所</dt>
                <dd>
                    <label><input type="radio" name="transfer" id="delivery_place1"
                            onclick="connecttext4('postcode3','postcode4','zip-btnA','address4','address5','address6',this.checked);"
                            value='里親の家まで届ける' checked>里親の家まで届ける</label>
                    <label><input type="radio" name="transfer" id="delivery_place2"
                            onclick="connecttext5('postcode3','postcode4','zip-btnA','address4','address5','address6',this.checked);">下記の住所まで来てもらう</label><br>

                    <p>◇郵便番号</p>

                    〒<input type="text" id="postcode3" name="zip3" maxlength="3" disabled>
                    - <input type="text" id="postcode4" name="zip4" maxlength="4" disabled>

                    <button id="zip-btnA" disabled>住所自動検索</button>

                    <script>
                        $('#zip-btnA').on('click', function () {
                            AjaxZip3.zip2addr('zip3', 'zip4', 'address4', 'address5');

                            //成功時に実行する処理
                            AjaxZip3.onSuccess = function () {
                                setTimeout(function () {
                                    $('#address3').focus();
                                }, 10);
                            };

                            //失敗時に実行する処理
                            AjaxZip3.onFailure = function () {
                                alert('郵便番号に該当する住所が見つかりません');
                            };

                            return false;
                        });
                    </script>

                    <p>◇都道府県</p>
                    <select id="address4" name="prefecture" disabled>
                        <!-- <option class="a" value="" disabled selected>選択してください</option> -->
                        <option value="北海道" selected>北海道</option>
                        <option value="青森県">青森県</option>
                        <option value="岩手県">岩手県</option>
                        <option value="宮城県">宮城県</option>
                        <option value="秋田県">秋田県</option>
                        <option value="山形県">山形県</option>
                        <option value="福島県">福島県</option>
                        <option value="茨城県">茨城県</option>
                        <option value="栃木県">栃木県</option>
                        <option value="群馬県">群馬県</option>
                        <option value="埼玉県">埼玉県</option>
                        <option value="千葉県">千葉県</option>
                        <option value="東京都">東京都</option>
                        <option value="神奈川県">神奈川県</option>
                        <option value="新潟県">新潟県</option>
                        <option value="富山県">富山県</option>
                        <option value="石川県">石川県</option>
                        <option value="福井県">福井県</option>
                        <option value="山梨県">山梨県</option>
                        <option value="長野県">長野県</option>
                        <option value="岐阜県">岐阜県</option>
                        <option value="静岡県">静岡県</option>
                        <option value="愛知県">愛知県</option>
                        <option value="三重県">三重県</option>
                        <option value="滋賀県">滋賀県</option>
                        <option value="京都府">京都府</option>
                        <option value="大阪府">大阪府</option>
                        <option value="兵庫県">兵庫県</option>
                        <option value="奈良県">奈良県</option>
                        <option value="和歌山県">和歌山県</option>
                        <option value="鳥取県">鳥取県</option>
                        <option value="島根県">島根県</option>
                        <option value="岡山県">岡山県</option>
                        <option value="広島県">広島県</option>
                        <option value="山口県">山口県</option>
                        <option value="徳島県">徳島県</option>
                        <option value="香川県">香川県</option>
                        <option value="愛媛県">愛媛県</option>
                        <option value="高知県">高知県</option>
                        <option value="福岡県">福岡県</option>
                        <option value="佐賀県">佐賀県</option>
                        <option value="長崎県">長崎県</option>
                        <option value="熊本県">熊本県</option>
                        <option value="大分県">大分県</option>
                        <option value="宮崎県">宮崎県</option>
                        <option value="鹿児島県">鹿児島県</option>
                        <option value="沖縄県">沖縄県</option>
                        　
                    </select><br>

                    <p>◇市区町村</p>
                    <input type="text" id="address5" name="city" required disabled>
                    <p class="R">※全角</p><br>

                    <p>◇市区町村以下</p>
                    <input type="text" id="address6" name="building" required disabled>
                    <p class="R">※全角</p><br>
                </dd>
            </dl>

        </div>

        <!-- <a href="input.html">
            <input type="button" class="form-Btn" value="次 へ">
        </a> -->
        <button type="submit" class="form-Btn">次 へ</button>
        
    </form>

    <!--scroll to top button-->
    <div class="scrolltoTopbtn">
        <i class="fas fa-angle-up" style="font-size:60px;" title="トップページへ"></i><br>
    </div>
</div>
@endsection
