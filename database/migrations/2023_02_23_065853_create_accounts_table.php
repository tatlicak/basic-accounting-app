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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('cari_ad_unvan',255);
            $table->tinyInteger('sahis_mi',false,true)->default(0);
            $table->integer('vergi_no',false,true);
            $table->string('vergi_dairesi',100);
            $table->string('tel_no',10);
            $table->string('gsm',10);
            $table->string('adres',255);
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
        Schema::dropIfExists('accounts');
    }
};
