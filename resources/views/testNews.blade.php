<?php /** @var array $news */ ?>
@extends('layouts/app')

@section('title','Новости')

@section('content')

    @if(!empty($news))
        <div>
            @foreach($news as $article)
                <article>
                    <h2>{{ $article['title'] }}</h2>
                    <p>{{ $article['content'] }}</p>
                </article>
            @endforeach
        </div>
    @endif

@endsection

