<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->string('fromId');
            $table->string('toId');
            $table->string('articleId');

            $table->string('fromName')->default('none');;
            $table->string('fromGender')->default('none');;
            $table->string('fromAge')->default('none');;

            $table->string('subject');
            $table->string('comment');
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
        Schema::dropIfExists('messages');
    }
}
