<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            // Foreign Report belongs to Review
            $table->bigInteger('review_id')->unsigned();
            $table->foreign('review_id')->references('id')->on('reviews')->onDelete('cascade');

            $table->string('reporter_first_name');
            $table->string('reporter_last_name');
            $table->string('reporter_email');
            $table->string('reason');

            $table->text('report_comment')->nullable();
            $table->smallInteger('staff_reviewed')->default(0);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reports');
    }
}
