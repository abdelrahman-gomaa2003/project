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
        Schema::create('course_student', function (Blueprint $table) {
            $table->id();

            // مفتاح خارجي للطالب
            $table->foreignId('student_id')
                  ->constrained('students') // يربط بجدول students
                  ->onDelete('cascade');

            // مفتاح خارجي للكورس
            $table->foreignId('course_id')
                  ->constrained('courses') // يربط بجدول courses
                  ->onDelete('cascade');

            $table->timestamps();

            // منع التكرار في الربط
            $table->unique(['student_id', 'course_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_student');
    }
};
