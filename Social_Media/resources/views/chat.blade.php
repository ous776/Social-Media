<!doctype html>
<html lang="en" dir="ltr" class="theme-fs-md">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>iTBook </title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- @livewireStyles  --}}
 
</head>

   
<body class="iq-chat-theme">
    <div id="app">
       

       <message :auser="{{ Auth::user() }}" :users="{{ $users }}"></message>
       
    </div>
   
   
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    
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
    <script src="../assets/js/chat.js" defer></script>
</body>

</html>

