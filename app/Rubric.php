<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Author
 *
 * @property int $id
 * @property string $title
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Article[] $news
 * @mixin \Eloquent
 */
class Rubric extends Model
{
    protected $fillable = ['title'];

    public $timestamps = false;

    public function news()
    {
        return $this->hasMany(Article::class);
    }
}
