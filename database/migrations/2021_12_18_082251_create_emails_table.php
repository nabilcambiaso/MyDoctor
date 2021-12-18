<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emails', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger("doctor_id")->unsigned();
            $table->bigInteger("patient_id")->unsigned();
            $table->foreign('doctor_id')->references('id')->on('user_informations')->onDelete('cascade');
            $table->foreign('patient_id')->references('id')->on('user_informations')->onDelete('cascade');
            $table->string('title')->nullable();
            $table->string('body')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emails');
    }
}