@include('includes/header')



<div class="wrapper">
    <div class="iq-sidebar  sidebar-default ">
        <div id="sidebar-scrollbar">
            <nav class="iq-sidebar-menu">
                <ul id="iq-sidebar-toggle" class="iq-menu">
                    <li class="active">
                        <a href="{{ url('/news') }}" class=" ">
                            <i class="las la-newspaper"></i><span>Newsfeed</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{ url('/profile') }}" class=" ">
                            <i class="las la-user"></i><span>Profile</span>
                        </a>
                    </li>

                    <li class="">
                        <a href="{{ url('/groups') }}" class=" ">
                            <i class="las la-users"></i><span>Group</span>
                        </a>
                    </li>


                    <li class=" ">
                        <a href="{{ url('/events') }}" class=" ">
                            <i class="las la-film"></i><span>Events</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="{{ url('/chat') }}" class=" " target="blank">
                            <i class="lab la-rocketchat"></i><span>Chat</span>
                        </a>
                    </li>

                    <li class=" ">
                        <a href="{{ url('/menu') }}" class=" ">
                            <i class="las la-coffee"></i><span>cafetaria</span>
                        </a>
                    </li>

                </ul>
            </nav>
            <div class="p-5"></div>
        </div>
    </div>



    @include('includes/navbar')

    @include('includes/right_sidebar')

    <div id="content-page" class="content-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 row m-0 p-0">
                    <div class="col-sm-12">
                        <div id="post-modal-data" class="card card-block card-stretch card-height">
                            <div class="card-header d-flex justify-content-between align-center">
                                <div class="header-title">
                                    <h1 class="card-title">Menu</h1>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <form class="post-text ms-3 w-100 " data-bs-toggle="modal"
                                        data-bs-target="#post-modal" action="javascript:void();">
                                        <button class="btn btn-success">Add new menu</button>
                                    </form>
                                </div>


                            </div>
                            <div class="modal fade" id="post-modal" tabindex="-1" aria-labelledby="post-modalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog   modal-fullscreen-sm-down">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="post-modalLabel">Add Menu</h5>
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i
                                                    class="ri-close-fill"></i></button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="post-text ms-3 w-100" method="Post" action="{{url('menu')}}" enctype="multipart/form-data"> 
                                                @csrf
                                            <ul class="d-flex flex-wrap align-items-center list-inline m-0 p-0">
                                                <li class="col-md-6 mb-3">
                                                    <div class="rounded p-2 pointer me-3">
                                                        <input type="text" name="title" class="form-control rounded" placeholder="Title">
                                                        </div>
                                                </li>
                                                <li class="col-md-6 mb-3">  
                                                    <div class="  rounded p-2 pointer me-3">
                                                  
                                                <input  class="form-control" type="file" name="image">
                                                    
                                                    </div>
                                                </li>

                                            </ul>
                                            <hr>
                                            <div class="rounded p-2 pointer me-3">
                                              
                                                    <input type="text" class="form-control rounded" name="description"
                                                        placeholder="Description" style="border:none;">
                                              
                                            </div>
                                            <button type="submit" name="submit"
                                                class="btn btn-primary d-block w-100 mt-3">Add</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="card card-block card-stretch card-height">
                            <div class="card-body">
                                <div class="user-post-data">
                                    <div class="d-flex justify-content-between">
                                        <div class="me-3">
                                            <img class="rounded-circle img-fluid" src="../assets/images/user/01.jpg"
                                                alt="">
                                        </div>
                                        <div class="w-100">
                                            <div class="d-flex justify-content-between">
                                                <div class="">
                                                    <h5 class="mb-0 d-inline-block">Menu Name</h5>
                                                    <span class="mb-0 d-inline-block">Post by |||||||||||||||</span>
                                                   
                                                </div>
                                                <div class="card-post-toolbar">
                                                    <div class="dropdown">
                                                        <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false"
                                                            role="button">
                                                            <i class="ri-more-fill"></i>
                                                        </span>
                                                        <div class="dropdown-menu m-0 p-0">
                                                            <a class="dropdown-item p-3" href="#">
                                                                <div class="d-flex align-items-top">
                                                                    <div class="h4">
                                                                        <i class="las la-trash"></i>
                                                                    </div>
                                                                    <div class="data ms-2">
                                                                        <h6>Delete Menu</h6>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nulla dolor,
                                        ornare at
                                        commodo non, feugiat non nisi. Phasellus faucibus mollis pharetra. Proin blandit
                                        ac
                                        massa sed rhoncus</p>
                                </div>
                                <div class="user-post">
                                    <div class=" d-grid grid-rows-2 grid-flow-col gap-3">
                                        <div class="row-span-2 row-span-md-1">
                                            <img src="../assets/images/menu.jpg" alt="post-image"
                                                class="img-fluid rounded w-100">
                                        </div>
                                        {{-- <div class="row-span-1">
                                            <img src="../assets/images/page-img/p1.jpg" alt="post-image"
                                                class="img-fluid rounded w-100">
                                        </div>
                                        <div class="row-span-1 ">
                                            <img src="../assets/images/page-img/p3.jpg" alt="post-image"
                                                class="img-fluid rounded w-100">
                                        </div> --}}
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 text-center">
                    <img src="../assets/images/page-img/page-load-loader.gif" alt="loader" style="height: 100px;">
                </div>
            </div>
        </div>
    </div>

    @include('includes/footer')
