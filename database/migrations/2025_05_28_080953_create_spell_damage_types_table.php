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
        Schema::create('spell_damage_types', function (Blueprint $table) {
            $table->id();
            $table->foreignId('spell_id')
                ->constrained('spells')
                ->onDelete('cascade');

            $table->foreignId('damage_type_id')
                ->constrained('damage_types')
                ->onDelete('cascade');

            $table->foreignId('dice_type_id')
                ->constrained('dice_types', 'id')
                ->onDelete('cascade');

            $table->integer('dice_count')->default(0);
            $table->text('note')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spell_damage_types');
    }
};
