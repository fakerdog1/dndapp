<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('races', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->string('description')->nullable();
            $table->integer('base_speed')->default(30);
            $table->integer('max_age')->nullable();

            $table->foreignId('size_category_id')
                ->nullable()
                ->constrained('size_categories')
                ->onDelete('set null');

            $table->foreignId('source_book_id')
                ->nullable()
                ->constrained('source_books')
                ->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('races');
    }
};
