<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if(!Schema::hasTable('profiles')){
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('s_id');
            $table->string('f_name');
            $table->string('l_name');
            $table->string('email',100)->unique();
            $table->string('s_phone',10)->default('');
            $table->string('address',500)->default('');
            $table->string('address',500)->default('');
            $table->string('sem',5)->default('');
            $table->string('branch',10)->default('');
            $table->string('p_f_name');
            $table->string('p_l_name');
            $table->string('p_phone',10)->default('');
            $table->timestamps();
        });
      }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
