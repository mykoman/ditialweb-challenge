<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->increments('id');
            $table->integer('user_id');
            $table->string('payment_ref');
            $table->string('email');
            $table->string('plan');
            $table->string('amount');
//            $table->string('savingsplan')->nullable();
//            $table->integer('dailysaving_id')->nullable();
//            $table->integer('weeklysaving_id')->nullable();
//            $table->integer('monthlysaving_id')->nullable();
//            $table->integer('dailyclinic_id')->nullable();
//            $table->integer('weeklyclinic_id')->nullable();
//            $table->integer('monthlyclinic_id')->nullable();
//            $table->integer('bulksaving_id')->nullable();
            $table->string('title')->nullable();
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
        Schema::dropIfExists('transactions');
    }
}
