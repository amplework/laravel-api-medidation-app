<!doctype html>
<html lang="zxx">

<!-- Mirrored from templates.envytheme.com/zust/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 May 2023 07:33:21 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>

    <link rel="icon" type="image/png" href="assets/images/favicon.png">
    @includeIf('layouts.user.partials.css')
</head>

<body>
    @includeIf('layouts.user.partials.header')
    @includeIf('layouts.user.partials.sidebar')
    <!-- Links of CSS files -->
    <div class="content-page-box-area">
        @if (Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
    @if (Session::has('fail'))
        <div class="alert alert-danger">
            {{ Session::get('fail') }}
        </div>
    @endif
    @yield('content')
    </div>
    <div class="copyrights-area">
        <div class="container">
            <div class="row align-items-center">
                <p><i class="ri-copyright-line"></i>
                    <script data-cfasync="false"
                        src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
                    Zust. All Rights Reserved by <a href="https://envytheme.com/" target="_blank">EnvyTheme</a>
                </p>
            </div>
        </div>
    </div>
    <div class="go-top">
        <i class="ri-arrow-up-line"></i>
    </div>
    @includeIf('layouts.user.partials.js')
</body>

</html>