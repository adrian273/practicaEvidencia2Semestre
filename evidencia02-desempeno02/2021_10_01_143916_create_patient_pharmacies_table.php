<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientPharmaciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_pharmacies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patient_id')
                ->unsigned();
            $table->string('name', 150)
                ->nullable();
            $table->text("address")
                ->nullable();
            $table->string("city", 100)
                ->nullable();
            $table->integer('state_id')
                ->nullable()
                ->unsigned();
            $table->string("zip", 10)
                ->nullable();
            $table->string("phone", 15)
                ->nullable();
            $table->string("fax", 15)
                ->nullable();
            $table->text("notes")
                ->nullable();
            $table->timestamps();
            $table->integer('created_by');
            $table->integer('updated_by')
                ->nullable()
                ->default(0);
        });
        Schema::table('patient_pharmacies', function ($table) {
            $table->foreign('patient_id')->references('id')->on('patients');
            $table->foreign('state_id')->references('id')->on('states');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient_pharmacies');
    }
}
