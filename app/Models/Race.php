<?php

namespace App\Models;

use App\Models\Misc\SizeCategory;
use App\Models\Misc\SourceBook;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Race
 *
 * @mixin Builder
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string|null $description
 * @property int $base_speed
 * @property int|null $max_age
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @property-read SizeCategory|null $size_category
 * @property-read SourceBook|null $source_book
 */
class Race extends Model
{
    protected $table = 'races';

    protected $fillable = [
        'name',
        'slug',
        'description',
        'base_speed',
        'max_age',
        'size_category_id',
        'source_book_id',
    ];

    public function size_category(): BelongsTo
    {
        return $this->belongsTo(
            SizeCategory::class,
            'size_category_id'
        );
    }

    public function source_book(): BelongsTo
    {
        return $this->belongsTo(
            SourceBook::class,
            'source_book_id'
        );
    }

    public function subraces()
    {
        return $this->hasMany(Subrace::class, 'race_id');
    }
}
