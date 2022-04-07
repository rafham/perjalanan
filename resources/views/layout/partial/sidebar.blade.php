<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo"><h1 class="text-secondary">PeduliDiri.</h1></a>
          <a class="sidebar-brand brand-logo-mini"><h1 class="text-secondary">PD</h1></a>
        </div>
        <ul class="nav">
        <li class="nav-item menu-items">
            <a class="nav-link" href="/dashboard">
            <span class="menu-icon">
            <i class="mdi mdi-home"></i>
              </span>
              <span class="menu-title">Home</span>
            </a>
          </li>

        @if( auth()->user()->role == 'admin' )
          <li class="nav-item menu-items">
            <a class="nav-link" href="/datauser">
            <span class="menu-icon">
            <i class="mdi mdi-account"></i>
              </span> 
              <span class="menu-title">Data User</span>
            </a>
          </li>
          @endif
          @if( auth()->user()->role == 'user' )
          <li class="nav-item menu-items">
            <a class="nav-link" href="/user/{{ auth()->user()->id }}">
            <span class="menu-icon">
                <i class="mdi mdi-contacts"></i>
              </span>
              <span class="menu-title">Profile</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="/perjalanan">
            <span class="menu-icon">
            <i class="mdi mdi-subway"></i>
              </span>
              <span class="menu-title">Data Perjalanan</span>
            </a>
          </li>
          @endif
        </ul>
      </nav>