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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('email');
            $table->bigInteger('phone');
            $table->string('password');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('cpf');
            $table->date('birth_date');
            $table->string('picture'); //Foto, talvez mudar o tipo do dado, validar isso dps
            $table->text('description');
            $table->bigInteger('address_id')->unsigned();
            $table->bigInteger('role_id')->unsigned();
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
        Schema::dropIfExists('profiles');
    }
};
