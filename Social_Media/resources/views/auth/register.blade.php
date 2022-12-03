@include('../includes/header')

<body class=" ">
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
                            <a class="sign-in-logo mb-5"><img src="../assets/images/logo.png" class="img-fluid"
                                    alt="logo" loading="lazy"></a>
                            <div class="sign-slider overflow-hidden ">
                                <ul class="swiper-wrapper list-inline m-0 p-0 ">
                                    <li class="swiper-slide">
                                        <img src="../assets/images/user/1.jpg" class="img-fluid mb-4" alt="logo">
                                        <h4 class="mb-1 text-white">Find new friends</h4>

                                    </li>
                                    <li class="swiper-slide">
                                        <img src="../assets/images/user/1.jpg" class="img-fluid mb-4" alt="logo">
                                        <h4 class="mb-1 text-white">Connect with the world</h4>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 bg-white pt-5 pt-5 pb-lg-0 pb-5">
                        <div class="sign-in-from">
                            <h1 class="mb-0">Sign Up</h1>
                            <p>Create an Account</p>
                            <validation-errors class="mb-4" />

                            <form class="mt-4" method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group">
                                    <input id="firstname" class="form-control mb-0" type="text" name="firstname"
                                        :value="old('firstname')" placeholder="First Name" required />
                                </div>
                                <div class="form-group">
                                    <input id="lastname" class="form-control mb-0" type="text" name="lastname"
                                        :value="old('lastname')" placeholder="Last Name" required />
                                </div>
                                <div class="form-group">
                                    <select  class="form-control mb-0" name="role" id="role" >
                                        <option value="" disabled selected hidden>Your Status</option>
                                        <option value="Student">Student</option>
                                        <option value="Staff">Staff</option>
                                        <option value="Reaserch Assistant">Reaserch Assistant</option>
                                        <option value="Alumni">Alumni</option>
                                        <option value="Cafetaria">Cafetaria</option>
                                    </select>
                                    
                                </div>

                                <div class="form-group">
                                    <input id="email" class="form-control mb-0" type="email" name="email"
                                        :value="old('email')" placeholder="Email Address" required />
                                </div>

                                <div class="form-group">
                                    <input id="password" class="form-control mb-0" type="password" name="password"
                                        placeholder="Password" required autocomplete="new-password" />
                                </div>

                                <div class="form-group">
                                    <input id="password_confirmation" class="form-control mb-0" type="password"
                                        name="password_confirmation" placeholder="Confirm Password" required
                                        autocomplete="new-password" />
                                </div>

                                {{-- @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                    <div class="mt-4">
                                        <label for="terms">
                                            <div class="flex items-center">
                                                <checkbox name="terms" id="terms" />

                                                <div class="ml-2">
                                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                        'terms_of_service' =>
                                                            '<a target="_blank" href="' .
                                                            route('terms.show') .
                                                            '" class="underline text-sm text-gray-600 hover:text-gray-900">' .
                                                            __('Terms of Service') .
                                                            '</a>',
                                                        'privacy_policy' =>
                                                            '<a target="_blank" href="' .
                                                            route('policy.show') .
                                                            '" class="underline text-sm text-gray-600 hover:text-gray-900">' .
                                                            __('Privacy Policy') .
                                                            '</a>',
                                                    ]) !!}
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                @endif --}}

                                <div class="d-inline-block w-100">
                                    <div class="form-check d-inline-block mt-2 pt-3" style="margin-left: 2px">
                                        <input type="checkbox" class="form-check-input" id="customCheck1" required>
                                        <label class="form-check-label" for="customCheck1">I accept <a
                                                href="#">Terms and Conditions</a></label>
                                    </div>
                                    <button type="submit" name="register" class="btn btn-primary float-end "
                                        style="margin-right: 30px; margin-top:20px;">Sign Up</button>
                                </div>



                                <div class="sign-info" style="margin-left: 60px">
                                    <span class="dark-color d-inline-block line-height-2">Already Have Account ? <a
                                             href="{{ route('login') }}">Log In</a></span> 
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
