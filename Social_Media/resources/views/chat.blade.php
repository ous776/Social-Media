<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>iTBook</title>

   <link rel="stylesheet" href="../assets/css/libs.min.css">
   <link rel="stylesheet" href="../assets/css/socialv.css">
   <link rel="stylesheet" href="../assets/css/customizer.css">
   <link rel="stylesheet" href="../assets/vendor/css/all.min.css">
   <link rel="stylesheet" href="../assets/vendor/css/remixicon.css"> 
   <link rel="stylesheet" href="../assets/vendor/css/all.min.css">

   <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
   <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

   @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- @livewireStyles  --}}

</head>

<body style="margin: 0; overflow: hidden">



    @include('includes/left_sidebar')

    @include('includes/navbar')

    <div id="content-page" class="content-page">
        <div id="app">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card"
                            style=" 
                    width: 1000px;
                    height: 600px;
                    overflow: auto;
                    position: fixed;
                    overflow-x: hidden;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);">
                            <div class="card-body chat-page p-0">
                                <div class="chat-data-block">
                                    <message :auser="{{ Auth::user() }}" :users="{{ $users }}"></message>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    @include('includes/footer')
