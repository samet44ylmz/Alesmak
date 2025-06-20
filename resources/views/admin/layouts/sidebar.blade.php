<div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <div class="form-inline mr-auto"></div>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
           
            <div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Logged in 5 min ago</div>
              <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="features-settings.html" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>

                   <form method="POST" action="{{ route('logout') }}">
        @csrf
  <a href="#" onclick="event.preventDefault(); this.closest('form').submit();" class="dropdown-item has-icon text-danger">
    <i class="fas fa-sign-out-alt"></i> Logout
  </a>
</form>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
              <li class="nav-item active">
                <a href="{{ route('dashboard') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
              </li>
              <li class="nav-item dropdown">
               
                <ul class="dropdown-menu" style="display: none;">
                  <li><a class="nav-link" href="">test</a></li>

                </ul>
              </li>
              <li class="menu-header">Starter</li>

              <li><a class="nav-link" href="{{ route('admin.hero.edit',1) }}"><span>Anasayfa</span></a></li>
              <li><a class="nav-link" href="{{ route('admin.about.index') }}"><span>Hakkımızda</span></a></li>
              <li><a class="nav-link" href="{{ route('admin.contact.index') }}"><span>İletişim</span></a></li>
           
            </ul>
        </aside>
      </div>
