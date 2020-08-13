<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->biginteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->biginteger('title_id')->unsigned();
            $table->foreign('title_id')->references('id')->on('titles')->onDelete('cascade');
            $table->bigInteger('price');
            $table->text('detail');
            $table->string('subject');
            $table->integer('suggested_days');
            $table->string('slug')->default('0');
            $table->boolean('confirm_start')->default(false);
            $table->boolean('doing')->default(false);
            $table->boolean('published')->default(false);
            $table->boolean('finished')->default(false);
            $table->boolean('canceled')->default(false);
            $table->boolean('refused')->default(false);
            $table->boolean('waiting')->default(false);
            $table->boolean('editing')->default(false);
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
        Schema::dropIfExists('projects');
    }
}
