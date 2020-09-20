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
                    <div class="card-header">動画投稿</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('articles.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">タイトル</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" placeholder='タイトルを入力'>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="category_id" class="col-md-4 col-form-label text-md-right">カテゴリー</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="category_id" id="category_id">
                                        <option value="" selected>カテゴリーを選択</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="movie" class="col-md-4 col-form-label text-md-right">画像</label>

                                <div class="col-md-6">
                                    <input id="movie" type="text" class="form-control" name="movie" placeholder='画像のURLを入力'>
                                </div>
                            </div>

                            {{-- <div class="form-group row">
                                <label for="file1" class="col-md-4 col-form-label text-md-right">画像</label>
                                <div class="col-md-6">
                                    <input id="file1" type="file" class="form-control-file" name="movie">
                                </div>
                            </div> --}}

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">投稿</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection