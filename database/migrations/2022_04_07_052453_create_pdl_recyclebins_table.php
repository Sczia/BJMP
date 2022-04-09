<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePdlRecyclebinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pdl_recyclebins', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('birth_date');
            $table->string('address');
            $table->string('religion');
            $table->string('civil_status');
            $table->string('built');
            $table->string('complexion');
            $table->string('eye_color');
            $table->string('sex');
            $table->string('blood_type');
            $table->string('educational_attainment');
            $table->string('date_of_commitment');
            $table->string('offense');
            $table->string('case_number');
            $table->date('deleted_date');
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
        Schema::dropIfExists('pdl_recyclebins');
    }
}
