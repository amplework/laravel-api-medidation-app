{{-- head link insert in css  --}}
<link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}" />
<link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css')}}" />
<link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css')}}" />
<link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css')}}" />
<link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" />
<link rel="stylesheet" href="{{ asset('assets/css/style.css')}}" />
{{-- <link rel="shortcut icon" href="assets/images/favicon.png" /> --}}
{{-- page css insert --}}
@stack('css')
<link id="color" rel="stylesheet" href="{{asset('assets/css/color-1.css')}}" media="screen">