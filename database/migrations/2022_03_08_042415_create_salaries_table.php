<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salaries', function (Blueprint $table) {
              $table->increments('id');
              $table->decimal('amount', 10, 2)->nullable();
              $table->decimal('received_amount', 10, 2)->nullable();
              $table->decimal('remaining_amount', 10, 2)->nullable();
              $table->date('att_date')->nullable();
              $table->integer('school_id')->unsigned()->nullable();
             // $table->foreign('school_id')->references('id')->on('sessions')->onDelete('schools')->onUpdate('cascade');
              $table->integer('user_id')->unsigned()->nullable();
       /* $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');*/
              $table->integer('staff_id')->unsigned()->index();
        /* $table->foreign('staff_id')->references('id')->on('staffs')->onDelete('cascade')->onUpdate('cascade');*/    $table->integer('status')->default('0');
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
        Schema::dropIfExists('salaries');
    }
}
