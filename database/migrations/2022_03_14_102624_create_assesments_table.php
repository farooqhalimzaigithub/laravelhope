<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssesmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assesments', function (Blueprint $table) 
        {
             $table->increments('id');
             $table->string('assesment_title')->nullable();
             $table->dateTime('assesment_date')->nullable();
             $table->dateTime('due_date')->nullable();
             $table->string('organization')->nullable();
             $table->string('from')->nullable();
             $table->string('for')->nullable();
             $table->string('status')->default('0');
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
        Schema::dropIfExists('assesments');
    }
}
