@extends('layouts.app')

@section('content')
<style>
    .jumbotron-extend {
        position: relative;
        height: 85vh;
        min-height: 300px;
        background-image: url("/img/teian.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-color: white;
    }

    .jumbotron-container {
        position: relative;
        top: 50%;
        transform: translateY(-50%);
    }

    .col-center {
        text-align: center;
    }
</style>

<div class="jumbotron jumbotron-extend">
    <div class="container-fluid jumbotron-container">
        <div class="container">
            <div class="row justify-content-center">
                <h2 class="text-white mb-4">ノムラテクノ 様</h3>
            </div>
            <div class="row justify-content-center">
                <h1 class="text-white mb-4">動画配信プラットフォーム</h2>
            </div>
            <div class="row justify-content-center">
                <h2 class="text-white mb-4">- デモサイト -</h3>
            </div>
            <div class="row justify-content-center">
                <div class="col col-center">
                    <a class="btn btn-success" href="{{ route('login') }}" role="button">{{ __('messages.Login') }}</a>
                    <a class="btn btn-danger" href="{{ route('register') }}" role="button">{{ __('messages.Register') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection