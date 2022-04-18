<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnrollmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrollments', function (Blueprint $table) {
             $table->increments('id');
             $table->integer('boy')->nullable();
             $table->integer('girl')->nullable();
             $table->integer('total')->nullable();
             $table->integer('class_id')->unsigned()->nullable();
             // $table->foreign('class_id')->references('id')->on('free_classes')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('enrollments');
    }
}
