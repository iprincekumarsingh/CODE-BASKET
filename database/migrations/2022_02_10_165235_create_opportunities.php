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
        Schema::create('opportunities', function (Blueprint $table) {
            $table->id('opid');
            $table->string('name');
            $table->text('description');
            $table->string('link');
            $table->string('link2');
            $table->string('link3');
            $table->string('link4');
            $table->string('post_photo1');
            $table->string('post_photo2');
            $table->string('post_photo4');
            $table->string('post_photo3');
            $table->string('op_id');
            $table->string('aid');
            $table->string('post_id')->unique();
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
        Schema::dropIfExists('opportunities');
    }
};
