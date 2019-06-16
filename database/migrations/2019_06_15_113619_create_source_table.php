<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSourceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('source', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->dateTime('Date_Reminder');
            $table->float('Price');
            $table->boolean('Condition');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->
            on('users')->onDelete('CASCADE')->onUpdate('RESTRICT');
            $table->bigInteger('livre_id')->unsigned();
            $table->foreign('livre_id')->references('id')->
            on('livres')->onDelete('CASCADE')->onUpdate('RESTRICT');
            $table->bigInteger('retailer_id')->unsigned();
            $table->foreign('retailer_id')->references('id')->
            on('retailer')->onDelete('CASCADE')->onUpdate('RESTRICT');
            $table->boolean('LogicalDelete')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('source');
    }
}
