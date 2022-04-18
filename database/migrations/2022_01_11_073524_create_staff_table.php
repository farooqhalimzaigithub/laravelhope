<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
              $table->increments('id');
              $table->integer('school_id')->unsigned()->nullable();
             // $table->foreign('school_id')->references('id')->on('schools')->onDelete('cascade')->onUpdate('cascade');
              $table->string('Teacher_Name');
              $table->string('Father_Name')->nullable();
              $table->enum('Gender', ['0', '1'])->default('1');
              $table->date('DOB')->nullable();
              $table->string('Degree')->nullable();
              $table->string('Subject')->nullable();
              $table->string('Qualification')->nullable();
              $table->date('Experience')->nullable();
              $table->string('CNIC')->nullable();
              $table->string('Bank_Name')->nullable();
              $table->string('Bank_Code')->nullable();
              $table->bigInteger('Account')->nullable();
              $table->string('Disability')->nullable();
              $table->string('marital_status')->nullable();
              $table->string('Contact')->nullable();
               $table->string('Whatsapp')->nullable();
              $table->timestamps();
             //  $table->decimal('basic_salery', 10, 2)->nullable();
             //   $table->integer('balance')->default('0');
             // $table->string('village')->nullable();
             // // $table->string('phone_no')->nullable();
             // $table->string('appointment_date')->nullable();
             // $table->string('image')->nullable();
             //  $table->tinyInteger('status')->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff');
    }
}
