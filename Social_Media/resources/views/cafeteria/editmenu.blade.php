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
                    {{-- <li class="">
                   <a href="{{ url('/friend') }}" class=" ">
                      <i class="las la-user-friends"></i><span>Friend List</span>
                   </a>
                </li> --}}

                    <li class="">
                        <a href="{{ url('/groups') }}" class=" ">
                            <i class="las la-users"></i><span>Group</span>
                        </a>
                    </li>
                    {{-- <li class=" ">
                   <a href="{{ url('/gallery') }}" class=" ">
                      <i class="las la-image"></i><span>Gallery</span>
                   </a>
                </li> --}}

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
                            <i class="las la-file"></i><span>Add Menu</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="{{ url('/menu-list') }}" class=" ">
                            <i class="las la-file"></i><span>Menu List</span>
                        </a>
                    </li>

                </ul>
            </nav>
            <div class="p-5"></div>
        </div>
    </div>



    @include('includes/navbar')

    @include('includes/right_sidebar')

    @include('includes/footer')
