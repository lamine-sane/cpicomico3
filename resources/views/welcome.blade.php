<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>CPI - Comico3 | Coming Soon</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="{{ asset('dist/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('dist/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('dist/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="home-btn d-none d-sm-block">
            <a href="/" class="text-white"><i class="fas fa-home h2"></i></a>
        </div>

        <div class="my-5 pt-sm-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <a href="#" class="d-block auth-logo">
                                <h2>CPI - COMICO 3</h2>
                            </a>
                            <div class="row justify-content-center mt-5">
                                <div class="col-sm-4">
                                    <div class="maintenance-img">
                                        <img src="{{ asset('dist/assets/images/coming-soon.svg') }}" alt="" class="img-fluid mx-auto d-block">
                                    </div>
                                </div>
                            </div>
                            <h4 class="mt-5">Gestion des cotisations mensuelles.</h4>
                            <p class="text-muted">Ce site est en maintenance, il sera disponible bientôt.</p>

                            <div class="row justify-content-center mt-5">
                                <div class="col-md-8">
                                    <div data-countdown="2023/02/04" class="counter-number"></div>
                                </div> <!-- end col-->
                            </div> <!-- end row-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- JAVASCRIPT -->
        <script src="{{ asset('dist/assets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('dist/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('dist/assets/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('dist/assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('dist/assets/libs/node-waves/waves.min.js') }}"></script>

        <!-- Plugins js-->
        <script src="{{ asset('dist/assets/libs/jquery-countdown/jquery.countdown.min.js') }}"></script>

        <!-- Countdown js -->
        <script src="{{ asset('dist/assets/js/pages/coming-soon.init.js') }}"></script>

        <script src="{{ asset('dist/assets/js/app.js') }}"></script>

    </body>
</html>
