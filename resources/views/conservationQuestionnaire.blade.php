@extends('layouts.app')

@section('head')
<script src="{{ asset('js/formSwitch.js') }}" defer></script>
<script src="{{ asset('js/formSwitchPrefecture.js') }}" defer></script>
<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('保護活動者アンケート') }}</div>

                <div class="card-body">
                    <form method="POST" action="/answerFosterQuestionnaire" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('保護活動者属性') }}</label>
                            <div class="col-md-6">
                                <select name='conservationStatus'>
                                    <option value='個人' selected>個人</option>
                                    <option value='有志の団体・グループ(非法人)'>有志の団体・グループ(非法人)</option>
                                    <option value='企業'>企業</option>
                                    <option value='NPO法人'>NPO法人</option>
                                    <option value='一般社団法人'>一般社団法人</option>
                                    <option value='動物病院'>動物病院</option>
                                    <option value='自治体'>自治体</option>
                                    <option value='その他の法人'>その他の法人</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right ">{{ __('団体名・活動名') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('activityName') is-invalid @enderror" name="activityName" value="{{ old('activityName') }}" required>

                                @error('activityName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('活動拠点') }}</label>

                            <div class="col-md-6">
                                <!-- ▼郵便番号入力フィールド(3桁+4桁) -->
                                <input class="@error('zip21') is-invalid @enderror" type="text" name="zip21" size="4" maxlength="3" value="{{ old('zip21')}}" required> － <input class="@error('zip22') is-invalid @enderror" value="{{ old('zip22')}}" type="text" name="zip22" size="5" maxlength="4" onKeyUp="AjaxZip3.zip2addr('zip21','zip22','addr21','addr21');" required>
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
                            <label class="col-md-4 col-form-label text-md-right">{{ __('保護施設') }}</label>

                            <div class="col-md-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="shelter[]" value="自宅" checked>
                                    <label class="form-check-label">自宅</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="shelter[]" value="専用シェルター">
                                    <label class="form-check-label">専用シェルター</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="shelter[]" value="保護猫カフェ">
                                    <label class="form-check-label">保護猫カフェ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="shelter[]" value="保護犬カフェ">
                                    <label class="form-check-label">保護犬カフェ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="shelter[]" value="動物病院">
                                    <label class="form-check-label">動物病院</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name='switch' onchange='formSwitch()'>
                                    <label class="form-check-label">その他</label>
                                </div>
                                <input type="text" id='default' class="form-control" name='other' style="display: none;">

                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('応募可能地域') }}</label>
                            <div class="col-md-6">    
                                <div class="card" style="width: 18rem;">
                                    <div class="card-header">
                                    <input class="form-check-input" type="checkbox" name="area[]" value='北海道'>
                                    <label class="form-check-label">北海道</label>
                                    </div>
                                </div>

                                <div class="card" style="width: 18rem;">
                                    <div class="card-header">
                                        <input class="form-check-input" type="checkbox" name='tohoku' onchange='formSwitchPrefecture("tohoku")'>
                                        <label class="form-check-label">東北地方</label>
                                    </div>
                                    <ul class="list-group list-group-flush" id='tohokuPrefectures' style="display: none;">
                                        <li class="list-group-item">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="area[]" value='青森県'>
                                                <label class="form-check-label">青森県</label>
                                                <input class="form-check-input" type="checkbox" name="area[]" value='岩手県'>
                                                <label class="form-check-label">岩手県</label>
                                                <input class="form-check-input" type="checkbox" name="area[]" value='秋田県'>
                                                <label class="form-check-label">秋田県</label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="area[]" value='宮城県'>
                                                <label class="form-check-label">宮城県</label>
                                                <input class="form-check-input" type="checkbox" name="area[]" value='山形県'>
                                                <label class="form-check-label">山形県</label>
                                                <input class="form-check-input" type="checkbox" name="area[]" value='福島県'>
                                                <label class="form-check-label">福島県</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="card" style="width: 18rem;">
                                    <div class="card-header">
                                        <input class="form-check-input" type="checkbox" name='kanto' onchange='formSwitchPrefecture("kanto")'>
                                        <label class="form-check-label">関東地方</label>
                                    </div>
                                    <ul class="list-group list-group-flush" id='kantoPrefectures' style="display: none;">
                                        <li class="list-group-item">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="area[]" value='茨城県'>
                                                <label class="form-check-label">茨城県</label>
                                                <input class="form-check-input" type="checkbox" name="area[]" value='栃木県'>
                                                <label class="form-check-label">岩手県</label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="area[]" value='群馬県'>
                                                <label class="form-check-label">群馬県</label>
                                                <input class="form-check-input" type="checkbox" name="area[]" value='埼玉県'>
                                                <label class="form-check-label">埼玉県</label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="area[]" value='千葉県'>
                                                <label class="form-check-label">千葉県</label>
                                                <input class="form-check-input" type="checkbox" name="area[]" value='東京都'>
                                                <label class="form-check-label">東京都</label>
                                                <input class="form-check-input" type="checkbox" name="area[]" value='神奈川県'>
                                                <label class="form-check-label">神奈川県</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="card" style="width: 18rem;">
                                    <div class="card-header">
                                        <input class="form-check-input" type="checkbox" name='tyubu' onchange='formSwitchPrefecture("tyubu")'>
                                        <label class="form-check-label">中部地方</label>
                                    </div>
                                    <ul class="list-group list-group-flush" id='tyubuPrefectures' style="display: none;">
                                        <li class="list-group-item">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="area[]" value='新潟県'>
                                                <label class="form-check-label">新潟県</label>
                                                <input class="form-check-input" type="checkbox" name="area[]" value='富山県'>
                                                <label class="form-check-label">富山県</label>
                                                <input class="form-check-input" type="checkbox" name="area[]" value='石川県'>
                                                <label class="form-check-label">石川県</label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="area[]" value='福井県'>
                                                <label class="form-check-label">福井県</label>
                                                <input class="form-check-input" type="checkbox" name="area[]" value='山梨県'>
                                                <label class="form-check-label">山梨県</label>
                                                <input class="form-check-input" type="checkbox" name="area[]" value='長野県'>
                                                <label class="form-check-label">長野県</label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="area[]" value='岐阜県'>
                                                <label class="form-check-label">岐阜県</label>
                                                <input class="form-check-input" type="checkbox" name="area[]" value='静岡県'>
                                                <label class="form-check-label">静岡県</label>
                                                <input class="form-check-input" type="checkbox" name="area[]" value='愛知県'>
                                                <label class="form-check-label">愛知県</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="card" style="width: 18rem;">
                                    <div class="card-header">
                                        <input class="form-check-input" type="checkbox" name='kinki' onchange='formSwitchPrefecture("kinki")'>
                                        <label class="form-check-label">近畿地方</label>
                                    </div>
                                    <ul class="list-group list-group-flush" id='kinkiPrefectures' style="display: none;">
                                        <li class="list-group-item">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="area[]" value='三重県'>
                                                <label class="form-check-label">三重県</label>
                                                <input class="form-check-input" type="checkbox" name="area[]" value='滋賀県'>
                                                <label class="form-check-label">滋賀県</label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="area[]" value='京都府'>
                                                <label class="form-check-label">京都府</label>
                                                <input class="form-check-input" type="checkbox" name="area[]" value='大阪府'>
                                                <label class="form-check-label">大阪府</label>
                                                <input class="form-check-input" type="checkbox" name="area[]" value='兵庫県'>
                                                <label class="form-check-label">兵庫県</label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="area[]" value='奈良県'>
                                                <label class="form-check-label">奈良県</label>
                                                <input class="form-check-input" type="checkbox" name="area[]" value='和歌山県'>
                                                <label class="form-check-label">和歌山県</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="card" style="width: 18rem;">
                                    <div class="card-header">
                                        <input class="form-check-input" type="checkbox" name='tyugoku' onchange='formSwitchPrefecture("tyugoku")'>
                                        <label class="form-check-label">中国地方</label>
                                    </div>
                                    <ul class="list-group list-group-flush" id='tyugokuPrefectures' style="display: none;">
                                        <li class="list-group-item">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="area[]" value='鳥取県'>
                                                <label class="form-check-label">鳥取県</label>
                                                <input class="form-check-input" type="checkbox" name="area[]" value='島根県'>
                                                <label class="form-check-label">島根県</label>
                                                <input class="form-check-input" type="checkbox" name="area[]" value='岡山県'>
                                                <label class="form-check-label">岡山県</label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="area[]" value='広島県'>
                                                <label class="form-check-label">広島県</label>
                                                <input class="form-check-input" type="checkbox" name="area[]" value='山口県'>
                                                <label class="form-check-label">山口県</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="card" style="width: 18rem;">
                                    <div class="card-header">
                                        <input class="form-check-input" type="checkbox" name='shikoku' onchange='formSwitchPrefecture("shikoku")'>
                                        <label class="form-check-label">四国地方</label>
                                    </div>
                                    <ul class="list-group list-group-flush" id='shikokuPrefectures' style="display: none;">
                                        <li class="list-group-item">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="area[]" value='徳島県'>
                                                <label class="form-check-label">徳島県</label>
                                                <input class="form-check-input" type="checkbox" name="area[]" value='香川県'>
                                                <label class="form-check-label">香川県</label>
                                                
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="area[]" value='愛媛県'>
                                                <label class="form-check-label">愛媛県</label>
                                                <input class="form-check-input" type="checkbox" name="area[]" value='高知県'>
                                                <label class="form-check-label">高知県</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="card" style="width: 18rem;">
                                    <div class="card-header">
                                        <input class="form-check-input" type="checkbox" name='kyusyu' onchange='formSwitchPrefecture("kyusyu")'>
                                        <label class="form-check-label">九州地方</label>
                                    </div>
                                    <ul class="list-group list-group-flush" id='kyusyuPrefectures' style="display: none;">
                                        <li class="list-group-item">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="area[]" value='福岡県'>
                                                <label class="form-check-label">福岡県</label>
                                                <input class="form-check-input" type="checkbox" name="area[]" value='佐賀県'>
                                                <label class="form-check-label">佐賀県</label>
                                                <input class="form-check-input" type="checkbox" name="area[]" value='長崎県'>
                                                <label class="form-check-label">熊本県</label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="area[]" value='熊本県'>
                                                <label class="form-check-label">熊本県</label>
                                                <input class="form-check-input" type="checkbox" name="area[]" value='大分県'>
                                                <label class="form-check-label">大分県</label>
                                                <input class="form-check-input" type="checkbox" name="area[]" value='宮崎県'>
                                                <label class="form-check-label">宮崎県</label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="area[]" value='鹿児島県'>
                                                <label class="form-check-label">鹿児島県</label>
                                                <input class="form-check-input" type="checkbox" name="area[]" value='沖縄県'>
                                                <label class="form-check-label">沖縄県</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>


                            <!-- <div class="col-md-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="shelter[]" value="自宅" checked>
                                    <label class="form-check-label">自宅</label>
                                    <input class="form-check-input" type="checkbox" name="shelter[]" value="専用シェルター">
                                    <label class="form-check-label">専用</label>
                                    <input class="form-check-input" type="checkbox" name="shelter[]" value="保護猫カフェ">
                                    <label class="form-check-label">保護</label>
                                    <input class="form-check-input" type="checkbox" name="shelter[]" value="保護犬カフェ">
                                    <label class="form-check-label">保護</label>
                                    <input class="form-check-input" type="checkbox" name="shelter[]" value="専用シェルター">
                                    <label class="form-check-label">専用</label>
                                    <input class="form-check-input" type="checkbox" name="shelter[]" value="保護猫カフェ">
                                    <label class="form-check-label">保護</label>
                                    <input class="form-check-input" type="checkbox" name="shelter[]" value="保護犬カフェ">
                                    <label class="form-check-label">保護</label>
                                    <input class="form-check-input" type="checkbox" name="shelter[]" value="専用シェルター">
                                    <label class="form-check-label">専用</label>
                                    <input class="form-check-input" type="checkbox" name="shelter[]" value="保護猫カフェ">
                                    <label class="form-check-label">保護</label>
                                    
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="shelter[]" value="専用シェルター">
                                    <label class="form-check-label">専用</label>
                                    <input class="form-check-input" type="checkbox" name="shelter[]" value="保護猫カフェ">
                                    <label class="form-check-label">保護</label>
                                    <input class="form-check-input" type="checkbox" name="shelter[]" value="保護犬カフェ">
                                    <label class="form-check-label">保護</label>
                                    <input class="form-check-input" type="checkbox" name="shelter[]" value="保護犬カフェ">
                                    <label class="form-check-label">保護</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="shelter[]" value="保護猫カフェ">
                                    <label class="form-check-label">保護猫カフェ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="shelter[]" value="保護犬カフェ">
                                    <label class="form-check-label">保護犬カフェ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="shelter[]" value="動物病院">
                                    <label class="form-check-label">動物病院</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name='' onchange='formSwitch()'>
                                    <label class="form-check-label">その他</label>
                                </div>
                                <input type="text" class="form-control" name='other' style="display: none;">

                            </div> -->
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right ">{{ __('活動URL') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url') }}" required>

                                @error('url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right ">{{ __('プロフィール') }}</label>

                            <div class="col-md-6">
                                <textarea name='profile' class="form-control @error('profile') is-invalid @enderror" cols='30' rows='5' required></textarea>

                                @error('url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right ">{{ __('プロフィール画像') }}</label>

                            <div class="col-md-6">
                                <input type="file" name="profile_img">
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
