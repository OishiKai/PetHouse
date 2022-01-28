<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->string('id'); // 記事ID
            $table->string('user_id');
            $table->string('title'); // タイトル
            $table->integer('watch')->default(0); // 閲覧数
            $table->string('status'); // 状況
            $table->string('pet'); // 犬or猫
            $table->string('species'); // ペットの種類
            $table->string('size'); // ペットのサイズ
            $table->string('gender'); // 性別
            $table->string('age'); // 年齢
            $table->string('vaccination'); // ワクチン状況
            $table->string('castration'); // 避妊・去勢
            $table->string('singlePerson'); // 独身の募集可否
            $table->string('elderPerson'); // 高齢者の募集可否
            $table->string('recruitmentPeriod'); // 募集期間

            $table->string('place'); // ペット所在地
            $table->string('name'); // ペットの名前
            $table->string('pattern'); //ペットの毛柄

            $table->string('background'); // 募集の経緯
            $table->string('personality'); // 性格
            $table->string('health'); // 健康状態
            $table->string('transaction'); // 引き渡し可能場所
            $table->string('remarks'); // その他備考
            
            $table->date('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
