@extends('layouts.app')

@section('content')
<h2 class="bg-info text-center text-white py-3">{{ $category->name }}</h2>
<div class="container mb-3">
	@foreach ($articles->chunk(3) as $chunk)
	<div class="row justify-content-center py-0">
		@foreach ($chunk as $article)
		<div class='text-center px-1'>
			<a href="{{ route('articles.show', compact('article')) }}">
				<video width="320" height="240" preload="none" poster="{{ asset('img/reload.png') }}" autoplay muted
					src="{{ $article->movie }}">
				</video>
			</a>
		</div>
		@endforeach
	</div>
	@endforeach
</div>
@endsection