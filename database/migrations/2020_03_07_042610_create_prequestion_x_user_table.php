<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrequestionXUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pro_prequestion_x_user', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('answer');
            $table->integer('prequestion_id')->index();
            $table->integer('user_id')->index();
            $table->timestamps();
        });
        Schema::table('pro_prequestion_x_user', function (Blueprint $table) {
            $table->foreign('prequestion_id')->references('id')->on('pro_prequestion')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prequestion_x_user');
    }
}
