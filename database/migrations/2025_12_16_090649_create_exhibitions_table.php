<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exhibitions', function (Blueprint $table) {
            $table->id();
            $table->string('title');                // Judul pameran
            $table->string('slug')->unique();       // Slug untuk URL
            $table->text('description')->nullable(); // Deskripsi pameran
            $table->date('start_date');             // Tanggal mulai
            $table->date('end_date');               // Tanggal berakhir
            $table->string('venue')->nullable();    // Lokasi / tempat
            $table->boolean('is_current')->default(false); // Flag pameran sedang berjalan
            $table->string('banner')->nullable();   // Banner / poster pameran
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exhibitions');
    }
};
