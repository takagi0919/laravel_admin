@extends('layouts.guest')

@section('title', 'アカウント登録')

@section('content')
  <div class="container">

    <div class="row">
      <div class="col-sm-12">

        <form action="{{ url()->current() }}" class="md-float-material form-material" method="POST">
          @csrf

          <div class="auth-box card">

            <div class="card-header">
              <h5>新規登録</h5>
            </div>

            <div class="card-block">

              <div class="row mb-2">
                <div class="col-md-12 text-center">
                  <img src="{{ asset('img/auth_user.png') }}" style="width: 35%">
                </div>
              </div>

              <div class="form-group @if ($errors->has('userid')) form-danger @else form-primary @endif">
                <input class="form-control @if (count($errors)) fill @endif" name="userid" required type="text" value="{{ old('userid') }}">
                <span class="form-bar"></span>
                <label class="float-label">ユーザーID</label>
                @error('userid')
                  <span class="text-danger">{{ $errors->first('userid') }}</span>
                @enderror
              </div>

              <div class="form-group @if ($errors->has('name')) form-danger @else form-primary @endif">
                <input class="form-control @if (count($errors)) fill @endif" name="name" required type="text" value="{{ old('name') }}">
                <span class="form-bar"></span>
                <label class="float-label">ユーザー名</label>
                @error('name')
                  <span class="text-danger">{{ $errors->first('name') }}</span>
                @enderror
              </div>

              <div class="form-group @if ($errors->has('email')) form-danger @else form-primary @endif">
                <input class="form-control @if (count($errors)) fill @endif" name="email" required type="email" value="{{ old('email') }}">
                <span class="form-bar"></span>
                <label class="float-label">メールアドレス</label>
                @error('email')
                  <span class="text-danger">{{ $errors->first('email') }}</span>
                @enderror
              </div>

              <div class="form-group @if ($errors->has('password')) form-danger @else form-primary @endif">
                <input class="form-control" name="password" required type="password">
                <span class="form-bar"></span>
                <label class="float-label">パスワード</label>
                @error('password')
                  <span class="text-danger">{{ $errors->first('password') }}</span>
                @enderror
              </div>

              <div class="form-group @if ($errors->has('password')) form-danger @else form-primary @endif">
                <input class="form-control" name="password_confirmation" required type="password">
                <span class="form-bar"></span>
                <label class="float-label">パスワード確認</label>
              </div>

              <div class="row mt-4">
                <div class="col-md-12">
                  <button class="btn btn-primary btn-md btn-block waves-effect waves-light w-100 text-center" type="submit">登録</button>
                </div>
              </div>

              <div class="row mt-3 text-left">
                <div class="col-12">
                  <a class="f-w-600 text-decoration-none text-right" href="{{ route('login') }}">すでに登録済みの方はこちら</a>
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
