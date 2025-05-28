<?php

namespace App\Models\Misc;

use Illuminate\Database\Eloquent\Model;

/**
 * ItemCategory Model
 *
 * Represents a category for items in the application.
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 */
class ItemCategory extends Model
{
    protected $table = 'item_categories';

    protected $fillable = [
        'name',
        'slug',
    ];
}
