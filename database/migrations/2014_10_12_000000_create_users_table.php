<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('status');//里親or保護活動者を判断する値。 0=> 里親, 1=>保護活動者
            $table->string('email')->unique();
            $table->string('password');
            $table->string('kanjiFamilyName');
            $table->string('kanjiFirstName');
            $table->string('kanaFamilyName');
            $table->string('kanaFirstName');
            $table->string('phoneNumber');
        
            $table->timestamps();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
