<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport" />
    <title>SIG &mdash; Labs</title>

    <!-- IconFave -->
    <link rel="icon" type="image/x-icon" href="" />

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/general/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/general/fontawesome-6/css/all.css')}}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css"
        integrity="sha512-pDpLmYKym2pnF0DNYDKxRnOk1wkM9fISpSOjt8kWFKQeDmBTjSnBZhTd41tXwh8+bRMoSaFsRnznZUiH9i3pxA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/assets/build/datetimepicker/jquery.datetimepicker.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/components.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    <!-- Plugin CSS -->
    @yield('css')



    <style>
        .kbw-signature {
            width: 100%;
            height: 200px;
        }

        #sig canvas {
            width: 100% !important;
            height: auto;
        }
    </style>

</head>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
    window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>

<body class="layout-3">
    <div id="app">
        <div class="main-wrapper container">
            @include('partials.sidebar')

            @yield('container')
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{asset('assets/general/popper.js/popper.js')}}"></script>
    <script src="{{asset('assets/general/tooltip.js/tooltip.js')}}"></script>
    <script src="{{asset('assets/general/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/general/nicescroll/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset('assets/general/moment.js/moment.min.js')}}"></script>
    <script src="{{asset('assets/js/stisla.js')}}"></script>

    <!-- JS Libraies -->
    <script type="text/javascript" src="/assets/build/datetimepicker/jquery.datetimepicker.full.min.js"></script>
    <script type="text/javascript" src="/assets/build/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript" src="/assets/build/summernote/summernote-bs4.js"></script>
    <script type="text/javascript" src="/assets/build/prismjs/prism.js"></script>

    {{-- Untuk Module --}}
    @yield('js-libraies')
    @yield('js-specific')

    <!-- Template JS File -->
    <script src="{{asset('assets/js/scripts.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>


</body>

</html>
