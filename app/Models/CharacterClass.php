<?php

namespace App\Models;

use App\Models\Misc\DiceType;
use App\Models\Misc\SourceBook;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class CharacterClass
 *
 * Represents a character class in the game, such as Fighter, Wizard, etc.
 * Each class can have multiple subclasses and is associated with a hit die and a source book.
 *
 * @mixin Builder
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string|null $description
 * @property bool|null $can_prepare_spells
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property-read Subclass[] $subclasses
 * @property-read DiceType|null $hit_die
 * @property-read SourceBook|null $source_book
 */
class CharacterClass extends Model
{
    protected $table = 'classes';

    protected $fillable = [
        'name',
        'slug',
        'description',
        'can_prepare_spells',
    ];

    public function subclasses(): HasMany
    {
        return $this->hasMany(Subclass::class, 'class_id');
    }

    public function hit_die(): BelongsTo
    {
        return $this->belongsTo(
            DiceType::class,
            'hit_die_id',
            'id'
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
