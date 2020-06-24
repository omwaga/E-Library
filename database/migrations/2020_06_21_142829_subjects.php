<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Subjects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('education_level_id');
            $table->unsignedBigInteger('education_class_id');
            $table->string('name');
            $table->timestamps();

            $table->foreign('education_level_id')
            ->references('id')
            ->on('education_levels')
            ->onDelete('cascade');

            $table->foreign('education_class_id')
            ->references('id')
            ->on('education_classes')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subjects');
    }
}
