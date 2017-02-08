<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('nBatiment');
            $table->string('firstName');
            $table->string('name');
            $table->string('adress');
            $table->string('inovoiceAdress');
            $table->string('habitation');
            $table->integer('accesCode');
            $table->integer('accesCode2');
            $table->char('phoneNumber');
            $table->integer('fax');
            $table->char('mobileNumber');
            $table->string('email')->unique();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
