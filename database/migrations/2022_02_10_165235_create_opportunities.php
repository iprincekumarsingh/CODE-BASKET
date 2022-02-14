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
            $table->string('link')->nullable();
            $table->string('link2')->nullable();
            $table->string('link3')->nullable();
            $table->string('link4')->nullable();
            $table->string('post_photo1')->nullable();
            $table->string('post_photo2')->nullable();
            $table->string('post_photo4')->nullable();
            $table->string('post_photo3')->nullable();
            $table->string('op_id');
            $table->string('aid');
            $table->string('uploaded_by_role')->nullable();
            $table->string('isForAll')->nullable();
            $table->string('isForwomen')->nullable();
            $table->string('parent_id')->nullable();
            $table->string('post_id')->unique();
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
        Schema::dropIfExists('opportunities');
    }
};
