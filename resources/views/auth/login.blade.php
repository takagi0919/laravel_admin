  @extends('layouts.guest')

  @section('title', 'ログイン')

  @section('content')
    <div class="container">

      <div class="row">
        <div class="col-sm-12">

          <form action="{{ url()->current() }}" class="md-float-material form-material" method="POST">
            @csrf

            <div class="auth-box card">

              <div class="card-header">
                <h5>ログイン</h5>
              </div>

              <div class="card-block">

                <div class="row mb-2">
                  <div class="col-md-12 text-center">
                    <img src="{{ asset('img/auth_user.png') }}" style="width: 35%">
                  </div>
                </div>

                <div class="form-group @if ($errors->has('userid')) form-danger @else form-primary @endif">
                  <input class="form-control @if ($errors->has('userid')) fill @endif" name="userid" required type="text" value="{{ old('userid') }}">
                  <span class="form-bar"></span>
                  <label class="float-label">ユーザーID</label>
                  @error('userid')
                    <span class="text-danger">{{ $errors->first('userid') }}</span>
                  @enderror
                </div>

                <div class="form-group @if ($errors->has('userid')) form-danger @else form-primary @endif">
                  <input class="form-control" name="password" required type="password">
                  <span class="form-bar"></span>
                  <label class="float-label">パスワード</label>
                </div>

                <div class="row mt-3 text-left">
                  <div class="col-12">
                    <div class="checkbox-fade fade-in-primary">
                      <label>
                        <input name="remember" type="checkbox" value="">
                        <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                        <span class="text-inverse">ログイン状態を保存する</span>
                      </label>
                    </div>
                  </div>
                </div>

                <div class="row mt-3">
                  <div class="col-md-12">
                    <button class="btn btn-primary btn-md btn-block waves-effect waves-light w-100 text-center" type="submit">ログイン</button>
                  </div>
                </div>

                <div class="row mt-4 text-left">
                  <div class="col-12">
                    <a class="f-w-600 text-decoration-none text-right" href="{{ route('password.request') }}">パスワードをお忘れの方はこちら</a>
                  </div>
                </div>

                <div class="row text-left">
                  <div class="col-12">
                    <a class="f-w-600 text-decoration-none text-right" href="{{ route('register') }}">新規登録はこちら</a>
                  </div>
                </div>

              </div>

            </div>

          </form>

        </div>

      </div>
    </div>
  @endsection

  @section('script')
    <script src="{{ asset('material_able/js/common-pages.js') }}"></script>
  @endsection
