<?php /** @var \App\News[]|\Illuminate\Database\Eloquent\Collection $news */ ?>
@extends('layouts/app')

@section('title','Новости')

@section('content')

    @if($news->isNotEmpty())
        <div class="container">
            @foreach($news as $article)
                <article>
                    <h2>{{ $article->title }}</h2>
                    <div class="mar-b-sm">{{ $article->content }}</div>
                    <p class="mar-b-0">Created: {{ $article->created_at->format('d.m.Y') }}</p>
                    <p>Author: {{ $article->author->name }}</p>
                </article>
            @endforeach
        </div>
    @endif

@endsection