@extends('layouts.app')

@section('content')
<h2 class="bg-info text-center text-white py-3 mb-3">{{ $category->name }}</h2>
<div class="container-fluid mb-3">
	@foreach ($articles->chunk(4) as $chunk)
	<div class="row justify-content-center pt-2">
		@foreach ($chunk as $article)
		<div class='text-center px-1'>
			<a href="{{ route('articles.show', compact('article')) }}">
				<video width="192" height="108" poster="{{ $article->image }}" muted
					src="{{ $article->movie }}">
				</video>
			</a>
		</div>
		@endforeach
	</div>
	@endforeach
</div>
@endsection