<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('payment', function (Blueprint $table) {
            $table->increments('payment_id');
            $table->string('payment_method');
            $table->integer('payment_status');
            $table->integer('bank_id')->unsigned();
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
            $table->softDeletes(); 
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('payment');
        Schema::enableForeignKeyConstraints();
    }
}
