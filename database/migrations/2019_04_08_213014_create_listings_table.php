<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('description');
            $table->timestamps();
            $table->softDeletes();

            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->string('phone_number')->nullable();
            $table->string('fax_number')->nullable();
            $table->string('email')->nullable();
            $table->string('website_url')->nullable();

            $table->string('street_address')->nullable();
            $table->string('street_address_2')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zipcode', 10)->nullable();
            $table->decimal('rating', 5, 0)->default(0);
            $table->bigInteger('profile_views')->default(0);
            $table->string('slug')->nullable();
            
            $table->bigInteger('owner_id')->unsigned()->default(0);
            $table->boolean('claimed')->default(false);
            $table->boolean('premium')->default(false);
            $table->boolean('hide_listing')->default(false);
            //$table->foreign('owner_id')->references('id')->on('users');

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
