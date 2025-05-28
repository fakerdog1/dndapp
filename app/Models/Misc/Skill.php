<?php

namespace App\Models\Misc;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Skill Model
 *
 * Represents a character skill in the application.
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property int $ability_id
 *
 * @property Ability $ability
 */
class Skill extends Model
{
    protected $table = 'skills';

    protected $fillable = [
        'name',
        'slug',
        'ability_id',
    ];

    public function ability(): BelongsTo
    {
        return $this->belongsTo(Ability::class);
    }
}
