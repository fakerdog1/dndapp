<?php

namespace App\Models\Misc;

use App\Models\Feature;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * FeatureType Model
 *
 * Represents a type of feature in the application.
 *
 * @mixin Builder
 * @property int $id
 * @property string $name
 * @property string $slug
 *
 * @property Feature[] $features
 */
class FeatureType extends Model
{
    protected $table = 'feature_types';

    protected $fillable = [
        'name',
        'slug',
    ];

    /**
     * Get the features associated with this feature type.
     */
    public function features()
    {
        return $this->hasMany(Feature::class);
    }
}
