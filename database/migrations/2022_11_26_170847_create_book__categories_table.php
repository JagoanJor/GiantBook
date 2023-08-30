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
        Schema::create('book__categories', function (Blueprint $table) {
            $table->id('bookCategory_id');
            $table->BigInteger('book_id')->unsigned();
            $table->foreign('book_id')->references('book_id')->on('books')->onUpdate('cascade')->onDelete('cascade');
            $table->BigInteger('category_id')->unsigned();
            $table->foreign('category_id')->references('cat_id')->on('categories')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book__categories');
    }
};
