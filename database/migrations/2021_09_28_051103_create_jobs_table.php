<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();

            $table->string('title',100);
            $table->text('content');
            $table->string('country',100);
            $table->string('company_name',150);
            $table->string('salary',100);
            $table->string('last_date',100);
            $table->string('position',100);
            $table->text('image_name');
            $table->string('category', 100)->nullable();
            $table->string('hide', 10)->nullable();
            $table->text('duration');
            $table->text('probation_period');
            $table->text('working_hours');
            $table->text('resident_fee');
            $table->text('air_ticket');
            $table->text('accommodation');
            $table->text('local_transportation');
            $table->text('uniform');
            $table->text('medical_insurance');
            $table->text('food');
            $table->text('death_case');
            $table->text('visa_fees');
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
        Schema::dropIfExists('jobs');
    }
}
