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
    Schema::create('project', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('category');
        $table->text('description')->nullable();
        $table->string('image')->nullable(); // Path gambar proyek
        $table->string('link')->nullable(); // URL proyek jika ada
        $table->timestamps();
    });
}
};
