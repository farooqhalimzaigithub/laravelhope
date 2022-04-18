<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnrollmentSummaryMetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrollment_summary_metas', function (Blueprint $table) {        
              $table->increments('id');
              $table->integer('afghan_boys')->nullable();
              $table->integer('afghan_girls')->nullable();
              $table->integer('afghan_total')->nullable();
              $table->integer('disable_boys')->nullable();
              $table->integer('disable_girls')->nullable();
              $table->integer('disable_total')->nullable();
              $table->integer('total_girls')->nullable();
              $table->integer('total_boys')->nullable();
              $table->integer('disable_total')->nullable();
              $table->integer('grand_total')->nullable();
              $table->integer('school_id')->nullable();
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
        Schema::dropIfExists('enrollment_summary_metas');
    }
}
