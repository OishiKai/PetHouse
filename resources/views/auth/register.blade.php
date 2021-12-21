@extends('layouts.app')

@section('head')
<script src="{{ asset('js/formSwitch.js') }}" defer></script>
<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
@endsection


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('会員種別') }}</label>

                        <div class="col-md-6">
                            <form>
                                <div class="form-check form-group row">
                                    <input class="form-check-input" type="radio" name="maker" value="food" onclick="formSwitch()" checked>
                                    <label class="form-check-label"> 里親</label>
                                </div>
                                <div class="form-check form-group row">
                                    <input class="form-check-input" type="radio" name="maker" value="place" onclick="formSwitch()">
                                    <label class="form-check-label"> 保護活動者</label>
                                </div>
                            </from>
                        </div>
                    </div>
                    <!-- 里親用フォームここから -->
                    <div id='fosterForms'>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('ニックネーム') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('お名前') }}</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="kanjiFamiliyName" value="{{ old('kanjiFamiliyName') }}" placeholder="名字">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="kanjiFirstName" value="{{ old('kanjiFirstName') }}" placeholder="名前">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="kanaFamiliyName" value="{{ old('kanaFamiliyName') }}" placeholder="フリガナ(名字)">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="kanaFirstName" value="{{ old('kanaFirstName') }}" placeholder="フリガナ(名前)">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('性別・年齢') }}</label>

                                <div class="col-md-6">
                                    <input type="radio" class="" name="gender" value="男性" cheched><label class="form-check-label">男性</label>
                                    <input type="radio" class="" name="gender" value="女性"><label class="form-check-label">女性</label>
                                    <input id="name" type="number" class="" name="age"><label class="form-check-label">歳</label>
                                    <!-- @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror -->
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('電話番号') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="number" class="form-control @error('name') is-invalid @enderror" name="phonenumber" value="{{ old('phonenumber') }}">

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('住所') }}</label>

                                <div class="col-md-6">
                                    <!-- ▼郵便番号入力フィールド(3桁+4桁) -->
                                    <input type="text" name="zip21" size="4" maxlength="3"> － <input type="text" name="zip22" size="5" maxlength="4" onKeyUp="AjaxZip3.zip2addr('zip21','zip22','addr21','addr21');">
                                    <!-- ▼住所入力フィールド(都道府県+以降の住所) -->
                                    <input type="text" name="addr21" size="40">

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('利用規約') }}</label>
                                <a href="#">利用規約を確認する<a> 
                                <!-- <input id="name" type="checkbox" class="" name="name" value="女性" required autocomplete="name" autofocus><label class="form-check-label">利用規約に同意する</label> -->
                            </div>
                            <input type='hidden' name='status' value=0>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- 里親用フォームここまで -->

                    <!-- 保護活動者用フォームここから -->
                    <div id='conservationForms'>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <input type='hidden' name='status'value=1> 

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('担当者名') }}</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="kanjiFamiliyName" value="{{ old('kanjiFamiliyName') }}" placeholder="名字">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="kanjiFirstName" value="{{ old('kanjiFirstName') }}" placeholder="名前">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="kanaFamiliyName" value="{{ old('kanaFamiliyName') }}" placeholder="フリガナ(名字)">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="kanaFirstName" value="{{ old('kanaFirstName') }}" placeholder="フリガナ(名前)">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('電話番号') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="number" class="form-control @error('name') is-invalid @enderror" name="phonenumber" value="{{ old('phonenumber') }}">

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('利用規約') }}</label>
                                <a href="#">利用規約を確認する<a> 
                                <!-- <input id="name" type="checkbox" class="" name="name" value="女性" required autocomplete="name" autofocus><label class="form-check-label">利用規約に同意する</label> -->
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
</div>
@endsection
