<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assault_carbines', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable(false);
            $table->foreignId('wepon_id')->nullable(false);
            $table->string('name',150)->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assault_carbines');
    }
};