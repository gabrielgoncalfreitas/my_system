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
        Schema::create('workers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name'); # ok
            $table->string('middle_name'); # ok
            $table->string('last_name'); # ok
            $table->string('cpf'); # ok
            $table->string('rg'); # ok
            $table->string('zip_code'); # ok
            $table->string('address'); # ok
            $table->string('city'); # ok
            $table->string('state'); # ok
            $table->string('country'); # ok
            $table->json('sector');
            $table->json('office');
            $table->json('status');
            $table->date('date_of_birth'); # ok
            $table->date('hiring_date');
            $table->date('firing_date');
            $table->foreignId('title_id')->constrained('titles'); # ok
            $table->foreignId('gender_id')->constrained('genders'); # ok
            $table->foreignId('language_id')->constrained('languages'); # ok
            $table->foreignId('religion_id')->constrained('religions'); # ok
            $table->foreignId('sexual_orientation_id')->constrained('sexual_orientations'); # ok

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
        Schema::dropIfExists('workers');
    }
};
