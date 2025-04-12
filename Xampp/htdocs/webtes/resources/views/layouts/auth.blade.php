<!doctype html>
<html lang="en" data-bs-theme="blue-theme">


<!-- Mirrored from codervent.com/maxton/demo/vertical-menu/auth-basic-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Nov 2024 13:42:56 GMT -->

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <!--favicon-->
  <link rel="icon" href="{{ asset('assets/images/favicon-32x32.png')}}" type="image/png">
  <!-- loader-->
  <link href="{{ asset('assets/css/pace.min.css')}}" rel="stylesheet">
  <script src="{{ asset('assets/js/pace.min.js')}}"></script>

  <!--plugins-->
  <link href="{{ asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/metismenu/metisMenu.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/metismenu/mm-vertical.css')}}">
  <!--bootstrap css-->
  <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&amp;display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
  <!--main css-->
  <link href="{{ asset('assets/css/bootstrap-extended.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/sass/main.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/sass/dark-theme.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/sass/blue-theme.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/sass/responsive.css')}}" rel="stylesheet">

</head>

<body>
  <main>
    @yield('content')
  </main>
</body>
<script src="{{ asset('assets/js/jquery.min.js')}}"></script>
<script>
  $(document).ready(function () {
    $("#show_hide_password a").on('click', function (event) {
      event.preventDefault();
      if ($('#show_hide_password input').attr("type") == "text") {
        $('#show_hide_password input').attr('type', 'password');
        $('#show_hide_password i').addClass("bi-eye-slash-fill");
        $('#show_hide_password i').removeClass("bi-eye-fill");
      } else if ($('#show_hide_password input').attr("type") == "password") {
        $('#show_hide_password input').attr('type', 'text');
        $('#show_hide_password i').removeClass("bi-eye-slash-fill");
        $('#show_hide_password i').addClass("bi-eye-fill");
      }
    });
  });
</script>

</html>