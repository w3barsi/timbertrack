<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResuppliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resupplies', function (Blueprint $table) {
            $table->id();
            $table->integer('accept');
            $table->integer('reject');
            //reference a foreign key in the database id
            $table->foreignId('stocks_id')->constrained()->onDelete('cascade');
            // $table->integer('stocks_id');
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
        Schema::dropIfExists('resupplies');
    }
}
