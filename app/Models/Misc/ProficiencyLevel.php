<?php

namespace App\Models\Misc;

use Illuminate\Database\Eloquent\Model;

/**
 * ProficiencyLevel Model
 *
 * Represents a character proficiency level in the application.
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property float $multiplier
 */
class ProficiencyLevel extends Model
{
    protected $table = 'proficiency_levels';

    protected $fillable = [
        'name',
        'slug',
        'multiplier',
    ];
}
