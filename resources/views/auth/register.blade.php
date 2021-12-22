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

                    <!-- 会員切り替えラジオボタン-->
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('会員種別') }}</label>
                        <div class="col-md-6">
                            <form>
                                <div class="form-check form-group row">
                                    <input class="form-check-input" type="radio" name="maker" onclick="formSwitch()" checked>
                                    <label class="form-check-label"> 里親</label>
                                </div>
                                <div class="form-check form-group row">
                                    <input class="form-check-input" type="radio" name="maker" onclick="formSwitch()">
                                    <label class="form-check-label"> 保護活動者</label>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- 里親用フォームここから -->
                    <form method="POST" action="{{ route('register') }}"  required>
                        @csrf
            
                        <div id='fosterForms'>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right ">{{ __('ニックネーム') }}</label>

                                <div class="col-md-6">
                                    <input id="name foster" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required>

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
                                    <input id="email foster" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>

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
                                    <input id="password foster" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>

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
                                    <input id="password-confirm foster" type="password" class="form-control" name="password_confirmation"  required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('お名前') }}</label>
                                <div class="col-md-6">
                                    <input id='foster' type="text" class="form-control @error('kanjiFamilyName') is-invalid @enderror" name="kanjiFamilyName" value="{{ old('kanjiFamilyName') }}" placeholder="名字" required>
                                    <input id='foster' type="text" class="form-control @error('kanjiFirstName') is-invalid @enderror" name="kanjiFirstName" value="{{ old('kanjiFirstName') }}" placeholder="名前" required>
                                
                                    <input id='foster' type="text" class="form-control @error('kanaFamilyName') is-invalid @enderror" name="kanaFamilyName" value="{{ old('kanaFamilyName') }}" placeholder="フリガナ(名字)" required>
                                    @error('kanaFamilyName')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <input id='foster' type="text" class="form-control @error('kanaFirstName') is-invalid @enderror" name="kanaFirstName" value="{{ old('kanaFirstName') }}" placeholder="フリガナ(名前)" required>
                                    @error('kanaFirstName')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('性別・年齢') }}</label>

                                <div class="col-md-6">
                                    <input id='foster' type="radio" class="" name="gender" value="男性" checked><label class="form-check-label">男性</label>
                                    <input id='foster' type="radio" class="" name="gender" value="女性"><label class="form-check-label">女性</label>
                                    <input id="name foster" type="number" class="@error('age') is-invalid @enderror" name="age" required><label class="form-check-label">歳</label>
                                    @error('age')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('電話番号') }}</label>
                                <div class="col-md-6">
                                    <input id="foster" type="text" class="form-control @error('phoneNumber') is-invalid @enderror" name="phoneNumber" value="{{ old('phoneNumber') }}" required>

                                    @error('phoneNumber')
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
                                    <input id='foster' class="@error('zip21') is-invalid @enderror" type="text" name="zip21" size="4" maxlength="3" value="{{ old('zip21')}}" required> － <input id='foster' class="@error('zip22') is-invalid @enderror" value="{{ old('zip22')}}" type="text" name="zip22" size="5" maxlength="4" onKeyUp="AjaxZip3.zip2addr('zip21','zip22','addr21','addr21');" required>
                                    @error('zip21')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    @error('zip22')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    
                                    <!-- ▼住所入力フィールド(都道府県+以降の住所) -->
                                    <input id='foster' type="text" name="addr21" size="40" required> 
                                    <!-- @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror -->
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('利用規約') }}</label>
                                <a href="#">利用規約を確認する<a> 
                                <!-- <input id='foster' type="checkbox" class="" name="name" value="女性" required autocomplete="name" autofocus><label class="form-check-label">利用規約に同意する</label> -->
                            </div>
                            <input type='hidden' name='status' value=0>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                            
                        </div>
                    </form>

                    <!-- 里親用フォームここまで -->


                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <!-- 里親用フォームここまで -->
                        <!-- 保護活動者用フォームここから -->
                        <div id='conservationForms'>
                            <input type='hidden' name='status' value=1> 

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email foster" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>

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
                                    <input id="password foster" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>

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
                                    <input id="password-confirm foster" type="password" class="form-control" name="password_confirmation"  required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('お名前') }}</label>
                                <div class="col-md-6">
                                    <input id='foster' type="text" class="form-control @error('kanjiFamilyName') is-invalid @enderror" name="kanjiFamilyName" value="{{ old('kanjiFamilyName') }}" placeholder="名字" required>
                                    <input id='foster' type="text" class="form-control @error('kanjiFirstName') is-invalid @enderror" name="kanjiFirstName" value="{{ old('kanjiFirstName') }}" placeholder="名前" required>
                                
                                    <input id='foster' type="text" class="form-control @error('kanaFamilyName') is-invalid @enderror" name="kanaFamilyName" value="{{ old('kanaFamilyName') }}" placeholder="フリガナ(名字)" required>
                                    @error('kanaFamilyName')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <input id='foster' type="text" class="form-control @error('kanaFirstName') is-invalid @enderror" name="kanaFirstName" value="{{ old('kanaFirstName') }}" placeholder="フリガナ(名前)" required>
                                    @error('kanaFirstName')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('電話番号') }}</label>
                                <div class="col-md-6">
                                    <input id="foster" type="text" class="form-control @error('phoneNumber') is-invalid @enderror" name="phoneNumber" value="{{ old('phoneNumber') }}" required>

                                    @error('phoneNumber')
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
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
