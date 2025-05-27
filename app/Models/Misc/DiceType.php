<?php

namespace App\Models\Misc;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DiceType
 *
 * Represents a type of dice used in role-playing games, such as d4, d6, d8, etc.
 *
 * @mixin Builder
 * @property int $id
 * @property string $name The name of the dice type (e.g., d4, d6, d8).
 * @property int $max_value The maximum value that can be rolled with this dice type.
 */
class DiceType extends Model
{
    protected $table = 'dice_types';

    protected $fillable = [
        'name',
        'max_value',
    ];

    protected $casts = [
        'max_value' => 'integer',
    ];
}
