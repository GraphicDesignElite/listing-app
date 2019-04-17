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
            $table->string('title');
            $table->text('description');
            $table->timestamps();

            //$table->string('first_name', 100);
            //$table->string('last_name', 100);
            //$table->string('phone_number');
            //$table->string('fax_number');
            //$table->string('email');
            //$table->string('website_url');

            //$table->string('street_address');
            //$table->string('street_address_2');
            //$table->string('city');
            //$table->string('state');
            //$table->string('zipcode', 10);
            //$table->decimal('rating', 5, 1);

            
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->boolean('claimed')->default(false);
            $table->boolean('premium')->default(false);

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
