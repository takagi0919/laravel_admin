<!DOCTYPE html>
<html lang="ja">

<head>
  {{-- Title --}}
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" name="viewport">
  {{-- Style --}}
  @include('partial.style')
</head>

<body>
  {{-- Loader --}}
  @include('partial.loader')
  <section class="login-block">
    {{-- Content --}}
    @yield('content')
  </section>
  {{-- Script --}}
  @include('partial.script')
</body>

</html>
