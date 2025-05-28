<?php

namespace App\Models\Misc;

use App\Models\Spell;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * SpellDamageType Model
 *
 * Represents the damage type and dice configuration for a spell.
 *
 * @mixin Builder
 * @property int $spell_id
 * @property int $damage_type_id
 * @property int $dice_type_id
 * @property int $dice_count
 * @property string|null $note
 *
 * @property Spell $spell
 * @property DamageType $damage_type
 * @property DiceType $dice_type
 */
class SpellDamageType extends Model
{
    protected $table = 'spell_damage_types';

    protected $fillable = [
        'spell_id',
        'damage_type_id',
        'dice_type_id',
        'dice_count',
        'note'
    ];

    /**
     * Get the spell associated with this damage type.
     */
    public function spell(): BelongsTo
    {
        return $this->belongsTo(Spell::class, 'spell_id');
    }

    /**
     * Get the damage type associated with this spell damage type.
     */
    public function damage_type(): BelongsTo
    {
        return $this->belongsTo(DamageType::class, 'damage_type_id');
    }

    /**
     * Get the dice type associated with this spell damage type.
     */
    public function dice_type(): BelongsTo
    {
        return $this->belongsTo(DiceType::class, 'dice_type_id');
    }
}
