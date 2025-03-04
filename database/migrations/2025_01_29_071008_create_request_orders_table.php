<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestOrdersTable extends Migration

{

    public function up()

    {

        Schema::create('request_orders', function (Blueprint $table) {

            $table->id();

            $table->string('field_name'); // Ganti dengan field yang sesuai

            $table->timestamps();

        });

    }


    public function down()

    {

        Schema::dropIfExists('request_orders');

    }

}

