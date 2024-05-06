<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComptesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comptes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedMediumInteger('codeBanq');
            $table->unsignedMediumInteger('codeGuichet');
            $table->bigInteger('rib');
            $table->double('solde')->default(10);
            $table->enum('devise',['TND', 'EUD', 'USD']);
            $table->foreignId('titulaire')->references('id')->on('Clients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comptes');
    }
}
