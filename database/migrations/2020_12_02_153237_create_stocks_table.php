<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->string('product');
            $table->text('description')->nullable();
            $table->enum('category', ['wood', 'plastic', 'metal', 'concrete', 'paint']);
            $table->string('subcategory')->nullable();
            $table->string('image')->nullable();
            $table->integer('available');
            $table->integer('price');
            $table->timestamps();
            $table->string('units')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stocks');
    }
}