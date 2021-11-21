<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentalRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rental_requests', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('time_period');
            $table->string('opt_select');
            $table->string('options');
            $table->string('tools_description');
            $table->string('reciever_name');
            $table->string('delivery_adress');
            $table->string('cell');
            $table->string('payment_type');            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rental_requests');
    }
}
