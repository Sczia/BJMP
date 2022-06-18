<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalRecyclebinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_recyclebins', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('birth_date');
            $table->integer('age');
            $table->string('address');
            $table->string('emergency_contact');
            $table->string('relationship');
            $table->string('allergies');
            $table->string('current_medication');
            $table->string('current_health_status');
            $table->string('medical_history');
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
        Schema::dropIfExists('medical_recyclebins');
    }
}
