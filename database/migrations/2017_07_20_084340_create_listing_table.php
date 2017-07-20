<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title');
            $table->integer('status')->comment('1=published,2=review,3=draft');
            $table->timestamp('published_on')->nullable();
            $table->integer('type')->comment('1=Wholeseller,2=Retailer,3=distributer');
            $table->string('slug');
            $table->text('description');
            $table->string('other_details')->comment('Serialized array of year established, website etc');
            $table->integer('owner_id')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('views_count')->default('0');
            $table->integer('contact_request_count')->default('0');
            $table->integer('locality_id');
            $table->string('display_address');
            $table->double('latitude');
            $table->double('longitude');
            $table->boolean('show_hours_of_operation');
            $table->boolean('show_primary_phone');
            $table->boolean('show_primary_email');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listings');
    }
}
