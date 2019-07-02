<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLivresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livres', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('Title_Livre',191);
            $table->bigInteger('genrebook_id')->unsigned()->default(1);
            $table->foreign('genrebook_id')->references('id')
                  ->on('genrebooks')->onDelete('CASCADE')->onUpdate('RESTRICT');
            $table->float('Volume')->default(0);
            $table->string('Image',191)->nullable();
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
        Schema::dropIfExists('livres');
    }
}
