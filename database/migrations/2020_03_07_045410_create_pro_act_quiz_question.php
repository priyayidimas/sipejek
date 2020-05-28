<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProActQuizQuestion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pro_act_quiz_question', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('question',50);
            $table->boolean('isMultiple')->default(0);
            $table->string('desc');
            $table->integer('activity_id')->index();
            $table->timestamps();
        });

        Schema::table('pro_act_quiz_question', function (Blueprint $table) {
            $table->foreign('activity_id')->references('id')->on('pro_activity')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pro_act_quiz_question');
    }
}
