<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcessDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('process_data', function (Blueprint $table) {
            $table->id();

            $table->integer('water_temp_celecius')->required()->default(0);
            $table->boolean('pump10')->required()->default(0);
            $table->boolean('pump5')->required()->default(0);
            $table->boolean('drain_sensor')->required()->default(0);
            $table->integer('water_level')->required()->default(0);

            $table->integer('process_id')->nullable();

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
        Schema::dropIfExists('process_data');
    }
}
