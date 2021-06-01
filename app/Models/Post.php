<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Post extends Model
{
    use HasFactory, Searchable;

    /**
     *
     */
    public const SEARCHABLE_FIELDS = ['id','title','body'];

    /**
     * @return array
     */
    public function toSearchableArray(): array
    {
        return $this->only(self::SEARCHABLE_FIELDS);
    }
}