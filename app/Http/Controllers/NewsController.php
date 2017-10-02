<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArchiveDateRequest;

class NewsController extends Controller
{

    public function index()
    {
        $news = Article::with('author')->latest()->take(5)->get();

        return view('news', compact('news'));
    }

    /**
     * Получение списка "неархивных" новостей за текущую неделю, в разбивке по дням недели и по рубрикам.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function news()
    {
        return view('newsByRubrics', [
            'news' => Article::getNewsByRubrics()
        ]);
    }

    /**
     * Списание в архив всех новостей из выбранных рубрик, которые были опубликованы ранее указанной даты.
     *
     * @param ArchiveDateRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function setArchiveByDate(ArchiveDateRequest $request)
    {
        Article::where('created_at', '<', $request->input('date'))
            ->update('active', false);

        return back()->with('flash', 'Сохранено');
    }
}
