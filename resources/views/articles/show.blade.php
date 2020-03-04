@extends('layouts.app')

@section('content')
<div id="wrapper">
    <div id="page" class="container">
        <div id="content">
            <div class="title">
                <h2>{{ $article->title }}</h2>
            </div>
            <p><img src="{{ asset('images/banner.jpg') }}" alt="" class="image image-full" /> </p>
            {{ $article->body }}

            <p class="mt-2">
                @foreach($article->tags as $tag)
                    <a href="{{ route('articles.index', ['tag' => $tag->name]) }}">
                        {{ $tag->name }}
                    </a>
                @endforeach
            </p>
        </div>
    </div>
</div>
@endsection
