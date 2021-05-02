<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processes', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->dateTime('start_time')->required()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('end_time')->required()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->boolean('is_active')->required()->default(1);

            $table->integer('customer_id')->nullable();
            $table->integer('machine_id')->nullable();

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
        Schema::dropIfExists('processes');
    }
}
