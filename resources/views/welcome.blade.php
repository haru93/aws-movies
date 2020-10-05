@extends('layouts.app')

@section('content')
<style>
    .jumbotron-extend {
        position: relative;
        height: 85vh;
        min-height: 300px;
        background-size: cover;
        background-color: skyblue;
    }

    .jumbotron-container {
        position: relative;
        top: 50%;
        transform: translateY(-50%);
    }

    h1 {
        font-size: 4vw;
    }

    h2 {
        font-size: 3vw;
    }
</style>

<div class="jumbotron jumbotron-extend">
    <div class="container-fluid jumbotron-container">
        <div class="container">
            <div class="row justify-content-center">
                <h2 class="text-white mb-4">○○株式会社 様</h3>
            </div>
            <div class="row justify-content-center">
                <h1 class="text-white mb-4">動画配信プラットフォーム</h2>
            </div>
            <div class="row justify-content-center">
                <h2 class="text-white mb-5">- デモサイト -</h3>
            </div>
            <div class="row justify-content-center">
                <div class="col text-center">
                    <a class="btn btn-success" href="{{ route('login') }}" role="button">{{ __('messages.Login') }}</a>
                    <a class="btn btn-danger" href="{{ route('register') }}" role="button">{{ __('messages.Register') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection