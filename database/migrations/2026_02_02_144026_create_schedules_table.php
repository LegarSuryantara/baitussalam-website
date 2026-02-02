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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->string('title',25);
            $table->string('category');
            $table->dateTime('start');
            $table->dateTime('end');
            $table->date('date');
            $table->enum('status',['Hari Ini','Akan Datang','Selesai']);
            $table->string('location',30)->default('Masjid Baitussalam');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
