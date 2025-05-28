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
        Schema::create('spells', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->text('description');
            $table->text('higher_level_description')->nullable();
            $table->string('range');
            $table->string('duration');
            $table->string('casting_time');
            $table->integer('level')->default(0);
            $table->string('attack_type')->nullable();

            $table->boolean('is_ritual')->default(false);
            $table->boolean('is_concentration')->default(false);
            $table->boolean('has_verbal_component')->default(false);
            $table->boolean('has_somatic_component')->default(false);
            $table->boolean('has_material_component')->default(false);

            $table->foreignId('magic_school_id')
                ->constrained('magic_schools')
                ->onDelete('cascade');

            $table->foreignId('saving_throw_ability_id')
                ->nullable()
                ->constrained('abilities', 'id')
                ->onDelete('set null');

            $table->foreignId('source_book_id')
                ->nullable()
                ->constrained('source_books', 'id')
                ->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spells');
    }
};
