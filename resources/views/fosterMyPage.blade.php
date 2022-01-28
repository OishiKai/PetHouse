@extends('layouts.base')

@section('head')
<link rel="stylesheet" href="{{ asset('css/fosterMyPageStyle.css') }}">
@endsection

@section('content')
<main-content>

    <aside>
        <nav class="MP-sideBox">
            <div class="menu-title">メニュー</div>
            <ul>
                <li><a href="MyPage-General.html">マイページTOP</a></li>
                <li><a href="">お問い合わせ中の<br>ペット</a></li>
                <li><a href="">お気に入り一覧</a></li>
                <li><a href="">保護活動者からの<br>メッセージ</a></li>
                <li><a href="">アンケート登録・変更</a></li>
            </ul>
    </aside>


    <!--main content-->
    <div class="MP-main">
        <h1>～ようこそ {{ $user['kanjiFamilyName'] }}
            {{ $user['kanjiFirstName'] }} 様～</h1>
        <p class="article">保護活動者とやり取りしていく上でお客様の詳細な情報が必要になっていきます。</p>
        <p class="article">以下のリンク先からアンケートのご登録をお願いいたします。</p>
        <br>
        <div class="MP-linkbtn">
            <a class="MP-link" href="">アンケートの登録・変更ページへ向かう</a>
        </div>

        <br>
        <br>
        <br>
        <p class="article">ご質問・わからないことがございましたら、</p>
        <p class="article">▼こちらからご確認ください。</p>
        <br>

        <div class="MP-linkbtn">
            <a class="MP-link" href="">よくある質問</a>
        </div>

        <br>
        <br>
        <br>
        <p class="article">他の機能につきましては、左の【メニュー】一覧からご確認ください。</p>
        <br>
        <br>

        <h2 class="suggest">最近見たペット</h2><br>
        <div class="pet-main">

            <ul class="pets">
                <li class="flex-item">
                    <a href="">
                        <img src="img/inu.jpg" class="pic" alt="pets-picture">
                        <h2 class="new">NEW</h2>
                        <div class="details_container">
                            <details>
                                <summary>
                                    <span class="open">もっと見る</span>
                                    <span class="close">閉じる</span>
                                    　</summary>
                                <div class="details-content">
                                    <p>題名</p>
                                    <p>種類</p>
                                    <p>年齢</p>
                                    <p>性別</p>
                                    <p>所在地</p>
                                    <p>応募可能地域</p>
                                    <p>掲載期間</p>
                                </div>
                            </details>
                        </div>
                    </a>
                </li>


                <li class="flex-item">
                    <a href="">
                        <img src="img/inu2.jpg" class="pic" alt="pets-picture">
                        <h2 class="new">NEW</h2>
                        <div class="details_container">
                            <details>
                                <summary>
                                    <span class="open">もっと見る</span>
                                    <span class="close">閉じる</span>
                                    　</summary>
                                <div class="details-content">
                                    <p>題名</p>
                                    <p>種類</p>
                                    <p>年齢</p>
                                    <p>性別</p>
                                    <p>所在地</p>
                                    <p>応募可能地域</p>
                                    <p>掲載期間</p>
                                </div>
                            </details>
                        </div>
                    </a>
                </li>

                <li class="flex-item">
                    <a href="">
                        <img src="img/inu3.jpg" class="pic" alt="pets-picture">
                        <h2 class="new">NEW</h2>
                        <div class="details_container">
                            <details>
                                <summary>
                                    <span class="open">もっと見る</span>
                                    <span class="close">閉じる</span>
                                    　</summary>
                                <div class="details-content">
                                    <p>題名</p>
                                    <p>種類</p>
                                    <p>年齢</p>
                                    <p>性別</p>
                                    <p>所在地</p>
                                    <p>応募可能地域</p>
                                    <p>掲載期間</p>
                                </div>
                            </details>
                        </div>
                    </a>
                </li>
            </ul>

            <ul class="pets">
                <li class="flex-item">
                    <a href="">
                        <img src="img/cat1.jpg" class="pic" alt="pets-picture">
                        <h2 class="new">NEW</h2>
                        <div class="details_container">
                            <details>
                                <summary>
                                    <span class="open">もっと見る</span>
                                    <span class="close">閉じる</span>
                                    　</summary>
                                <div class="details-content">
                                    <p>題名</p>
                                    <p>種類</p>
                                    <p>年齢</p>
                                    <p>性別</p>
                                    <p>所在地</p>
                                    <p>応募可能地域</p>
                                    <p>掲載期間</p>
                                </div>
                            </details>
                        </div>
                    </a>
                </li>

                <li class="flex-item">
                    <a href="">
                        <img src="img/cat2.jpg" class="pic" alt="pets-picture">
                        <h2 class="new">NEW</h2>
                        <div class="details_container">
                            <details>
                                <summary>
                                    <span class="open">もっと見る</span>
                                    <span class="close">閉じる</span>
                                    　</summary>
                                <div class="details-content">
                                    <p>題名</p>
                                    <p>種類</p>
                                    <p>年齢</p>
                                    <p>性別</p>
                                    <p>所在地</p>
                                    <p>応募可能地域</p>
                                    <p>掲載期間</p>
                                </div>
                            </details>
                        </div>
                    </a>
                </li>

                <li class="flex-item">
                    <a href="">
                        <img src="img/cat3.jpg" class="pic" alt="pets-picture">
                        <h2 class="new">NEW</h2>
                        <div class="details_container">
                            <details>
                                <summary>
                                    <span class="open">もっと見る</span>
                                    <span class="close">閉じる</span>
                                    　</summary>
                                <div class="details-content">
                                    <p>題名</p>
                                    <p>種類</p>
                                    <p>年齢</p>
                                    <p>性別</p>
                                    <p>所在地</p>
                                    <p>応募可能地域</p>
                                    <p>掲載期間</p>
                                </div>
                            </details>
                        </div>
                    </a>
                </li>
            </ul>

        </div>

        <br>
        <br>
        <br>
        <br>

        <h2 class="suggest">あなたにおすすめのペット</h2><br>
        <div class="pet-main">

            <ul class="pets">
                <li class="flex-item">
                    <a href="">
                        <img src="img/inu.jpg" class="pic" alt="pets-picture">
                        <h2 class="new">NEW</h2>
                        <div class="details_container">
                            <details>
                                <summary>
                                    <span class="open">もっと見る</span>
                                    <span class="close">閉じる</span>
                                    　</summary>
                                <div class="details-content">
                                    <p>題名</p>
                                    <p>種類</p>
                                    <p>年齢</p>
                                    <p>性別</p>
                                    <p>所在地</p>
                                    <p>応募可能地域</p>
                                    <p>掲載期間</p>
                                </div>
                            </details>
                        </div>
                    </a>
                </li>


                <li class="flex-item">
                    <a href="">
                        <img src="img/inu2.jpg" class="pic" alt="pets-picture">
                        <h2 class="new">NEW</h2>
                        <div class="details_container">
                            <details>
                                <summary>
                                    <span class="open">もっと見る</span>
                                    <span class="close">閉じる</span>
                                    　</summary>
                                <div class="details-content">
                                    <p>題名</p>
                                    <p>種類</p>
                                    <p>年齢</p>
                                    <p>性別</p>
                                    <p>所在地</p>
                                    <p>応募可能地域</p>
                                    <p>掲載期間</p>
                                </div>
                            </details>
                        </div>
                    </a>
                </li>

                <li class="flex-item">
                    <a href="">
                        <img src="img/inu3.jpg" class="pic" alt="pets-picture">
                        <h2 class="new">NEW</h2>
                        <div class="details_container">
                            <details>
                                <summary>
                                    <span class="open">もっと見る</span>
                                    <span class="close">閉じる</span>
                                    　</summary>
                                <div class="details-content">
                                    <p>題名</p>
                                    <p>種類</p>
                                    <p>年齢</p>
                                    <p>性別</p>
                                    <p>所在地</p>
                                    <p>応募可能地域</p>
                                    <p>掲載期間</p>
                                </div>
                            </details>
                        </div>
                    </a>
                </li>
            </ul>

            <ul class="pets">
                <li class="flex-item">
                    <a href="">
                        <img src="img/cat1.jpg" class="pic" alt="pets-picture">
                        <h2 class="new">NEW</h2>
                        <div class="details_container">
                            <details>
                                <summary>
                                    <span class="open">もっと見る</span>
                                    <span class="close">閉じる</span>
                                    　</summary>
                                <div class="details-content">
                                    <p>題名</p>
                                    <p>種類</p>
                                    <p>年齢</p>
                                    <p>性別</p>
                                    <p>所在地</p>
                                    <p>応募可能地域</p>
                                    <p>掲載期間</p>
                                </div>
                            </details>
                        </div>
                    </a>
                </li>

                <li class="flex-item">
                    <a href="">
                        <img src="img/cat2.jpg" class="pic" alt="pets-picture">
                        <h2 class="new">NEW</h2>
                        <div class="details_container">
                            <details>
                                <summary>
                                    <span class="open">もっと見る</span>
                                    <span class="close">閉じる</span>
                                    　</summary>
                                <div class="details-content">
                                    <p>題名</p>
                                    <p>種類</p>
                                    <p>年齢</p>
                                    <p>性別</p>
                                    <p>所在地</p>
                                    <p>応募可能地域</p>
                                    <p>掲載期間</p>
                                </div>
                            </details>
                        </div>
                    </a>
                </li>

                <li class="flex-item">
                    <a href="">
                        <img src="img/cat3.jpg" class="pic" alt="pets-picture">
                        <h2 class="new">NEW</h2>
                        <div class="details_container">
                            <details>
                                <summary>
                                    <span class="open">もっと見る</span>
                                    <span class="close">閉じる</span>
                                    　</summary>
                                <div class="details-content">
                                    <p>題名</p>
                                    <p>種類</p>
                                    <p>年齢</p>
                                    <p>性別</p>
                                    <p>所在地</p>
                                    <p>応募可能地域</p>
                                    <p>掲載期間</p>
                                </div>
                            </details>
                        </div>
                    </a>
                </li>
            </ul>

        </div>
    </div>

</main-content>
@endsection
