<?php

namespace App\Models\Misc;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * Rarity Model
 *
 * Represents a rarity level for items in the application.
 *
 * @mixin Builder
 * @property int $id
 * @property string $name
 * @property string $slug
 */
class Rarity extends Model
{
    protected $table = 'rarities';

    protected $fillable = [
        'name',
        'slug',
    ];
}
