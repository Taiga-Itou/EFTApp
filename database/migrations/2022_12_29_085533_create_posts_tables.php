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
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable(false);
            $table->foreignId('user_id')->nullable(false);
            $table->foreignId('gun_id')->nullable(false);
            $table->foreignId('tag_id')->nullable(false);
            $table->string('image',50)->nullable(false);
            $table->string('title',50)->nullable(false);
            $table->string('body',150)->nullable(false);
            $table->bigInteger('good_num')->nullable(false)->default(0);
            $table->timestamp('updated_at')->useCurrent()->nullable(false);
            $table->timestamp('created_at')->useCurrent()->nullable(false);
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
