<?php

namespace App\Models;

use App\Models\Misc\FeatureType;
use App\Models\Misc\SourceBook;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Feature Model
 *
 * Represents a character feature in the application.
 *
 * @mixin Builder
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string|null $description
 * @property int $feature_type_id
 * @property int|null $source_book_id
 *
 * @property FeatureType $feature_type
 * @property SourceBook|null $source_book
 */
class Feature extends Model
{
    protected $table = 'features';

    protected $fillable = [
        'name',
        'slug',
        'description',
        'feature_type_id',
        'source_book_id',
    ];

    /**
     * Get the feature type associated with this feature.
     */
    public function feature_type(): BelongsTo
    {
        return $this->belongsTo(FeatureType::class);
    }

    /**
     * Get the source book associated with this feature.
     */
    public function source_book(): BelongsTo
    {
        return $this->belongsTo(SourceBook::class);
    }
}
