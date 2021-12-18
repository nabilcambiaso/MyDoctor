<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger("doctor_id")->unsigned();
            $table->bigInteger("patient_id")->unsigned();
            $table->foreign('doctor_id')->references('id')->on('user_informations')->onDelete('cascade');
            $table->foreign('patient_id')->references('id')->on('user_informations')->onDelete('cascade');
            $table->date('start_date')->nulllable();
            $table->date('end_date')->nulllable();
            $table->date('calnder_id')->nulllable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointments');
    }
}
