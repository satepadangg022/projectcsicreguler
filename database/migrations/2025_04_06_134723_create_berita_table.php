<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeritaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berita', function (Blueprint $table) {
            $table->id();
            $table->string('img')->nullable();
            $table->string('title')->nullable();
            $table->string('sub_title')->nullable();
            $table->text('desc')->nullable();
            $table->string('source')->nullable();
            $table->string('source2')->nullable();
            $table->string('source3')->nullable();
            $table->string('source4')->nullable();
            $table->string('source5')->nullable();
            $table->string('source6')->nullable();
            $table->string('source7')->nullable();
            $table->string('source8')->nullable();
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
        Schema::dropIfExists('berita');
    }
}
