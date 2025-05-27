<?php

namespace App\Models\Misc;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SizeCategory
 *
 * Represents a size category for creatures, objects, or entities in a role-playing game.
 *
 * @mixin Builder
 * @property int $id
 * @property string $name The name of the size category (e.g., Small, Medium, Large).
 * @property string $slug A URL-friendly version of the name.
 * @property string|null $description A brief description of the size category.
 * @property float $space_x The depth of the space occupied by this size category.
 * @property float $space_y The width of the space occupied by this size category.
 * @property float $space_z The height of the space occupied by this size category.
 */
class SizeCategory extends Model
{
    protected $table = 'size_categories';

    protected $fillable = [
        'name',
        'slug',
        'description',
        'space_x',
        'space_y',
        'reach',
    ];

    protected $casts = [
        'space_x' => 'float',
        'space_y' => 'float',
        'reach' => 'float',
    ];
}
