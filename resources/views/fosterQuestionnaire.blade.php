@extends('layouts.app')

@section('head')
<script src="{{ asset('js/formSwitchThird.js') }}" defer></script>
<script src="{{ asset('js/renderPulldown.js') }}" defer></script>
<!-- <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script> -->
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- 同居人の有無-->
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('同居人の有無') }}</label>
                            <div class="col-md-6">
                                <form>
                                    <div class="form-check form-group row">
                                        <input class="form-check-input" type="radio" name="switch" value='あり(家族)' onclick=" formSwitchThird()" checked>
                                        <label class="form-check-label"> あり(家族)</label>
                                    </div>
                                    <div class="form-check form-group row">
                                        <input class="form-check-input" type="radio" name="switch" value='あり(家族以外)' onclick=" formSwitchThird()">
                                        <label class="form-check-label"> あり(家族以外)</label>
                                    </div>
                                    <div class="form-check form-group row">
                                        <input class="form-check-input" type="radio" name="switch" value='なし'onclick="formSwitchThird()">
                                        <label class="form-check-label"> なし</label>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- 同居人の人数-->
                        <div id='default'>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('本人以外の同居人') }}</label>
                                <div class="col-md-6">
                                    <select id='renderPulldown' name='housemateNumber' onchange='renderPulldown()'>
                                        <option value='1'>1人</option>
                                        <option value='2'>2人</option>
                                        <option value='3'>3人</option>
                                        <option value='4'>4人</option>
                                        <option value='5'>5人</option>
                                        <option value='6'>6人</option>
                                        <option value='7'>7人</option>
                                        <option value='8'>8人</option>
                                        <option value='9'>9人</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('同居人の続柄') }}</label>
                                <div class="col-md-6">
                                    <div id='pd1' class='form-group row'>
                                        <select name='housemateDetail1Relation'>
                                            <option value='配偶者'>配偶者</option><option value='子ども'>子ども</option><option value='父'>父</option><option value='母'>母</option><option value='兄弟・姉妹'>兄弟・姉妹</option><option value='祖父'>祖父</option><option value='祖母'>祖母</option><option value='孫'>孫</option><option value='その他'>その他</option>
                                        </select>
                                        <select name='housemateDetail1age'>
                                            <option value='3歳未満'>3歳未満</option><option value='6歳未満'>6歳未満</option><option value='10歳未満'>10歳未満</option><option value='10歳以上'>10歳以上</option><option value='20歳以上'>20歳以上</option><option value='30歳以上'>30歳以上</option><option value='40歳以上'>40歳以上</option><option value='50歳以上'>50歳以上</option><option value='60歳以上'>60歳以上</option><option value='70歳以上'>70歳以上</option><option value='80歳以上'>80歳以上</option><option value='90歳以上'>90歳以上</option><option value='100歳以上'>100歳以上</option>
                                        </select>
                                    </div>
                                    <div id='pd2' class='form-group row'>
                                        <select name='housemateDetail2relation'>
                                            <option value='配偶者'>配偶者</option><option value='子ども'>子ども</option><option value='父'>父</option><option value='母'>母</option><option value='兄弟・姉妹'>兄弟・姉妹</option><option value='祖父'>祖父</option><option value='祖母'>祖母</option><option value='孫'>孫</option><option value='その他'>その他</option>
                                        </select>
                                        <select name='housemateDetail2age'>
                                            <option value='3歳未満'>3歳未満</option><option value='6歳未満'>6歳未満</option><option value='10歳未満'>10歳未満</option><option value='10歳以上'>10歳以上</option><option value='20歳以上'>20歳以上</option><option value='30歳以上'>30歳以上</option><option value='40歳以上'>40歳以上</option><option value='50歳以上'>50歳以上</option><option value='60歳以上'>60歳以上</option><option value='70歳以上'>70歳以上</option><option value='80歳以上'>80歳以上</option><option value='90歳以上'>90歳以上</option><option value='100歳以上'>100歳以上</option>
                                        </select>
                                    </div>
                                    <div id='pd3' class='form-group row'>
                                        <select name='housemateDetail3relation'>
                                            <option value='配偶者'>配偶者</option><option value='子ども'>子ども</option><option value='父'>父</option><option value='母'>母</option><option value='兄弟・姉妹'>兄弟・姉妹</option><option value='祖父'>祖父</option><option value='祖母'>祖母</option><option value='孫'>孫</option><option value='その他'>その他</option>
                                        </select>
                                        <select name='housemateDetail3age'>
                                            <option value='3歳未満'>3歳未満</option><option value='6歳未満'>6歳未満</option><option value='10歳未満'>10歳未満</option><option value='10歳以上'>10歳以上</option><option value='20歳以上'>20歳以上</option><option value='30歳以上'>30歳以上</option><option value='40歳以上'>40歳以上</option><option value='50歳以上'>50歳以上</option><option value='60歳以上'>60歳以上</option><option value='70歳以上'>70歳以上</option><option value='80歳以上'>80歳以上</option><option value='90歳以上'>90歳以上</option><option value='100歳以上'>100歳以上</option>
                                        </select>
                                    </div>
                                    <div id='pd4' class='form-group row'>
                                        <select name='housemateDetail4relation'>
                                            <option value='配偶者'>配偶者</option><option value='子ども'>子ども</option><option value='父'>父</option><option value='母'>母</option><option value='兄弟・姉妹'>兄弟・姉妹</option><option value='祖父'>祖父</option><option value='祖母'>祖母</option><option value='孫'>孫</option><option value='その他'>その他</option>
                                        </select>
                                        <select name='housemateDetail4age'>
                                            <option value='3歳未満'>3歳未満</option><option value='6歳未満'>6歳未満</option><option value='10歳未満'>10歳未満</option><option value='10歳以上'>10歳以上</option><option value='20歳以上'>20歳以上</option><option value='30歳以上'>30歳以上</option><option value='40歳以上'>40歳以上</option><option value='50歳以上'>50歳以上</option><option value='60歳以上'>60歳以上</option><option value='70歳以上'>70歳以上</option><option value='80歳以上'>80歳以上</option><option value='90歳以上'>90歳以上</option><option value='100歳以上'>100歳以上</option>
                                        </select>
                                    </div>
                                    <div id='pd5' class='form-group row'>
                                        <select name='housemateDetail5relation'>
                                            <option value='配偶者'>配偶者</option><option value='子ども'>子ども</option><option value='父'>父</option><option value='母'>母</option><option value='兄弟・姉妹'>兄弟・姉妹</option><option value='祖父'>祖父</option><option value='祖母'>祖母</option><option value='孫'>孫</option><option value='その他'>その他</option>
                                        </select>
                                        <select name='housemateDetail5age'>
                                            <option value='3歳未満'>3歳未満</option><option value='6歳未満'>6歳未満</option><option value='10歳未満'>10歳未満</option><option value='10歳以上'>10歳以上</option><option value='20歳以上'>20歳以上</option><option value='30歳以上'>30歳以上</option><option value='40歳以上'>40歳以上</option><option value='50歳以上'>50歳以上</option><option value='60歳以上'>60歳以上</option><option value='70歳以上'>70歳以上</option><option value='80歳以上'>80歳以上</option><option value='90歳以上'>90歳以上</option><option value='100歳以上'>100歳以上</option>
                                        </select>
                                    </div>
                                    <div id='pd6' class='form-group row'>
                                        <select name='housemateDetail6relation'>
                                            <option value='配偶者'>配偶者</option><option value='子ども'>子ども</option><option value='父'>父</option><option value='母'>母</option><option value='兄弟・姉妹'>兄弟・姉妹</option><option value='祖父'>祖父</option><option value='祖母'>祖母</option><option value='孫'>孫</option><option value='その他'>その他</option>
                                        </select>
                                        <select name='housemateDetail6age'>
                                            <option value='3歳未満'>3歳未満</option><option value='6歳未満'>6歳未満</option><option value='10歳未満'>10歳未満</option><option value='10歳以上'>10歳以上</option><option value='20歳以上'>20歳以上</option><option value='30歳以上'>30歳以上</option><option value='40歳以上'>40歳以上</option><option value='50歳以上'>50歳以上</option><option value='60歳以上'>60歳以上</option><option value='70歳以上'>70歳以上</option><option value='80歳以上'>80歳以上</option><option value='90歳以上'>90歳以上</option><option value='100歳以上'>100歳以上</option>
                                        </select>
                                    </div>
                                    <div id='pd7' class='form-group row'>
                                        <select name='housemateDetail7relation'>
                                            <option value='配偶者'>配偶者</option><option value='子ども'>子ども</option><option value='父'>父</option><option value='母'>母</option><option value='兄弟・姉妹'>兄弟・姉妹</option><option value='祖父'>祖父</option><option value='祖母'>祖母</option><option value='孫'>孫</option><option value='その他'>その他</option>
                                        </select>
                                        <select name='housemateDetail7age'>
                                            <option value='3歳未満'>3歳未満</option><option value='6歳未満'>6歳未満</option><option value='10歳未満'>10歳未満</option><option value='10歳以上'>10歳以上</option><option value='20歳以上'>20歳以上</option><option value='30歳以上'>30歳以上</option><option value='40歳以上'>40歳以上</option><option value='50歳以上'>50歳以上</option><option value='60歳以上'>60歳以上</option><option value='70歳以上'>70歳以上</option><option value='80歳以上'>80歳以上</option><option value='90歳以上'>90歳以上</option><option value='100歳以上'>100歳以上</option>
                                        </select>
                                    </div>
                                    <div id='pd8' class='form-group row'>
                                        <select name='housemateDetail8relation'>
                                            <option value='配偶者'>配偶者</option><option value='子ども'>子ども</option><option value='父'>父</option><option value='母'>母</option><option value='兄弟・姉妹'>兄弟・姉妹</option><option value='祖父'>祖父</option><option value='祖母'>祖母</option><option value='孫'>孫</option><option value='その他'>その他</option>
                                        </select>
                                        <select name='housemateDetail8age'>
                                            <option value='3歳未満'>3歳未満</option><option value='6歳未満'>6歳未満</option><option value='10歳未満'>10歳未満</option><option value='10歳以上'>10歳以上</option><option value='20歳以上'>20歳以上</option><option value='30歳以上'>30歳以上</option><option value='40歳以上'>40歳以上</option><option value='50歳以上'>50歳以上</option><option value='60歳以上'>60歳以上</option><option value='70歳以上'>70歳以上</option><option value='80歳以上'>80歳以上</option><option value='90歳以上'>90歳以上</option><option value='100歳以上'>100歳以上</option>
                                        </select>
                                    </div>
                                    <div id='pd9' class='form-group row'>
                                        <select name='housemateDetail9relation'>
                                            <option value='配偶者'>配偶者</option><option value='子ども'>子ども</option><option value='父'>父</option><option value='母'>母</option><option value='兄弟・姉妹'>兄弟・姉妹</option><option value='祖父'>祖父</option><option value='祖母'>祖母</option><option value='孫'>孫</option><option value='その他'>その他</option>
                                        </select>
                                        <select name='housemateDetail9age'>
                                            <option value='3歳未満'>3歳未満</option><option value='6歳未満'>6歳未満</option><option value='10歳未満'>10歳未満</option><option value='10歳以上'>10歳以上</option><option value='20歳以上'>20歳以上</option><option value='30歳以上'>30歳以上</option><option value='40歳以上'>40歳以上</option><option value='50歳以上'>50歳以上</option><option value='60歳以上'>60歳以上</option><option value='70歳以上'>70歳以上</option><option value='80歳以上'>80歳以上</option><option value='90歳以上'>90歳以上</option><option value='100歳以上'>100歳以上</option>
                                        </select>
                                    </div>
                                </div>

                            </div>

        
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name">

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

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('回答') }}
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
