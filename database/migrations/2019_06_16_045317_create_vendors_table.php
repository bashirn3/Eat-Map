<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('name');
            $table->string('address');
            $table->string('email');
            $table->mediumText('description')->nullable();
            $table->String('phone_1');
            $table->String('phone_2')->nullable();
            $table->String('opening_hours')->nullable();
            $table->String('closing_hours')->nullable();
            $table->String('twitter')->nullable();
            $table->String('facebook')->nullable();
            $table->String('instagram')->nullable();
            $table->String('location')->nullable()->default('Kano');
            $table->integer('featured')->default('0');
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
        Schema::dropIfExists('vendors');
    }
}
