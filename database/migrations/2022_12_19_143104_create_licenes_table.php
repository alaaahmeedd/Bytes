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
        Schema::create('licenes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBiginteger('user_id');
            $table->unsignedBiginteger('product_id');
            $table->unsignedBiginteger('type_id');
            $table->unsignedBiginteger('payment_id');
            $table->date('start_time');
            $table->date('end_time');
            $table->integer('Qauta');
            $table->integer('Max_Qauta');
            $table->timestamps();
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');

            // $table->foreign('product_id')
            // ->references('id')
            // ->on('products')
            // ->onDelete('cascade');

            $table->foreign('type_id')
            ->references('id')
            ->on('licenes__types')
            ->onDelete('cascade');

            $table->foreign('payment_id')
            ->references('id')
            ->on('payments')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('licenes');
    }
};
