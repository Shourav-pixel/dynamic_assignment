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
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('member');
            $table->unsignedBigInteger('member1');
            $table->foreign('member1')->references('id')->on('enrolls');
            $table->unsignedBigInteger('member2');
            $table->foreign('member2')->references('id')->on('enrolls');
            $table->unsignedBigInteger('member3');
            $table->foreign('member3')->references('id')->on('enrolls');

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
        Schema::dropIfExists('groups');
    }
};
