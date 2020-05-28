<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pro_phase', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('title',50);
            $table->timestamp('date_start')->nullable();
            $table->timestamp('date_due')->nullable();
            $table->integer('project_id')->index();
            $table->string('desc')->nullable();
            $table->timestamps();            
        });

        Schema::table('pro_phase', function (Blueprint $table) {
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
        Schema::dropIfExists('project_phase');
    }
}
