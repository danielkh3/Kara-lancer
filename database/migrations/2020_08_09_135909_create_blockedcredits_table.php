<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlockedcreditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blockedcredits', function (Blueprint $table) {
            $table->id();
            $table->biginteger('lancer_id')->unsigned();
            $table->foreign('lancer_id')->references('id')->on('lancers')->onDelete('cascade');
            $table->biginteger('level_id')->unsigned();
            $table->foreign('level_id')->references('id')->on('levels')->onDelete('cascade');
            $table->bigInteger('price');//10% of price level
            $table->date('date');//3 months + update time of confirm level
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
        Schema::dropIfExists('blockedcredits');
    }
}
