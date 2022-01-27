<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fosterquestionnaire extends Model
{
    public $timestamps = false;
    static function store($data, $user){

        Fosterquestionnaire::where('user_email', $user['email'])->update([
            'answered' => '1',
            'housemate' => $data['switch'],
            'houseType' => $data['houseType'],
            'landlordAgreement' => $data['landlordAgreement'],
            'transfer' => $data['transfer'],
            'visitable' => $data['visitable'],
            'breedingPlace' => $data['breedingPlace'],
            'aloneHours' => $data['aloneHours'],
            'experience' => $data['experience'],
            'situation' => implode('&', $data['pet']),
        ]);


        if ($data['switch'] == "なし(単身)") {
            if ($data['allergies'] == "なし"){
                // 単身者　かつ　アレルギーなし
                Fosterquestionnaire::where('user_email', $user['email'])->update([
                    'housemateNumber' => 1,
                    'housemateAllergy' => $data['allergies'],
                    'housemateAgreement' => 'none',
                    'housemateAllergyDetail' => 'none',
                ]);
                
            }else{
                // 単身者　かつ　アレルギーあり
                $al = $data['housemateAllergyDetailAllergySolo'];
                

                Fosterquestionnaire::where('user_email', $user['email'])->update([
                    'housemateNumber' => 1,
                    'housemateAllergy' => $data['allergies'],
                    'housemateAllergyDetail' => "自分=>{$al}",
                    'housemateAgreement' => 'none',
                ]);

            }
        }else{
            $relation = $data['housemateDetailRelation'];
            $age = $data['housemateDetailAge'];
            for ($i=0; $i<$data['housemateNumber']; $i++){
                $mem[] = "{$relation[$i]}=>{$age[$i]}";
            }
            if ($data['allergies'] == "なし"){
                // 家族あり　かつ　アレルギーなし
                Fosterquestionnaire::where('user_email', $user['email'])->update([
                    'housemateNumber' => $data['housemateNumber'],
                    'housemateDetail' => implode('&', $mem),
                    'housemateAllergy' => $data['allergies'],
                    'housemateAllergyDetail' => 'none',
                    'housemateAgreement' => $data['housemateAgreement'],
                ]);
            }else{
                // 家族あり　かつ　アレルギーあり
                $allRelate = $data['housemateAllergyDetailRelation'];
                $allAge = $data['housemateAllergyDetailAllergy']; 
                for ($i=0; $i<count($allRelate); $i++){
                    $alMem[] = "{$allRelate[$i]}=>{$allAge[$i]}";
                }
                Fosterquestionnaire::where('user_email', $user['email'])->update([
                    'housemateAgreement' => $data['housemateAgreement'],
                    'housemateNumber' => $data['housemateNumber'],
                    'housemateDetail' => implode('&', $mem),
                    'housemateAllergy' => $data['allergies'],
                    'housemateAllergyDetail' => implode('&', $alMem),

                ]);
            }
        }
    }
}
