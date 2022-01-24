@extends('layouts.app')

@section('head')
<script src="{{ asset('js/articleDetailScript.js') }}" defer></script>
<link href="{{ asset('css/articleDetailStyle.css') }}" rel="stylesheet">
@endsection

@section('content')
<?php
// dd($data);
?>
<div id="wrapper">
    <div class="back">
        <a href="javascript:history.back()">＜＜前のページに戻る</a>
    </div>
    <div class="Publication">
        <p>{{$user['id']}}の里親募集詳細</p>
        <p>募集ID：{{$id}}</p>
        <p>掲載日：[]</p>

        <p class="Deadline">掲載期限：[]まで</p>
    </div>
    <div id="main">
        <section id="title">
            <h2>{{$data['title']}}</h2>
                <p>♥お気に入り登録者[]人｜閲覧数[]</p>
        </section>
        <section id="imgGallery">
            <div class="mein-frame">
                <img id="main-img" src="{{ asset('article_images\1.jpg') }}" alt="メイン写真">
            </div>
            <ul class="thumbspace">
                <li>
                    <img class="thumbnails" src="public\article_images\3e20da53-bb4c-44b5-9b96-1654cf1b7fa4(1).jpg" alt="写真1">
                </li>
                <li>
                    <img class="thumbnails" src="#" data-imagesrc="#" alt="写真2">
                </li>
                <li>
                    <img class="thumbnails" src="#" data-imagesrc="#" alt="写真3">
                </li>
                <li>
                    <img class="thumbnails" src="#" data-imagesrc="#" alt="写真4">
                </li>
            </ul>
            <script type="text/javascript">
                var thumbs =document.querySelectorAll('.thumbnails');
                for (var i =0 ; i < thumbs.length; i++ ) {
                    thumbs[i].onclick = function() {
                    document.getElementById('main-img').src = this.dataset.imagesrc;
                    };
                }
            </script>       
            <h2>[名前] [(♂／♀)] [年齢]</h2>
        </section>
        <section id="information">
            <div class="menu">
                <label for="menu_bar01"><h2>基本情報</h2></label>
                <input type="checkbox" id="menu_bar01" />
                <ul id="links01">
                    <li>
                        <table>
                            <tr>
                                <th>状況</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>種類</th>
                                <td>[]</td>
                            </tr>
                            <tr>
                                <th>サイズ</th>
                                <td>[]</td>
                            </tr>
                            <tr>
                                <th>ペット所在地</th>
                                <td>[]</td>
                            </tr>
                        </table>
                    </li>
                </ul>
                <label for="menu_bar02"><h2>詳細情報</h2></label>
                <input type="checkbox" id="menu_bar02" />
                <ul id="links02">
                    <li>
                        <table>
                            <tr>
                                <th>ワクチン接種</th>
                                <td>[]</td>
                            </tr>
                            <tr>
                                <th>去勢／避妊</th>
                                <td>[]</td>
                            </tr>
                            <tr>
                                <th>健康状態</th>
                                <td>[]</td>
                            </tr>
                        </table>
                    </li>
                </ul>
                <label for="menu_bar03"><h2>その他</h2></label>
                <input type="checkbox" id="menu_bar03" />
                <ul id="links03">
                    <li>
                        <table>
                            <tr>
                                <th>募集の経緯</th>
                                <td>[]</td>
                            </tr>
                            <tr>
                                <th>性格や特徴</th>
                                <td>[]</td>
                            </tr>
                            <tr>
                                <th>その他備考</th>
                                <td>[]</td>
                            </tr>
                        </table>
                    </li>
                </ul>
                <label class="menu_ber04" for="menu_bar04"><h2>条件・募集可能地域</h2></label>
                <input type="checkbox" id="menu_bar04" />
                <ul id="links04">
                    <li>
                        <table>
                            <tr>
                                <th><p>・単身者応募</p></th>
                                <td>[]</td>
                            </tr>
                            <tr>
                                <th><p>・高齢者応募(６５歳以上)</p></th>
                                <td>[]</td>
                            </tr>
                            <tr>
                                <th><p>・先住ペットがいる方</p></th>
                                <td>[]</td>
                            </tr>
                            <tr>
                                <th><p>・[]頭(匹)の譲渡を希望</p></th>
                                <td>【理由】[]</td>
                            </tr>
                            <tr>
                                <th>募集可能地域</th>
                                <td>[]</td>
                            </tr>
                            <tr>
                                <th>引き渡し場所</th>
                                <td>[]</td>
                            </tr>
                        </table>
                    </li>
                </ul>
                <label for="menu_bar05"><h2>里親募集者情報</h2></label>
                <input type="checkbox" id="menu_bar05" />
                <ul id="links05">
                    <li>
                        <table>
                            <tr>
                                <th>保護活動者<br>里親募集者名</th>
                                <td>[]</td>
                            </tr>
                            <tr>
                                <th>会員種別</th>
                                <td>[]</td>
                            </tr>
                            <tr>
                                <th>団体・法人所在地<br>里親募集者住所</th>
                                <td>[]</td>
                            </tr>
                        </table>
                    </li>
                </ul>
                <div class="apply">
                    <h2><a href="#">お申し込み</a></h2>
                </div>
            </div>
        </section>
        <div class="resemble">
            <h2>この子の条件に似たペット</h2>
            []
        </div>
        <div class="back_b">
            <a class="" href="javascript:history.back()">＜＜前のページに戻る</a>
        </div>
    </div>
</div>
@endsection