<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Fosterquestionnaire;
use App\Conservationquestionnaire;
use App\Article;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::check()) {
            $user = \Auth::user();
            return view('home', compact('user'));
        }
        return view('home');
    }

    public function home()
    {
        if (Auth::check()) {
            $user = \Auth::user();
            return view('home', compact('user'));
        }
        return view('home');
    }

    public function questionnaire()
    {   
        $user = \Auth::user();

        if ($user['status'] == 0){
            // dd($user);
            return view('fosterQuestionnaire');
        }else{
            return view('conservationQuestionnaire');
        }
    }

    public function answerQuestionnaire(Request $request)
    {
        dd($request);
        $data = $request->all();
        
        $user = \Auth::user();
        // dd($data);
        if($user['status'] == 0){
            Fosterquestionnaire::where('user_email', $user['email'])->update([
                'answered' => '1', 
                'housemate' => $data['switch'], 
                'houseType' => $data['houseType'], 
                'landlordAgreement' => $data['landlordAgreement'],
                'transfer' => $data['transfer'],
                'visitable' => $data['visitable'],
                'breedingPlace' => $data['breedingPlace'],
                'aloneHours' => $data['aloneHours'],
            ]);

            if($data['switch'] == 'あり(家族)' || $data['switch'] == 'あり(家族以外)'){
                // 同居人あり
                $relation = $data['housemateDetailRelation'];
                $age = $data['housemateDetailAge'];
                for ($i=0; $i<$data['housemateNumber']; $i++){
                    $mem[] = "{$relation[$i]}=>{$age[$i]}";
                }

                $allRelate = $data['housemateAllergyDetailRelation'];
                $allAge = $data['housemateAllergyDetailAllergy']; 
                if($data['housemateAllergy'] != 'なし'){
                    // 同居人アレルギーあり
                    for ($i=0; $i<$data['housemateAllergy']; $i++){
                        $alMem[] = "{$allRelate[$i]}=>{$allAge[$i]}";
                    }
                    
                    $housemateAllergyDetail = implode('&', $alMem);
                }else{
                    // 同居人アレルギーなし
                    $housemateAllergyDetail = 'なし';
                }

                $situation = $data['pets'];
                if(count($situation) > 2){
                    for($i=2;$i<count($situation);$i++){
                        $sit = $situation[$i];
                    }
                }else{
                    $sit = '飼っていない';
                }

                Fosterquestionnaire::where('user_email', $user['email'])->update([
                    'housemateNumber' => $data['housemateNumber'],
                    'housemateDetail' => implode('&', $mem),
                    'housemateAgreement' => $data['housemateAgreement'],
                    'housemateAllergy' => $data['housemateAllergy'],
                    'housemateAllergyDetail' => $housemateAllergyDetail,
                    'situation' => $sit,
                ]);
            }else{
                // 同居人なし
                // dd($data);
                $situation = $data['pets'];
                if(count($situation) > 2){
                    for($i=2;$i<count($situation);$i++){
                        $sit = $situation[$i];
                    }
                }else{
                    $sit = '飼っていない';
                }
                Fosterquestionnaire::where('user_email', $user['email'])->update([
                    'housemateAllergy' => "本人=>{$data['housemateAllergySolo']}",
                    'situation' => $sit,

                    'housemateNumber' => 0,
                    'housemateDetail' => 'none',
                    'housemateAgreement' => 'none',
                    'housemateAllergyDetail' => 'none',
                ]);
            }
        }else{
            // dd($data);
            $validatedData = $request->validate([
                'activityName' => ['required', 'string', 'min:2', 'max:20'],
                'zip21' => ['required', 'string', 'regex:/^[0-9]{3}/u','max:3'],
                'zip22' => ['required', 'string', 'regex:/^[0-9]{4}/u','max:4'],
                'addr21' => ['required', 'string', 'max:40'],
                'shelter'=> ['required'],
                'pet' => ['required'],
                'area' => ['required'],
                'url' => ['required', 'string'],
                'profile' => ['required', 'string', 'min:20', 'max:150'],
                // 'profile_img' => ['required'],
            ]);

            $file = $data['profile_img'];
            $profileLogoName = "profile_id={$user['id']}.".$file->getClientOriginalExtension();
            $target_path = public_path('profile_images/');
            $file->move($target_path, $profileLogoName);

            $shelter = implode('&', $data['shelter']);

            if($data['other'] != null){
                $shelter = "{$shelter}&other={$data['other']}";
            }

            Conservationquestionnaire::where('user_email', $user['email'])->update([
                'answered' => '1',
                'conservationStatus' => $data['conservationStatus'],
                'activityName' => $data['activityName'],
                'address' => $data['addr21'],
                'postalCode' => "{$data['zip21']}-{$data['zip22']}",
                'shelter' => $shelter,
                'pet' => implode('&', $data['pet']),
                'area' => implode('&', $data['area']),
                'url' => $data['url'],
                'profile' => $data['profile'],
                'logo' => $profileLogoName,
            ]);
            print($shelter);
            // dd($data);
        }
        
        dd($data);
        return view('home');
    }

    public function article()
    {
        $user = \Auth::user();

        if ($user['status'] == '1'){
            return view('article');
        }else{
            return view('home');
        }
    }

    public function articleStore(Request $request)
    {
        $user = \Auth::user();
        $data = $request->all();
        // dd($data);
        Article::validator($request);
        
        Article::test($data, $user['id']);
        return view('home');
    }

    public function articleDetail($id)
    {
        $user = \Auth::user();
        $article = Article::where('id', $id)->get();
        $data = $article[0];

        // dd($data);
        return view('detail', compact('data','user','id'));
    }
}
