<?php

namespace App\Models\Misc;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Misc\SourceBook
 *
 * @mixin Builder
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string|null $link
 * @property Carbon|null $release_date
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class SourceBook extends Model
{
    protected $table = 'source_books';

    protected $fillable = [
        'name',
        'slug',
        'link',
        'release_date',
    ];

    protected $casts = [
        'release_date' => 'date',
    ];
}
