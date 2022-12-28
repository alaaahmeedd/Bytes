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
        Schema::create('supports', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->unsignedBiginteger('account_id');
            $table->unsignedBiginteger('product_id');
            $table->unsignedBiginteger('stats_id');
            $table->string('contact_info',125);
            $table->text('message');
            $table->text('info');
            $table->timestamps();
         
            $table->foreign('product_id')
            ->references('id')
            ->on('products')
            ->onDelete('cascade');

            $table->foreign('stats_id')
            ->references('id')
            ->on('stats')
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
        Schema::dropIfExists('supports');
    }
};
