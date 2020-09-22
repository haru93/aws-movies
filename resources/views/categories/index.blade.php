@extends('layouts.app')

@section('content')
<style>
	.image-wrapper {
    	position: relative;
	}

	.image-wrapper .caption-title {
		font-size: 300%;
		font-family: serif;
		color: white;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		-webkit-transform: translate(-50%, -50%);
		-ms-transform: translate(-50%, -50%);
	}

	.image-wrapper .mask {
		width: 100%;
		height:	100%;
		position: absolute;
		top: 0;
		left: 0;
		opacity: 1;
		background-color: rgba(0,0,0,0.4);
		-webkit-transition:	all 0.2s ease;
		transition:	all 0.2s ease;
	}

	.image-wrapper:hover .mask {
		opacity: 0;
	}
	.image-col img {
		width: 100%;
		height: 300px;
		object-fit: cover;
	}
</style>

<div class="container pt-5">
	@foreach ($categories->chunk(2) as $chunk)
	<div class="row justify-content-center image-col">
		@foreach ($chunk as $category)
		<div class="col-md-6 my-3">
			<a href="{{ route('categories.show', ['id' => $category->id]) }}">
				<div class='image-wrapper'>
					<img src="{{ $category->btnimage }}">
					<div class="caption-title">{{ $category->name }}</div>
					<div class="mask">
						<div class="caption-title">{{ $category->name }}</div>
					</div>
				</div>
			</a>
		</div>
		@endforeach
	</div>
	@endforeach
</div>
@endsection