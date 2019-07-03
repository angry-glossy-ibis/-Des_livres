<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sources', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->dateTime('Date_Reminder')->nullable();
            $table->boolean('Condition')->default(0);
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')
                  ->on('users')->onDelete('CASCADE')->onUpdate('RESTRICT');
            $table->bigInteger('livre_id')->unsigned();
            $table->foreign('livre_id')->references('id')
                  ->on('livres')->onDelete('CASCADE')->onUpdate('RESTRICT');
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
        Schema::dropIfExists('sources');
    }
}
