<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTutorReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutor_reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('r_name');
            $table->string('r_email');
	        $table->integer('r_rating');
	        $table->text('r_comment');
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
        Schema::dropIfExists('tutor_reviews');
    }
}
