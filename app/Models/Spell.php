<?php

namespace App\Models;

use App\Models\Misc\Ability;
use App\Models\Misc\MagicSchool;
use App\Models\Misc\SourceBook;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Spell Model
 *
 * Represents a spell in the application.
 *
 * @mixin Builder
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string|null $description
 * @property string|null $higher_level_description
 * @property string $range
 * @property string $duration
 * @property string $casting_time
 * @property int $level
 * @property string|null $attack_type
 * @property bool $is_ritual
 * @property bool $is_concentration
 * @property bool $has_verbal_component
 * @property bool $has_somatic_component
 * @property bool $has_material_component
 * @property int|null $magic_school_id
 * @property int|null $saving_throw_ability_id
 * @property int|null $source_book_id
 *
 * @property MagicSchool|null $magic_school
 * @property Ability|null $saving_throw_ability
 * @property SourceBook|null $source_book
 */
class Spell extends Model
{
    protected $table = 'spells';

    protected $fillable = [
        'name',
        'slug',
        'description',
        'higher_level_description',
        'range',
        'duration',
        'casting_time',
        'level',
        'attack_type',
        'is_ritual',
        'is_concentration',
        'has_verbal_component',
        'has_somatic_component',
        'has_material_component',
        'magic_school_id',
        'saving_throw_ability_id',
        'source_book_id',
    ];

    public function magic_school(): BelongsTo
    {
        return $this->belongsTo(
            MagicSchool::class,
            'magic_school_id'
        );
    }

    public function saving_throw_ability(): BelongsTo
    {
        return $this->belongsTo(
            Ability::class,
            'saving_throw_ability_id'
        );
    }

    public function source_book(): BelongsTo
    {
        return $this->belongsTo(
            SourceBook::class,
            'source_book_id'
        );
    }
}
