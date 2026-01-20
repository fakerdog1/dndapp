<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AbilitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $abilities = [
            ['name' => 'Strength',     'abbreviation' => 'Str', 'slug' => 'strength'],
            ['name' => 'Dexterity',    'abbreviation' => 'Dex', 'slug' => 'dexterity'],
            ['name' => 'Constitution', 'abbreviation' => 'Con', 'slug' => 'constitution'],
            ['name' => 'Intelligence', 'abbreviation' => 'Int', 'slug' => 'intelligence'],
            ['name' => 'Wisdom',       'abbreviation' => 'Wis', 'slug' => 'wisdom'],
            ['name' => 'Charisma',     'abbreviation' => 'Cha', 'slug' => 'charisma'],
        ];

        DB::table('abilities')->insert($abilities);
    }

    public function abilities()
    {
        return $this->hasMany(Ability::class, 'ability_id');
    }
}
