<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 160);
            $table->longText('description')->nallable();
            $table->double('longitude');
            $table->double('latitude');
            $table->float('max_price');
            $table->float('min_price');
            $table->dateTime('offer_start_date');
            $table->dateTime('offer_end_date');
            $table->boolean('status')->default(1);
            $table->tinyInteger('level')->default(1);
            $table->integer('department_id')->unsigned()->nallable();
            $table->foreign('department_id')->references('id')->on('departments');
            $table->integer('provider_id')->unsigned()->nallable();
            $table->foreign('provider_id')->references('id')->on('providers');
            $table->integer('customer_id')->unsigned()->nallable();
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('SET NULL');
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
        Schema::dropIfExists('offers');
    }
}
