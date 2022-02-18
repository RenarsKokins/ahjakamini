<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title', 50);
            $table->text('description');
            $table->foreignId('fireplace_id')->constrained();
            $table->foreignId('language_id')->constrained();
            $table->string('finish')->nullable();
            $table->integer('width');
            $table->integer('height');
            $table->integer('depth');
            $table->string('internal_dimensions', 40)->nullable();
            $table->integer('mass')->nullable();
            $table->string('heating')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('details');
    }
};
