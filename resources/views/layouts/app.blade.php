<!DOCTYPE html>
<html lang="ja">

<head>
  <title>Material Able bootstrap admin template by Codedthemes</title>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" name="viewport">
  {{-- Style --}}
  @include('partial.style')
</head>

<body>
  {{-- Loader --}}
  @include('partial.loader')
  <div class="pcoded" id="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">
      {{-- Nav --}}
      @include('partial.nav')
      <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
          {{-- SideMenu --}}
          @include('partial.aside')
          <div class="pcoded-content">
            <div class="pcoded-inner-content">
              <div class="main-body">
                <div class="page-wrapper">
                  <div class="page-body">
                    {{-- Content --}}
                    @yield('content')
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- Script --}}
  @include('partial.script')
</body>

</html>
