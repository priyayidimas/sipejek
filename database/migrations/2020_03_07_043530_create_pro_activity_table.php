<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProActivityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pro_activity', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('title',50);
            $table->string('type',10);
            $table->string('attachment');
            $table->integer('timer');
            $table->string('desc');
            $table->integer('phase_id')->index();
            $table->timestamps();
        });

        Schema::table('pro_activity', function (Blueprint $table) {
            $table->foreign('phase_id')->references('id')->on('pro_phase')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pro_activity');
    }
}
