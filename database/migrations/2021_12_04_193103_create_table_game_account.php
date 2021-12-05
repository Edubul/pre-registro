<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableGameAccount extends Migration
{
  /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('login', function(Blueprint $table){
            $table->increments('account_id')->startingValue(2000000)->unsigned()->nullable(false);
            $table->string('userid',23)->nullable(false);
            $table->string('user_pass',32)->nullable(false);
            $table->enum('sex',['M','F','S'])->nullable(false)->default('M');
            $table->string('email',39)->nullable(false);
            $table->tinyInteger('group_id')->nullable(false)->default(0);
            $table->integer('state')->unsigned()->nullable(false)->default(0);
            $table->integer('unban_time')->unsigned()->nullable(false)->default(0);
            $table->integer('expiration_time')->unsigned()->nullable(false)->default(0);
            $table->mediumInteger('logincount')->unsigned()->nullable(false)->default(0);
            $table->dateTime('lastlogin')->nullable()->default(NULL);
            $table->string('last_ip',100)->nullable(false)->default('');
            $table->date('birthdate')->nullable(true)->default(NULL);
            $table->tinyInteger('character_slots')->unsigned()->nullable(false)->default(0);
            $table->string('pincode',4)->nullable(false)->default('');
            $table->integer('pincode_change')->unsigned()->nullable(false)->default(0);
            $table->integer('vip_time')->unsigned()->nullable(false)->default(0);
            $table->tinyInteger('old_group')->nullable(false)->default(0);
            $table->string('web_auth_token',17)->nullable(true)->default(0);
            $table->tinyInteger('web_auth_token_enabled')->nullable(false)->default(0);
            $table->integer('last_unique_id')->unsigned()->nullable(false)->default(0);
            $table->integer('blocked_unique_id')->unsigned()->nullable(false)->default(0);
            $table->string('pais',2)->nullable(false)->default('MX');
            $table->string('geo_localization',100)->nullable(true)->default('');
            $table->integer('question')->nullable(true)->default(NULL);
            $table->string('question_response')->nullable(true)->default(NULL);
            $table->integer('master_acc_id')->unsigned()->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('login');
    }
}
