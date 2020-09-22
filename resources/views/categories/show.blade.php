@extends('layouts.app')

@section('content')
<style>
	.top-image {
		background-repeat:  no-repeat;         
		width:100%;
		height:40vh;
		object-fit: cover;          
	}
</style>

<h2 class="bg-info text-center text-white py-3 mb-0">{{ $category->name }}</h2>
<img class="top-image mb-3" src="{{ $category->image }}">
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