@extends('admin.layouts.base')

@section('mainContent')
    <h1>{{ $post->title }}</h1>
    <h2>Written by: {{ $post->user->name }}</h2>
    @if ($post->image)
    <img class="img-fluid" src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}">
    @endif
    <h3>In category: {{ $post->category->name }}</h3>
    <div class="tags">
        @foreach ($post->tags as $tag)
            <span class="tag">{{ $tag->name }}</span>
        @endforeach
    </div>
    <p>{{ $post->content }}</p>
@endsection
