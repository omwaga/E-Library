<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_informations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id');
            $table->unsignedBigInteger('counties_id');
            $table->unsignedBigInteger('sub_counties_id');
            $table->string('school_name');
            $table->timestamps();

            $table->foreign('users_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');

            $table->foreign('counties_id')
            ->references('id')
            ->on('counties')
            ->onDelete('cascade');

            $table->foreign('sub_counties_id')
            ->references('id')
            ->on('sub_counties')
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
        Schema::dropIfExists('user_informations');
    }
}
