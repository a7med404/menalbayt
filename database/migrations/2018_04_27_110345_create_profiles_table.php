<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->integer('id')->unsigned()->unique();
            $table->foreign('id')->references('id')->on('providers')->onDelete('cascade');
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->string('username', 100)->nullable();
            $table->string('email', 100)->nullable();
            $table->double('address_longitude')->nullable();
            $table->double('address_latitude')->nullable();
            $table->string('image', 100)->nullable();
            $table->string('cover_image', 100)->nullable();
            $table->tinyInteger('gender')->nullable();
            $table->longText('pio')->nullable();
            $table->string('identifier_number', 20)->nullable();
            $table->tinyInteger('identifier_type')->nullable();
            $table->string('identifier_image', 100)->nullable();
            $table->boolean('trusted')->default(0);
            $table->integer('department_id')->unsigned()->nullable();
            $table->foreign('department_id')->references('id')->on('departments');
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
        Schema::dropIfExists('profiles');
    }
}
