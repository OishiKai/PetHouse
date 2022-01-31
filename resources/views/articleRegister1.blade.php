@extends('layouts.base')

@section('head')
<script src="{{ asset('js/formSwitch.js') }}"></script>
<script src="{{ asset('js/articleScript.js') }}"></script>
<link rel="stylesheet" href="{{ asset('css/articleStyle.css') }}">
@endsection

@section('content')
<h1 class="label-title">仮登録フォーム</h1>

<div id="main_1">
    <section>
        <form method="POST" action="{{ route('articleRegisterA') }}" enctype="multipart/form-data">
            @csrf


            <!--ペット種別-->
            <h2 class="form-label"><span class="form-require">必須</span>ペット種別</h2>
            <dd>
                <label><input type="radio" name="switch" id="pet1" value="犬" onclick="formSwitch()" checked>犬</label>
                <label><input type="radio" name="switch" id="pet2" value="猫" onclick="formSwitch()">猫</label>
            </dd><br>
            <!--ペット種別-->

            <div id='default'>
                <h2 class="form-label"><span class="form-require">必須</span>ペット種別</h2>
                <dd>
                    <select name='speciesDog'>
                        <option value='雑種' selected>雑種</option>
                        <option value='柴犬'>柴犬</option>
                        <option value='ポメラニアン'>ポメラニアン</option>
                        <option value='トイプードル'>トイプードル</option>
                        <option value='ダックスフント'>ダックスフント</option>
                        <option value='チワワ'>チワワ</option>
                        <option value='その他'>その他</option>
                    </select>
                </dd><br>
            </div>

            <div id='another' style='display: none;'>
                <h2 class="form-label"><span class="form-require">必須</span>ペット種別</h2>
                <dd>
                    <select name='speciesCat'>
                        <option value='雑種' selected>雑種</option>
                        <option value='アメリカンショート'>アメリカンショート</option>
                        <option value='マンチカン'>マンチカン</option>
                        <option value='スコティッシュフォールド'>スコティッシュフォールド</option>
                        <option value='エキゾチックショートヘア'>エキゾチックショートヘア</option>
                        <option value='ミヌエット'>ミヌエット</option>
                        <option value='ブリティッシュショートヘア'>ブリティッシュショートヘア</option>
                        <option value='その他'>その他</option>
                    </select>
                </dd><br>
            </div>

            <!--性別-->
            <h2 class="form-label"><span class="form-require">必須</span>性別</h2>
            <dd>
                <label><input type="radio" name="gender" value="オス">オス</label>
                <label><input type="radio" name="gender" value="メス">メス</label>
                <label><input type="radio" name="gender" value="不明">不明</label>
            </dd><br>
            <!--性別-->

            <h2 class="form-label"><span class="form-require">必須</span>ワクチン接種状況</h2>
            <dd>
                <label><input type="radio" name="vaccination" value="接種済み" checked>接種済み</label>
                <label><input type="radio" name="vaccination" value="未接種">未接種</label>
            </dd><br>

            <h2 class="form-label"><span class="form-require">必須</span>避妊・去勢手術状況</h2>
            <dd>
                <label><input type="radio" name="castration" value="施術済み" checked>施術済み</label>
                <label><input type="radio" name="castration" value="未施術">未施術</label>
            </dd><br>

            <h2 class="form-label"><span class="form-require">必須</span>ペットの名前</h2>
            <dd>
                <label><input type="text" name="name" required></label>
            </dd><br>

            <h2 class="form-label"><span class="form-require">必須</span>ペットの毛柄</h2>
            <dd>
                <label><input type="text" name="pattern" required></label>
            </dd><br>

            <h2 class="form-label"><span class="form-require">必須</span>ペットのサイズ</h2>
            <dd>
                <label><input type="radio" name="size" value="小型" checked>小型</label>
                <label><input type="radio" name="size" value="中型">中型</label>
                <label><input type="radio" name="size" value="大型">大型</label>
            </dd><br>

            <h2 class="form-label"><span class="form-require">必須</span>ペットの年齢</h2>
            <dd>
                <label><select name='age'>
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
                </label>
            </dd><br>

            <!--ペット紹介写真-->
            <h2 class="form-label"><span class="form-require">必須</span>ペット紹介写真</h2>
            <p class="form-label"><span class="form-require3"><b>必須</b></span>写真1</p>
            <dd>
                <label><input type="file" name="img1" accept="image/jpeg, image/png, image/gif" required></label><br>
            </dd><br>
            <p class="form-label"><span class="form-require4"><b>任意</b></span>写真2</p>
            <dd>
                <label><input type="file" name="img2" accept="image/jpeg, image/png, image/gif"></label><br>
            </dd><br>
            <p class="form-label"><span class="form-require4"><b>任意</b></span>写真3</p>
            <dd>
                <label><input type="file" name="img3" accept="image/jpeg, image/png, image/gif"></label><br>
            </dd><br>
            <p class="form-label"><span class="form-require4"><b>任意</b></span>写真4</p>
            <dd>
                <label><input type="file" name="img4" accept="image/jpeg, image/png, image/gif"></label><br>
            </dd><br>
            <p class="form-label"><span class="form-require4"><b>任意</b></span>写真5</p>
            <dd>
                <label><input type="file" name="img5" accept="image/jpeg, image/png, image/gif"></label><br>
            </dd><br>
            <p class="form-label"><span class="form-require4"><b>任意</b></span>写真6</p>
            <dd>
                <label><input type="file" name="img6" accept="image/jpeg, image/jpg, image/png, image/gif"></label><br>
            </dd><br>
            <!--ペット紹介写真-->

            <button type="submit" class="form-Btn">次 へ</button>
        </form>
    </section>

</div>

<br><br>
@endsection
