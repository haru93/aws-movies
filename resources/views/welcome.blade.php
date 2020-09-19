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

    .site-name {
        margin-bottom: 40px;
        text-align: center;
        color: blue;
        font-family: 'Playfair Display', serif;
        font-size: 3vw;
    }

    .site-title {
        margin-bottom: 40px;
        text-align: center;
        color: blue;
        font-family: 'Playfair Display', serif;
        font-size: 5vw;
    }

    .col-center {
        text-align: center;
    }

</style>

<div class="jumbotron jumbotron-extend">
    <div class="container-fluid jumbotron-container">
        <p class="site-name">ノムラテクノ 様</p>
        <p class="site-title">動画配信プラットフォーム</p>
        <p class="site-name">- デモサイト -</p>
        <div class="row justify-content-center">
            <div class="col col-center">
                <a class="btn btn-primary" href="{{ route('login') }}" role="button">{{ __('messages.Login') }}</a>
                <a class="btn btn-danger" href="{{ route('register') }}" role="button">{{ __('messages.Register') }}</a>
            </div>
        </div>
    </div>
</div>
@endsection