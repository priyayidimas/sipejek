<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActAssignmentXUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pro_act_assignment_x_user', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->text('desc');
            $table->string('attachment');
            $table->integer('user_id')->index();
            $table->integer('activity_id')->index();
            $table->timestamps();
        });

        Schema::table('pro_act_assignment_x_user', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('act_assignment_x_user');
    }
}
