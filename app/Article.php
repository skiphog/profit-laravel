<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

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

    /**
     * Признак отредактированности статьи
     *
     * @return bool
     */
    public function isRedacted(): bool
    {
        return null !== $this->updated_at;
    }

    /**
     * Возвращает все активные записи за текущую неделю в виде коллекции
     * [ День недели => [
     *      [Заголовок рубрики => [Новость],[Новость],...],
     *      [Заголовок рубрики => [Новость],[Новость],...],
     *      [Заголовок рубрики => [Новость],[Новость],...],
     *
     *   ],
     *   День недели => [
     *      [Заголовок рубрики => [Новость],[Новость],...],
     *      [Заголовок рубрики => [Новость],[Новость],...],
     *      [Заголовок рубрики => [Новость],[Новость],...],
     *   ],
     *   ...
     * ]
     *
     * @return \Illuminate\Support\Collection
     */
    public static function getNewsByRubrics()
    {
        return self::with(['rubric', 'author'])
            ->whereRaw('year(created_at) = year(now()) and week(created_at, 1) = week(now(), 1)')
            ->where('active', true)
            ->latest()
            ->get()
            ->groupBy(function ($item) {
                return $item->created_at->format('l');
            })
            ->map(function (Collection $item) {
                return $item->groupBy(function ($item) {
                    return $item->rubric->title;
                });
            });
    }
}
