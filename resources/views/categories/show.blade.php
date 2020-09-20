@extends('layouts.app')

@section('content')
<h2 class="bg-info text-center text-white py-3">{{ $category->name }}</h2>
<div class="container">
	@foreach ($articles->chunk(3) as $chunk)
	<div class="row justify-content-left mt-5">
		@foreach ($chunk as $article)
		<div class="col-md-4">
			<a href="{{ route('articles.show', compact('article')) }}" class="title-link">
			<video width="320" height="240" preload="none" autoplay muted
				src="{{ $article->movie }}">
			</video>
		</div>
		@endforeach
	</div>
	@endforeach
</div>
@endsection