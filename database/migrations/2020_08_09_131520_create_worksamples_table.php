<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorksamplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('worksamples', function (Blueprint $table) {
            $table->id();
            $table->biginteger('lancer_id')->unsigned();
            $table->foreign('lancer_id')->references('id')->on('lancers')->onDelete('cascade');
            $table->string('subject');
            $table->text('detail');
            $table->string('file_name');
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
        Schema::dropIfExists('worksamples');
    }
}
