<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->string('medication_name');
            $table->string('dosage');
            $table->string('frequency');
            $table->date('start_date')->nullable(); 
            $table->date('end_date')->nullable(); 
            $table->text('instructions')->nullable();
            $table->string('doctor_name')->nullable(); 
            $table->string('prescription_image')->nullable(); 
            $table->timestamps();

            // Foreign Key
            $table->foreign('patient_id')->references('id')->on('users');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('prescriptions');
    }
};

