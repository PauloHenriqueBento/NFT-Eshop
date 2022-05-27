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
        Schema::create('nfts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->integer('creator_id')->unsigned()->nullable();
            $table->integer('owner_id')->unsigned()->nullable(); //Proprietário | Alterar
            $table->decimal('price', 8, 2);
            $table->integer('like')->nullable();
            $table->string('image_path')->nullable(); //Alterar
            $table->integer('colection_id')->unsigned()->nullable(); //Alterar
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
        Schema::dropIfExists('nfts');
    }
};
