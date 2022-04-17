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
        Schema::create('nft', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('descriptio');
            $table->integer('creator_id')->unsigned();
            $table->integer('owner_id')->unsigned(); //Proprietário
            $table->decimal('price', 8, 2);
            $table->integer('like');
            $table->string('image_path');
            $table->integer('colection_id')->unsigned();
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
        Schema::dropIfExists('nft');
    }
};
