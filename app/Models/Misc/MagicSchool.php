<?php

namespace App\Models\Misc;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * MagicSchool Model
 *
 * Represents a magic school in the application.
 *
 * @mixin Builder
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string|null $description
 */
class MagicSchool extends Model
{
    protected $table = 'magic_schools';

    protected $fillable = [
        'name',
        'slug',
        'description',
    ];
}
