<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>TheZonePHX</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/assets/images/logo/logo-3.png') }}">

    <!-- CSS
    ========================= -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">

    <!-- Fonts CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/css/material-design-iconic-font.min.css') }}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/css/plugins.css') }}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">

    <!-- Modernizer JS -->
    <script src="{{ asset('/assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>

    <!-- jquery -->
    <script src="{{ asset('/assets/js/vendor/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('/assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>

    <style>
        .set-logo {
            height: 5rem !important;
            width: 5rem !important;
        }

        .choose-toggler label {
            background-color: #333;
            color: #ccc;
            border: none;
            font-size: 20px;
            border-radius: 4px;
        }

        .choose-toggler label:hover {
            color: #ffffff;
            background-color: #f4181c;
        }

        .choose-toggler label.active {
            color: #ffffff;
            background-color: #f4181c;
        }

        @media only screen and (max-width: 767px) {
            .set-logo {
                height: 3rem !important;
                width: 3rem !important;
            }

            .choose-toggler {
                position: relative;
                display: flex;
                flex-direction: column;
                width: 150px;
                margin-left: -20px;
            }
        }
    </style>
</head>

<body>

    <!-- Main Wrapper Start -->
    <div class="main-wrapper">

        <!-- header area start -->
        {{-- @include('includes/header') --}}
        <!-- header area end -->


        <!-- content area start -->
        @yield('content')
        <!-- content area end -->


        <!-- footer area start -->
        {{-- @include('includes/footer')     --}}
        <!-- footer area end -->

    </div>
    <!-- Main Wrapper End -->

    <!-- JS
    ============================================ -->

    <!-- Popper JS -->
    <script src="{{ asset('/assets/js/popper.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
    <!-- Plugins JS -->
    <script src="{{ asset('/assets/js/plugins.js') }}"></script>
    <!-- Ajax Mail -->
    <script src="{{ asset('/assets/js/ajax-mail.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('/assets/js/main.js') }}"></script>
    {{-- 
    <script>
        if ($(window).width() > 768) {
            $(".search-toggle").hide();
        //     $(".search-toggle").show();
        //     $(".search-wrap-2").removeClass("search-open");
        // } else {
        //     $(".search-toggle").clicked();
        //     $(".search-wrap-2").addClass("search-open");
        }
    </script> --}}

</body>

</html>
