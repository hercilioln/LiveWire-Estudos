<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('pro_nome');
            $table->float('pro_valor');
            $table->integer('pro_quantidade');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
