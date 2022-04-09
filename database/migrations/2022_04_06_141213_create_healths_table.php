<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHealthsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('healths', function (Blueprint $table) {
            $table->id();
            $table->string('temp');
            $table->string('resp');
            $table->string('eq_resp')->nullable();
            $table->string('travel');
            $table->string('eq_travel')->nullable();
            $table->string('history');
            $table->string('eq_history')->nullable();
            $table->string('hospital');
            $table->string('eq_hospital')->nullable();
            $table->string('public');
            $table->string('eq_public')->nullable();
            $table->string('close');
            $table->string('front');
            $table->string('eq_front')->nullable();
            $table->string('place');
            $table->string('eq_place')->nullable();
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
        Schema::dropIfExists('healths');
    }
}
