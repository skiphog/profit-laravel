<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Author
 *
 * @property int $id
 * @property string $name
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Article[] $news
 * @mixin \Eloquent
 */
class Author extends Model
{
    protected $fillable = ['name'];

    public $timestamps = false;

    public function news()
    {
        return $this->hasMany(Article::class);
    }
}
