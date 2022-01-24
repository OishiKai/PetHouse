@extends('layouts.base')

@section('head')
<script src="{{ asset('js/passwordDisplay.js') }}" defer></script>
<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
@endsection

@section('content')
<ul class="breadcrumb">
    <li><a href="base.html">HOME</a></li>
    <li>会員ログイン</li>
</ul>

<!--navigation-->
<h1 class="form-title">会員登録</h1>
<div class="go-to-login">
    <h3 class="go-login1">会員登録済みの方は</h3>
    <a class="go-login" href="login.html">ログインページへ</a>

</div>
<div class="form-container">

    <div class="row">
        <div class="col-25">
            <span class="form">必須</span>
            <label for="usertype">会員種別</label>
        </div>
        <div class="col-36">
            <input type="radio" onchange="hideA(this)" id="ippan" name="usertype" value="ippan" checked />
            <label for="ippan">一般</label>
            <input type="radio" onchange="hideB(this)" id="hogosha" name="usertype" value="hogosha" />
            <label for="hogosha">保護活動者</label><br>

            <button class="ruru" onclick="openForm()">会員種別と譲渡のルール</button>
            <div class="form-popup" id="ruru-popup">
                <div class="popup-container">
                    <h3 class="h3-popup">会員種別と譲渡のルールについて</h3>
                    <p class="p-popup">会員別に出来ることと出来ないことが一覧表示される</p>
                    <br>
                    <p class="p-popup">参考URL...会員登録：ペットのおうち【月間利用者150万人！】(pet-home.jp)</p>
                    <br></br>
                    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div id="formA">
        <form method="POST" action="{{ route('formTest') }}">
            @csrf
            <div class="row">
                <div class="col-25">
                    <span class="form">必須</span>
                    <label for="nickname">ニックネーム</label>
                </div>
                <div class="col-75">
                    <input type="text" id="name" name="name" class="@error('name') is-invalid @enderror"
                        placeholder="ニックネームを入力" value="{{ old('name') }}" required />
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <span class="form">必須</span>
                    <label for="email">メールアドレス</label>
                </div>
                <div class="col-75">
                    <input type="text" id="email" name="email" class="@error('email') is-invalid @enderror"
                        placeholder="メールアドレスを入力" required>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <span class="form">必須</span>
                    <label for="pswA">パスワード</label>
                </div>
                <div class="col-75">
                    <input type="password" id="password" name="password" class="@error('password') is-invalid @enderror"
                        placeholder="パスワードを入力" required>
                    <p>確認のため、もう一度入力してください</p>
                    <input type="password" id="password" name="password_confirmation" placeholder="もう一度パスワードを入力"
                        required><br />
                    <input type="checkbox" id="display" name="display" onchange='passwordDisplay("display")'>
                    <label for="hidepwordA"> パスワードを表示する</label>
                </div>
                <h6 class="h6-required">※8~20文字数内で<br />設定してください</h6>
            </div>
            <div class="row">
                <div class="col-25">
                    <span class="form">必須</span>
                    <label for="nameA">お名前</label>
                </div>
                <div class="col-35">
                    <input type="text" id="fnameA" name="kanjiFamilyName"
                        class="@error('kanjiFamilyName') is-invalid @enderror" placeholder="姓名">
                </div>
                <div class="col-35">
                    <input type="text" id="lnameA" name="kanjiFirstName"
                        class="@error('kanjiFirstName') is-invalid @enderror" placeholder="氏名" />
                </div>
                <h6 class="h6-required">※全角<br />例（山田　太郎）</h6>
            </div>
            <div class="row">
                <div class="col-40">
                    <input type="text" name="kanaFamilyName" class="@error('kanaFamilyName') is-invalid @enderror" placeholder="フリガナ(姓名)" />
                        @error('kanaFamilyName')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="col-41">
                    <input type="text" name="kanaFirstName" class="@error('kanaFirstName') is-invalid @enderror" placeholder="フリガナ(氏名)" />
                        @error('kanaFirstName')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <h6 class="h6-required">※全角<br />例（ヤマダ　タロウ）</h6>
            </div>
            <div class="row">
                <div class="col-25">
                    <span class="form">必須</span>
                    <label for="age">性別・年齢</label>
                </div>
                <div class="col-35">
                    <input type="radio" id="dansei" name="gender" value="male" />
                    <label for="male">男性</label>
                    <input type="radio" id="josei" name="gender" value="female" />
                    <label for="female">女性</label>
                </div>
                <div class="col-42">
                    <input type="text" id="age" name="age" />
                </div>
                <h5>歳</h5>
            </div>
            <div class="row">
                <div class="col-25">
                    <span class="form">必須</span>
                    <label for="telA">電話番号</label>
                </div>
                <div class="col-75">
                    <input type="text" name="phoneNumber" class="@error('phoneNumber') is-invalid @enderror"
                        placeholder="電話番号を入力" />
                    @error('phoneNumber')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <br />
                <h6 class="h6-required">※ハイフンなし</h6>
            </div>

            <div class="row">
                <div class="col-25">
                    <span class="form">必須</span>
                    <label for="address">ご住所</label>
                </div>
                <p>◇郵便番号</p>
                <div class="col-43">
                    <h7>〒</h7>
                </div>
                <div class="col-42">
                    <input type="text" class="@error('zip21') is-invalid @enderror" name="zip21" size="4" maxlength="3"
                        required>
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
                    <input class="@error('zip22') is-invalid @enderror" value="{{ old('zip22') }}"
                        type="text" name="zip22" size="5" maxlength="4"
                        onKeyUp="AjaxZip3.zip2addr('zip21','zip22','addr21','addr21');" required>
                    @error('zip21')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-76">
                    <p>◇住所</p>
                    <input type="text" name="addr21" size="40" required>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <span class="form">必須</span>
                    <label for="rule">利用規約</label>
                </div>
                <div class="col-77" id="rule">
                    <div class="Inner">
                        <h2 class="Inner-Headline">利用規約</h2>
                        <p class="Inner-Text first">
                            本規約は、株式会社〇〇（以下「当社」といいます。）が提供するサービスを利用するお客様（以下「利用者」といいます。）において、当社が提供するサービスを利用する上での合意事項となります。ご利用になる前に、必ずご確認、ご承諾頂きますようお願い申し上げます。
                        </p>
                        <div class="Inner-Box">
                            <h3 class="Inner-Box-Headline">個人情報保護方針</h3>
                            <ol class="Inner-Box-List">
                                <li class="Inner-Box-List-Item">
                                    利用者は、本サービスの利用により取得した個人情報（個人情報の保護に関する法律に規定される「個人情報」をいいます。）を、個人情報の保護に関する法律及び同法施行令ならびに関係省庁による同法に関するガイドライン等、個人情報保護に関する一切の法規に従い適正に取り扱い、善良なる管理者の注意義務を持って管理するものとします。
                                </li>
                                <li class="Inner-Box-List-Item">
                                    利用者は、前項の個人情報を、本人の同意なく、第三者に提供すること及び利用者が定める個人情報の利用目的以外の目的で使用しないものとします。
                                </li>
                                <li class="Inner-Box-List-Item">
                                    当社は、第三者の提供するコールトラッキングサービスを使用し、当該サービスがお客様の個人情報を取得する場合があります。その場合の個人情報の取り扱いについては、当規約に加え、サービス提供元の<a
                                        href="#" class="Inner-Box-List-Item-Link">個人情報保護方針</a>に従うものとします。
                                </li>
                                <li class="Inner-Box-List-Item">
                                    利用者が前各項に違反し、利用者又は当社が第三者から権利侵害の主張をされた場合には、利用者の費用と責任においてこれを解決するものとします。
                                </li>
                            </ol>
                        </div>
                        <div class="Inner-Box">
                            <h3 class="Inner-Box-Headline">秘密保持</h3>
                            <ol class="Inner-Box-List">
                                <li class="Inner-Box-List-Item">
                                    当社及び利用者は、相手方から秘密である旨明示のうえ受領し又は開示を受けた情報（以下「機密情報」という。）を、本契約の有効期間中及び本契約終了後も、第三者に開示又は漏洩してはならないものとします。ただし、監督官公庁又は法令に基づき開示が要請された場合を除きます。
                                </li>
                                <li class="Inner-Box-List-Item">
                                    個人情報を除き、前項にかかわらず次の各号の一に該当するものは機密情報にあたらないものとします。
                                    <ol class="Inner-Box-List-Item-Ol">
                                        <li class="Inner-Box-List-Item-Ol-Item">
                                            受領時に、既に公知であったもの
                                        </li>
                                        <li class="Inner-Box-List-Item-Ol-Item">
                                            開示後、受領者の責に帰さない事由により公知となったもの
                                        </li>
                                        <li class="Inner-Box-List-Item-Ol-Item">
                                            開示の時、受領者が既に保有していたもの
                                        </li>
                                        <li class="Inner-Box-List-Item-Ol-Item">
                                            第三者から機密保持義務を負うことなく正当に入手したもの
                                        </li>
                                    </ol>
                                </li>
                            </ol>
                        </div>
                        <div class="Inner-Box">
                            <h3 class="Inner-Box-Headline">反社会的勢力の排除</h3>
                            <ol class="Inner-Box-List">
                                <li class="Inner-Box-List-Item">
                                    利用者及び当社は、自己（法人の場合は、代表者、役員又は実質的に経営を支配する者。）が暴力団、暴力団員、暴力団関係企業、総会屋、社会運動標ぼうゴロ、政治運動標ぼうゴロ、特殊知能暴力集団、その他反社会的勢力(以下｢暴力団等反社会的勢力｣という。)に該当しないこと、及び次のいずれにも該当しないことを表明し、かつ将来にわたっても該当しないことを確約するものとします。
                                    <ol class="Inner-Box-List-Item-Ol">
                                        <li class="Inner-Box-List-Item-Ol-Item">
                                            暴力団等反社会的勢力が経営を支配していると認められる関係を有すること
                                        </li>
                                        <li class="Inner-Box-List-Item-Ol-Item">
                                            暴力団等反社会的勢力が経営に実質的に関与していると認められる関係を有すること
                                        </li>
                                        <li class="Inner-Box-List-Item-Ol-Item">
                                            自己、自社若しくは第三者の不正の利益を図る目的又は第三者に損害を加える目的をもってするなど、不当に暴力団等反社会的勢力を利用していると認められる関係を有すること
                                        </li>
                                        <li class="Inner-Box-List-Item-Ol-Item">
                                            暴力団等反社会的勢力に対して資金等を提供し、又は便宜を供与するなど関与をしていると認められる関係を有すること
                                        </li>
                                        <li class="Inner-Box-List-Item-Ol-Item">
                                            役員又は経営に実質的に関与している者が暴力団等反社会的勢力と社会的に非難されるべき関係を有すること
                                        </li>
                                    </ol>
                                </li>
                                <li class="Inner-Box-List-Item">
                                    利用者は、当社が前項の該当性の判断のために調査を要すると判断した場合、その調査に協力し、これに必要と判断する資料を提出しなければならないものとします。
                                </li>
                                <li class="Inner-Box-List-Item">
                                    利用者及び当社は、相手方が暴力団等反社会的勢力に属すると判明した場合、催告をすることなく、本サービス利用契約を解除することができるものとします。
                                </li>
                                <li class="Inner-Box-List-Item">
                                    利用者及び当社は、前項の規定により本サービス利用契約を解除した場合に相手方に損害が生じてもこれを賠償する責任を負わないものとします。
                                </li>
                            </ol>
                        </div>
                        <div class="Inner-Box">
                            <h3 class="Inner-Box-Headline">知的財産権</h3>
                            <ol class="Inner-Box-List">
                                <li class="Inner-Box-List-Item">
                                    本サービス内における画像、動画、文章、キャラクター、プログラムその他一切の情報（以下、「画像等」といいます。）に関する知的財産権は、利用者が自ら作成したポップアップ広告に関する知的財産権を除き、当社又は当社にその利用を許諾した者（以下、「権利者」といいます。）に帰属します。利用者は、法令に基づき認められる場合を除き、当社又は権利者による事前の許可なく、画像等を複製、送信その他の態様で使用することはできません。
                                </li>
                                <li class="Inner-Box-List-Item">
                                    本サービスの名称その他本サービス内で表示される商品名、サービス名等には、当社又は第三者が商標権その他の使用権を有する名称が含まれます。本規約は、利用者その他の第三者に対し、知的財産権を譲渡又は使用許諾するものではありません。また、本サービスに関する知的財産権について、利用者がその登録の出願又は移転の申請を行ってはならないものとします。
                                </li>
                            </ol>
                            <div class="Inner-Box-Contact">
                                <p class="Inner-Box-Contact-Text">
                                    個人情報保護方針、個人情報の取り扱い及び苦情及び相談に関するお問い合わせ先については、以下にご連絡下さい。
                                </p>
                                <p class="Inner-Box-Contact-Text">株式会社〇〇</p>
                                <p class="Inner-Box-Contact-Text">
                                    〒000-0000 東京都〇〇区〇〇1丁目000-0
                                </p>
                                <p class="Inner-Box-Contact-Text">Email info@sample.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-78">
                    <input type="checkbox" name="yes" value="同意" required />
                    <label for="yes">同意</label>
                </div>
            </div>
            <input type='hidden' name='status' value=0>
            <div class="row">
                <input type="submit" value="確認画面へ" />
            </div>
        </form>
    </div>

    <!--formB-->
    <div id="formB" style="display: none;">
        <form method="POST" action="{{ route('formTest') }}">
            @csrf
            <div class="row">
                <div class="col-25">
                    <span class="form">必須</span>
                    <label for="email">メールアドレス</label>
                </div>
                <div class="col-75">
                    <input type="text" id="email" name="email" class="@error('email') is-invalid @enderror"
                        placeholder="メールアドレスを入力" required>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <span class="form">必須</span>
                    <label for="pswA">パスワード</label>
                </div>
                <div class="col-75">
                    <input type="password" id="password" name="password" class="@error('password') is-invalid @enderror"
                        placeholder="パスワードを入力" required>
                    <p>確認のため、もう一度入力してください</p>
                    <input type="password" id="password" name="password_confirmation" placeholder="もう一度パスワードを入力"
                        required><br />
                    <input type="checkbox" id="display" name="display" onchange='passwordDisplay("display")'>
                    <label for="hidepwordA"> パスワードを表示する</label>
                </div>
                <h6 class="h6-required">※8~20文字数内で<br />設定してください</h6>
            </div>

            <div class="row">
                <div class="col-25">
                    <span class="form">必須</span>
                    <label for="nameA">お名前</label>
                </div>
                <div class="col-35">
                    <input type="text" id="fnameA" name="kanjiFamilyName"
                        class="@error('kanjiFamilyName') is-invalid @enderror" placeholder="姓名">
                </div>
                <div class="col-35">
                    <input type="text" id="lnameA" name="kanjiFirstName"
                        class="@error('kanjiFirstName') is-invalid @enderror" placeholder="氏名" />
                </div>
                <h6 class="h6-required">※全角<br />例（山田　太郎）</h6>
            </div>
            <div class="row">
                <div class="col-40">
                    <input type="text" name="kanaFamilyName" class="@error('kanaFamilyName') is-invalid @enderror" placeholder="フリガナ(姓名)" />
                    @error('kanaFamilyName')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-41">
                    <input type="text" name="kanaFirstName" class="@error('kanaFirstName') is-invalid @enderror" placeholder="フリガナ(氏名)" />
                    @error('kanaFirstName')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <h6 class="h6-required">※全角<br />例（ヤマダ　タロウ）</h6>
            </div>

            <div class="row">
                <div class="col-25">
                    <span class="form">必須</span>
                    <label for="telA">電話番号</label>
                </div>
                <div class="col-75">
                    <input type="text" name="phoneNumber" class="@error('phoneNumber') is-invalid @enderror"
                        placeholder="電話番号を入力" />
                    @error('phoneNumber')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <br />
                <h6 class="h6-required">※ハイフンなし</h6>
            </div>

            <div class="row">
                <div class="col-25">
                    <span class="form">必須</span>
                    <label for="rule">利用規約</label>
                </div>
                <div class="col-77" id="rule">
                    <div class="Inner">
                        <h2 class="Inner-Headline">利用規約</h2>
                        <p class="Inner-Text first">
                            本規約は、株式会社〇〇（以下「当社」といいます。）が提供するサービスを利用するお客様（以下「利用者」といいます。）において、当社が提供するサービスを利用する上での合意事項となります。ご利用になる前に、必ずご確認、ご承諾頂きますようお願い申し上げます。
                        </p>
                        <div class="Inner-Box">
                            <h3 class="Inner-Box-Headline">個人情報保護方針</h3>
                            <ol class="Inner-Box-List">
                                <li class="Inner-Box-List-Item">
                                    利用者は、本サービスの利用により取得した個人情報（個人情報の保護に関する法律に規定される「個人情報」をいいます。）を、個人情報の保護に関する法律及び同法施行令ならびに関係省庁による同法に関するガイドライン等、個人情報保護に関する一切の法規に従い適正に取り扱い、善良なる管理者の注意義務を持って管理するものとします。
                                </li>
                                <li class="Inner-Box-List-Item">
                                    利用者は、前項の個人情報を、本人の同意なく、第三者に提供すること及び利用者が定める個人情報の利用目的以外の目的で使用しないものとします。
                                </li>
                                <li class="Inner-Box-List-Item">
                                    当社は、第三者の提供するコールトラッキングサービスを使用し、当該サービスがお客様の個人情報を取得する場合があります。その場合の個人情報の取り扱いについては、当規約に加え、サービス提供元の<a
                                        href="#" class="Inner-Box-List-Item-Link">個人情報保護方針</a>に従うものとします。
                                </li>
                                <li class="Inner-Box-List-Item">
                                    利用者が前各項に違反し、利用者又は当社が第三者から権利侵害の主張をされた場合には、利用者の費用と責任においてこれを解決するものとします。
                                </li>
                            </ol>
                        </div>
                        <div class="Inner-Box">
                            <h3 class="Inner-Box-Headline">秘密保持</h3>
                            <ol class="Inner-Box-List">
                                <li class="Inner-Box-List-Item">
                                    当社及び利用者は、相手方から秘密である旨明示のうえ受領し又は開示を受けた情報（以下「機密情報」という。）を、本契約の有効期間中及び本契約終了後も、第三者に開示又は漏洩してはならないものとします。ただし、監督官公庁又は法令に基づき開示が要請された場合を除きます。
                                </li>
                                <li class="Inner-Box-List-Item">
                                    個人情報を除き、前項にかかわらず次の各号の一に該当するものは機密情報にあたらないものとします。
                                    <ol class="Inner-Box-List-Item-Ol">
                                        <li class="Inner-Box-List-Item-Ol-Item">
                                            受領時に、既に公知であったもの
                                        </li>
                                        <li class="Inner-Box-List-Item-Ol-Item">
                                            開示後、受領者の責に帰さない事由により公知となったもの
                                        </li>
                                        <li class="Inner-Box-List-Item-Ol-Item">
                                            開示の時、受領者が既に保有していたもの
                                        </li>
                                        <li class="Inner-Box-List-Item-Ol-Item">
                                            第三者から機密保持義務を負うことなく正当に入手したもの
                                        </li>
                                    </ol>
                                </li>
                            </ol>
                        </div>
                        <div class="Inner-Box">
                            <h3 class="Inner-Box-Headline">反社会的勢力の排除</h3>
                            <ol class="Inner-Box-List">
                                <li class="Inner-Box-List-Item">
                                    利用者及び当社は、自己（法人の場合は、代表者、役員又は実質的に経営を支配する者。）が暴力団、暴力団員、暴力団関係企業、総会屋、社会運動標ぼうゴロ、政治運動標ぼうゴロ、特殊知能暴力集団、その他反社会的勢力(以下｢暴力団等反社会的勢力｣という。)に該当しないこと、及び次のいずれにも該当しないことを表明し、かつ将来にわたっても該当しないことを確約するものとします。
                                    <ol class="Inner-Box-List-Item-Ol">
                                        <li class="Inner-Box-List-Item-Ol-Item">
                                            暴力団等反社会的勢力が経営を支配していると認められる関係を有すること
                                        </li>
                                        <li class="Inner-Box-List-Item-Ol-Item">
                                            暴力団等反社会的勢力が経営に実質的に関与していると認められる関係を有すること
                                        </li>
                                        <li class="Inner-Box-List-Item-Ol-Item">
                                            自己、自社若しくは第三者の不正の利益を図る目的又は第三者に損害を加える目的をもってするなど、不当に暴力団等反社会的勢力を利用していると認められる関係を有すること
                                        </li>
                                        <li class="Inner-Box-List-Item-Ol-Item">
                                            暴力団等反社会的勢力に対して資金等を提供し、又は便宜を供与するなど関与をしていると認められる関係を有すること
                                        </li>
                                        <li class="Inner-Box-List-Item-Ol-Item">
                                            役員又は経営に実質的に関与している者が暴力団等反社会的勢力と社会的に非難されるべき関係を有すること
                                        </li>
                                    </ol>
                                </li>
                                <li class="Inner-Box-List-Item">
                                    利用者は、当社が前項の該当性の判断のために調査を要すると判断した場合、その調査に協力し、これに必要と判断する資料を提出しなければならないものとします。
                                </li>
                                <li class="Inner-Box-List-Item">
                                    利用者及び当社は、相手方が暴力団等反社会的勢力に属すると判明した場合、催告をすることなく、本サービス利用契約を解除することができるものとします。
                                </li>
                                <li class="Inner-Box-List-Item">
                                    利用者及び当社は、前項の規定により本サービス利用契約を解除した場合に相手方に損害が生じてもこれを賠償する責任を負わないものとします。
                                </li>
                            </ol>
                        </div>
                        <div class="Inner-Box">
                            <h3 class="Inner-Box-Headline">知的財産権</h3>
                            <ol class="Inner-Box-List">
                                <li class="Inner-Box-List-Item">
                                    本サービス内における画像、動画、文章、キャラクター、プログラムその他一切の情報（以下、「画像等」といいます。）に関する知的財産権は、利用者が自ら作成したポップアップ広告に関する知的財産権を除き、当社又は当社にその利用を許諾した者（以下、「権利者」といいます。）に帰属します。利用者は、法令に基づき認められる場合を除き、当社又は権利者による事前の許可なく、画像等を複製、送信その他の態様で使用することはできません。
                                </li>
                                <li class="Inner-Box-List-Item">
                                    本サービスの名称その他本サービス内で表示される商品名、サービス名等には、当社又は第三者が商標権その他の使用権を有する名称が含まれます。本規約は、利用者その他の第三者に対し、知的財産権を譲渡又は使用許諾するものではありません。また、本サービスに関する知的財産権について、利用者がその登録の出願又は移転の申請を行ってはならないものとします。
                                </li>
                            </ol>
                            <div class="Inner-Box-Contact">
                                <p class="Inner-Box-Contact-Text">
                                    個人情報保護方針、個人情報の取り扱い及び苦情及び相談に関するお問い合わせ先については、以下にご連絡下さい。
                                </p>
                                <p class="Inner-Box-Contact-Text">株式会社〇〇</p>
                                <p class="Inner-Box-Contact-Text">
                                    〒000-0000 東京都〇〇区〇〇1丁目000-0
                                </p>
                                <p class="Inner-Box-Contact-Text">Email info@sample.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-78">
                    <input type="checkbox" name="yes" value="同意" required />
                    <label for="yes">同意</label>
                </div>
            </div>
            <input type='hidden' name='status' value=1>
            <div class="row">
                <input type="submit" value="確認画面へ" />
            </div>
        </form>
    </div>
</div>
@endsection
