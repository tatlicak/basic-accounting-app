<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cash_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cari_id');
            $table->unsignedBigInteger('payment_types_id');
            $table->unsignedBigInteger('transaction_types_id');
            $table->date('islem_tarihi');
            $table->unsignedDecimal('islem_miktari');
            $table->foreign('cari_id')->references('id')->on('accounts');
            $table->foreign('transaction_types_id')->references('id')->on('transaction_types');
            $table->foreign('payment_types_id')->references('id')->on('payment_types');
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
        Schema::dropIfExists('cash_details');
    }
};
