<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="{{asset('assets/img/brand/blue.png')}}" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{route('pages.home')}}">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('manajer.dashboard')}}">
                <i class="fas fa-home text-purple"></i>
                <span class="nav-link-text">Home</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('manajer.ruang.index')}}">
                <i class="ni ni-building text-orange"></i>
                <span class="nav-link-text">Ruang</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('manajer.cs.index')}}">
                <i class="ni ni-single-02 text-primary"></i>
                <span class="nav-link-text">Cleaning Service</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('manajer.jadwal.index')}}">
                <i class="ni ni-calendar-grid-58 text-yellow"></i>
                <span class="nav-link-text">Jadwal</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('manajer.laporan.index')}}">
                <i class="ni ni-collection text-info"></i>
                <span class="nav-link-text">Laporan</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
