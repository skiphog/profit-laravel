<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Article
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property int|null $author_id
 * @property int $rubric_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\Author|null $author
 * @mixin \Eloquent
 */
class Article extends Model
{
    protected $table = 'news';

    protected $fillable = ['title', 'content', 'author_id', 'rubric_id'];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function rubric()
    {
        return $this->belongsTo(Rubric::class);
    }
}
