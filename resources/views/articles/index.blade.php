@extends('layout')

@section('content')
<div id="wrapper">
    <div id="page" class="container">
        <div id="content">
            <div class="title">
                <h2>Articles</h2>
                <span class="byline">Mauris vulputate dolor sit amet nibh</span>
            </div>
            <ul class="style1">
                @forelse ($articles as $article)
                <li class="first">
                    <h3>
                        <a href="{{ route('articles.show', $article) }}">{{ $article->title }}</a>
                    </h3>
                    <p>{{ $article->excerpt }}</p>
                </li>
                @empty
                <p>No relevant articles yet.</p>
                @endforelse
            </ul>
        </div>
    </div>
</div>
@endsection
