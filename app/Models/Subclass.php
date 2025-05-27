<?php

namespace App\Models;

use App\Models\Misc\SourceBook;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Subclass
 *
 * Represents a subclass of a character class, such as Fighter subclasses like Champion or Battle Master.
 * Each subclass is associated with a character class and can have its own unique features.
 *
 * @mixin Builder
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string|null $description
 * @property int|null $level_available The level at which this subclass becomes available.
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property-read CharacterClass|null $character_class The character class this subclass belongs to.
 * @property-read SourceBook|null $source_book The source book where this subclass is detailed.
 */
class Subclass extends Model
{
    protected $table = 'subclasses';

    protected $fillable = [
        'name',
        'slug',
        'description',
        'level_available',
    ];

    public function character_class(): BelongsTo
    {
        return $this->belongsTo(
            CharacterClass::class,
            'class_id',
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
