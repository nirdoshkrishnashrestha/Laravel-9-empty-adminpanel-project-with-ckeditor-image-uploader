<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecializesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specializes', function (Blueprint $table) {
            $table->id();

            $table->string('title',100);
            $table->string('construction1', 50)->nullable();
            $table->string('construction2', 50)->nullable();
            $table->string('construction3', 50)->nullable();
            $table->string('construction4', 50)->nullable();
            $table->string('construction5', 50)->nullable();
            $table->string('construction6', 50)->nullable();
            $table->string('construction7', 50)->nullable();
            $table->string('construction8', 50)->nullable();
            $table->string('construction9', 50)->nullable();
            $table->string('construction10', 50)->nullable();
            $table->string('construction11', 50)->nullable();
            $table->string('construction12', 50)->nullable();
            $table->string('construction13', 50)->nullable();
            $table->string('construction14', 50)->nullable();
            $table->string('construction15', 50)->nullable();
            
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
        Schema::dropIfExists('specializes');
    }
}
