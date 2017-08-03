<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0, minimal-ui">

        <meta name="description" content="Phoenixcoded">
        <meta name="keywords" content="LMS">
        <meta name="author" content="LMS">

        <link rel="icon" href="/default/assets/images/favicon.ico" type="image/x-icon">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'LMS') }}</title>
        <!-- Styles -->
        <link href="{{ asset('css/main.min.css') }}" rel="stylesheet">
        <!-- Google font-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
        <!-- iconfont -->
        <link rel="stylesheet" type="text/css" href="/default/assets/icon/icofont/css/icofont.css">
        <!-- simple line icon -->
        <link rel="stylesheet" type="text/css" href="/default/assets/icon/simple-line-icons/css/simple-line-icons.css">

        <link rel="stylesheet" type="text/css" href="/default/assets/icon/themify-icons/themify-icons.css">
        <!-- Flag Icon css -->
        <link rel="stylesheet" href="/default/assets/pages/flag-icon/flag-icon.min.css " type="text/css" media="all">
        <!-- Style.css -->
        <link rel="stylesheet" type="text/css" href="/default/assets/css/style.css">
        <!--color css-->
        <link rel="stylesheet" type="text/css" href="/default/assets/css/color/color-1.css" id="color"/>
        <script src="/js/jquery.min.js"></script>
        <!-- Scripts -->
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>
    </head>
    <body>
        <div class="horizontal-fixed">
            <section class="login p-fixed d-flex text-center bg-primary common-img-bg">
                <!-- Container-fluid starts -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="login-card card-block auth-body">
                                <div class="text-center">
                                    <img src="/default/assets/images/Logo.png" alt="menu.png">
                                </div>
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        <!-- Required Jqurey -->
        <script type="text/javascript" src="/default/assets/js/bootstrap-growl.min.js"></script>
        <script src="{{ asset('js/common.js') }}"></script>
        <script src="{{ asset('js/main.min.js') }}"></script>
        <!--FOO Table js-->
        <script src="/default/assets/pages/foo-table/js/footable.min.js"></script>
        <script src="/default/assets/pages/foo-table/js/foo-table-custom.js"></script>
        <script type="text/javascript" src="/default/assets/js/script.js"></script>

    </body>
</html>