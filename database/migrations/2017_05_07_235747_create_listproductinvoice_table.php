<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListproductinvoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listproductinvoice', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idinvoice')->unsigned()->default(1);
            $table->foreign('idinvoice')
                            ->references('id')
                            ->on('invoice')
                            ->onDelete('cascade');
            $table->integer('idproduct')->unsigned()->default(1);
            $table->foreign('idproduct')
                            ->references('id')
                            ->on('product')
                            ->onDelete('cascade');
            $table->text('amount');
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
        Schema::dropIfExists('listproductinvoice');
    }
}
