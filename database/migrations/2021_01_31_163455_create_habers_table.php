<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHabersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habers', function (Blueprint $table) {
            $table->id() -> autoIncrement();
            $table->string('title',150);
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->string('image',100)->nullable();
            $table->integer('category_id')->nullable();
            $table->text('detail')->nullable();
            $table->string('type')->nullable();
            $table->string('slug',50)->nullable();
            $table->integer('user_id')->nullable();
            $table->string('status',15)->nullable()->default('False');
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
        Schema::dropIfExists('habers');
    }
}
