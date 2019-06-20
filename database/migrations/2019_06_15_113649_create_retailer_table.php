<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRetailerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retailer', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('Title_Retailer')->unique();
            $table->string('Site')->unique();
            $table->boolean('LogicalDelete')->default(0)->nullable();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('retailer');
    }
}
