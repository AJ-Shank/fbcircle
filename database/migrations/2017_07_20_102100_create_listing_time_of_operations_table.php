<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingTimeOfOperationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listing_time_of_operation', function (Blueprint $table) {
            $table->integer('listing_id');
            $table->integer('day_of_week');
            $table->primary(['listing_id','day_of_week']);
            $table->timestamps();
            $table->time('from');
            $table->time('to');
            $table->boolean('closed');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listing_time_of_operation');
    }
}
