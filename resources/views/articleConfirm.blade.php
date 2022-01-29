@extends('layouts.base')

@section('head')
<script src="{{ asset('js/articleStyle.js') }}" defer></script>
<link rel="stylesheet" href="{{ asset('css/articleScript.css') }}">
@endsection

@section('content')
<h1 class="label-title">確認画面</h1><br>

<!--仮登録フォーム-->
<h2 class="form-require5">仮登録</h2>

<table class="A">

    <tr>
        <th><b>ペット種別:</b></th>
        <td></td>
    </tr>
    <tr>
        <th><b>性別:</b></th>
        <td></td>
    </tr>
    <tr>
        <th><b>ペット紹介写真:</b></th>
        <td></td>
    </tr>

</table>

<!--仮登録フォーム-->　　


<!--応募者条件判定フォーム-->
<h2 class="form-require6">応募者</h2>

<table class="B">

    <tr>
        <th><b>単身者:</b></th>
        <td></td>
    </tr>
    <tr>
        <th><b>高齢者:</b></th>
        <td></td>
    </tr>
    <tr>
        <th><b>性 別:</b></th>
        <td></td>
    </tr>
</table>
<!--応募者条件判定フォーム-->

<!--譲渡者フォーム-->
<h2 class="form-require5">譲渡者</h2>

<table class="C">
    <tr>
        <th><b>応募タイトル:</b></th>
        <td></td>
    </tr>

    <tr>
        <th><b>募集の経緯:</b></th>
        <td></td>
    </tr>

    <tr>
        <th><b>性格や特徴:</b></th>
        <td></td>
    </tr>

    <tr>
        <th><b>健康状態:</b></th>
        <td></td>
    </tr>

    <tr>
        <th><b>引き渡し場所:</b></th>
        <td></td>
    </tr>

    <tr>
        <th><b>複数頭の譲渡:</b></th>
        <td></td>
    </tr>

    <tr>
        <th><b>理由:</b></th>
        <td></td>
    </tr>

    <tr>
        <th><b>その他備考:</b></th>
        <td></td>
    </tr>

</table>

<!--譲渡者フォーム-->

<a href="./toukou.html">
    <input type="button" class="form-Btn" value="投 稿">
</a>

<a href="./zyoutosya.html">
    <input type="button" class="form-Btn" value="戻 る">
</a>
<h1 class="label-title">確認画面</h1><br>

<!--仮登録フォーム-->
<h2 class="form-require5">仮登録</h2>

<table class="A">

    <tr>
        <th><b>ペット種別:</b></th>
        <td></td>
    </tr>
    <tr>
        <th><b>性別:</b></th>
        <td></td>
    </tr>
    <tr>
        <th><b>ペット紹介写真:</b></th>
        <td></td>
    </tr>

</table>

<!--仮登録フォーム-->　　


<!--応募者条件判定フォーム-->
<h2 class="form-require6">応募者</h2>

<table class="B">

    <tr>
        <th><b>単身者:</b></th>
        <td></td>
    </tr>
    <tr>
        <th><b>高齢者:</b></th>
        <td></td>
    </tr>
    <tr>
        <th><b>性 別:</b></th>
        <td></td>
    </tr>
</table>
<!--応募者条件判定フォーム-->

<!--譲渡者フォーム-->
<h2 class="form-require5">譲渡者</h2>

<table class="C">
    <tr>
        <th><b>応募タイトル:</b></th>
        <td></td>
    </tr>

    <tr>
        <th><b>募集の経緯:</b></th>
        <td></td>
    </tr>

    <tr>
        <th><b>性格や特徴:</b></th>
        <td></td>
    </tr>

    <tr>
        <th><b>健康状態:</b></th>
        <td></td>
    </tr>

    <tr>
        <th><b>引き渡し場所:</b></th>
        <td></td>
    </tr>

    <tr>
        <th><b>複数頭の譲渡:</b></th>
        <td></td>
    </tr>

    <tr>
        <th><b>理由:</b></th>
        <td></td>
    </tr>

    <tr>
        <th><b>その他備考:</b></th>
        <td></td>
    </tr>

</table>

<!--譲渡者フォーム-->

<a href="./toukou.html">
    <input type="button" class="form-Btn" value="投 稿">
</a>

<a href="./zyoutosya.html">
    <input type="button" class="form-Btn" value="戻 る">
</a>
@endsection