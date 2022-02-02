@extends('layouts.base')

@section('head')
<script src="{{ asset('js/faqScript.js') }}" defer></script>
<link href="{{ asset('css/faqStyle.css') }}" rel="stylesheet">
@endsection


@section('content')

<div id="a">
    <div class="a">
        <h2>よくある質問</h2>
        <!-- <h3>カテゴリーを絞る</h3> -->
    </div>
    <!-- <div class="b">
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

    </div> -->

    <div class="qa-list mtd" style='margin: 0px 200px 0px 200px'>
        <dl class="qa">
            <dt>里親希望を申し出る方法を教えてください。</dt>
            <dd>
                <p>里親希望を申し出るには、新規登録する必要があります。まだアカウントの取得がお済みでない方は、ページ上部の「会員登録・ログイン」より新規登録をお願いいたします。
                    アカウントをお持ちの方は、ページ上部の「会員登録・ログイン」よりログインをお願いします。ログイン後、里親を希望する募集情報ページより「里親申し出る／お問い合わせ」から申し込みを進めます。
                    「問い合わせ区分」「里親募集者へのメッセージ」「同意事項」への入力と確認をいただき、「応募者情報入力」「応募者アンケート入力」にて必要事項を記載し、里親希望の旨を里親募集者にご送信ください。
                    ※すでにアカウントをお持ちの方は、新規登録をする必要はありません。 </p>
            </dd>
        </dl>
        <dl class="qa">
            <dt>まずは、質問からでも構いませんか？ </dt>
            <dd>
                <p>構いません。里親募集情報内にある「里親を申し出る／お問い合わせ」から、里親募集者へのお問い合わせができます。譲渡を円滑に進めるためには、里親応募者・里親募集者双方の信頼関係が必要です。気になる部分をそのままにしないよう、やりとりをお願いいたします。ただし、「興味がある」という思いだけでのお問い合わせはおやめください。ペットの「命」を預かるということをご理解いただき、里親になる心構えができた上で、里親募集者へとお問い合わせいただくようお願いいたします。
                </p>
            </dd>
        </dl>
        <dl class="qa">
            <dt>里親希望の申し出・問い合わせを里親募集者に送信しましたが、返信がありません。 </dt>
            <dd>
                <p>里親募集者の皆様には、里親応募者からの里親希望の申し出や問い合わせに対し、なるべく早急に対応いただくよう協力をお願いしております。しかしながら、里親募集者は普段の生活と並行してボランティアなど保護・愛護活動を行っている方々が少なくありません。タイミングによっては、早急に返信できない場合もございます。里親募集者の事情をご理解いただき、返信がない場合は改めてご連絡いただくなどの対応をお願いいたします。
                </p>
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
