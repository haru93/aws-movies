@extends('layouts.app')

@section('content')
<style>
	main {
		background-image: url({{ $category->backimage }});
		background-repeat: no-repeat;
		background-size: cover;
		background-color: rgba(255,255,255,0.7);
		background-blend-mode: lighten;
		background-position: center center;
		height: 95vh;
		width:100%;
		padding:20px;
	}

	.bg-grad {
		background: linear-gradient(to right, rgba(0, 0, 0, 0.9), rgba(220, 220, 220, 0.9));
	}
</style>

<div class="container mb-3">
	<h1 class="bg-grad text-white p-4">{{ $category->name }}</h1>
	@if ($articles->count() != 0)
	<div class="card mt-5">
		<div class="card-body">
			@foreach ($articles->chunk(4) as $chunk)
			<div class="row justify-content-center">
				@foreach ($chunk as $article)
				<div class="col-md-3 my-2">
					<div class='text-center'>
						<a href="{{ route('articles.show', compact('article')) }}">
							<img class="w-100" src="{{ $article->image }}">
						</a>
					</div>
					<small>{{ $article->body }}</small>
				</div>
				@endforeach
			</div>
			@endforeach
		</div>
	</div>
	@endif
</div>
@endsection