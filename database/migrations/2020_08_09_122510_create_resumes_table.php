<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resumes', function (Blueprint $table) {
            $table->id();
            $table->biginteger('lancer_id')->unsigned();
            $table->foreign('lancer_id')->references('id')->on('lancers')->onDelete('cascade');
            $table->timestamps();
            $table->string('company');
            $table->string('job');
            $table->string('province');
            $table->year('start_year');
            $table->year('finish_year');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resumes');
    }
}
