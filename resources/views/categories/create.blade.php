@extends('layouts.app')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container">
        <div class="row justify-content-center mt-3">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">カテゴリー登録</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('categories.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">カテゴリー名</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" placeholder='カテゴリー名を入力'>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="btnimage" class="col-md-4 col-form-label text-md-right">カテゴリーボタン画像</label>
    
                                <div class="col-md-6">
                                    <input id="btnimage" type="text" class="form-control" name="btnimage" placeholder='※デモ時はURLを入力'>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="backimage" class="col-md-4 col-form-label text-md-right">ページ背景画像</label>
    
                                <div class="col-md-6">
                                    <input id="backimage" type="text" class="form-control" name="backimage" placeholder='※デモ時はURLを入力'>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">登録</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection