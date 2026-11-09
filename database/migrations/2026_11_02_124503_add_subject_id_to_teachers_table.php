<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('teachers', function (Blueprint $table) {
            $table->foreignId('subject_id')
                ->nullable()
                ->unique()
                ->constrained('subjects');
        });

        // Menghubungkan setiap guru dengan subject yang berbeda
        $teachers = DB::table('teachers')->orderBy('id')->get();
        $subjects = DB::table('subjects')->orderBy('id')->get();

        foreach ($teachers as $index => $teacher) {
            if (isset($subjects[$index])) {
                DB::table('teachers')
                    ->where('id', $teacher->id)
                    ->update([
                        'subject_id' => $subjects[$index]->id,
                    ]);
            }
        }
    }

    public function down(): void
    {
        Schema::table('teachers', function (Blueprint $table) {
            $table->dropForeign(['subject_id']);
            $table->dropUnique(['subject_id']);
            $table->dropColumn('subject_id');
        });
    }
};
