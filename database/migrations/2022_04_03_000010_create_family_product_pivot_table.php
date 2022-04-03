<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamilyProductPivotTable extends Migration
{
    public function up()
    {
        Schema::create('family_product', function (Blueprint $table) {
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id', 'product_id_fk_6350795')->references('id')->on('products')->onDelete('cascade');
            $table->unsignedBigInteger('family_id');
            $table->foreign('family_id', 'family_id_fk_6350795')->references('id')->on('families')->onDelete('cascade');
        });
    }
}
