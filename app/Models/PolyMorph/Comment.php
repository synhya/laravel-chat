<?php

namespace App\Models\PolyMorph;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
    ];

    public function commentable(): MorphTo
    {
        return $this->morphTo();
        // return $this->morphTo('commentable', 'commentable_type', 'commentable_id');
    }
}
