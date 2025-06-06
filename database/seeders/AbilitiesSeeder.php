<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AbilitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $abilities = [
            ['name' => 'Strength', 'abbreviation' => 'Str'],
            ['name' => 'Dexterity', 'abbreviation' => 'Dex'],
            ['name' => 'Constitution', 'abbreviation' => 'Con'],
            ['name' => 'Intelligence', 'abbreviation' => 'Int'],
            ['name' => 'Wisdom', 'abbreviation' => 'Wis'],
            ['name' => 'Charisma', 'abbreviation' => 'Cha'],
        ];

        DB::table('create_abilities_table')->insert($abilities);
    }
}