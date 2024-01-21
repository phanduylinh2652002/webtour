<!DOCTYPE html>
<html lang="en">
@include('admin.head')
<body class="g-sidenav-show  bg-gray-200">
  @include('admin.slidebar')
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      @yield('content')
      @include('admin.footer')
    </div>
  </main>
  @include('admin.script')
</body>

</html>