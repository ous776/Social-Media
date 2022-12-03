@include('header')

@include('left_sidebar')

@include('navbar')

@include('right_sidebar')

<div class="position-relative">
</div>
<div id="content-page" class="content-page">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body profile-page p-0">
                        <div class="profile-header">
                            <div class="position-relative">
                                <img width="970px" height="300px" src="../assets/images/page-img/p5.jpg">
                                <br><br><br>
                            </div>
                            <div class="user-detail text-center mb-3">
                                <div class="profile-img">
                                    <img src="../assets/images/user/05.jpg" alt="profile-img" loading="lazy"
                                        class="avatar-130 img-fluid" />
                                </div>
                                <div class="profile-detail">
                                    <h3 class="">Bni Cyst</h3>
                                </div>
                            </div>
                            <div
                                class="profile-info p-3 d-flex align-items-center justify-content-between position-relative">
                                <div class="social-links">
                                    <ul
                                        class="social-data-block d-flex align-items-center justify-content-between list-inline p-0 m-0">
                                        <li class="text-center pe-3">
                                            <a href="#"><img src="../assets/images/icon/05.png"
                                                    class="img-fluid rounded" alt="facebook" loading="lazy"></a>
                                        </li>
                                        <li class="text-center pe-3">
                                            <a href="#"><img src="../assets/images/icon/05.png"
                                                    class="img-fluid rounded" alt="Twitter" loading="lazy"></a>
                                        </li>
                                        <li class="text-center pe-3">
                                            <a href="#"><img src="../assets/images/icon/05.png"
                                                    class="img-fluid rounded" alt="Instagram" loading="lazy"></a>
                                        </li>
                                        <li class="text-center pe-3">
                                            <a href="#"><img src="../assets/images/icon/11.png"
                                                    class="img-fluid rounded" alt="Google plus" loading="lazy"></a>
                                        </li>
                                        <li class="text-center pe-3">
                                            <a href="#"><img src="../assets/images/icon/12.png"
                                                    class="img-fluid rounded" alt="You tube" loading="lazy"></a>
                                        </li>
                                        <li class="text-center md-pe-3 pe-0">
                                            <a href="#"><img src="../assets/images/icon/12.png"
                                                    class="img-fluid rounded" alt="linkedin" loading="lazy"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="social-info">
                                    <ul
                                        class="social-data-block d-flex align-items-center justify-content-between list-inline p-0 m-0">
                                        <li class="text-center ps-3">
                                            <h6>Posts</h6>
                                            <p class="mb-0">690</p>
                                        </li>
                                        <li class="text-center ps-3">
                                            <h6>Followers</h6>
                                            <p class="mb-0">206</p>
                                        </li>
                                        <li class="text-center ps-3">
                                            <h6>Following</h6>
                                            <p class="mb-0">100</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body p-0">
                        <div class="user-tabing">
                            <ul
                                class="nav nav-pills d-flex align-items-center justify-content-center profile-feed-items p-0 m-0 rounded">
                                <li class="nav-item col-12 col-sm-3 p-0">
                                    <a class="nav-link active" href="#pills-timeline-tab" data-bs-toggle="pill"
                                        data-bs-target="#timeline" role="button">Timeline</a>
                                </li>
                                <li class="nav-item col-12 col-sm-3 p-0">
                                    <a class="nav-link" href="#pills-about-tab" data-bs-toggle="pill"
                                        data-bs-target="#about" role="button">About</a>
                                </li>
                                <li class="nav-item col-12 col-sm-3 p-0">
                                    <a class="nav-link" href="#pills-friends-tab" data-bs-toggle="pill"
                                        data-bs-target="#friends" role="button">Friends</a>
                                </li>
                                <li class="nav-item col-12 col-sm-3 p-0">
                                    <a class="nav-link" href="#pills-photos-tab" data-bs-toggle="pill"
                                        data-bs-target="#photos" role="button">Photos</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

{{-- @include('profile_section.timeline')

@include('profile_section.about')

@include('profile_section.friend')

@include('profile_section.photos') --}}






           
        </div>
    </div>
    <div class="col-sm-12 text-center">
        <img src="../assets/images/page-img/page-load-loader.gif" alt="loader" style="height: 100px;" loading="lazy">
    </div>
</div>

@include('footer')
