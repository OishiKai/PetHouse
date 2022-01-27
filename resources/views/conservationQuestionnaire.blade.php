<!DOCTYPE html>
<html lang='ja'>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>犬・猫</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="/img/favicon1.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
    <script src="script/script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/307140e2a3.js"></script>
</head>

<body>
    <!--header-->
    <div id="top">
        <div class="top-logo">
            <a href="./base.html">
                <img src="img/logo-removebg-preview (3).png" alt="logo-image">
            </a>
        </div>
        <div class="top-menu">
            <a class="loginmenu" href="form.html" title="会員登録・ログイン">
                <i class="far fa-user-circle" style="font-size: 40px;"></i><br>会員登録・ログイン
            </a>
            <a class="loginmenu" href="#" title="お気に入り">
                <i class="fas fa-heart" style="font-size: 40px;"></i><br>お気に入り
            </a>
            <a class="loginmenu" href="#" title="メッセージ">
                <i class="fas fa-comments" style="font-size: 40px;"></i><br>メッセージ
            </a>
            <a class="loginmenu" href="#" title="よくある質問">
                <i class="fas fa-question" style="font-size: 40px;"></i><br>よくある質問
            </a>
        </div>
    </div>

    <!--navigation-->
    <div id="nav">
        <div class="bar-button-left">
            <a class="bar" href="base.html">HOME<br>--Pet House Top--</a>
            <a class="bar" href="#">PET ROOM<br>--犬・猫 検索--</a>
            <a class="bar" href="#">お問い合わせ<br>--サイトに対して--</a>
        </div>
    </div>

    <!--wrapper-->
    <div id="wrapper">
        <!--wapper
            <div class="page-intro">
                <p>Pet House......</p>
            </div>
            <div class="wp-menu">
                <ul class="wp-mn-left">
                    <h1>里親になりたい方</h1>
                    <li><a href="#">募集中のペットを探す</a></li>
                    <li><a href="#">＞里親応募の流れ</a></li>
                </ul>
                <ul class="wp-mn-right">
                    <h1>里親を募集したい方</h1>
                    <li><a href="#">里親募集者登録を行う</a></li>
                    <li><a href="#">＞里親を見つけるまでの流れ</a></li>
                </ul>
            </div>
            -->

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
                        <select name="attribute" id="attribute">
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

                    <dt><span class="must">必須</span>団体名・法人名または活動名</dt>
                    <dd>
                        <input type="text" name="name" id="name" required>
                    </dd>

                    <dt><span class="must">必須</span>団体・法人所在地または活動拠点</dt>
                    <dd>
                        <p>◇郵便番号</p>

                        〒<input type="text" id="postcode1" name="zip1" maxlength="3">
                        - <input type="text" id="postcode2" name="zip2" maxlength="4">

                        <button id="zip-btn">住所自動検索</button>

                        <script>
                            $('#zip-btn').on('click', function () {
                                AjaxZip3.zip2addr('zip1', 'zip2', 'address1', 'address2');

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
                        <select id="address1" name="address1">
                            <option class="a" value="" disabled selected>選択してください</option>
                            <option value="北海道">北海道</option>
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
                        <input type="text" id="address2" name="address2">
                        <p class="R">※全角</p><br>

                        <p>◇市区町村以下(非公開)</p>
                        <input type="text" id="address3" name="address3">
                        <p class="R">※全角</p><br>
                    </dd>

                    <dt><span class="must">必須</span>主な保護施設</dt>
                    <dd class="B">
                        <p class="R">※あてはまるものを一つ以上選択してください。複数選択可</p>
                        <label><input type="checkbox" name="Shelter" id="Shelter1" value="自宅">自宅</label>
                        <label><input type="checkbox" name="Shelter" id="Shelter2" value="専用シェルター">専用シェルター</label>
                        <label><input type="checkbox" name="Shelter" id="Shelter3" value="保護猫カフェ">保護猫カフェ</label>
                        <label><input type="checkbox" name="Shelter" id="Shelter4" value="保護犬カフェ">保護犬カフェ</label><br>
                        <label><input type="checkbox" name="Shelter" id="Shelter5" value="動物病院">動物病院</label>
                        <label><input type="checkbox" name="Shelter" id="Shelter6" value="その他"
                                onclick="connecttext('textforscb',this.checked);">その他</label>
                        <input type="text" name="othertext" id="textforscb" value="">
                    </dd>


                    <dt><span class="must">必須</span>保護しているペット種別</dt>
                    <dd>
                        <p class="R">※あてはまるものを一つ以上選択してください。複数選択可</p>
                        <label><input type="checkbox" name="pet_type" id="pet_type1" value="犬">犬</label>
                        <label><input type="checkbox" name="pet_type" id="pet_type2" value="猫">猫</label>
                    </dd>

                    <div id="g">
                        <dt><span class="must">必須</span>応募可能地域</dt>
                        <dd>
                            <dl class="area">
                                <dt><label><input type="checkbox" name="" value="北海道">北海道</label></dt>
                                <dd><label><input type="checkbox" name="" value="北海道">北海道</label></dd>
                            </dl>

                            <dl class="area">
                                <dt><label><input type="checkbox" name="" value="東北地方">東北地方</label></dt>
                                <dd>
                                    <label><input type="checkbox" name="" value="青森県">青森県</label>
                                    <label><input type="checkbox" name="" value="岩手県">岩手県</label>
                                    <label><input type="checkbox" name="" value="宮城県">宮城県</label>
                                    <label><input type="checkbox" name="" value="秋田県">秋田県</label>
                                    <label><input type="checkbox" name="" value="山形県">山形県</label>
                                    <label><input type="checkbox" name="" value="福島県">福島県</label>
                                </dd>
                            </dl>

                            <dl class="area">
                                <dt><label><input type="checkbox" name="" value="関東地方">関東地方</label></dt>
                                <dd>
                                    <label><input type="checkbox" name="" value="茨城県">茨城県</label>
                                    <label><input type="checkbox" name="" value="栃木県">栃木県</label>
                                    <label><input type="checkbox" name="" value="群馬県">群馬県</label>
                                    <label><input type="checkbox" name="" value="埼玉県">埼玉県</label>
                                    <label><input type="checkbox" name="" value="千葉県">千葉県</label>
                                    <label><input type="checkbox" name="" value="東京都">東京都</label>
                                    <label><input type="checkbox" name="" value="神奈川県">神奈川県</label>
                                </dd>
                            </dl>

                            <dl class="area">
                                <dt><label><input type="checkbox" name="" value="中部地方">中部地方</label></dt>
                                <dd>
                                    <label><input type="checkbox" name="" value="新潟県">新潟県</label>
                                    <label><input type="checkbox" name="" value="富山県">富山県</label>
                                    <label><input type="checkbox" name="" value="石川県">石川県</label>
                                    <label><input type="checkbox" name="" value="福井県">福井県</label>
                                    <label><input type="checkbox" name="" value="山梨県">山梨県</label>
                                    <label><input type="checkbox" name="" value="長野県">長野県</label>
                                    <label><input type="checkbox" name="" value="岐阜県">岐阜県</label>
                                    <label><input type="checkbox" name="" value="静岡県">静岡県</label>
                                    <label><input type="checkbox" name="" value="愛知県">愛知県</label>
                                </dd>
                            </dl>

                            <dl class="area">
                                <dt><label><input type="checkbox" name="" value="近畿地方">近畿地方</label></dt>
                                <dd>
                                    <label><input type="checkbox" name="" value="三重県">三重県</label>
                                    <label><input type="checkbox" name="" value="滋賀県">滋賀県</label>
                                    <label><input type="checkbox" name="" value="京都府">京都府</label>
                                    <label><input type="checkbox" name="" value="大阪府">大阪府</label>
                                    <label><input type="checkbox" name="" value="兵庫県">兵庫県</label>
                                    <label><input type="checkbox" name="" value="奈良県">奈良県</label>
                                    <label><input type="checkbox" name="" value="和歌山県">和歌山県</label>
                                </dd>
                            </dl>

                            <dl class="area">
                                <dt><label><input type="checkbox" name="" value="中国地方">中国地方</label></dt>
                                <dd>
                                    <label><input type="checkbox" name="" value="鳥取県">鳥取県</label>
                                    <label><input type="checkbox" name="" value="島根県">島根県</label>
                                    <label><input type="checkbox" name="" value="岡山県">岡山県</label>
                                    <label><input type="checkbox" name="" value="広島県">広島県</label>
                                    <label><input type="checkbox" name="" value="山口県">山口県</label>
                                </dd>
                            </dl>

                            <dl class="area">
                                <dt><label><input type="checkbox" name="" value="四国地方">四国地方</label></dt>
                                <dd>
                                    <label><input type="checkbox" name="" value="徳島県">徳島県</label>
                                    <label><input type="checkbox" name="" value="香川県">香川県</label>
                                    <label><input type="checkbox" name="" value="愛媛県">愛媛県</label>
                                    <label><input type="checkbox" name="" value="高知県">高知県</label>
                                </dd>
                            </dl>

                            <dl class="area">
                                <dt><label><input type="checkbox" name="" value="九州地方">九州地方</label></dt>
                                <dd>
                                    <label><input type="checkbox" name="" value="福岡県">福岡県</label>
                                    <label><input type="checkbox" name="" value="佐賀県">佐賀県</label>
                                    <label><input type="checkbox" name="" value="長崎県">長崎県</label>
                                    <label><input type="checkbox" name="" value="熊本県">熊本県</label>
                                    <label><input type="checkbox" name="" value="大分県">大分県</label>
                                    <label><input type="checkbox" name="" value="宮崎県">宮崎県</label>
                                    <label><input type="checkbox" name="" value="鹿児島県">鹿児島県</label>
                                    <label><input type="checkbox" name="" value="沖縄県">沖縄県</label>
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
                        <p>サイトURL <input type="text" name="url1" id=url1 required></p>
                    </dd>
                    <dt><span class="any">任意</span>その他活動サイト</dt>
                    <dd>

                        <div id="input_pluralBox2">
                            <div id="input_plural2">

                                <p>別サイトURL<input type="text" name="url2" id=url2></p>

                                <input type="button" value="＋選択追加" class="add pluralBtn">
                                <input type="button" value="削除" class="del pluralBtn">
                            </div>
                        </div>

                    </dd>


                    <dt><span class="must">必須</span>募集者プロフィール</dt>
                    <dd>
                        <textarea name="sta_me" id=sta_me required></textarea>
                        <p class="R">※例…私たちは捨てられた猫ちゃんたちの新しい里親を見つける活動をしている<br>　　　NPO法人の保護活動者です</p>
                    </dd>
                    <dt><span class="any">任意</span>プロフィール画面</dt>
                    <dd>
                        <input type="file" name="icon">



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

    <!--scroll to top button-->
    <div class="scrolltoTopbtn">
        <i class="fas fa-angle-up" style="font-size:60px;" title="トップページへ"></i><br>
    </div>

    <!--footer-->
    <footer>
        <div id="footer_nav">
            <a class="footer-logo" href="./base.html">
                <img src="img/logo-removebg-preview (3).png" alt="footer-logo-image">
            </a>
            <div class="footer-main">
                <ul>
                    <h2>サイト案内</h2>
                    <li><a href="#">TOPページ</a></li>
                    <li><a href="#">よくある質問</a></li>
                    <li><a href="#">サイトのお問い合わせ</a></li>
                </ul>
                <ul>
                    <h2>会員</h2>
                    <li><a href="#">会員ログイン</a></li>
                    <li><a href="#">会員登録(無料)</a></li>
                </ul>
                <ul>
                    <h2>その他</h2>
                    <li><a href="#">お気に入り一覧</a></li>
                    <li><a href="#">メッセージ</a></li>
                </ul>
            </div>
        </div>
        <small>&copy; copyright</small>
    </footer>
</body>

</html>