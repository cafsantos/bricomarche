<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->boolean('click_collect')->default(0)->nullable();
            $table->longText('address')->nullable();
            $table->string('locality')->nullable();
            $table->string('zipcode')->nullable();
            $table->integer('distrito')->nullable();
            $table->string('concelho')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('fax_number')->nullable();
            $table->string('main_email')->nullable();
            $table->string('secundary_email')->nullable();
            $table->string('recruitment_email')->nullable();
            $table->string('schedule')->nullable();
            $table->string('coordinates')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
