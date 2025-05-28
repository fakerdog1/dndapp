<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * Language Model
 *
 * Represents a character language in the application.
 *
 * @mixin Builder
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string|null $script
 */
class Language extends Model
{
    protected $table = 'languages';

    protected $fillable = [
        'name',
        'slug',
        'script',
    ];
}
