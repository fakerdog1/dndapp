<?php

namespace App\Models\Misc;

use Illuminate\Database\Eloquent\Model;

/**
 * Alignment Model
 *
 * Represents a character alignment in the application.
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string|null $description
 */
class Alignment extends Model
{
    protected $table = 'alignments';

    protected $fillable = [
        'name',
        'slug',
        'description',
    ];
}
