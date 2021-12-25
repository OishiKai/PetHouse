<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConservationquestionnairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conservationquestionnaires', function (Blueprint $table) {
            $table->string('user_email');
            $table->string('answered');
            $table->string('conservationStatus');
            $table->string('activityName');
            $table->string('address');
            $table->string('postalCode');
            $table->string('shelter');
            $table->string('pet'); // 保護中のペット
            $table->string('area');
            $table->string('url');
            $table->string('profile');
            $table->string('logo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conservationquestionnaires');
    }
}
