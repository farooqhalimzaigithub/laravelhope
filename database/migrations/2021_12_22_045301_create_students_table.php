 <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            // $table->string('last_name')->nullable();
            $table->string('form_b')->nullable();
            $table->string('dob')->nullable();
            $table->string('father_name')->nullable();
             $table->string('father_cnic_no')->nullable();
            $table->string('registration_no')->nullable();
            $table->string('admission_no')->nullable();
            $table->string('image')->nullable();
            $table->string('father_occupation')->nullable();
            $table->string('religion')->nullable();
            $table->string('address')->nullable();
            $table->string('contact_no')->nullable();
            $table->string('gender')->nullable();
            $table->string('health_id')->nullable();
            $table->string('guardian_name')->nullable();
            $table->string('guardian_cnic_no')->nullable();
            $table->string('father_alive')->nullable();
            $table->date('date_of_admission')->nullable();
            $table->integer('domicile_id')->unsigned()->nullable();
             // $table->foreign('domicile_id')->references('id')->on('districts')->onDelete('cascade')->onUpdate('cascade');
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
            $table->integer('session_id')->unsigned()->nullable();
             //$table->foreign('current_class_id')->references('id')->on('sessions')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('current_class_id')->unsigned()->nullable();
             //$table->foreign('current_class_id')->references('id')->on('free_classes')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('section_id')->unsigned()->nullable();
             //$table->foreign('current_class_id')->references('id')->on('sections')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('country_id')->unsigned()->nullable();
              // $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('school_id')->unsigned()->nullable();
             // $table->foreign('school_id')->references('id')->on('schools')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('user_id')->unsigned()->nullable();
            // $table->integer('css_id')->unsigned()->nullable();
             // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
               $table->string('village')->nullable();
               $table->string('previous_school')->nullable();
               $table->string('withdrawl_no')->nullable();
               $table->string('clc_no')->nullable();
               $table->string('remark')->nullable();
               $table->integer('blood_id')->unsigned()->nullable();
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
        Schema::dropIfExists('students');
    }
}
