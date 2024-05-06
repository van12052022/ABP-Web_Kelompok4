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
        Schema::create('menu', function (Blueprint $table) {
            $table->id();

            $table->string('namaMenu');
            $table->text('bahanMenu');
            $table->text('caraBuatMenu');
            $table->text('catatanMenu');
            $table->integer('durasiMenu');
            $table->integer('porsiMenu');
            // $table->string('imagePath');

            // $table->decimal('price', 8, 2);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu');
    }
};
