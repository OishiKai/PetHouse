@extends('layouts.base')

@section('head')
<script src="{{ asset('js/faqScript.js') }}" defer></script>
<link href="{{ asset('css/faqStyle.css') }}" rel="stylesheet">
@endsection


@section('content')

<div id="a">
    <div class="a">
        <h2>よくある質問</h2>
        <h3>カテゴリーを絞る</h3>
    </div>
    <div class="b">
        <select name="category" id="category">
            <option value="すべて" selected>すべて</option>
            <option value="PetHouseの利用について">PetHouseの利用について</option>
            <option value="会員登録について">会員登録について</option>
            <option value="里親希望する">里親希望する</option>
            <option value="里親を募集する">里親を募集する</option>
            <option value="トラブルについて">トラブルについて</option>
            <option value="違反行為について">違反行為について</option>
            <option value="サイトへのお問い合わせ">サイトへのお問い合わせ</option>
            <option value="操作方法">操作方法</option>
            <option value="その他">その他</option>
        </select>

    </div>

    <div class="qa-list mtd" style='margin: 0px 200px 0px 200px'>
        <dl class="qa">
            <dt>ここに質問が入ります</dt>
            <dd>
                <p>ここに回答が入ります</p>
            </dd>
        </dl>
        <dl class="qa">
            <dt>ここに質問が入ります</dt>
            <dd>
                <p>ここに回答が入ります</p>
            </dd>
        </dl>
        <dl class="qa">
            <dt>ここに質問が入ります</dt>
            <dd>
                <p>ここに回答が入ります</p>
            </dd>
        </dl>
    </div>

    <script>
        window.addEventListener('DOMContentLoaded', function () {
            $(".qa-list dd").hide();
            $(".qa-list dl").on("click", function (e) {
                $('dd', this).slideToggle('fast');
                if ($(this).hasClass('open')) {
                    $(this).removeClass('open');
                } else {
                    $(this).addClass('open');
                }
            });
        });

    </script>


</div>
@endsection
