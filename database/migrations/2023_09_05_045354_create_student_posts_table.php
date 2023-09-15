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
        Schema::create('student_posts', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('nama');
            $table->enum('jurusan', [
                'PPLG', 
                'TJKT', 
                'TO', 
                'PEMASARAN', 
                'AKL'
            ]);
            $table->bigInteger('nis');
            $table->text('alamat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_posts');
    }
};
