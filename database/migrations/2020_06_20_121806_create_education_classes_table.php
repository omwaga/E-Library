<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education_classes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('education_level_id');
            $table->string('name');
            $table->timestamps();
            
            $table->foreign('education_level_id')
            ->references('id')
            ->on('education_levels')
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
        Schema::dropIfExists('education_classes');
    }
}
