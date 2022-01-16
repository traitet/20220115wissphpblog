<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippingResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipping_results', function (Blueprint $table) {
            $table->increments('id');
            $table->string('shipping_id',255)->unique();
            $table->string('shipping_name',255)->nullable();
            $table->string('shipping_description',255)->nullable();
            $table->string('shipping_status',255)->nullable();
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
           Schema::dropIfExists('shipping_results');

    }
}


