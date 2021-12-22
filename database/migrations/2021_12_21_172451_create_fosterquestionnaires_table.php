<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFosterquestionnairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fosterquestionnaires', function (Blueprint $table) {
            $table->string('user_email')->unique();
            $table->string('housemate')->default('none'); // あり(家族) or あり(家族以外) or なし
            $table->integer('housemateNumber')->default('0');
            $table->string('housemateDetail')->default('none');// 続柄=>〇〇,年齢=>〇歳&続柄=>〇〇,年齢=>〇歳&... で一つの文字列にする
            $table->string('housemateAgreement')->default('none');
            $table->string('housemateAllergy')->default('none');// 人数 or なし
            $table->string('housemateAllergyDetail')->default('none');// 続柄=>〇〇,アレルギー=>〇&続柄=>〇〇,アレルギー=>〇&... で一つの文字列にする
            $table->string('houseType')->default('none');
            $table->string('landlordAgreement')->default('none');
            $table->string('transfer')->default('none');
            $table->string('visitable')->default('none');
            $table->string('breedingPlace')->default('none');
            $table->integer('aloneHours')->default('0');
            $table->string('situation')->default('none');
        });
    }

    /**situation
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fosterquestionnaires');
    }
}
