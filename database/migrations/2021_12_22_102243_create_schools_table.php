<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
           $table->increments('id');
             $table->string('name');
             $table->string('lat');
             $table->string('lng');
             $table->string('land_mark');
             $table->string('school_type');
             $table->string('status');
             $table->string('building_ownership');
             $table->string('gender');
             $table->string('building_structure');
             $table->string('village');
             $table->string('mohallah');
             $table->string('school_code');
             // $table->integer('district_id');
             $table->string('area');
             $table->integer('level_id')->unsigned()->nullable();
             $table->integer('transport_id')->unsigned()->nullable();
             $table->integer('district_id')->unsigned()->nullable();
             $table->integer('tehsil_id')->unsigned()->nullable();
             $table->integer('na_id')->unsigned()->nullable();
             $table->integer('pk_id')->unsigned()->nullable();
             $table->integer('uc_id')->unsigned()->nullable();
             $table->integer('vc_id')->unsigned()->nullable();
            
             
             $table->integer('user_id')->unsigned()->nullable();
             // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schools');
    }
}
