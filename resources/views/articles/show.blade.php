@extends('layouts.app')

@section('content')
<div class="container">
	<h2 class="bg-info text-center text-white py-3">動画詳細</h2>
	<div class="row justify-content-center mt-5">
		<div class="col-md-4">
			<video width="320" height="240" preload="none" controls
				src="{{ $article->movie }}">
			</video>
			<p>{{ $article->name }}</p>
		</div>
	</div>
</div>
@endsection