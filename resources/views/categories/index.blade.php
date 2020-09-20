@extends('layouts.app')

@section('content')
<style>
    .col-center {
        text-align: center;
    }
</style>

<div class="container pt-5">
	@foreach ($categories->chunk(3) as $chunk)
	<div class="row justify-content-center">
		@foreach ($chunk as $category)
		<div class="col-lg-4">
			<a class="btn btn-info w-100 py-5" href="{{ route('categories.show', ['id' => $category->id]) }}" role="button">{{ $category->name }}</a>
		</div>
		@endforeach
	</div>
	@endforeach
</div>
@endsection