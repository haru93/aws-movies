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
        font-size: 50px;
    }

    .site-title {
        margin-bottom: 40px;
        text-align: center;
        color: blue;
        font-family: 'Playfair Display', serif;
        font-size: 70px;
    }

    .col-center {
        text-align: center;
    }

</style>

<div class="jumbotron jumbotron-extend">
    <div class="container-fluid jumbotron-container">
        <h1 class="site-name">ノムラテクノ 様</h1>
        <h1 class="site-title">動画配信プラットフォーム</h1>
        <h3 class="site-name">- デモサイト -</h3>
        <div class="row justify-content-center">
            <div class="col col-center">
                <a class="btn btn-primary" href="{{ route('login') }}" role="button">{{ __('messages.Login') }}</a>
                <a class="btn btn-danger" href="{{ route('register') }}" role="button">{{ __('messages.Register') }}</a>
            </div>
        </div>
    </div>
</div>
@endsection