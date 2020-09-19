<!-- Masthead -->
<header class="masthead text-white text-center">
  <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-10 mx-auto">
          <h1 class="mb-5">動画配信プラットフォーム</h1>
        </div>
        <div class="col-xl-10 mx-auto">
          <h1 class="mb-5">デモサイト</h1>
        </div>

        <div class="col-lg-3 mx-auto">
          <form method="POST" action="{{ route('login') }}">
            @csrf
              <div class="form-row">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="メールアドレスを入力" required autocomplete="email" autofocus>
                  @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror

                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="パスワードを入力" required autocomplete="current-password">
                  @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror

                <button type="submit" class="btn btn-primary btn-block">
                  {{ __('messages.Login') }}
                </button>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</header>