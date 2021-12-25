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
            $table->string('user_email')->unique();
            $table->string('answered')->default('none');
            $table->string('conservationStatus')->default('none');
            $table->string('activityName')->default('none');
            $table->string('address')->default('none');
            $table->string('postalCode')->default('none');
            $table->string('shelter')->default('none');
            $table->string('pet')->default('none'); // 保護中のペット
            $table->string('area')->default('none');
            $table->string('url')->default('none');
            $table->string('profile')->default('none');
            $table->string('logo')->default('none');
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
