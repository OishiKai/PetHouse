@extends('layouts.app')

@section('head')
<script src="{{ asset('js/formSwitch.js') }}" defer></script>
<script src="{{ asset('js/formSwitchPrefecture.js') }}" defer></script>
<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
@endsection


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('記事投稿フォーム') }}</div>

                <div class="card-body">

                    <form method="POST" action="{{ route('articleStore') }}" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right ">{{ __('ペットの写真➀') }}</label>

                            <div class="col-md-6">
                                <input type="file" name="img1" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right ">{{ __('ペットの写真➁') }}</label>

                            <div class="col-md-6">
                                <input type="file" name="img2" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right ">{{ __('ペットの写真➂') }}</label>

                            <div class="col-md-6">
                                <input type="file" name="img2" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right ">{{ __('ペットの写真➃') }}</label>

                            <div class="col-md-6">
                                <input type="file" name="img2" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right ">{{ __('ペットの写真⑤') }}</label>

                            <div class="col-md-6">
                                <input type="file" name="img2" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('タイトル') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('ペットの種類') }}</label>
                            <div class="col-md-6">
                                <div class="form-check form-check-inline  @error('pet') is-invalid @enderror">
                                    <input class="form-check-input" type="radio" name="switch" value="犬" onclick="formSwitch()" checked>
                                    <label class="form-check-label">犬</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="switch" value="猫" onclick="formSwitch()">
                                    <label class="form-check-label">猫</label>
                                </div>
                            </div>
                        </div>
                        
                        <div id='default' class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('ペットの種類(犬)') }}</label>

                            <div class="col-md-6">
                                <select name='speciesDog'>
                                    <option value='雑種' selected>雑種</option>
                                    <option value='トイプードル'>トイプードル</option>
                                    <option value='チワワ(ロング)'>チワワ(ロング)</option>
                                    <option value='ミニチュアダックスフンド(ロング)'>ミニチュアダックスフンド(ロング)</option>
                                    <option value='柴犬'>柴犬</option>
                                    <option value='ポメラニアン'>ポメラニアン</option>
                                    <option value='マルチーズ'>マルチーズ</option>
                                    <option value='フレンチブルドッグ'>フレンチブルドッグ</option>
                                    <option value='シーズー'>シーズー</option>
                                    <option value='パピヨン'>パピヨン</option>
                                    <option value='ヨークシャーテリア'>ヨークシャーテリア</option>
                                    <option value='ラブラドールレトリバー'>ラブラドールレトリバー</option>
                                    <option value='チワワ(スムース)'>チワワ(スムース)</option>
                                    <option value='ビーグル'>ビーグル</option>
                                    <option value='キャバリア'>キャバリア</option>
                                    <option value='ゴールデンレトリバー'>ゴールデンレトリバー</option>
                                    <option value='土佐犬'>土佐犬</option>
                                    <option value='ミニチュアピンシャー'>ミニチュアピンシャー</option>
                                    <option value='カニンヘンダックスフンド(ロング)'>カニンヘンダックスフンド(ロング)</option>
                                    <option value='ミニチュアダックスフンド(スムース)'>ミニチュアダックスフンド(スムース)</option>
                                    <option value='パグ'>パグ</option>
                                    <option value='ミニチュアシュナウザー'>ミニチュアシュナウザー</option>
                                    <option value='ペキニーズ'>ペキニーズ</option>
                                    <option value='シェットランドシープドッグ'>シェットランドシープドッグ</option>
                                    <option value='アメリカンコッカースパニエル'>アメリカンコッカースパニエル</option>
                                    <option value='秋田犬'>秋田犬</option>
                                    <option value='ウェルシュ・コーギー・ペンブローク'>ウェルシュ・コーギー・ペンブローク</option>
                                    <option value='イングリッシュコッカースパニエル'>イングリッシュコッカースパニエル</option>
                                    <option value='ビションフリーゼ'>ビションフリーゼ</option>
                                    <option value='バーニーズ・マウンテン・ドッグ'>バーニーズ・マウンテン・ドッグ</option>
                                    <option value='ジャックラッセルテリア'>ジャックラッセルテリア</option>
                                    <option value='ボーダーコリー'>ボーダーコリー</option>
                                    <option value='ウィペット'>ウィペット</option>
                                    <option value='イタリアングレーハウンド'>イタリアングレーハウンド</option>
                                    <option value='日本スピッツ'>日本スピッツ</option>
                                    <option value='甲斐犬'>甲斐犬</option>
                                    <option value='アメリカンピットブルテリア'>アメリカンピットブルテリア</option>
                                    <option value='ミニチュアプードル'>ミニチュアプードル</option>
                                    <option value='狆(チン)'>狆(チン)</option>
                                    <option value='チャウチャウ'>チャウチャウ</option>
                                    <option value='ジャーマン・シェパード・ドッグ'>ジャーマン・シェパード・ドッグ</option>
                                    <option value='シベリアンハスキー'>シベリアンハスキー</option>
                                    <option value='スタンダードプードル'>スタンダードプードル</option>
                                    <option value='ミニチュアダックスフンド(ワイアー)'>ミニチュアダックスフンド(ワイアー)</option>
                                    <option value='ボストンテリア'>ボストンテリア</option>
                                    <option value='ブルドッグ'>ブルドッグ</option>
                                    <option value='紀州犬'>紀州犬</option>
                                    <option value='ワイマラナー'>ワイマラナー</option>
                                    <option value='ミニチュアブルテリア'>ミニチュアブルテリア</option>
                                    <option value='ミディアムプードル'>ミディアムプードル</option>
                                    <option value='ボクサー'>ボクサー</option>
                                    <option value='フラットコーテッドレトリバー'>フラットコーテッドレトリバー</option>
                                    <option value='ドーベルマン'>ドーベルマン</option>
                                    <option value='チャイニーズ・クレステッド・ドッグ'>チャイニーズ・クレステッド・ドッグ</option>
                                    <option value='チベタンスパニエル'>チベタンスパニエル</option>
                                    <option value='スタンダードダックスフンド(ロング)'>スタンダードダックスフンド(ロング)</option>
                                    <option value='ウェルシュ・コーギー・カーディガン'>ウェルシュ・コーギー・カーディガン</option>
                                    <option value='イングリッシュセッター'>イングリッシュセッター</option>
                                    <option value='アイリッシュセッター'>アイリッシュセッター</option>
                                    <option value='カニンヘンダックスフンド(スムース)'>カニンヘンダックスフンド(スムース)</option>
                                    <option value='セントバーナード'>セントバーナード</option>
                                    <option value='その他の犬種'>その他の犬種</option>
                                </select>
                            </div>
                        </div>

                        <div id='another' class="form-group row" style='display: none;'>
                            <label class="col-md-4 col-form-label text-md-right">{{ __('ペットの種類(猫)') }}</label>

                            <div class="col-md-6">
                                <select name='speciesCat'>
                                    <option value='雑種' selected>雑種</option>
                                    <option value='アビシニアン'>アビシニアン</option>
                                    <option value='アメリカンカール'>アメリカンカール</option>
                                    <option value='アメリカンショートヘア'>アメリカンショートヘア</option>
                                    <option value='エキゾチックショートヘア'>エキゾチックショートヘア</option>
                                    <option value='エキゾチックロングヘア'>エキゾチックロングヘア</option>
                                    <option value='エジプシャンマウ'>エジプシャンマウ</option>
                                    <option value='サイベリアン'>サイベリアン</option>
                                    <option value='シャム(サイアミーズ)'>シャム(サイアミーズ)</option>
                                    <option value='シャルトリュー'>シャルトリュー</option>
                                    <option value='シンガプーラ'>シンガプーラ</option>
                                    <option value='スコティッシュフォールド'>スコティッシュフォールド</option>
                                    <option value='セルカークレックス'>セルカークレックス</option>
                                    <option value='ソマリ'>ソマリ</option>
                                    <option value='ターキッシュアンゴラ'>ターキッシュアンゴラ</option>
                                    <option value='チンチラペルシャ'>チンチラペルシャ</option>
                                    <option value='トイガー'>トイガー</option>
                                    <option value='トンキニーズ'>トンキニーズ</option>
                                    <option value='ノルウェージャンフォレストキャット'>ノルウェージャンフォレストキャット</option>
                                    <option value='ヒマラヤン'>ヒマラヤン</option>
                                    <option value='ブリティッシュショートヘア'>ブリティッシュショートヘア</option>
                                    <option value='ベンガル'>ベンガル</option>
                                    <option value='ペルシャ'>ペルシャ</option>
                                    <option value='マンチカン'>マンチカン</option>
                                    <option value='ミヌエット'>ミヌエット</option>
                                    <option value='メインクーン'>メインクーン</option>
                                    <option value='ラガマフィン'>ラガマフィン</option>
                                    <option value='ラグドール'>ラグドール</option>
                                    <option value='ロシアンブルー'>ロシアンブルー</option>
                                    <option value='その他の猫種'>その他の猫種</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('サイズ') }}</label>
                            <div class="col-md-6">
                                <select name='size'>
                                    <option value='超大型' selected>超大型</option>
                                    <option value='大型'>大型</option>
                                    <option value='中型'>中型</option>
                                    <option value='小型'>小型</option>
                                    <option value='超小型'>超小型</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('年齢') }}</label>

                            <div class="col-md-6">
                                <select name='age'>
                                    <option value='0歳' selected>0歳</option>
                                    <option value='1歳'>1歳</option>
                                    <option value='2歳'>2歳</option>
                                    <option value='3歳'>3歳</option>
                                    <option value='4歳'>4歳</option>
                                    <option value='5歳'>5歳</option>
                                    <option value='6歳'>6歳</option>
                                    <option value='7歳'>7歳</option>
                                    <option value='8歳'>8歳</option>
                                    <option value='9歳'>9歳</option>
                                    <option value='10歳以上'>10歳以上</option>
                                </select>
                                <select name='month'>
                                    <option value='1ヶ月' selected>1ヶ月</option>
                                    <option value='2ヶ月'>2ヶ月</option>
                                    <option value='3ヶ月'>3ヶ月</option>
                                    <option value='4ヶ月'>4ヶ月</option>
                                    <option value='5ヶ月'>5ヶ月</option>
                                    <option value='6ヶ月'>6ヶ月</option>
                                    <option value='7ヶ月'>7ヶ月</option>
                                    <option value='8ヶ月'>8ヶ月</option>
                                    <option value='9ヶ月'>9ヶ月</option>
                                    <option value='10ヶ月'>10ヶ月</option>
                                    <option value='11ヶ月'>11ヶ月</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('性別') }}</label>

                            <div class="col-md-6">
                                <div class="form-check form-check-inline  @error('gender') is-invalid @enderror">
                                    <input class="form-check-input" type="radio" name="gender" value="オス"  checked>
                                    <label class="form-check-label">オス</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" value="メス">
                                    <label class="form-check-label">メス</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('ワクチン接種状況') }}</label>

                            <div class="col-md-6">
                                <div class="form-check form-check-inline  @error('vaccination') is-invalid @enderror">
                                    <input class="form-check-input" type="radio" name="vaccination" value="接種済み"  checked>
                                    <label class="form-check-label">接種済み</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="vaccination" value="未接種">
                                    <label class="form-check-label">未接種</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('避妊・去勢手術状況') }}</label>

                            <div class="col-md-6">
                                <div class="form-check form-check-inline  @error('castration') is-invalid @enderror">
                                    <input class="form-check-input" type="radio" name="castration" value="接種済み"  checked>
                                    <label class="form-check-label">施術済み</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="castration" value="未接種">
                                    <label class="form-check-label">未施術</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('独身者の募集可否') }}</label>

                            <div class="col-md-6">
                                <div class="form-check form-check-inline  @error('singlePerson') is-invalid @enderror">
                                    <input class="form-check-input" type="radio" name="singlePerson" value="可"  checked>
                                    <label class="form-check-label">可</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="singlePerson" value="否">
                                    <label class="form-check-label">否</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('高齢者の募集可否') }}</label>

                            <div class="col-md-6">
                                <div class="form-check form-check-inline  @error('elderPerson') is-invalid @enderror">
                                    <input class="form-check-input" type="radio" name="elderPerson" value="可"  checked>
                                    <label class="form-check-label">可</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="elderPerson" value="否">
                                    <label class="form-check-label">否</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('募集期間') }}</label>
                            <div class="col-md-6">
                                <select name='recruitmentPeriod'>
                                    <option value='1週間' selected>1週間</option>
                                    <option value='2週間'>2週間</option>
                                    <option value='3週間'>3週間</option>
                                    <option value='1ヶ月'>1ヶ月</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('ペット所在地') }}</label>
                            <div class="col-md-6">
                                <select name='recruitmentPeriod'>
                                    <option value='北海道' selected>北海道</option>
                                    <option value='青森県'>青森県</option>
                                    <option value='岩手県'>岩手県</option>
                                    <option value='秋田県'>秋田県</option>
                                    <option value='宮城県'>宮城県</option>
                                    <option value='山形県'>山形県</option>
                                    <option value='福島県'>福島県</option>
                                    <option value='茨城県'>茨城県</option>
                                    <option value='栃木県'>栃木県</option>
                                    <option value='群馬県'>群馬県</option>
                                    <option value='埼玉県'>埼玉県</option>
                                    <option value='千葉県'>千葉県</option>
                                    <option value='東京都'>東京都</option>
                                    <option value='神奈川県'>神奈川県</option>
                                    <option value='新潟県'>新潟県</option>
                                    <option value='富山県'>富山県</option>
                                    <option value='石川県'>石川県</option>
                                    <option value='福井県'>福井県</option>
                                    <option value='山梨県'>山梨県</option>
                                    <option value='長野県'>長野県</option>
                                    <option value='岐阜県'>岐阜県</option>
                                    <option value='静岡県'>静岡県</option>
                                    <option value='愛知県'>愛知県</option>
                                    <option value='三重県'>三重県</option>
                                    <option value='滋賀県'>滋賀県</option>
                                    <option value='京都府'>京都府</option>
                                    <option value='大阪府'>大阪府</option>
                                    <option value='兵庫県'>兵庫県</option>
                                    <option value='奈良県'>奈良県</option>
                                    <option value='和歌山県'>和歌山県</option>
                                    <option value='鳥取県'>鳥取県</option>
                                    <option value='島根県'>島根県</option>
                                    <option value='岡山県'>岡山県</option>
                                    <option value='広島県'>広島県</option>
                                    <option value='山口県'>山口県</option>
                                    <option value='徳島県'>徳島県</option>
                                    <option value='香川県'>香川県</option>
                                    <option value='愛媛県'>愛媛県</option>
                                    <option value='高知県'>高知県</option>
                                    <option value='福岡県'>福岡県</option>
                                    <option value='佐賀県'>佐賀県</option>
                                    <option value='長崎県'>長崎県</option>
                                    <option value='熊本県'>熊本県</option>
                                    <option value='大分県'>大分県</option>
                                    <option value='宮崎県'>宮崎県</option>
                                    <option value='鹿児島県'>鹿児島県</option>
                                    <option value='沖縄県'>沖縄県</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('応募可能地域') }}</label>
                            <div class="col-md-6 required">
                                @error('area')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <div class="card" style="width: 18rem;">
                                    <div class="card-header">
                                        <input class="form-check-input" type="checkbox" name="area[]" value='北海道'>
                                        <label class="form-check-label">北海道</label>
                                    </div>
                                </div>

                                <div class="card" style="width: 18rem;">
                                    <div class="card-header">
                                        <input class="form-check-input" type="checkbox" name='tohoku' onchange='formSwitchPrefecture("tohoku")'>
                                        <label class="form-check-label">東北地方</label>
                                    </div>
                                    <ul class="list-group list-group-flush" id='tohokuPrefectures' style="display: none;">
                                        <li class="list-group-item">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="area[]" value='青森県'>
                                                <label class="form-check-label">青森県</label>
                                                <input class="form-check-input" type="checkbox" name="area[]" value='岩手県'>
                                                <label class="form-check-label">岩手県</label>
                                                <input class="form-check-input" type="checkbox" name="area[]" value='秋田県'>
                                                <label class="form-check-label">秋田県</label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="area[]" value='宮城県'>
                                                <label class="form-check-label">宮城県</label>
                                                <input class="form-check-input" type="checkbox" name="area[]" value='山形県'>
                                                <label class="form-check-label">山形県</label>
                                                <input class="form-check-input" type="checkbox" name="area[]" value='福島県'>
                                                <label class="form-check-label">福島県</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="card" style="width: 18rem;">
                                    <div class="card-header">
                                        <input class="form-check-input" type="checkbox" name='kanto' onchange='formSwitchPrefecture("kanto")'>
                                        <label class="form-check-label">関東地方</label>
                                    </div>
                                    <ul class="list-group list-group-flush" id='kantoPrefectures' style="display: none;">
                                        <li class="list-group-item">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="area[]" value='茨城県'>
                                                <label class="form-check-label">茨城県</label>
                                                <input class="form-check-input" type="checkbox" name="area[]" value='栃木県'>
                                                <label class="form-check-label">岩手県</label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="area[]" value='群馬県'>
                                                <label class="form-check-label">群馬県</label>
                                                <input class="form-check-input" type="checkbox" name="area[]" value='埼玉県'>
                                                <label class="form-check-label">埼玉県</label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="area[]" value='千葉県'>
                                                <label class="form-check-label">千葉県</label>
                                                <input class="form-check-input" type="checkbox" name="area[]" value='東京都'>
                                                <label class="form-check-label">東京都</label>
                                                <input class="form-check-input" type="checkbox" name="area[]" value='神奈川県'>
                                                <label class="form-check-label">神奈川県</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="card" style="width: 18rem;">
                                    <div class="card-header">
                                        <input class="form-check-input" type="checkbox" name='tyubu' onchange='formSwitchPrefecture("tyubu")'>
                                        <label class="form-check-label">中部地方</label>
                                    </div>
                                    <ul class="list-group list-group-flush" id='tyubuPrefectures' style="display: none;">
                                        <li class="list-group-item">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="area[]" value='新潟県'>
                                                <label class="form-check-label">新潟県</label>
                                                <input class="form-check-input" type="checkbox" name="area[]" value='富山県'>
                                                <label class="form-check-label">富山県</label>
                                                <input class="form-check-input" type="checkbox" name="area[]" value='石川県'>
                                                <label class="form-check-label">石川県</label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="area[]" value='福井県'>
                                                <label class="form-check-label">福井県</label>
                                                <input class="form-check-input" type="checkbox" name="area[]" value='山梨県'>
                                                <label class="form-check-label">山梨県</label>
                                                <input class="form-check-input" type="checkbox" name="area[]" value='長野県'>
                                                <label class="form-check-label">長野県</label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="area[]" value='岐阜県'>
                                                <label class="form-check-label">岐阜県</label>
                                                <input class="form-check-input" type="checkbox" name="area[]" value='静岡県'>
                                                <label class="form-check-label">静岡県</label>
                                                <input class="form-check-input" type="checkbox" name="area[]" value='愛知県'>
                                                <label class="form-check-label">愛知県</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="card" style="width: 18rem;">
                                    <div class="card-header">
                                        <input class="form-check-input" type="checkbox" name='kinki' onchange='formSwitchPrefecture("kinki")'>
                                        <label class="form-check-label">近畿地方</label>
                                    </div>
                                    <ul class="list-group list-group-flush" id='kinkiPrefectures' style="display: none;">
                                        <li class="list-group-item">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="area[]" value='三重県'>
                                                <label class="form-check-label">三重県</label>
                                                <input class="form-check-input" type="checkbox" name="area[]" value='滋賀県'>
                                                <label class="form-check-label">滋賀県</label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="area[]" value='京都府'>
                                                <label class="form-check-label">京都府</label>
                                                <input class="form-check-input" type="checkbox" name="area[]" value='大阪府'>
                                                <label class="form-check-label">大阪府</label>
                                                <input class="form-check-input" type="checkbox" name="area[]" value='兵庫県'>
                                                <label class="form-check-label">兵庫県</label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="area[]" value='奈良県'>
                                                <label class="form-check-label">奈良県</label>
                                                <input class="form-check-input" type="checkbox" name="area[]" value='和歌山県'>
                                                <label class="form-check-label">和歌山県</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="card" style="width: 18rem;">
                                    <div class="card-header">
                                        <input class="form-check-input" type="checkbox" name='tyugoku' onchange='formSwitchPrefecture("tyugoku")'>
                                        <label class="form-check-label">中国地方</label>
                                    </div>
                                    <ul class="list-group list-group-flush" id='tyugokuPrefectures' style="display: none;">
                                        <li class="list-group-item">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="area[]" value='鳥取県'>
                                                <label class="form-check-label">鳥取県</label>
                                                <input class="form-check-input" type="checkbox" name="area[]" value='島根県'>
                                                <label class="form-check-label">島根県</label>
                                                <input class="form-check-input" type="checkbox" name="area[]" value='岡山県'>
                                                <label class="form-check-label">岡山県</label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="area[]" value='広島県'>
                                                <label class="form-check-label">広島県</label>
                                                <input class="form-check-input" type="checkbox" name="area[]" value='山口県'>
                                                <label class="form-check-label">山口県</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="card" style="width: 18rem;">
                                    <div class="card-header">
                                        <input class="form-check-input" type="checkbox" name='shikoku' onchange='formSwitchPrefecture("shikoku")'>
                                        <label class="form-check-label">四国地方</label>
                                    </div>
                                    <ul class="list-group list-group-flush" id='shikokuPrefectures' style="display: none;">
                                        <li class="list-group-item">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="area[]" value='徳島県'>
                                                <label class="form-check-label">徳島県</label>
                                                <input class="form-check-input" type="checkbox" name="area[]" value='香川県'>
                                                <label class="form-check-label">香川県</label>
                                                
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="area[]" value='愛媛県'>
                                                <label class="form-check-label">愛媛県</label>
                                                <input class="form-check-input" type="checkbox" name="area[]" value='高知県'>
                                                <label class="form-check-label">高知県</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="card" style="width: 18rem;">
                                    <div class="card-header">
                                        <input class="form-check-input" type="checkbox" name='kyusyu' onchange='formSwitchPrefecture("kyusyu")'>
                                        <label class="form-check-label">九州地方</label>
                                    </div>
                                    <ul class="list-group list-group-flush" id='kyusyuPrefectures' style="display: none;">
                                        <li class="list-group-item">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="area[]" value='福岡県'>
                                                <label class="form-check-label">福岡県</label>
                                                <input class="form-check-input" type="checkbox" name="area[]" value='佐賀県'>
                                                <label class="form-check-label">佐賀県</label>
                                                <input class="form-check-input" type="checkbox" name="area[]" value='長崎県'>
                                                <label class="form-check-label">熊本県</label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="area[]" value='熊本県'>
                                                <label class="form-check-label">熊本県</label>
                                                <input class="form-check-input" type="checkbox" name="area[]" value='大分県'>
                                                <label class="form-check-label">大分県</label>
                                                <input class="form-check-input" type="checkbox" name="area[]" value='宮崎県'>
                                                <label class="form-check-label">宮崎県</label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="area[]" value='鹿児島県'>
                                                <label class="form-check-label">鹿児島県</label>
                                                <input class="form-check-input" type="checkbox" name="area[]" value='沖縄県'>
                                                <label class="form-check-label">沖縄県</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('ペットの名前') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="name" value="{{ old('name') }}" required>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('ペットの毛柄') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('pattern') is-invalid @enderror" name="pattern" value="{{ old('pattern') }}" required>

                                @error('pattern')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right ">{{ __('募集の経緯') }}</label>

                            <div class="col-md-6">
                                <textarea name='background' class="form-control @error('background') is-invalid @enderror" cols='20' rows='10' required></textarea>

                                @error('background')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right ">{{ __('性格') }}</label>

                            <div class="col-md-6">
                                <textarea name='personality' class="form-control @error('personality') is-invalid @enderror" cols='20' rows='3' required></textarea>

                                @error('personality')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right ">{{ __('健康状態') }}</label>

                            <div class="col-md-6">
                                <textarea name='health' class="form-control @error('health') is-invalid @enderror" cols='20' rows='3' required></textarea>

                                @error('health')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right ">{{ __('引き渡し場所') }}</label>

                            <div class="col-md-6">
                                <textarea name='transaction' class="form-control @error('transaction') is-invalid @enderror" cols='20' rows='3' required></textarea>

                                @error('transaction')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right ">{{ __('募集の経緯') }}</label>

                            <div class="col-md-6">
                                <textarea name='remarks' class="form-control @error('remarks') is-invalid @enderror" cols='20' rows='10' required></textarea>

                                @error('remarks')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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
