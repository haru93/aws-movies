@extends('layouts.app')

@section('content')
<h2 class="bg-info text-center text-white py-3 mb-5">{{ $category->name }}</h2>
<div class="container mb-3">
	@foreach ($articles->chunk(4) as $chunk)
	<div class="row justify-content-center">
		@foreach ($chunk as $article)
		<div class="col-md-3 my-2">
		<div class='text-center'>
			<a href="{{ route('articles.show', compact('article')) }}">
				<img class="w-100" src="{{ $article->image }}">
			</a>
		</div>
		</div>
		@endforeach
	</div>
	@endforeach
</div>
@endsection