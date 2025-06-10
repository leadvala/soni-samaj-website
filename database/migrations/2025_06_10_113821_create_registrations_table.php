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
        Schema::create('registrations', function (Blueprint $table) {
          $table->id();
    $table->string('full_name');
    $table->string('father_name');
    $table->string('mother_name');
    $table->date('dob');
    $table->string('gender');
    $table->string('marital_status');
    $table->text('current_address');
    $table->text('permanent_address');
    $table->string('gotra_self');
    $table->string('gotra_mother');
    $table->string('gotra_nani');
    $table->string('gotra_dadi');
    $table->string('qualification');
    $table->string('blood_group');
    $table->string('mobile');
    $table->string('whatsapp');
    $table->string('profile_photo')->nullable();
    $table->string('work_type');
    $table->string('job_type')->nullable();
    $table->string('designation')->nullable();
    $table->string('work_city')->nullable();
    $table->string('satimata_place');
    $table->string('bheruji_place');
    $table->string('kuldevi_place');
    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
