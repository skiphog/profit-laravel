<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\News
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property int|null $author_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\Author|null $author
 * @mixin \Eloquent
 */
class News extends Model
{
    protected $fillable = ['title', 'content', 'author_id'];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
