<?php

namespace App\Models\Misc;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Background Model
 *
 * Represents a character background in the application.
 *
 * @mixin Builder
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $description
 *
 * @property SourceBook|null $source_book
 */
class Background extends Model
{
    protected $table = 'backgrounds';

    protected $fillable = [
        'name',
        'slug',
        'description',
    ];

    public function source_book(): BelongsTo
    {
        return $this->belongsTo(SourceBook::class);
    }
}
