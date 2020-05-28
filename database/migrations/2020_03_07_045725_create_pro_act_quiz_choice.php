<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProActQuizChoice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pro_act_quiz_choice', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('choice');
            $table->boolean('isTrue')->default(0);
            $table->integer('question_id')->index();
            $table->timestamps();
        });

        Schema::table('pro_act_quiz_choice', function (Blueprint $table) {
            $table->foreign('question_id')->references('id')->on('pro_act_quiz_question')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pro_act_quiz_choice');
    }
}
