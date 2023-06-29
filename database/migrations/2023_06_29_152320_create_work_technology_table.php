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
        Schema::create('work_technology', function (Blueprint $table) {
            $table->unsignedBigInteger('work_id');

            $table->foreign('work_id')->references('id')->on('works')->cascadeOnDelete();

            $table->unsignedBigInteger('technology_id');

            $table->foreign('technology_id')->references('id')->on('technologies')->cascadeOnDelete();

            $table->primary(['work_id', 'technology_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('work_technology');
    }
};
