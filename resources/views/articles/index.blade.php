@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-4">
            <video width="320" height="240" autoplay muted controls
                src="https://ntech-test-transcoder-out.s3-ap-northeast-1.amazonaws.com/HLS/sample/playlist.m3u8">
            </video>
        </div>
        <div class="col-md-4">
            <video width="320" height="240" autoplay muted controls
                src="https://ntech-test-transcoder-out.s3-ap-northeast-1.amazonaws.com/HLS/sample/playlist.m3u8">
            </video>
        </div>
        <div class="col-md-4">
            <video width="320" height="240" autoplay muted controls
                src="https://ntech-test-transcoder-out.s3-ap-northeast-1.amazonaws.com/HLS/sample/playlist.m3u8">
            </video>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <video width="320" height="240" preload="none" controls
                src="https://ntech-test-transcoder-out.s3-ap-northeast-1.amazonaws.com/HLS/sample/playlist.m3u8">
            </video>
        </div>
        <div class="col-md-4">
            <video width="320" height="240" preload="none" controls
                src="https://ntech-test-transcoder-out.s3-ap-northeast-1.amazonaws.com/HLS/sample/playlist.m3u8">
            </video>
        </div>
        <div class="col-md-4">
            <video width="320" height="240" preload="none" controls
                src="https://ntech-test-transcoder-out.s3-ap-northeast-1.amazonaws.com/HLS/sample/playlist.m3u8">
            </video>
        </div>
    </div>
</div>
@endsection