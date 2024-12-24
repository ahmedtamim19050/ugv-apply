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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('unique_id')->unique();
            $table->boolean('status')->default(0);
            $table->enum('application', ['Under Graduate', 'Graduate'])->nullable();
            $table->enum('session', ['January', 'June'])->nullable();
            $table->string('interested_course')->nullable();
            $table->string('name')->nullable();
            $table->string('photo')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('email');
            $table->string('passport_number')->nullable();
            $table->string('nationality')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->enum('religion', ['Islam', 'Buddhism', 'Hinduism', 'Jainism', 'Shinto', 'Judaism', 'Baháʼí Faith', 'Mormonism', 'Christianity', 'Sikhism', 'Chinese religion', 'Others'])->nullable();
            $table->enum('gender', ['Male', 'Female', 'Others'])->nullable();
            $table->enum('blood_group', ['A+', 'A-', 'B+', 'B-', 'O+', 'O-', 'AB+', 'AB-'])->nullable();
            $table->string('address')->nullable();
            $table->string('post_code')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();

            $table->string('father_name')->nullable();
            $table->string('father_contact_number')->nullable();
            $table->string('father_email')->nullable();
            $table->string('father_occupation')->nullable();
            $table->string('father_passport_number')->nullable();

            $table->string('mother_name')->nullable();
            $table->string('mother_contact_number')->nullable();
            $table->string('mother_email')->nullable();
            $table->string('mother_occupation')->nullable();
            $table->string('mother_passport_number')->nullable();


            $table->string('ssc')->nullable();
            $table->string('ssc_group')->nullable();
            $table->string('ssc_year')->nullable();
            $table->string('ssc_institution_name')->nullable();
            $table->string('ssc_grade_or_marks')->nullable();
            $table->string('ssc_ministary_of_education')->nullable();

            $table->string('hsc')->nullable();
            $table->string('hsc_group')->nullable();
            $table->string('hsc_year')->nullable();
            $table->string('hsc_institution_name')->nullable();
            $table->string('hsc_grade_or_marks')->nullable();
            $table->string('hsc_ministary_of_education')->nullable();

            $table->string('honors_degree')->nullable();
            $table->string('course')->nullable();
            $table->string('honors_degree_year')->nullable();
            $table->string('honors_degree_institution_name')->nullable();
            $table->string('honors_degree_grade_or_marks')->nullable();

            $table->json('attachments')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
