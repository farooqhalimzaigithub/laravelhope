<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentFeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_fees', function (Blueprint $table) {
             $table->increments('id');
            $table->integer('session_id')->unsigned()->index();
             // $table->foreign('session_id')->references('session_id')->on('sessions')->onDelete('cascade')->onUpdate('cascade');
               // $table->string('fee_name');
              $table->integer('class_id')->unsigned()->index();
             // $table->foreign('class_section_session_id')->references('id')->on('free_classes')->onDelete('cascade')->onUpdate('cascade');
             $table->date('month')->nullable();
             $table->integer('student_id')->unsigned()->nullable();
             // $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade')->onUpdate('cascade');
             $table->integer('school_id')->unsigned()->nullable();
             // $table->foreign('school_id')->references('id')->on('sessions')->onDelete('schools')->onUpdate('cascade');
              $table->decimal('amount', 10, 2)->nullable();
              $table->decimal('received_amount', 10, 2)->nullable();
              $table->integer('clear')->default('0');
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
        Schema::dropIfExists('student_fees');
    }
}
