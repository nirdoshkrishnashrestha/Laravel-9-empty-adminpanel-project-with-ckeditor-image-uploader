<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->text('address1')->nullable(); 
            $table->text('address2')->nullable();  
            $table->text('address3')->nullable();  
            $table->text('phone1')->nullable();
            $table->text('phone2')->nullable();
            $table->text('email1')->nullable();
            $table->text('email2')->nullable();
            $table->text('extra1')->nullable();
            $table->text('extra2')->nullable();            
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
        Schema::dropIfExists('details');
    }
}
