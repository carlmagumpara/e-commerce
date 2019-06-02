<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::dropIfExists('products');
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('product_id');
            $table->string('photo')->nullable();
            $table->string('name')->nullable();
            $table->integer('price')->nullable();
            $table->longText('description')->nullable();
            $table->string('brand')->nullable();
            $table->string('size')->nullable();
            $table->string('camera')->nullable();
            $table->string('cpu')->nullable();
            $table->string('memory')->nullable();
            $table->string('display')->nullable();
            $table->string('battery')->nullable();
            $table->string('network')->nullable();
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
        Schema::dropIfExists('products');
    }
}
