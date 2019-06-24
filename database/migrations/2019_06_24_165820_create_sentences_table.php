<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSentencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sentences', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->bigInteger('retailer_id')->unsigned();
            $table->foreign('retailer_id')->references('id')->
            on('retailer')->onDelete('CASCADE')->onUpdate('RESTRICT');
            $table->bigInteger('livre_id')->unsigned();
            $table->foreign('livre_id')->references('id')->
            on('livres')->onDelete('CASCADE')->onUpdate('RESTRICT');
            $table->float('Price');
            $table->boolean('LogicalDelete')->default(0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sentences');
    }
}
