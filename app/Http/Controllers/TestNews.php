<?php

namespace App\Http\Controllers;

class TestNews extends Controller
{

    public function index()
    {
        return view('testNews', [
            'news' => $this->getNews()
        ]);
    }

    /**
     * Возращает фейковый массив c новостями
     * @param int $size
     * @return array
     */
    protected function getNews(int $size = 10): array
    {
        return array_map(function ($v) {
            return ['id' => $v, 'title' => 'Заголовок #' . $v, 'content' => 'Текст новости #' . $v];
        }, range(1, $size));
    }
}
