<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fosterquestionnaire;

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
        return view('home');
    }

    public function questionnaire($id)
    {   
        $user = \Auth::user();
        $questionnaire = Fosterquestionnaire::where('user_email', $user['email'])->first();
        // dd($user);
        return view('fosterQuestionnaire', compact('user','questionnaire'));
    }

    public function answerFosterQuestionnaire(Request $request)
    {
        $data = $request->all();
        
        $user = \Auth::user();
        // dd($data);

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
        
        // dd($data);
        return view('home');
    }
}
