<?php

namespace App\Models\Misc;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * DamageType Model
 *
 * Represents a type of damage in the application.
 *
 * @mixin Builder
 * @property int $id
 * @property string $name
 * @property string $slug
 */
class DamageType extends Model
{
    protected $table = 'damage_types';

    protected $fillable = [
        'name',
        'slug',
    ];
}
