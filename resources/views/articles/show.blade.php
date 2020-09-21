@extends('layouts.app')

@section('content')

<div class="container">
	<h2 class="bg-info text-center text-white py-3">動画詳細</h2>
	<div class="row justify-content-center my-2">
		<div class="col-md-9">
			<!-- 16:9 aspect ratio -->
			<div class="embed-responsive embed-responsive-16by9">
				<video id=example-video class="video-js vjs-default-skin vjs-big-play-centered embed-responsive-item" controls>
					<source
					src="{{ $article->movie }}"
					type="application/x-mpegURL">
				</video>
			</div>
			<h4 class="my-3">{{ $article->name }}</h4>
			
			<div class="accordion" id="accordionExample">
				<div class="card shadow-none">
				<div class="card-text" id="headingOne">
					<button class="btn btn-link m-0 p-0 text-muted" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
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