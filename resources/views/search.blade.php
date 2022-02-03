@extends('layouts.base')

@section('head')
<!-- <script src="{{ asset('js/lootScript.js') }}" defer></script> -->
<link href="{{ asset('css/searchStyle.css') }}" rel="stylesheet">
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
@endsection

@section('content')
<ul class="breadcrumb">
    <li><a href="{{ route('home') }}">HOME</a></li>
    <li>検索・結果</li>
</ul>



<!---/header--->


<!---main content--->

<div class="text-seach">
    <h1>{{$key}} の検索結果</h1>
</div>



<!-----main----->


<div class="searching-main">
    <!-----side----->
    <div class="searchBox">

        <h2>さらに条件を絞る</h2>


        <!---ラジオボックス選択--->
        <p>性別</p>

        <!-- ラジオボタン選択肢 -->
        <label>
            <input type="radio" class="osucheck" name="gender">
            オス
        </label>

        <label>
            <input type="radio" class="mesucheck" name="gender">
            メス
        </label>
        <br>
        <br>


        <!---ラジオボックス選択--->
        <p>年齢層</p>

        <!-- ラジオボタン選択肢 -->
        <label>
            <input type="radio" name="age">
            子犬・子猫
        </label>
        <br>

        <label>
            <input type="radio" name="age">
            成犬・成猫
        </label>
        <br>

        <label>
            <input type="radio" name="age">
            老犬・老猫
        </label>
        <br>
        <br>


        <!--<p>応募可能地域<br>(複数選択可)</p>
      <div onclick="obj=document.getElementById('open').style; obj.display=(obj.display=='none')?'block':'none';">
        <a class="Deployment" style="cursor:pointer;">▼クリックで展開</a>-->

        <!--// 折り畳み展開ポインタ -->

        <!-- 折り畳まれ部分 -->



        <div class="prefectures">
            <label for="all"><input type="checkbox" name="checkAll" id="all">全選択</label>


            <p id="boxes">
                <p>北海道地方</p>
                <label>
                    <input type="checkbox" class="checkboxall" name="genre" value="北海道">北海道
                </label>
                <br>
                <br>

                <p>東北地方</p>
                <label>
                    <input type="checkbox" class="checkboxall" name="genre" value="青森県">青森県
                </label>
                <br>

                <label>
                    <input type="checkbox" class="checkboxall" name="genre" value="岩手県">岩手県
                </label>
                <br>

                <label>
                    <input type="checkbox" class="checkboxall" name="genre" value="宮城県">宮城県
                </label>
                <br>

                <label>
                    <input type="checkbox" class="checkboxall" name="genre" value="秋田県">秋田県
                </label>
                <br>

                <label>
                    <input type="checkbox" class="checkboxall" name="genre" value="山形県">山形県
                </label>
                <br>

                <label>
                    <input type="checkbox" class="checkboxall" name="genre" value="福島県">福島県
                </label>
                <br>
                <br>

                <p>関東地方</p>

                <label>
                    <input type="checkbox" class="checkboxall" name="genre" value="茨城県">茨城県
                </label>
                <br>

                <label>
                    <input type="checkbox" class="checkboxall" name="genre" value="栃木県">栃木県
                </label>
                <br>

                <label>
                    <input type="checkbox" class="checkboxall" name="genre" value="群馬県">群馬県
                </label>
                <br>

                <label>
                    <input type="checkbox" class="checkboxall" name="genre" value="埼玉県">埼玉県
                </label>
                <br>

                <label>
                    <input type="checkbox" class="checkboxall" name="genre" value="千葉県">千葉県
                </label>
                <br>

                <label>
                    <input type="checkbox" class="checkboxall" name="genre" value="東京都">東京都
                </label>
                <br>

                <label>
                    <input type="checkbox" class="checkboxall" name="genre" value="神奈川県">神奈川県
                </label>
                <br>
                <br>

                <p>中部地方</p>

                <label>
                    <input type="checkbox" class="checkboxall" name="genre" value="新潟県">新潟県
                </label>
                <br>

                <label>
                    <input type="checkbox" class="checkboxall" name="genre" value="富山県">富山県
                </label>
                <br>

                <label>
                    <input type="checkbox" class="checkboxall" name="genre" value="石川県">石川県
                </label>
                <br>

                <label>
                    <input type="checkbox" class="checkboxall" name="genre" value="福井県">福井県
                </label>
                <br>

                <label>
                    <input type="checkbox" class="checkboxall" name="genre" value="山梨県">山梨県
                </label>
                <br>

                <label>
                    <input type="checkbox" class="checkboxall" name="genre" value="長野">長野県
                </label>
                <br>

                <label>
                    <input type="checkbox" class="checkboxall" name="genre" value="岐阜県">岐阜県
                </label>
                <br>

                <label>
                    <input type="checkbox" class="checkboxall" name="genre" value="静岡県">静岡県
                </label>
                <br>

                <label>
                    <input type="checkbox" class="checkboxall" name="genre" value="愛知県">愛知県
                </label>
                <br>
                <br>

                <p>近畿地方</p>

                <label>
                    <input type="checkbox" class="checkboxall" name="genre" value="三重県">三重県
                </label>
                <br>

                <label>
                    <input type="checkbox" class="checkboxall" name="genre" value="滋賀県">滋賀県
                </label>
                <br>

                <label>
                    <input type="checkbox" class="checkboxall" name="genre" value="京都府">京都府
                </label>
                <br>

                <label>
                    <input type="checkbox" class="checkboxall" name="genre" value="大阪府">大阪府
                </label>
                <br>

                <label>
                    <input type="checkbox" class="checkboxall" name="genre" value="兵庫県">兵庫県
                </label>
                <br>

                <label>
                    <input type="checkbox" class="checkboxall" name="genre" value="奈良県">奈良県
                </label>
                <br>

                <label>
                    <input type="checkbox" class="checkboxall" name="genre" value="和歌山県">和歌山県
                </label>
                <br>
                <br>

                <p>中国地方</p>

                <label>
                    <input type="checkbox" class="checkboxall" name="genre" value="鳥取県">鳥取県
                </label>
                <br>

                <label>
                    <input type="checkbox" class="checkboxall" name="genre" value="島根県">島根県
                </label>
                <br>

                <label>
                    <input type="checkbox" class="checkboxall" name="genre" value="岡山県">岡山県
                </label>
                <br>

                <label>
                    <input type="checkbox" class="checkboxall" name="genre" value="広島県">広島県
                </label>
                <br>

                <label>
                    <input type="checkbox" class="checkboxall" name="genre" value="山口県">山口県
                </label>
                <br>
                <br>

                <p>四国地方</p>

                <label>
                    <input type="checkbox" class="checkboxall" name="genre" value="徳島県">徳島県
                </label>
                <br>

                <label>
                    <input type="checkbox" class="checkboxall" name="genre" value="香川県">香川県
                </label>
                <br>

                <label>
                    <input type="checkbox" class="checkboxall" name="genre" value="愛媛県">愛媛県
                </label>
                <br>

                <label>
                    <input type="checkbox" class="checkboxall" name="genre" value="高知県">高知県
                </label>
                <br>
                <br>

                <p>九州地方</p>

                <label>
                    <input type="checkbox" class="checkboxall" name="genre" value="福岡県">福岡県
                </label>
                <br>

                <label>
                    <input type="checkbox" class="checkboxall" name="genre" value="佐賀県">佐賀県
                </label>
                <br>

                <label>
                    <input type="checkbox" class="checkboxall" name="genre" value="長崎県">長崎県
                </label>
                <br>

                <label>
                    <input type="checkbox" class="checkboxall" name="genre" value="熊本県">熊本県
                </label>
                <br>

                <label>
                    <input type="checkbox" class="checkboxall" name="genre" value="大分県">大分県
                </label>
                <br>

                <label>
                    <input type="checkbox" class="checkboxall" name="genre" value="宮城県">宮城県
                </label>
                <br>

                <label>
                    <input type="checkbox" class="checkboxall" name="genre" value="鹿児島県">鹿児島県
                </label>
                <br>

                <label>
                    <input type="checkbox" class="checkboxall" name="genre" value="沖縄県">沖縄県
                </label>
            </p>


        </div>


        <p>掲載状況</p>

        <!-- ラジオボタン選択肢 -->
        <label>
            <input type="radio" name="Published" value="only">
            募集中のみ表示
        </label>
        <br>

        <label>
            <input type="radio" name="Published" value="all" checked>全て表示
        </label>
        <!-- 送信ボタン -->
        <button class="search">この条件で調べる</button><br><br>
        <button class="reset">条件をリセット</button>

    </div>

    <!--// 折り畳まれ部分 -->

    <!-----side----->

    <div class="main">
        <div class="flexbox">
        @if ($datas != null)
            <h4>{{count($datas)}}件</h4>
        @else
        <h4>0件</h4>
        @endif
            <div class="button-wrapper">

                <a class="btn btn-border"> ▲新 </a>
                <a class="btn btn-border"> ▼古 </a>
            </div>

            <ul id=pets>
                @if ($datas != null)
                    @for($i=0;$i< count($datas);$i++)
                    <div class="flex-item-osu">
                        <li>
                            <a href="/articleDetail/{{$datas[$i]['id']}}">
                                <img src="https://pethouse1984.s3.ap-northeast-1.amazonaws.com/article/{{ $datas[$i]['id']}}(1).{{$ex[$i]}}" class="pic" alt="">
                                <h2 class="new">NEW</h2>
                                <div class="details_container">
                                    <details>

                                        <summary>
                                            <span class="open">もっと見る</span>
                                            <span class="close">閉じる</span>
                                        </summary>
                                        <div class="details-content">
                                            <p>タイトル : {{$datas[$i]['title']}}</p>
                                            <p>種類  : {{$datas[$i]['species']}}</p>
                                            <p>年齢 : {{$datas[$i]['age']}}</p>
                                            <p>性別  : {{$datas[$i]['gender']}}</p>
                                            <p>募集状況  : {{$datas[$i]['status']}}</p>
                                        </div>
                                    </details>
                                </div>
                            </a>
                        </li>
                    </div>
                    @endfor
                @else
                <h2>該当の募集記事は見つかりませんでした</h2>
                @endif
    

            </ul>


        </div>
    </div>
</div>
@endsection