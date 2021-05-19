<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_data', function (Blueprint $table) {
            $table->id();
            $table->string('credit_card');
            $table->date('expiration_date');
            $table->string('secret_number');
            $table->longText('payment_method');
            $table->unsignedBigInteger('clients_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment_data');
    }
}
