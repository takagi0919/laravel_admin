<nav class="navbar header-navbar pcoded-header">
  <div class="navbar-wrapper">
    <div class="navbar-logo">
      <a class="mobile-menu waves-effect waves-light text-decoration-none" href="#!" id="mobile-collapse">
        <i class="ti-menu"></i>
      </a>
      <div class="mobile-search waves-effect waves-light">
        <div class="header-search">
          <div class="main-search morphsearch-search">
            <div class="input-group">
              <span class="input-group-prepend search-close"><i class="ti-close input-group-text"></i></span>
              <input class="form-control" placeholder="Enter Keyword" type="text">
              <span class="input-group-append search-btn"><i class="ti-search input-group-text"></i></span>
            </div>
          </div>
        </div>
      </div>
      <a href="index.html">
        <img alt="Theme-Logo" class="img-fluid" src="{{ asset('material_able/images/logo.png') }}" />
      </a>
      <a class="mobile-options waves-effect waves-light">
        <i class="ti-more"></i>
      </a>
    </div>
    <div class="navbar-container container-fluid">
      <ul class="nav-left">
        <li>
          <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
        </li>
      </ul>
      <ul class="nav-right">
        <li class="user-profile header-notification text-right">
          <a class="waves-effect waves-light text-decoration-none" href="#!">
            <img class="mb-1" src="{{ asset('img/auth_user.png') }}" style="width: 2rem" />
            <span>{{ Auth::user()->name }}</span>
            <i class="ti-angle-down"></i>
          </a>
          <ul class="show-notification profile-notification">
            <li class="waves-effect waves-light text-left">
              <a class="text-decoration-none" href="#" onclick="document.my_form.submit();">
                <form action="{{ route('logout') }}" method="post" name="my_form">
                  @csrf
                </form>
                <i class="ti-power-off"></i> Logout
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
