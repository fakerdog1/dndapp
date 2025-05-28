<?php

namespace App\Models;

use App\Models\Misc\ItemCategory;
use App\Models\Misc\Rarity;
use App\Models\Misc\SourceBook;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Item Model
 *
 * Represents an item in the application.
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $description
 * @property float $weight_lbs
 * @property int $cost_silver
 * @property bool $requires_attunement
 * @property bool $is_magical
 * @property int $item_category_id
 * @property int $rarity_id
 * @property int $source_book_id
 *
 * @property ItemCategory|null $item_category
 * @property Rarity|null $rarity
 * @property SourceBook|null $source_book
 */
class Item extends Model
{
    protected $table = 'items';

    protected $fillable = [
        'name',
        'slug',
        'description',
        'weight_lbs',
        'cost_silver',
        'requires_attunement',
        'is_magical',
        'item_category_id',
        'rarity_id',
        'source_book_id',
    ];

    public function item_category(): BelongsTo
    {
        return $this->belongsTo(ItemCategory::class, 'item_category_id');
    }

    public function rarity(): BelongsTo
    {
        return $this->belongsTo(Rarity::class, 'rarity_id');
    }

    public function source_book(): BelongsTo
    {
        return $this->belongsTo(SourceBook::class, 'source_book_id');
    }
}
