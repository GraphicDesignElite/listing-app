<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            // Foriegn Review Belongs to CPA listing 
            $table->bigInteger('cpa_listing_id')->unsigned();
            $table->foreign('cpa_listing_id')->references('id')->on('cpa_listings')->onDelete('cascade');

            $table->string('reviewer_first_name');
            $table->string('reviewer_last_name');
            $table->string('reviewer_email');
            $table->smallInteger('rating');
            $table->text('review_text');
            
            $table->string('service_reviewed')->nullable();
            $table->string('review_type')->nullable();
            $table->smallInteger('flagged')->default(0);
            $table->smallInteger('approved')->default(1);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
