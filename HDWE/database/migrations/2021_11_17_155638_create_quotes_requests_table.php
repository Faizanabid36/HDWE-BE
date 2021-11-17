<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotesRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotes_requests', function (Blueprint $table) {
            $table->id();
            $table->string('delivery_date');
            $table->string('reciever_name');
            $table->string('delivery_adress');
            $table->string('cell');
            $table->string('payment_type');
            $table->string('item_description');
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
        Schema::dropIfExists('quotes_requests');
    }
}
