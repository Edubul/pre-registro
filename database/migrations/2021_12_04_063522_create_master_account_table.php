<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_account', function(Blueprint $table){
            $table->id();
            $table->string('username',35)->nullable(false);
            $table->string('pass')->nullable(false);
            $table->string('email',40)->nullable(false);
            $table->string('last_ip',100)->nullable();
            $table->string('pais',2)->default('MX')->nullable();
            $table->string('geo_localization',100)->nullable();
            $table->integer('question')->nullable(false);
            $table->string('question_response',100)->nullable(false);
            $table->integer('isBan')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_account');
    }
}
