<!DOCTYPE html>
<html>
<head>
@include('include.meta')
  <title>Dashboard</title>
</head>
<body>
  <!-- Sidenav -->
  @include('include.sidenav')
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    @include('include.topnav')
    <!-- Header -->
    @include('include.header')
    <!-- Page content -->
    <div class="container-fluid mt--6">
      @yield('content')
      <!-- Footer -->
      <footer class="footer pt-0">
        @include('include.footerd')
      </footer>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  @include('include.script')
</body>

</html>