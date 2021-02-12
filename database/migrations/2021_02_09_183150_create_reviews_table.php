<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('reviews');
        Schema::create('reviews', function (Blueprint $table) {
            $table->id() -> autoIncrement();
            $table->integer('user_id');
            $table->integer('haber_id');
            $table->string('subject',100)->nullable();
            $table->text('review')->nullable();
            $table->string('IP',20)->nullable();
            $table->integer('rate')->nullable();
            $table->string('status',15)->nullable()->default('New');
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
        Schema::dropIfExists('reviews');
    }
}
