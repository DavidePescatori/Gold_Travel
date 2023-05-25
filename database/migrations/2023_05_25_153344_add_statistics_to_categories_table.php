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
        Schema::table('categories', function (Blueprint $table) {
            $table->integer('nature')->nullable();
            $table->integer('relax')->nullable();
            $table->integer('history')->nullable();
            $table->integer('culture')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->dropColumn('nature');
            $table->dropColumn('relax');
            $table->dropColumn('history');
            $table->dropColumn('culture');
        });
    }
};
