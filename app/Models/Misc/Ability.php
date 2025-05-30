<?php

namespace App\Models\Misc;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * Ability Model
 *
 * Represents a character ability in the application.
 *
 * @mixin Builder
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $abbreviation
 */
class Ability extends Model
{
    protected $table = 'abilities';

    protected $fillable = [
        'name',
        'slug',
        'abbreviation',
    ];
}
