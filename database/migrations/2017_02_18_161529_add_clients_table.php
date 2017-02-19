<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('nBatiment');
            $table->string('firstName');
            $table->string('name');
            $table->string('adress');
            $table->integer('postalCode');
            $table->string('city');
            $table->string('inovoiceAdress');
            $table->string('habitation');
            $table->string('statutHabitation');
            $table->string('proprietaireName');
            $table->integer('accesCode');
            $table->integer('accesCode2');
            $table->char('phoneNumber');
            $table->integer('fax');
            $table->char('mobileNumber');
            $table->string('email')->unique();
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
        Schema::dropIfExists('clients');
    }
}
