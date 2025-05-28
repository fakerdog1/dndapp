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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->float('weight_lbs')->default(0);
            $table->float('cost_silver')->default(0);

            $table->boolean('requires_attunement')->default(false);
            $table->boolean('is_magical')->default(false);

            $table->foreignId('item_category_id')
                ->constrained('item_categories');

            $table->foreignId('rarity_id')
                ->nullable()
                ->constrained('rarities')
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
        Schema::dropIfExists('items');
    }
};
