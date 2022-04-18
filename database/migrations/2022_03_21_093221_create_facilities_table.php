<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facilities', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('no_of_room')->nullable();
                $table->dateTime('date_of_establishment')->nullable();
                $table->string('physical_status')->nullable();
                $table->string('room_other_use')->nullable();
                $table->string('boundary_wall')->nullable();
                $table->string('extra_space')->nullable();
                $table->string('ventilation')->nullable();
                $table->string('electricity')->nullable();
                $table->string('solar')->nullable();
                $table->string('light')->nullable();
                $table->string('toilet')->nullable();
                $table->string('fan')->nullable();
                $table->string('water_supply')->nullable();
                $table->string('veranda')->nullable();
                $table->string('play_ground')->nullable();
                $table->integer('teacher_chair')->nullable();
                $table->integer('teacher_table')->nullable();
                $table->integer('cupboard')->nullable();
                $table->integer('black_board')->nullable();
                $table->integer('student_chair')->nullable();
                $table->integer('water_cooler')->nullable();
                $table->integer('mat')->nullable();
                $table->integer('school_bell')->nullable();
                $table->integer('tlm_chart')->nullable();
                $table->integer('school_id')->unsigned()->nullable();
             // $table->foreign('school_id')->references('id')->on('schools')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('facilities');
    }
}
