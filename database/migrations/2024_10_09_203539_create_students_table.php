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
        Schema::create('students', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('school_id');
            $table->string('admission_no')->nullable();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->string('state');
            $table->string('country');
            $table->string('password');
            $table->string('roll_no');
            $table->string('date_of_birth');
            $table->string('photo')->nullable();
            $table->string('notes')->nullable();
            $table->string('gender');
            $table->string('admission_date');
            $table->string('current_address');
            $table->string('permanent_address');
            $table->string('lga');
            $table->string('birth_cert');
            $table->string('lga_cert');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
