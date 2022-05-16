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
              $table->integer('district_id')->unsigned()->nullable();
             // $table->foreign('district_id')->references('id')->on('districts')->onDelete('cascade')->onUpdate('cascade');
              $table->integer('tehsil_id')->unsigned()->nullable();
             // $table->foreign('tehsil_id')->references('id')->on('tehsils')->onDelete('cascade')->onUpdate('cascade');
              $table->integer('na_id')->unsigned()->nullable();
             // $table->foreign('na_id')->references('id')->on('nas')->onDelete('cascade')->onUpdate('cascade');
              $table->integer('pk_id')->unsigned()->nullable();
             // $table->foreign('pk_id')->references('id')->on('pks')->onDelete('cascade')->onUpdate('cascade');
              $table->integer('uc_id')->unsigned()->nullable();
             // $table->foreign('uc_id')->references('id')->on('ucs')->onDelete('cascade')->onUpdate('cascade');
              $table->integer('vc_id')->unsigned()->nullable();
             // $table->foreign('vc_id')->references('id')->on('vcs')->onDelete('cascade')->onUpdate('cascade');
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
