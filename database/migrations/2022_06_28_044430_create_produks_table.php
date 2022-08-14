<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->id();

            $table->string('name')->nullable();
            $table->string('ukuran')->nullable();
            $table->string('stok')->nullable();
            $table->text('description')->nullable();
            $table->integer('price')->nullable();
            // $table->double('rate')->nullable();
            $table->string('types')->default('recommended');
            $table->text('picturePath')->nullable();

            $table->softDeletes();
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
        Schema::dropIfExists('produks');
    }
}
