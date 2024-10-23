<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Otika - Admin Dashboard Template</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('backend/assets/css/app.min.css') }}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/assets/css/components.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/assets/bundles/summernote/summernote-bs4.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/assets/bundles/codemirror/lib/codemirror.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/assets/bundles/codemirror/theme/duotone-dark.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/assets/bundles/jquery-selectric/selectric.css') }}">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{ asset('backend/assets/css/custom.css') }}">
  <link rel='shortcut icon' type='image/x-icon' href='{{ asset('backend/assets/img/favicon.ico') }}' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      @include('backend.layouts.includes.nav')
    @include('backend.layouts.includes.side')
      <!-- Main Content -->
      @yield('main')
    @include('backend.layouts.includes.footer')
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="{{ asset('backend/assets/js/app.min.js') }}"></script>
  <!-- JS Libraies -->
  <script src="{{ asset('backend/assets/bundles/apexcharts/apexcharts.min.js') }}"></script>
  <!-- Page Specific JS File -->
  <script src="{{ asset('backend/assets/js/page/index.js') }}"></script>
  <!-- Template JS File -->
  <script src="{{ asset('backend/assets/js/scripts.js') }}"></script>
  <!-- Custom JS File -->
  <script src="{{ asset('backend/assets/js/custom.js') }}"></script>
  <script src="{{ asset('backend/assets/bundles/summernote/summernote-bs4.js') }}"></script>
  <script src="{{ asset('backend/assets/bundles/codemirror/lib/codemirror.js') }}"></script>
  <script src="{{ asset('backend/assets/bundles/codemirror/mode/javascript/javascript.js') }}"></script>
  <script src="{{ asset('backend/assets/bundles/jquery-selectric/jquery.selectric.min.js') }}"></script>
  <script src="{{ asset('backend/assets/bundles/ckeditor/ckeditor.js') }}"></script>
  <!-- Page Specific JS File -->
  <script src="{{ asset('backend/assets/js/page/ckeditor.js') }}"></script>
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>