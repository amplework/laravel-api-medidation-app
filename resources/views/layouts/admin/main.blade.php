<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1,
      shrink-to-fit=no" />
    <title>@yield('title')</title>
    @includeIf('layouts.admin.partials.css')
</head>

<body>
    <div class="container-scroller">
        @includeIf('layouts.admin.partials.sidebar')
        <div class="container-fluid page-body-wrapper">
            @includeIf('layouts.admin.partials.header')
            <div class="main-panel">
                <div class="content-wrapper pb-0">
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
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center
                    justify-content-sm-between">
                        <span
                            class="text-muted d-block text-center text-sm-left
                      d-sm-inline-block">Copyright
                            © Moti 2023 </span>
                    </div>
                </footer>
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @includeIf('layouts.admin.partials.js')
</body>

</html>
