@extends('layouts.base')

@section('head')
<script src="{{ asset('js/conservationQuestionnaireScript.js') }}"></script>
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

    <form id="profile" action="#">

        <div id="b">
            <dl>
                <dt><span class="must">必須</span>保護活動者属性</dt>
                <dd class="a">
                    <select name="conservationStatus" id="attribute">
                        <option class="a" value="" disabled selected>選択してください</option>
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
                    <input type="text" name="activityName" id="name" required>
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
                                maxlength="3" required>
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

                    <p>◇市区町村</p>
                    <input type="text" id="address2" name="addr21" required>
                    <p class="R">※全角</p><br>
                </dd>

                <dt><span class="must">必須</span>主な保護施設</dt>
                <dd class="B">
                    <p class="R">※あてはまるものを一つ以上選択してください。複数選択可</p>
                    <label><input type="checkbox" name="Shelter[]" id="Shelter1" value="自宅">自宅</label>
                    <label><input type="checkbox" name="Shelter[]" id="Shelter2" value="専用シェルター">専用シェルター</label>
                    <label><input type="checkbox" name="Shelter[]" id="Shelter3" value="保護猫カフェ">保護猫カフェ</label>
                    <label><input type="checkbox" name="Shelter[]" id="Shelter4" value="保護犬カフェ">保護犬カフェ</label><br>
                    <label><input type="checkbox" name="Shelter[]" id="Shelter5" value="動物病院">動物病院</label>
                    <label><input type="checkbox" name="Shelter[]" id="Shelter6" value="その他"
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
                            <dd><label><input type="checkbox" name="area[]" value="北海道">北海道</label></dd>
                        </dl>

                        <dl class="area">
                            <dt><label><input type="checkbox" name="area[]" value="東北地方">東北地方</label></dt>
                            <dd>
                                <label><input type="checkbox" name="area[]" value="青森県">青森県</label>
                                <label><input type="checkbox" name="area[]" value="岩手県">岩手県</label>
                                <label><input type="checkbox" name="area[]" value="宮城県">宮城県</label>
                                <label><input type="checkbox" name="area[]" value="秋田県">秋田県</label>
                                <label><input type="checkbox" name="area[]" value="山形県">山形県</label>
                                <label><input type="checkbox" name="area[]" value="福島県">福島県</label>
                            </dd>
                        </dl>

                        <dl class="area">
                            <dt><label><input type="checkbox" name="area[]" value="関東地方">関東地方</label></dt>
                            <dd>
                                <label><input type="checkbox" name="area[]" value="茨城県">茨城県</label>
                                <label><input type="checkbox" name="area[]" value="栃木県">栃木県</label>
                                <label><input type="checkbox" name="area[]" value="群馬県">群馬県</label>
                                <label><input type="checkbox" name="area[]" value="埼玉県">埼玉県</label>
                                <label><input type="checkbox" name="area[]" value="千葉県">千葉県</label>
                                <label><input type="checkbox" name="area[]" value="東京都">東京都</label>
                                <label><input type="checkbox" name="area[]" value="神奈川県">神奈川県</label>
                            </dd>
                        </dl>

                        <dl class="area">
                            <dt><label><input type="checkbox" name="area[]" value="中部地方">中部地方</label></dt>
                            <dd>
                                <label><input type="checkbox" name="area[]" value="新潟県">新潟県</label>
                                <label><input type="checkbox" name="area[]" value="富山県">富山県</label>
                                <label><input type="checkbox" name="area[]" value="石川県">石川県</label>
                                <label><input type="checkbox" name="area[]" value="福井県">福井県</label>
                                <label><input type="checkbox" name="area[]" value="山梨県">山梨県</label>
                                <label><input type="checkbox" name="area[]" value="長野県">長野県</label>
                                <label><input type="checkbox" name="area[]" value="岐阜県">岐阜県</label>
                                <label><input type="checkbox" name="area[]" value="静岡県">静岡県</label>
                                <label><input type="checkbox" name="area[]" value="愛知県">愛知県</label>
                            </dd>
                        </dl>

                        <dl class="area">
                            <dt><label><input type="checkbox" name="area[]" value="近畿地方">近畿地方</label></dt>
                            <dd>
                                <label><input type="checkbox" name="area[]" value="三重県">三重県</label>
                                <label><input type="checkbox" name="area[]" value="滋賀県">滋賀県</label>
                                <label><input type="checkbox" name="area[]" value="京都府">京都府</label>
                                <label><input type="checkbox" name="area[]" value="大阪府">大阪府</label>
                                <label><input type="checkbox" name="area[]" value="兵庫県">兵庫県</label>
                                <label><input type="checkbox" name="area[]" value="奈良県">奈良県</label>
                                <label><input type="checkbox" name="area[]" value="和歌山県">和歌山県</label>
                            </dd>
                        </dl>

                        <dl class="area">
                            <dt><label><input type="checkbox" name="area[]" value="中国地方">中国地方</label></dt>
                            <dd>
                                <label><input type="checkbox" name="area[]" value="鳥取県">鳥取県</label>
                                <label><input type="checkbox" name="area[]" value="島根県">島根県</label>
                                <label><input type="checkbox" name="area[]" value="岡山県">岡山県</label>
                                <label><input type="checkbox" name="area[]" value="広島県">広島県</label>
                                <label><input type="checkbox" name="area[]" value="山口県">山口県</label>
                            </dd>
                        </dl>

                        <dl class="area">
                            <dt><label><input type="checkbox" name="area[]" value="四国地方">四国地方</label></dt>
                            <dd>
                                <label><input type="checkbox" name="area[]" value="徳島県">徳島県</label>
                                <label><input type="checkbox" name="area[]" value="香川県">香川県</label>
                                <label><input type="checkbox" name="area[]" value="愛媛県">愛媛県</label>
                                <label><input type="checkbox" name="area[]" value="高知県">高知県</label>
                            </dd>
                        </dl>

                        <dl class="area">
                            <dt><label><input type="checkbox" name="area[]" value="九州地方">九州地方</label></dt>
                            <dd>
                                <label><input type="checkbox" name="area[]" value="福岡県">福岡県</label>
                                <label><input type="checkbox" name="area[]" value="佐賀県">佐賀県</label>
                                <label><input type="checkbox" name="area[]" value="長崎県">長崎県</label>
                                <label><input type="checkbox" name="area[]" value="熊本県">熊本県</label>
                                <label><input type="checkbox" name="area[]" value="大分県">大分県</label>
                                <label><input type="checkbox" name="area[]" value="宮崎県">宮崎県</label>
                                <label><input type="checkbox" name="area[]" value="鹿児島県">鹿児島県</label>
                                <label><input type="checkbox" name="area[]" value="沖縄県">沖縄県</label>
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
                    <textarea name="profile" id=sta_me required></textarea>
                    <p class="R">※例…私たちは捨てられた猫ちゃんたちの新しい里親を見つける活動をしている<br>　　　NPO法人の保護活動者です</p>
                </dd>
                <dt><span class="any">任意</span>プロフィール画面</dt>
                <dd>
                    <input type="file" name="profile_img">



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
