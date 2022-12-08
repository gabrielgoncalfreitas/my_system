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
            $table->string('first_name')->nullable(); # ok
            $table->string('middle_name')->nullable(); # ok
            $table->string('last_name')->nullable(); # ok
            $table->string('cpf')->nullable(); # ok
            $table->string('rg')->nullable(); # ok
            $table->string('cep')->nullable(); # ok
            $table->string('address')->nullable(); # ok
            $table->string('city')->nullable(); # ok
            $table->string('state')->nullable(); # ok
            $table->string('country')->nullable(); # ok
            $table->string('titles')->nullable(); # ok
            $table->string('genders')->nullable(); # ok
            // $table->json('sector')->nullable();
            // $table->json('office')->nullable();
            // $table->json('status')->nullable();
            $table->date('date_of_birth')->nullable(); # ok
            // $table->json('languages')->nullable(); # ok
            // $table->json('religions')->nullable(); # ok
            // $table->json('sexual_orientations')->nullable(); # ok
            $table->date('hiring_date')->nullable(); # ok
            $table->date('firing_date')->nullable(); # ok

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
