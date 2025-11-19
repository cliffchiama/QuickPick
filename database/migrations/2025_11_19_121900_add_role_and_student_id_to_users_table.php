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
        Schema::table('users', function (Blueprint $table) {

            // Add role column only if it does NOT already exist
            if (!Schema::hasColumn('users', 'role')) {
                $table->string('role')->default('student');
            }

            // Add student_id only if it does NOT already exist
            if (!Schema::hasColumn('users', 'student_id')) {
                $table->string('student_id')->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {

            if (Schema::hasColumn('users', 'role')) {
                $table->dropColumn('role');
            }

            if (Schema::hasColumn('users', 'student_id')) {
                $table->dropColumn('student_id');
            }
        });
    }
};
