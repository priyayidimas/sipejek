<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->integer('id')->autoIncrement();
            $table->string('fullname',50);
            $table->string('email',30);
            $table->tinyInteger('type')->default(1);
            $table->string('password');
            $table->string('image')->default('default.png');
            $table->text('desc')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    
    /**
     * Reverse the migrations.
     *
     * @retu
     * rn void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
