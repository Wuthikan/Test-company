<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBasketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baskets', function (Blueprint $table) {
            $table->increments('id');
            $table->text('amount');
            $table->integer('type')->unsigned()->default(1);
            $table->foreign('type')
                    ->references('id')
                    ->on('typeproduct')
                    ->onDelete('cascade');
            $table->integer('idproduct')->unsigned()->default(1);
            $table->foreign('idproduct')
                            ->references('id')
                            ->on('product')
                            ->onDelete('cascade');
            $table->integer('idemployee')->unsigned()->default(1);
            $table->foreign('idemployee')
                            ->references('id')
                            ->on('users')
                            ->onDelete('cascade');
            $table->text('extra')->nullable();
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
        Schema::dropIfExists('baskets');
    }
}
