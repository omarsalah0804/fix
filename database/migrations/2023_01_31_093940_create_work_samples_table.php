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
        Schema::create('work_samples', function (Blueprint $table) {
            $table->id();
            $table->foreignId('worker_id')->nullable()->constrained('users')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('image1')->default('default.png');
            $table->string('image2')->default('default.png');
            $table->string('image3')->default('default.png');
            $table->string('image4')->default('default.png');
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
        Schema::dropIfExists('work_samples');
    }
};
