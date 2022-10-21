@include('header')

<body class=" ">
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->

    <div class="wrapper">
        <section class="sign-in-page">
            <div id="container-inside">
                <div id="circle-small"></div>
                <div id="circle-medium"></div>
                <div id="circle-large"></div>
                <div id="circle-xlarge"></div>
                <div id="circle-xxlarge"></div>
            </div>
            <div class="container p-0">
                <div class="row no-gutters">
                    <div class="col-md-6 text-center pt-5">
                        <div class="sign-in-detail text-white">
                            <a class="sign-in-logo mb-5" href="#"><img src="../assets/images/logo.png"
                                    class="img-fluid" alt="logo" loading="lazy"></a>
                            <div class="sign-slider overflow-hidden ">
                                <ul class="swiper-wrapper list-inline m-0 p-0 ">
                                    <li class="swiper-slide">
                                        <img src="../assets/images/user/1.jpg" class="img-fluid mb-4" alt="logo"
                                            loading="lazy">
                                        <h4 class="mb-1 text-white">Find new friends</h4>
                                        <p>It is a long established fact that a reader will be distracted by the
                                            readable content.</p>
                                    </li>
                                    <li class="swiper-slide">
                                        <img src="../assets/images/user/02.jpg" class="img-fluid mb-4" alt="logo">
                                        <h4 class="mb-1 text-white">Connect with the world</h4>
                                        <p>It is a long established fact that a reader will be distracted by the
                                            readable content.</p>
                                    </li>
                                    <li class="swiper-slide">
                                        <img src="../assets/images/user/03.jpg" class="img-fluid mb-4" alt="logo">
                                        <h4 class="mb-1 text-white">Create new events</h4>
                                        <p>It is a long established fact that a reader will be distracted by the
                                            readable content.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 bg-white pt-5 pt-5 pb-lg-0 pb-5">
                        <div class="sign-in-from">
                            <h1 class="mb-0">Sign in</h1>
                            <p>Enter your email address and password to access admin panel.</p>
                            <form class="mt-4">
                                <div class="form-group">
                                    <label class="form-label" for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control mb-0" id="exampleInputEmail1"
                                        placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="exampleInputPassword1">Password</label>
                                    <a href="#" class="float-end">Forgot password?</a>
                                    <input type="password" class="form-control mb-0" id="exampleInputPassword1"
                                        placeholder="Password">
                                </div>
                                <div class="d-inline-block w-100">
                                    <div class="form-check d-inline-block mt-2 pt-1">
                                        <input type="checkbox" class="form-check-input" id="customCheck11">
                                        <label class="form-check-label" for="customCheck11">Remember Me</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary float-end">Sign in</button>
                                </div>
                                <div class="sign-info">
                                    <span class="dark-color d-inline-block line-height-2">Don't have an account? <a
                                            href="{{ url('/sign-up') }}">Sign up</a></span>
                               
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="../assets/js/libs.min.js"></script>
    <script src="../assets/vendor/lodash/lodash.min.js"></script>
    <script src="../assets/js/setting/utility.js"></script>
    <script src="../assets/js/setting/setting.js"></script>
    <script src="../assets/js/setting/setting-init.js" defer></script>
    <script src="../assets/js/slider.js"></script>
    <script src="../assets/js/masonry.pkgd.min.js"></script>
    <script src="../assets/js/enchanter.js"></script>
    <script src="../assets/vendor/sweetalert2/dist/sweetalert2.min.js" async></script>
    <script src="../assets/js/sweet-alert.js" defer></script>
    <script src="../assets/js/customizer.js"></script>
    <script src="../assets/js/charts/weather-chart.js"></script>
    <script src="../assets/js/app.js"></script>
    <script src="../assets/vendor/flatpickr/dist/flatpickr.min.js"></script>
    <script src="../assets/js/fslightbox.js" defer></script>
    <script src="../assets/vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>
    <script src="../assets/js/lottie.js"></script>
    <script src="../assets/js/select2.js"></script>
    
  </body>
</html>
