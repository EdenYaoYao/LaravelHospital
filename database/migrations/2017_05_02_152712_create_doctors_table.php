<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->unsignedInteger('sex')->default(0);
            $table->string('image');
            $table->string('graduate');
            $table->string('major');
            $table->string('position');
            $table->string('info');
            $table->integer('dept_id')->unsigned();
            $table->foreign('dept_id')->references('id')->on('depts')->onDelete('cascade');

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
        Schema::drop('doctors');
    }
}
