<?php

namespace App\Models;

use App\Models\Misc\SourceBook;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Subrace
 *
 * Represents a subrace
 *
 * @mixin Builder
 * @property int $id
 * @property string $name The name of the subrace.
 * @property string $slug A URL-friendly version of the name.
 * @property string|null $description A brief description of the subrace.
 * @property int $race_id The ID of the
 * @property int|null $source_book_id The ID of the source book this subrace is from.
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @property-read Race $race
 * @property-read SourceBook|null $source_book
**/
class Subrace extends Model
{
    protected $table = 'subraces';

    protected $fillable = [
        'name',
        'slug',
        'description',
        'race_id',
        'source_book_id',
    ];

    public function race(): BelongsTo
    {
        return $this->belongsTo(
            Race::class,
            'race_id',
        );
    }

    public function source_books(): BelongsTo
    {
        return $this->belongsTo(
            SourceBook::class,
            'source_book_id'
        );
    }
}
