<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 160);
            $table->text('short_description')->nullable();
            $table->date('date');
            $table->integer('protfolio_id')->unsigned();
            $table->foreign('protfolio_id')->references('id')->on('protfolios')->onDelete('cascade');
            $table->timestamps();
            $table->collection = 'utf8_general_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
