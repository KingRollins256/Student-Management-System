<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Melody Admin</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="{{ asset('vendors/iconfonts/font-awesome/css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.base.css')}}">
        <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.addons.css')}}">
        <!-- endinject -->
        <!-- plugin css for this page -->
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <!-- endinject -->
        <link rel="shortcut icon" href="http://www.urbanui.com/" />
      </head>
      <body>
      @yield('content')
      <!-- plugins:js -->
      <script src="{{ asset('vendors/js/vendor.bundle.base.js')}}"></script>
      <script src="{{ asset('vendors/js/vendor.bundle.addons.js')}}"></script>
      <!-- endinject -->
      <!-- Plugin js for this page-->
      <!-- End plugin js for this page-->
      <!-- inject:js -->
      <script src="{{asset('js/off-canvas.js')}}"></script>
      <script src="{{asset('js/hoverable-collapse.js')}}"></script>
      <script src="{{asset('js/misc.js')}}"></script>
      <script src="{{asset('js/settings.js')}}"></script>
      <script src="{{asset('js/todolist.js')}}"></script>

      <!-- endinject -->
      <!-- Custom js for this page-->
      <script src="{{asset('js/dashboard.js')}}"></script>


      <!-- End custom js for this page-->
      <script src="{{asset('js/data-table.js')}}"></script>


      <!-- endinject -->
      <!-- Custom js for this page-->
      {{-- <script src="../../js/toastDemo.js"></script> --}}




    </body>
    </html>
