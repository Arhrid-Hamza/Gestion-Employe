<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employes', function (Blueprint $table) {
            $table->id();
            $table->integer('registration_number');
            $table->string('fullname');
            $table->string('poste');
            $table->unsignedBigInteger('departement_id');
            $table->foreign('departement_id')->references('id')->on('departements')->onDelete('cascade');
            $table->date('hire_date');
            $table->string('e_mail');
            $table->integer('phone');
            $table->string('address');
            $table->string('city');
            $table->integer('Salaire')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employes');
    }
};