<?php
/**
 * @var \Illuminate\Support\Collection $news
 * @var  \Illuminate\Database\Eloquent\Collection $items
 * @var  \App\Article[] $articles
 */
?>
@extends('layouts/app')

@section('title','Новости на этой неделе')

@section('content')

    @if($news->isNotEmpty())
        <div class="container">
            @foreach($news as $day => $items)
                <div>
                    <h1>In {{ $day }}</h1>
                    @foreach($items as $rubric => $articles)
                        <div>
                            <h2>Rubric: {{ $rubric }}</h2>
                            @foreach($articles as $article)
                                <article>
                                    <h2>{{ $article->title }}</h2>
                                    <div class="mar-b-sm">{{ $article->content }}</div>
                                    <p class="mar-b-0">Created: {{ $article->created_at->format('d.m.Y') }}</p>
                                    <p>Author: {{ $article->author->name }}</p>

                                    @if($article->isRedacted())
                                        <p>Обновлено</p>
                                    @endif

                                </article>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    @endif

@endsection