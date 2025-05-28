<?php

namespace App\Models\Misc;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * ProficiencyCategory Model
 *
 * Represents a category of proficiencies in the application.
 *
 * @mixin Builder
 * @property int $id
 * @property string $name
 * @property string $slug
 */
class ProficiencyCategory extends Model
{
    protected $table = 'proficiency_categories';

    protected $fillable = [
        'name',
        'slug',
    ];
}
