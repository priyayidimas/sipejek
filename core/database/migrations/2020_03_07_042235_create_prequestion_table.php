<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrequestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pro_prequestion', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('question',50);
            $table->string('desc')->nullable();
            $table->integer('project_id')->index();
            $table->timestamps();
        });

        Schema::table('pro_prequestion', function (Blueprint $table) {
            $table->foreign('project_id')->references('id')->on('project')->onDelete('cascade');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prequestion');
    }
}
