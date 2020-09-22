@extends('layouts.app')

@section('content')
<style>
	main {
		background-image: url({{ $article->category->backimage }});
		background-repeat: no-repeat;
		background-size: cover;
		background-color: rgba(255,255,255,0.8);
		background-blend-mode: lighten;
		background-position: center center;
		height: 95vh;
		width:100%;
		padding:20px;
	}

	.bg-card {
		background: rgba(255,255,255,0);
	}
</style>

<div class="container">
	<div class="row justify-content-center mt-5">
		<div class="col-md-9">
			<!-- 16:9 aspect ratio -->
			<div class="embed-responsive embed-responsive-16by9">
				<video id=example-video class="video-js vjs-default-skin vjs-big-play-centered embed-responsive-item" controls>
					<source
						src="{{ $article->movie }}"
						type="application/x-mpegURL">
				</video>
			</div>
			<h4 class="my-4">{{ $article->name }}</h4>
			
			<div class="accordion" id="accordionExample">
				<div class="card shadow-none bg-card">
				<div class="card-text" id="headingOne">
					<button class="btn btn-link ml-0 mb-1 p-0 text-muted" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						動画の概要
					</button>
				</div>
			
				<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
					<div class="card-body">
						<div class="mt-0 text-muted text-right">
							<small>
								{{ $article->created_at->format('Y.m.d') }}
							</small>
						</div>
							{{ $article->body }}
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row border-bottom"></div>
</div>
@endsection

@section('vjs')
<script>
	var player = videojs('example-video');
</script>
@endsection