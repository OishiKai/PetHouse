@extends('layouts.base')

@section('head')
<script src="{{ asset('js/conservationQuestionnaireScript.js') }}"></script>
<script src="{{ asset('js/formSwitchPrefecture.js') }}"></script>
<link rel="stylesheet" href="{{ asset('css/conservationQuestionnaireStyle.css') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
@endsection

@section('content')


<div id="wrapper">

    <div class="breadcrumb">
        <ol>
            <li>トップ</li>
            <li>マイページ</li>
            <li>募集者プロフィール編集</li>
        </ol>
    </div>

    <div id="a">
        <h1>※募集者（保護活動者）のみ</h1>
        <h2>プロフィール登録・変更</h2>
    </div>

    <form method="POST" action="/confirmQuestionnaire" enctype="multipart/form-data">
        @csrf

        <div id="b">
            <dl>
                <dt><span class="must">必須</span>保護活動者属性</dt>
                <dd class="a">
                    <select name="conservationStatus" id="attribute">
                        <option value="個人">個人</option>
                        <option value="有志の団体・グループ(非法人)">有志の団体・グループ(非法人)</option>
                        <option value="企業">企業</option>
                        <option value="NPO法人">NPO法人</option>
                        <option value="一般社団法人">一般社団法人</option>
                        <option value="動物病院">動物病院</option>
                        <option value="自治体">自治体</option>
                        <option value="その他法人">その他法人</option>
                    </select>
                    <p id="P1" class="R">動物の保護活動を行っているNPOや社団などの法人や有志団体・個人は「保護活動者」として、里親募集情報の掲載を認めています。</p>
                </dd>

                <dt><span class="must">必須</span>団体名・法人名</dt>
                <dd>
                    <input type="text" name="activityName" id="name" value="{{ old('activityName') }}" required>

                    @error('activityName')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </dd>

                <dt><span class="must">必須</span>団体・法人所在地または活動拠点</dt>
                <dd>
                    <div class="row">
                        <p>◇郵便番号</p>
                        <div class="col-43">
                            <h7>〒</h7>
                        </div>
                        <div class="col-42">
                            <input type="text" class="@error('zip21') is-invalid @enderror" name="zip21" size="4"
                                maxlength="3" value="{{ old('zip21')}}" required>
                            @error('zip21')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-43">
                            <h7>ー</h7>
                        </div>
                        <div class="col-42">
                            <input class="@error('zip22') is-invalid @enderror"
                                value="{{ old('zip22') }}" type="text" name="zip22" size="5"
                                maxlength="4" onKeyUp="AjaxZip3.zip2addr('zip21','zip22','addr21','addr21');" required>
                            @error('zip21')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                    </div>

                    <p>◇住所</p>
                    <input type="text" id="address2" name="addr21" value="{{ old('addr21') }}" required>
                    <p class="R">※全角</p><br>
                </dd>

                <dt><span class="must">必須</span>主な保護施設</dt>
                <dd class="B">
                    <p class="R">※あてはまるものを一つ以上選択してください。複数選択可</p>
                    <label><input type="checkbox" name="shelter[]" id="Shelter1" value="自宅">自宅</label>
                    <label><input type="checkbox" name="shelter[]" id="Shelter2" value="専用シェルター">専用シェルター</label>
                    <label><input type="checkbox" name="shelter[]" id="Shelter3" value="保護猫カフェ">保護猫カフェ</label>
                    <label><input type="checkbox" name="shelter[]" id="Shelter4" value="保護犬カフェ">保護犬カフェ</label><br>
                    <label><input type="checkbox" name="shelter[]" id="Shelter5" value="動物病院">動物病院</label>
                    <label><input type="checkbox" name="shelter[]" id="Shelter6" value="その他"
                            onclick="connecttext('textforscb',this.checked);">その他</label>
                    <input type="text" name="othertext" id="textforscb" value="">
                </dd>


                <dt><span class="must">必須</span>保護しているペット種別</dt>
                <dd>
                    <p class="R">※あてはまるものを一つ以上選択してください。複数選択可</p>
                    <label><input type="checkbox" name="pet[]" id="pet[]1" value="犬">犬</label>
                    <label><input type="checkbox" name="pet[]" id="pet[]2" value="猫">猫</label>
                </dd>

                <div id="g">
                    <dt><span class="must">必須</span>応募可能地域</dt>
                    <dd>
                        <dl class="area">
                            <dt><label><input type="checkbox" name="area[]" value="北海道">北海道</label></dt>
                            <dd><label>北海道</label></dd>
                        </dl>

                        <dl class="area">
                            <dt><label><input type="checkbox" value="東北地方" id='tohoku' onchange='formSwitchPrefecture("tohoku")'>東北地方</label></dt>
                            <dd>
                                <label><input type="checkbox" name="area[]" value="青森県" id='tohokuChild1' onchange='formSwitchPrefecture("tohokuChild")' >青森県</label>
                                <label><input type="checkbox" name="area[]" value="岩手県" id='tohokuChild2' onchange='formSwitchPrefecture("tohokuChild")' >岩手県</label>
                                <label><input type="checkbox" name="area[]" value="宮城県" id='tohokuChild3' onchange='formSwitchPrefecture("tohokuChild")' >宮城県</label>
                                <label><input type="checkbox" name="area[]" value="秋田県" id='tohokuChild4' onchange='formSwitchPrefecture("tohokuChild")' >秋田県</label>
                                <label><input type="checkbox" name="area[]" value="山形県" id='tohokuChild5' onchange='formSwitchPrefecture("tohokuChild")' >山形県</label>
                                <label><input type="checkbox" name="area[]" value="福島県" id='tohokuChild6' onchange='formSwitchPrefecture("tohokuChild")' >福島県</label>
                            </dd>
                        </dl>

                        <dl class="area">
                            <dt><label><input type="checkbox" value="関東地方" id='kanto' onchange='formSwitchPrefecture("kanto")'>関東地方</label></dt>
                            <dd>
                                <label><input type="checkbox" name="area[]" value="茨城県" id='kantoChild1' onchange='formSwitchPrefecture("kantoChild")'>茨城県</label>
                                <label><input type="checkbox" name="area[]" value="栃木県" id='kantoChild2' onchange='formSwitchPrefecture("kantoChild")'>栃木県</label>
                                <label><input type="checkbox" name="area[]" value="群馬県" id='kantoChild3' onchange='formSwitchPrefecture("kantoChild")'> 群馬県</label>
                                <label><input type="checkbox" name="area[]" value="埼玉県" id='kantoChild4' onchange='formSwitchPrefecture("kantoChild")'>埼玉県</label>
                                <label><input type="checkbox" name="area[]" value="千葉県" id='kantoChild5' onchange='formSwitchPrefecture("kantoChild")'>千葉県</label>
                                <label><input type="checkbox" name="area[]" value="東京都" id='kantoChild6' onchange='formSwitchPrefecture("kantoChild")'>東京都</label>
                                <label><input type="checkbox" name="area[]" value="神奈川県" id='kantoChild7' onchange='formSwitchPrefecture("kantoChild")'>神奈川県</label>
                            </dd>
                        </dl>

                        <dl class="area">
                            <dt><label><input type="checkbox" value="中部地方" id='tyubu' onchange='formSwitchPrefecture("tyubu")'>中部地方</label></dt>
                            <dd>
                                <label><input type="checkbox" name="area[]" value="新潟県" id='tyubuChild1' onchange='formSwitchPrefecture("tyubuChild")'>新潟県</label>
                                <label><input type="checkbox" name="area[]" value="富山県" id='tyubuChild2' onchange='formSwitchPrefecture("tyubuChild")'>富山県</label>
                                <label><input type="checkbox" name="area[]" value="石川県" id='tyubuChild3' onchange='formSwitchPrefecture("tyubuChild")'>石川県</label>
                                <label><input type="checkbox" name="area[]" value="福井県" id='tyubuChild4' onchange='formSwitchPrefecture("tyubuChild")'>福井県</label>
                                <label><input type="checkbox" name="area[]" value="山梨県" id='tyubuChild5' onchange='formSwitchPrefecture("tyubuChild")'>山梨県</label>
                                <label><input type="checkbox" name="area[]" value="長野県" id='tyubuChild6' onchange='formSwitchPrefecture("tyubuChild")'>長野県</label>
                                <label><input type="checkbox" name="area[]" value="岐阜県" id='tyubuChild7' onchange='formSwitchPrefecture("tyubuChild")'>岐阜県</label>
                                <label><input type="checkbox" name="area[]" value="静岡県" id='tyubuChild8' onchange='formSwitchPrefecture("tyubuChild")'>静岡県</label>
                                <label><input type="checkbox" name="area[]" value="愛知県" id='tyubuChild9' onchange='formSwitchPrefecture("tyubuChild")'>愛知県</label>
                            </dd>
                        </dl>

                        <dl class="area">
                            <dt><label><input type="checkbox" value="近畿地方" id='kinki' onchange='formSwitchPrefecture("kinki")'>近畿地方</label></dt>
                            <dd>
                                <label><input type="checkbox" name="area[]" value="三重県" id='kinkiChild1' onchange='formSwitchPrefecture("kinkiChild")'>三重県</label>
                                <label><input type="checkbox" name="area[]" value="滋賀県" id='kinkiChild2' onchange='formSwitchPrefecture("kinkiChild")'>滋賀県</label>
                                <label><input type="checkbox" name="area[]" value="京都府" id='kinkiChild3' onchange='formSwitchPrefecture("kinkiChild")'>京都府</label>
                                <label><input type="checkbox" name="area[]" value="大阪府" id='kinkiChild4' onchange='formSwitchPrefecture("kinkiChild")'>大阪府</label>
                                <label><input type="checkbox" name="area[]" value="兵庫県" id='kinkiChild5' onchange='formSwitchPrefecture("kinkiChild")'>兵庫県</label>
                                <label><input type="checkbox" name="area[]" value="奈良県" id='kinkiChild6' onchange='formSwitchPrefecture("kinkiChild")'>奈良県</label>
                                <label><input type="checkbox" name="area[]" value="和歌山県" id='kinkiChild7' onchange='formSwitchPrefecture("kinkiChild")'>和歌山県</label>
                            </dd>
                        </dl>

                        <dl class="area">
                            <dt><label><input type="checkbox" value="中国地方" id='tyugoku' onchange='formSwitchPrefecture("tyugoku")'>中国地方</label></dt>
                            <dd>
                                <label><input type="checkbox" name="area[]" value="鳥取県" id='tyugokuChild1' onchange='formSwitchPrefecture("tyugokuChild")'>鳥取県</label>
                                <label><input type="checkbox" name="area[]" value="島根県" id='tyugokuChild2' onchange='formSwitchPrefecture("tyugokuChild")'>島根県</label>
                                <label><input type="checkbox" name="area[]" value="岡山県" id='tyugokuChild3' onchange='formSwitchPrefecture("tyugokuChild")'>岡山県</label>
                                <label><input type="checkbox" name="area[]" value="広島県" id='tyugokuChild4' onchange='formSwitchPrefecture("tyugokuChild")'>広島県</label>
                                <label><input type="checkbox" name="area[]" value="山口県" id='tyugokuChild5' onchange='formSwitchPrefecture("tyugokuChild")'>山口県</label>
                            </dd>
                        </dl>

                        <dl class="area">
                            <dt><label><input type="checkbox" value="四国地方" id='shikoku' onchange='formSwitchPrefecture("shikoku")'>四国地方</label></dt>
                            <dd>
                                <label><input type="checkbox" name="area[]" value="徳島県" id='shikokuChild1' onchange='formSwitchPrefecture("shikokuChild")'>徳島県</label>
                                <label><input type="checkbox" name="area[]" value="香川県" id='shikokuChild2' onchange='formSwitchPrefecture("shikokuChild")'>香川県</label>
                                <label><input type="checkbox" name="area[]" value="愛媛県" id='shikokuChild3' onchange='formSwitchPrefecture("shikokuChild")'>愛媛県</label>
                                <label><input type="checkbox" name="area[]" value="高知県" id='shikokuChild4' onchange='formSwitchPrefecture("shikokuChild")'>高知県</label>
                            </dd>
                        </dl>

                        <dl class="area">
                            <dt><label><input type="checkbox" value="九州地方" id='kyusyu' onchange='formSwitchPrefecture("kyusyu")'>九州地方</label></dt>
                            <dd>
                                <label><input type="checkbox" name="area[]" value="福岡県" id='kyusyuChild1' onchange='formSwitchPrefecture("kyusyuChild")'>福岡県</label>
                                <label><input type="checkbox" name="area[]" value="佐賀県" id='kyusyuChild2' onchange='formSwitchPrefecture("kyusyuChild")'>佐賀県</label>
                                <label><input type="checkbox" name="area[]" value="長崎県" id='kyusyuChild3' onchange='formSwitchPrefecture("kyusyuChild")'>長崎県</label>
                                <label><input type="checkbox" name="area[]" value="熊本県" id='kyusyuChild4' onchange='formSwitchPrefecture("kyusyuChild")'>熊本県</label>
                                <label><input type="checkbox" name="area[]" value="大分県" id='kyusyuChild5' onchange='formSwitchPrefecture("kyusyuChild")'>大分県</label>
                                <label><input type="checkbox" name="area[]" value="宮崎県" id='kyusyuChild6' onchange='formSwitchPrefecture("kyusyuChild")'>宮崎県</label>
                                <label><input type="checkbox" name="area[]" value="鹿児島県" id='kyusyuChild7' onchange='formSwitchPrefecture("kyusyuChild")'>鹿児島県</label>
                                <label><input type="checkbox" name="area[]" value="沖縄県" id='kyusyuChild8' onchange='formSwitchPrefecture("kyusyuChild")'>沖縄県</label>
                            </dd>
                        </dl>

                        <p class="R_1">
                            <b>※手渡しが可能な地域をすべて選択してください</b><br>
                            選択した対象地域にお住まいの方からのみ【お申込み】を受け付けます<br>
                            対象地域外からのは申し込みを受け付けません<br>
                            近隣すべての都道府県を「応募可能地域」に設定するのをお勧めします
                        </p>
                    </dd>
                </div>

                <dt><span class="must">必須</span>活動サイト</dt>
                <dd>
                    <p class="R">※保護活動者は活動実績がわかるウェブサイトのURLが必要です</p>
                    <p>サイトURL <input type="text" name="url[]" id=url1 required></p>

                    @error('url')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </dd>
                <dt><span class="any">任意</span>その他活動サイト</dt>
                <dd>
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
                    <div id="input_pluralBox2">
                        <div id="input_plural2">

                            <p>別サイトURL<input type="text" name="url[]" id=url2></p>

                            <input type="button" value="＋選択追加" class="add pluralBtn">
                            <input type="button" value="削除" class="del pluralBtn">
                        </div>
                    </div>

                </dd>


                <dt><span class="must">必須</span>募集者プロフィール</dt>
                <dd>
                    <textarea name="profile" id='sta_me' required></textarea>
                    <p class="R">※例…私たちは捨てられた猫ちゃんたちの新しい里親を見つける活動をしている<br>　　　NPO法人の保護活動者です</p>
                    @error('profile')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </dd>
                <dt><span class="any">任意</span>プロフィール画面</dt>
                <dd>
                    <input type="file" name="profile_img" required>
                    @error('profile')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror


                    <p class="R_1">
                        ※<b>保護施設の様子</b>、または<b>保護団体のロゴ</b>、<b>保護している動物の写真</b>をアップロードしてください<br>
                        <b>それ以外の画像は避けてください</b><br>
                    </p>

                </dd>

            </dl>
        </div>




        <div id="c">
            <div class="d">
                <h2>ご入力いただいたプロフィール内容は里親希望者に開示いたします</h2>
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
