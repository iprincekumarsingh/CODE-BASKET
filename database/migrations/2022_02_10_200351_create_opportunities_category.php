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
        Schema::create('opportunities_category', function (Blueprint $table) {
            $table->id('op_id');
            $table->string('name');
            $table->string('cat_photo');
            $table->string('img_name');
            $table->string('created_by');
            $table->string('aid');
            $table->string('approved')->default(1);
            $table->softDeletes();
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
        Schema::dropIfExists('opportunities_category');
    }
};
