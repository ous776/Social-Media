<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>SocialV | Responsive Bootstrap 5 Admin Dashboard Template</title>

   <link rel="shortcut icon" href="../assets/images/favicon.ico" />
   <link rel="stylesheet" href="../assets/css/libs.min.css">
   <link rel="stylesheet" href="../assets/css/socialv.css">
   <link rel="stylesheet" href="../assets/css/customizer.css">
   <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
   <link rel="stylesheet" href="../assets/vendor/remixicon/fonts/remixicon.css">
   <link rel="stylesheet" href="../assets/vendor/vanillajs-datepicker/dist/css/datepicker.min.css">
   <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
   <link rel="stylesheet" href="../assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">

   <link rel="stylesheet"
      href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
   <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body class="  ">
   <!-- loader Start -->
   <div id="loading">
      <div id="loading-center">
      </div>
   </div>
   <!-- loader END -->
   <!-- Wrapper Start -->
   <div class="wrapper">
      <div class="iq-sidebar  sidebar-default ">
         <div id="sidebar-scrollbar">
            <nav class="iq-sidebar-menu">
               <ul id="iq-sidebar-toggle" class="iq-menu">
                  <li class="active">
                     <a href="#" class=" ">
                        <i class="las la-newspaper"></i><span>Newsfeed</span>
                     </a>
                  </li>
                  <li class="">
                     <a href="profile.html" class=" ">
                        <i class="las la-user"></i><span>Profile</span>
                     </a>
                  </li>
                  <li class="">
                     <a href="#" class=" ">
                        <i class="las la-user-friends"></i><span>Friend List</span>
                     </a>
                  </li>

                  <li class="">
                     <a href="group.html" class=" ">
                        <i class="las la-users"></i><span>Group</span>
                     </a>
                  </li>
                  <li class=" ">
                     <a href="gallery.html" class=" ">
                        <i class="las la-image"></i><span>Gallery</span>
                     </a>
                  </li>

                  <li class=" ">
                     <a href="#" class=" ">
                        <i class="las la-film"></i><span>Events</span>
                     </a>

                  <li class=" ">
                     <a href="notification.html" class=" ">
                        <i class="las la-bell"></i><span>Notification</span>
                     </a>
                  </li>
                  <li class=" ">
                     <a href="file.html" class=" ">
                        <i class="las la-file"></i><span>Files</span>
                     </a>
                  </li>

                  <li class=" ">
                     <a href="chat.html" class=" ">
                        <i class="lab la-rocketchat"></i><span>Chat</span>
                     </a>
                  </li>

                  <li class=" ">
                     <a href="calendar.html" class=" ">
                        <i class="las la-calendar"></i><span>Calendar</span>
                     </a>
                  </li>


               </ul>
            </nav>
            <div class="p-5"></div>
         </div>
      </div>

      <div class="iq-top-navbar">
         <div class="iq-navbar-custom">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
               <div class="iq-navbar-logo d-flex justify-content-between">
                  <a href="../dashboard/index.html">
                     <img src="../assets/images/logo.png" class="img-fluid" alt="">
                     <span>SocialV</span>
                  </a>
                  <div class="iq-menu-bt align-self-center">
                     <div class="wrapper-menu">
                        <div class="main-circle"><i class="ri-menu-line"></i></div>
                     </div>
                  </div>
               </div>
               <div class="iq-search-bar device-search">
                  <form action="#" class="searchbox">
                     <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                     <input type="text" class="text search-input" placeholder="Search here...">
                  </form>
               </div>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                  data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                  aria-label="Toggle navigation">
                  <i class="ri-menu-3-line"></i>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav  ms-auto navbar-list">
                     <li>
                        <a href="index.html" class="  d-flex align-items-center">
                           <i class="ri-home-line"></i>
                        </a>
                     </li>
                     <li class="nav-item dropdown">
                        <a href="#" class="dropdown-toggle" id="group-drop" data-bs-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"><i class="ri-group-line"></i></a>
                        <div class="sub-drop sub-drop-large dropdown-menu" aria-labelledby="group-drop">
                           <div class="card shadow-none m-0">
                              <div class="card-header d-flex justify-content-between bg-primary">
                                 <div class="header-title">
                                    <h5 class="mb-0 text-white">Friend Request</h5>
                                 </div>
                                 <small class="badge  bg-light text-dark ">4</small>
                              </div>
                              <div class="card-body p-0">
                                 <div class="iq-friend-request">
                                    <div
                                       class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between">
                                       <div class="d-flex align-items-center">
                                          <img class="avatar-40 rounded" src="../assets/images/user/01.jpg" alt="">
                                          <div class="ms-3">
                                             <h6 class="mb-0 ">Jaques Amole</h6>
                                             <p class="mb-0">40 friends</p>
                                          </div>
                                       </div>
                                       <div class="d-flex align-items-center">
                                          <a href="javascript:void();" class="me-3 btn btn-primary rounded">Confirm</a>
                                          <a href="javascript:void();" class="me-3 btn btn-secondary rounded">Delete
                                             Request</a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="iq-friend-request">
                                    <div
                                       class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between">
                                       <div class="d-flex align-items-center">
                                          <img class="avatar-40 rounded" src="../assets/images/user/02.jpg" alt="">
                                          <div class="ms-3">
                                             <h6 class="mb-0 ">Lucy Tania</h6>
                                             <p class="mb-0">12 friends</p>
                                          </div>
                                       </div>
                                       <div class="d-flex align-items-center">
                                          <a href="javascript:void();" class="me-3 btn btn-primary rounded">Confirm</a>
                                          <a href="javascript:void();" class="me-3 btn btn-secondary rounded">Delete
                                             Request</a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="iq-friend-request">
                                    <div
                                       class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between">
                                       <div class="d-flex align-items-center">
                                          <img class="avatar-40 rounded" src="../assets/images/user/03.jpg" alt="">
                                          <div class=" ms-3">
                                             <h6 class="mb-0 ">Manny Petty</h6>
                                             <p class="mb-0">3 friends</p>
                                          </div>
                                       </div>
                                       <div class="d-flex align-items-center">
                                          <a href="javascript:void();" class="me-3 btn btn-primary rounded">Confirm</a>
                                          <a href="javascript:void();" class="me-3 btn btn-secondary rounded">Delete
                                             Request</a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="iq-friend-request">
                                    <div
                                       class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between">
                                       <div class="d-flex align-items-center">
                                          <img class="avatar-40 rounded" src="../assets/images/user/04.jpg" alt="">
                                          <div class="ms-3">
                                             <h6 class="mb-0 ">Marsha Mello</h6>
                                             <p class="mb-0">15 friends</p>
                                          </div>
                                       </div>
                                       <div class="d-flex align-items-center">
                                          <a href="javascript:void();" class="me-3 btn btn-primary rounded">Confirm</a>
                                          <a href="javascript:void();" class="me-3 btn btn-secondary rounded">Delete
                                             Request</a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="text-center">
                                    <a href="#" class=" btn text-primary">View More Request</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li class="nav-item dropdown">
                        <a href="#" class="search-toggle   dropdown-toggle" id="notification-drop"
                           data-bs-toggle="dropdown">
                           <i class="ri-notification-4-line"></i>
                        </a>
                        <div class="sub-drop dropdown-menu" aria-labelledby="notification-drop">
                           <div class="card shadow-none m-0">
                              <div class="card-header d-flex justify-content-between bg-primary">
                                 <div class="header-title bg-primary">
                                    <h5 class="mb-0 text-white">All Notifications</h5>
                                 </div>
                                 <small class="badge  bg-light text-dark">4</small>
                              </div>
                              <div class="card-body p-0">
                                 <a href="#" class="iq-sub-card">
                                    <div class="d-flex align-items-center">
                                       <div class="">
                                          <img class="avatar-40 rounded" src="../assets/images/user/01.jpg" alt="">
                                       </div>
                                       <div class="ms-3 w-100">
                                          <h6 class="mb-0 ">Emma Watson Bni</h6>
                                          <div class="d-flex justify-content-between align-items-center">
                                             <p class="mb-0">95 MB</p>
                                             <small class="float-right font-size-12">Just Now</small>
                                          </div>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="#" class="iq-sub-card">
                                    <div class="d-flex align-items-center">
                                       <div class="">
                                          <img class="avatar-40 rounded" src="../assets/images/user/02.jpg" alt="">
                                       </div>
                                       <div class="ms-3 w-100">
                                          <h6 class="mb-0 ">New customer is join</h6>
                                          <div class="d-flex justify-content-between align-items-center">
                                             <p class="mb-0">Cyst Bni</p>
                                             <small class="float-right font-size-12">5 days ago</small>
                                          </div>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="#" class="iq-sub-card">
                                    <div class="d-flex align-items-center">
                                       <div class="">
                                          <img class="avatar-40 rounded" src="../assets/images/user/03.jpg" alt="">
                                       </div>
                                       <div class="ms-3 w-100">
                                          <h6 class="mb-0 ">Two customer is left</h6>
                                          <div class="d-flex justify-content-between align-items-center">
                                             <p class="mb-0">Cyst Bni</p>
                                             <small class="float-right font-size-12">2 days ago</small>
                                          </div>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="#" class="iq-sub-card">
                                    <div class="d-flex align-items-center">
                                       <div class="">
                                          <img class="avatar-40 rounded" src="../assets/images/user/04.jpg" alt="">
                                       </div>
                                       <div class="w-100 ms-3">
                                          <h6 class="mb-0 ">New Mail from Fenny</h6>
                                          <div class="d-flex justify-content-between align-items-center">
                                             <p class="mb-0">Cyst Bni</p>
                                             <small class="float-right font-size-12">3 days ago</small>
                                          </div>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li class="nav-item dropdown">
                        <a href="#" class="dropdown-toggle" id="mail-drop" data-bs-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                           <i class="ri-mail-line"></i>
                        </a>
                        <div class="sub-drop dropdown-menu" aria-labelledby="mail-drop">
                           <div class="card shadow-none m-0">
                              <div class="card-header d-flex justify-content-between bg-primary">
                                 <div class="header-title bg-primary">
                                    <h5 class="mb-0 text-white">All Message</h5>
                                 </div>
                                 <small class="badge bg-light text-dark">4</small>
                              </div>
                              <div class="card-body p-0 ">
                                 <a href="#" class="iq-sub-card">
                                    <div class="d-flex  align-items-center">
                                       <div class="">
                                          <img class="avatar-40 rounded" src="../assets/images/user/01.jpg" alt="">
                                       </div>
                                       <div class=" w-100 ms-3">
                                          <h6 class="mb-0 ">Bni Emma Watson</h6>
                                          <small class="float-left font-size-12">13 Jun</small>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="#" class="iq-sub-card">
                                    <div class="d-flex align-items-center">
                                       <div class="">
                                          <img class="avatar-40 rounded" src="../assets/images/user/02.jpg" alt="">
                                       </div>
                                       <div class="ms-3">
                                          <h6 class="mb-0 ">Lorem Ipsum Watson</h6>
                                          <small class="float-left font-size-12">20 Apr</small>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="#" class="iq-sub-card">
                                    <div class="d-flex align-items-center">
                                       <div class="">
                                          <img class="avatar-40 rounded" src="../assets/images/user/03.jpg" alt="">
                                       </div>
                                       <div class="ms-3">
                                          <h6 class="mb-0 ">Why do we use it?</h6>
                                          <small class="float-left font-size-12">30 Jun</small>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="#" class="iq-sub-card">
                                    <div class="d-flex align-items-center">
                                       <div class="">
                                          <img class="avatar-40 rounded" src="../assets/images/user/04.jpg" alt="">
                                       </div>
                                       <div class="ms-3">
                                          <h6 class="mb-0 ">Variations Passages</h6>
                                          <small class="float-left font-size-12">12 Sep</small>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="#" class="iq-sub-card">
                                    <div class="d-flex align-items-center">
                                       <div class="">
                                          <img class="avatar-40 rounded" src="../assets/images/user/05.jpg" alt="">
                                       </div>
                                       <div class="ms-3">
                                          <h6 class="mb-0 ">Lorem Ipsum generators</h6>
                                          <small class="float-left font-size-12">5 Dec</small>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li class="nav-item dropdown">
                        <a href="#" class="   d-flex align-items-center dropdown-toggle" id="drop-down-arrow"
                           data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <img src="../assets/images/user/1.jpg" class="img-fluid rounded-circle me-3" alt="user">
                           <div class="caption">
                              <h6 class="mb-0 line-height">Bni Cyst</h6>
                           </div>
                        </a>
                        <div class="sub-drop dropdown-menu caption-menu" aria-labelledby="drop-down-arrow">
                           <div class="card shadow-none m-0">
                              <div class="card-header  bg-primary">
                                 <div class="header-title">
                                    <h5 class="mb-0 text-white">Hello Bni Cyst</h5>
                                    <span class="text-white font-size-12">Available</span>
                                 </div>
                              </div>
                              <div class="card-body p-0 ">
                                 <a href="profile.html" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="d-flex align-items-center">
                                       <div class="rounded card-icon bg-soft-primary">
                                          <i class="ri-file-user-line"></i>
                                       </div>
                                       <div class="ms-3">
                                          <h6 class="mb-0 ">My Profile</h6>
                                          <p class="mb-0 font-size-12">View personal profile details.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="profile-edit.html" class="iq-sub-card iq-bg-warning-hover">
                                    <div class="d-flex align-items-center">
                                       <div class="rounded card-icon bg-soft-warning">
                                          <i class="ri-profile-line"></i>
                                       </div>
                                       <div class="ms-3">
                                          <h6 class="mb-0 ">Edit Profile</h6>
                                          <p class="mb-0 font-size-12">Modify your personal details.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="account-setting.html" class="iq-sub-card iq-bg-info-hover">
                                    <div class="d-flex align-items-center">
                                       <div class="rounded card-icon bg-soft-info">
                                          <i class="ri-account-box-line"></i>
                                       </div>
                                       <div class="ms-3">
                                          <h6 class="mb-0 ">Account settings</h6>
                                          <p class="mb-0 font-size-12">Manage your account parameters.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="privacy-setting.html" class="iq-sub-card iq-bg-danger-hover">
                                    <div class="d-flex align-items-center">
                                       <div class="rounded card-icon bg-soft-danger">
                                          <i class="ri-lock-line"></i>
                                       </div>
                                       <div class="ms-3">
                                          <h6 class="mb-0 ">Privacy Settings</h6>
                                          <p class="mb-0 font-size-12">Control your privacy parameters.
                                          </p>
                                       </div>
                                    </div>
                                 </a>
                                 <div class="d-inline-block w-100 text-center p-3">
                                    <a class="btn btn-primary iq-sign-btn" href="sign-in.html" role="button">Sign
                                       out<i class="ri-login-box-line ms-2"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
      </div>
      <div class="right-sidebar-mini right-sidebar">
         <div class="right-sidebar-panel p-0">
            <div class="card shadow-none">
               <div class="card-body p-0">
                  <div class="media-height p-3" data-scrollbar="init">
                     <div class="d-flex align-items-center mb-4">
                        <div class="iq-profile-avatar status-online">
                           <img class="rounded-circle avatar-50" src="../assets/images/user/01.jpg" alt="">
                        </div>
                        <div class="ms-3">
                           <h6 class="mb-0">Anna Sthesia</h6>
                           <p class="mb-0">Just Now</p>
                        </div>
                     </div>
                     <div class="d-flex align-items-center mb-4">
                        <div class="iq-profile-avatar status-online">
                           <img class="rounded-circle avatar-50" src="../assets/images/user/02.jpg" alt="">
                        </div>
                        <div class="ms-3">
                           <h6 class="mb-0">Paul Molive</h6>
                           <p class="mb-0">Admin</p>
                        </div>
                     </div>
                     <div class="d-flex align-items-center mb-4">
                        <div class="iq-profile-avatar status-online">
                           <img class="rounded-circle avatar-50" src="../assets/images/user/03.jpg" alt="">
                        </div>
                        <div class="ms-3">
                           <h6 class="mb-0">Anna Mull</h6>
                           <p class="mb-0">Admin</p>
                        </div>
                     </div>
                     <div class="d-flex align-items-center mb-4">
                        <div class="iq-profile-avatar status-online">
                           <img class="rounded-circle avatar-50" src="../assets/images/user/04.jpg" alt="">
                        </div>
                        <div class="ms-3">
                           <h6 class="mb-0">Paige Turner</h6>
                           <p class="mb-0">Admin</p>
                        </div>
                     </div>
                     <div class="d-flex align-items-center mb-4">
                        <div class="iq-profile-avatar status-online">
                           <img class="rounded-circle avatar-50" src="../assets/images/user/11.jpg" alt="">
                        </div>
                        <div class="ms-3">
                           <h6 class="mb-0">Bob Frapples</h6>
                           <p class="mb-0">Admin</p>
                        </div>
                     </div>
                     <div class="d-flex align-items-center mb-4">
                        <div class="iq-profile-avatar status-online">
                           <img class="rounded-circle avatar-50" src="../assets/images/user/02.jpg" alt="">
                        </div>
                        <div class="ms-3">
                           <h6 class="mb-0">Barb Ackue</h6>
                           <p class="mb-0">Admin</p>
                        </div>
                     </div>
                     <div class="d-flex align-items-center mb-4">
                        <div class="iq-profile-avatar status-online">
                           <img class="rounded-circle avatar-50" src="../assets/images/user/03.jpg" alt="">
                        </div>
                        <div class="ms-3">
                           <h6 class="mb-0">Greta Life</h6>
                           <p class="mb-0">Admin</p>
                        </div>
                     </div>
                     <div class="d-flex align-items-center mb-4">
                        <div class="iq-profile-avatar status-away">
                           <img class="rounded-circle avatar-50" src="../assets/images/user/12.jpg" alt="">
                        </div>
                        <div class="ms-3">
                           <h6 class="mb-0">Ira Membrit</h6>
                           <p class="mb-0">Admin</p>
                        </div>
                     </div>
                     <div class="d-flex align-items-center mb-4">
                        <div class="iq-profile-avatar status-away">
                           <img class="rounded-circle avatar-50" src="../assets/images/user/01.jpg" alt="">
                        </div>
                        <div class="ms-3">
                           <h6 class="mb-0">Pete Sariya</h6>
                           <p class="mb-0">Admin</p>
                        </div>
                     </div>
                     <div class="d-flex align-items-center">
                        <div class="iq-profile-avatar">
                           <img class="rounded-circle avatar-50" src="../assets/images/user/02.jpg" alt="">
                        </div>
                        <div class="ms-3">
                           <h6 class="mb-0">Monty Carlo</h6>
                           <p class="mb-0">Admin</p>
                        </div>
                     </div>
                  </div>
                  
               </div>
            </div>
         </div>
      </div>
        <div class="position-relative">
        </div>
        <div id="content-page" class="content-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="iq-edit-list">
                                    <ul class="iq-edit-profile row nav nav-pills">
                                        <li class="col-md-3 p-0">
                                            <a class="nav-link active" data-bs-toggle="pill"
                                                href="#personal-information">
                                                Personal Information
                                            </a>
                                        </li>
                                        <li class="col-md-3 p-0">
                                            <a class="nav-link" data-bs-toggle="pill" href="#chang-pwd">
                                                Change Password
                                            </a>
                                        </li>
                                        <li class="col-md-3 p-0">
                                            <a class="nav-link" data-bs-toggle="pill" href="#emailandsms">
                                                Email and SMS
                                            </a>
                                        </li>
                                        <li class="col-md-3 p-0">
                                            <a class="nav-link" data-bs-toggle="pill" href="#manage-contact">
                                                Manage Contact
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="iq-edit-list-data">
                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between">
                                            <div class="header-title">
                                                <h4 class="card-title">Personal Information</h4>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <form>
                                                <div class="form-group row align-items-center">
                                                    <div class="col-md-12">
                                                        <div class="profile-img-edit">
                                                            <img class="profile-pic" src="../assets/images/user/11.png"
                                                                alt="profile-pic" loading="lazy">
                                                            <div
                                                                class="p-image d-flex align-items-center justify-content-center">
                                                                <span class="material-symbols-outlined">edit</span>
                                                                <input class="file-upload" type="file"
                                                                    accept="image/*" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=" row align-items-center">
                                                    <div class="form-group col-sm-6">
                                                        <label for="fname" class="form-label">First Name:</label>
                                                        <input type="text" class="form-control" id="fname"
                                                            placeholder="Bni">
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label for="lname" class="form-label">Last Name:</label>
                                                        <input type="text" class="form-control" id="lname"
                                                            placeholder="Jhon">
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label for="uname" class="form-label">User Name:</label>
                                                        <input type="text" class="form-control" id="uname"
                                                            placeholder="Bni@01">
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label for="cname" class="form-label">City:</label>
                                                        <input type="text" class="form-control" id="cname"
                                                            placeholder="Atlanta">
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label class="form-label d-block">Gender:</label>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="inlineRadioOptions" id="inlineRadio10"
                                                                value="option1">
                                                            <label class="form-check-label" for="inlineRadio10">
                                                                Male</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="inlineRadioOptions" id="inlineRadio11"
                                                                value="option1">
                                                            <label class="form-check-label"
                                                                for="inlineRadio11">Female</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label for="dob" class="form-label">Date Of Birth:</label>
                                                        <input class="form-control" id="dob" placeholder="1984-01-24">
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label class="form-label">Marital Status:</label>
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option selected="">Single</option>
                                                            <option>Married</option>
                                                            <option>Widowed</option>
                                                            <option>Divorced</option>
                                                            <option>Separated </option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label class="form-label">Age:</label>
                                                        <select class="form-select"
                                                            aria-label="Default select example 2">
                                                            <option>46-62</option>
                                                            <option>63 > </option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label class="form-label">Country:</label>
                                                        <select class="form-select"
                                                            aria-label="Default select example 3">
                                                            <option>Caneda</option>
                                                            <option>Noida</option>
                                                            <option selected="">USA</option>
                                                            <option>India</option>
                                                            <option>Africa</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label class="form-label">State:</label>
                                                        <select class="form-select"
                                                            aria-label="Default select example 4">
                                                            <option>California</option>
                                                            <option>Florida</option>
                                                            <option selected="">Georgia</option>
                                                            <option>Connecticut</option>
                                                            <option>Louisiana</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-sm-12">
                                                        <label class="form-label">Address:</label>
                                                        <textarea class="form-control" name="address" rows="5"
                                                            style="line-height: 22px;">
                                 37 Cardinal Lane
                                 Petersburg, VA 23803
                                 United States of America
                                 Zip Code: 85001
                                 </textarea>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                                                <button type="reset" class="btn bg-soft-danger">Cancle</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="chang-pwd" role="tabpanel">
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between">
                                            <div class="iq-header-title">
                                                <h4 class="card-title">Change Password</h4>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <form>
                                                <div class="form-group">
                                                    <label for="cpass" class="form-label">Current Password:</label>
                                                    <a href="#" class="float-end">Forgot Password</a>
                                                    <input type="Password" class="form-control" id="cpass" value="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="npass" class="form-label">New Password:</label>
                                                    <input type="Password" class="form-control" id="npass" value="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="vpass" class="form-label">Verify Password:</label>
                                                    <input type="Password" class="form-control" id="vpass" value="">
                                                </div>
                                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                                                <button type="reset" class="btn bg-soft-danger">Cancle</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="emailandsms" role="tabpanel">
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between">
                                            <div class="header-title">
                                                <h4 class="card-title">Email and SMS</h4>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <form>
                                                <div class="form-group row align-items-center">
                                                    <label class="col-md-3" for="emailnotification">Email
                                                        Notification:</label>
                                                    <div class="col-md-9 form-check form-switch">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="flexSwitchCheckChecked11" checked>
                                                        <label class="form-check-label"
                                                            for="flexSwitchCheckChecked11">Checked switch checkbox
                                                            input</label>
                                                    </div>
                                                </div>
                                                <div class="form-group row align-items-center">
                                                    <label class="col-md-3" for="smsnotification">SMS
                                                        Notification:</label>
                                                    <div class="col-md-9 form-check form-switch">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="flexSwitchCheckChecked12" checked>
                                                        <label class="form-check-label"
                                                            for="flexSwitchCheckChecked12">Checked switch checkbox
                                                            input</label>
                                                    </div>
                                                </div>
                                                <div class="form-group row align-items-center">
                                                    <label class="col-md-3" for="npass">When To Email</label>
                                                    <div class="col-md-9">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="flexCheckDefault12">
                                                            <label class="form-check-label" for="flexCheckDefault12">
                                                                You have new notifications.
                                                            </label>
                                                        </div>
                                                        <div class="form-check d-block">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="email02">
                                                            <label class="form-check-label" for="email02">You're sent a
                                                                direct message</label>
                                                        </div>
                                                        <div class="form-check d-block">
                                                            <input type="checkbox" class="form-check-input" id="email03"
                                                                checked="">
                                                            <label class="form-check-label" for="email03">Someone adds
                                                                you as a connection</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row align-items-center">
                                                    <label class="col-md-3" for="npass">When To Escalate Emails</label>
                                                    <div class="col-md-9">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="email04">
                                                            <label class="form-check-label" for="email04">
                                                                Upon new order.
                                                            </label>
                                                        </div>
                                                        <div class="form-check d-block">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="email05">
                                                            <label class="form-check-label" for="email05">New membership
                                                                approval</label>
                                                        </div>
                                                        <div class="form-check d-block">
                                                            <input type="checkbox" class="form-check-input" id="email06"
                                                                checked="">
                                                            <label class="form-check-label" for="email06">Member
                                                                registration</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                                                <button type="reset" class="btn bg-soft-danger">Cancle</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="manage-contact" role="tabpanel">
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between">
                                            <div class="header-title">
                                                <h4 class="card-title">Manage Contact</h4>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <form>
                                                <div class="form-group">
                                                    <label for="cno" class="form-label">Contact Number:</label>
                                                    <input type="text" class="form-control" id="cno"
                                                        value="001 2536 123 458">
                                                </div>
                                                <div class="form-group">
                                                    <label for="email" class="form-label">Email:</label>
                                                    <input type="text" class="form-control" id="email"
                                                        value="Bnijone@demo.com">
                                                </div>
                                                <div class="form-group">
                                                    <label for="url" class="form-label">Url:</label>
                                                    <input type="text" class="form-control" id="url"
                                                        value="https://getbootstrap.com">
                                                </div>
                                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                                                <button type="reset" class="btn bg-soft-danger">Cancle</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Wrapper End-->
    <!-- offcanvas start -->
    <div class="right-sidebar-mini right-sidebar">
        <div class="right-sidebar-panel p-0">
            <div class="card shadow-none">
                <div class="card-body p-0">
                    <div class="media-height p-3" data-scrollbar="init">
                        <div class="d-flex align-items-center mb-4">
                            <div class="iq-profile-avatar status-online">
                                <img class="rounded-circle avatar-50" src="../assets/images/user/01.jpg" alt=""
                                    loading="lazy">
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0">Anna Sthesia</h6>
                                <p class="mb-0">Just Now</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <div class="iq-profile-avatar status-online">
                                <img class="rounded-circle avatar-50" src="../assets/images/user/02.jpg" alt=""
                                    loading="lazy">
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0">Paul Molive</h6>
                                <p class="mb-0">Admin</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <div class="iq-profile-avatar status-online">
                                <img class="rounded-circle avatar-50" src="../assets/images/user/03.jpg" alt=""
                                    loading="lazy">
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0">Anna Mull</h6>
                                <p class="mb-0">Admin</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <div class="iq-profile-avatar status-online">
                                <img class="rounded-circle avatar-50" src="../assets/images/user/04.jpg" alt=""
                                    loading="lazy">
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0">Paige Turner</h6>
                                <p class="mb-0">Admin</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <div class="iq-profile-avatar status-online">
                                <img class="rounded-circle avatar-50" src="../assets/images/user/11.jpg" alt=""
                                    loading="lazy">
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0">Bob Frapples</h6>
                                <p class="mb-0">Admin</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <div class="iq-profile-avatar status-online">
                                <img class="rounded-circle avatar-50" src="../assets/images/user/02.jpg" alt=""
                                    loading="lazy">
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0">Barb Ackue</h6>
                                <p class="mb-0">Admin</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <div class="iq-profile-avatar status-online">
                                <img class="rounded-circle avatar-50" src="../assets/images/user/03.jpg" alt=""
                                    loading="lazy">
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0">Greta Life</h6>
                                <p class="mb-0">Admin</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <div class="iq-profile-avatar status-away">
                                <img class="rounded-circle avatar-50" src="../assets/images/user/12.jpg" alt=""
                                    loading="lazy">
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0">Ira Membrit</h6>
                                <p class="mb-0">Admin</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <div class="iq-profile-avatar status-away">
                                <img class="rounded-circle avatar-50" src="../assets/images/user/01.jpg" alt=""
                                    loading="lazy">
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0">Pete Sariya</h6>
                                <p class="mb-0">Admin</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="iq-profile-avatar">
                                <img class="rounded-circle avatar-50" src="../assets/images/user/02.jpg" alt=""
                                    loading="lazy">
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0">Monty Carlo</h6>
                                <p class="mb-0">Admin</p>
                            </div>
                        </div>
                    </div>
                    <div class="right-sidebar-toggle bg-primary text-white mt-3 d-flex">
                        <span class="material-symbols-outlined">chat</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="iq-footer bg-white">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="../dashboard/privacy-policy.html">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="../dashboard/terms-of-service.html">Terms of Use</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 d-flex justify-content-end">
                    Copyright 2022 <a href="#"> SocialV</a> All Rights Reserved.
                </div>
            </div>
        </div>
    </footer> <!-- Live Customizer start -->
    <!-- Setting offcanvas start here -->
    <div class="offcanvas offcanvas-end live-customizer" tabindex="-1" id="live-customizer" data-bs-backdrop="false"
        data-bs-scroll="true" aria-labelledby="live-customizer-label">
        <div class="offcanvas-header pb-0">
            <div class="d-flex align-items-center">
                <h4 class="offcanvas-title" id="live-customizer-label">Setting Pannel</h4>
            </div>
            <div class="close-icon" data-bs-dismiss="offcanvas">
                <svg xmlns="http://www.w3.org/2000/svg" width="24px" class="h-5 w-5" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd" />
                </svg>
            </div>
        </div>
        <div class="offcanvas-body data-scrollbar">
            <div class="row">
                <div class="col-lg-12">
                    <div>
                        <div class="text-center mb-4">
                            <h5 class="d-inline-block">Style Setting</h5>
                        </div>
                        <div>
                            <!-- Theme start here -->
                            <div class="mb-4">
                                <h5 class="mb-3">Theme</h5>
                                <div class=" mb-3" data-setting="radio">
                                    <div class="form-check mb-0 w-100">
                                        <input class="form-check-input custum-redio-btn" type="radio" value="light"
                                            name="theme_scheme" id="color-mode-light" checked>
                                        <label
                                            class="form-check-label h6 d-flex align-items-center justify-content-between"
                                            for="color-mode-light">
                                            <span>Light Theme</span>
                                            <div class="text-primary ">
                                                <svg width="60" height="27" viewBox="0 0 60 27" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125"
                                                        fill="white" />
                                                    <circle cx="9.75" cy="9.75" r="3.75" fill="#80868B" />
                                                    <rect x="16.5" y="8.25" width="37.5" height="3" rx="1.5"
                                                        fill="#DADCE0" />
                                                    <rect x="6" y="18" width="48" height="3" rx="1.5"
                                                        fill="currentColor" />
                                                    <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125"
                                                        stroke="#DADCE0" stroke-width="0.75" />
                                                </svg>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <div class=" mb-3" data-setting="radio">
                                    <div class="form-check mb-0 w-100 ">
                                        <input class="form-check-input custum-redio-btn" type="radio" value="dark"
                                            name="theme_scheme" id="color-mode-dark">
                                        <label
                                            class="form-check-label h6 d-flex align-items-center justify-content-between"
                                            for="color-mode-dark">
                                            <span>Dark Theme</span>
                                            <div class="text-primary ">
                                                <svg width="60" height="27" viewBox="0 0 60 27" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125"
                                                        fill="#1E2745" />
                                                    <circle cx="9.75" cy="9.75" r="3.75" fill="#80868B" />
                                                    <rect x="16.5" y="8.25" width="37.5" height="3" rx="1.5"
                                                        fill="#DADCE0" />
                                                    <rect x="6" y="18" width="48" height="3" rx="1.5"
                                                        fill="currentColor" />
                                                    <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125"
                                                        stroke="currentColor" stroke-width="0.75" />
                                                </svg>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between" data-setting="radio">
                                    <div class="form-check mb-0 w-100">
                                        <input class="form-check-input custum-redio-btn" type="radio" value="auto"
                                            name="theme_scheme" id="color-mode-auto">
                                        <label
                                            class="form-check-label h6 d-flex align-items-center justify-content-between"
                                            for="color-mode-auto">
                                            <span>Device Default</span>
                                            <div class="text-primary ">
                                                <svg class="rounded" width="60" height="27" viewBox="0 0 60 27"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125"
                                                        fill="#1E2745" />
                                                    <circle cx="9.75" cy="9.75" r="3.75" fill="#80868B" />
                                                    <rect x="16.5" y="8.25" width="37.5" height="3" rx="1.5"
                                                        fill="#DADCE0" />
                                                    <rect x="6" y="18" width="48" height="3" rx="1.5"
                                                        fill="currentColor" />
                                                    <g clip-path="url(#clip0_507_92)">
                                                        <rect width="30" height="27" fill="white" />
                                                        <circle cx="9.75" cy="9.75" r="3.75" fill="#80868B" />
                                                        <rect x="16.5" y="8.25" width="37.5" height="3" rx="1.5"
                                                            fill="#DADCE0" />
                                                        <rect x="6" y="18" width="48" height="3" rx="1.5"
                                                            fill="currentColor" />
                                                    </g>
                                                    <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125"
                                                        stroke="#DADCE0" stroke-width="0.75" />
                                                    <defs>
                                                        <clipPath id="clip0_507_92">
                                                            <rect width="30" height="27" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </div>
                                        </label>
                                    </div>

                                </div>
                            </div>
                            <!-- Color customizer end here -->
                            <hr class="hr-horizontal">
                            <!-- Menu Style start here -->
                            <div>
                                <h5 class="mt-4 mb-3">Menu Style</h5>
                                <div class="d-grid gap-3 grid-cols-3 mb-4">
                                    <div data-setting="checkbox" class="text-center">
                                        <input type="checkbox" value="sidebar-mini" class="btn-check"
                                            name="sidebar_type" id="sidebar-mini">
                                        <label class="btn btn-border btn-setting-panel d-block overflow-hidden"
                                            for="sidebar-mini">
                                            Mini
                                        </label>
                                    </div>
                                    <div data-setting="checkbox" class="text-center">
                                        <input type="checkbox" value="sidebar-hover"
                                            data-extra="{target: '.sidebar', ClassListAdd: 'sidebar-mini'}"
                                            class="btn-check" name="sidebar_type" id="sidebar-hover">
                                        <label class="btn btn-border btn-setting-panel d-block overflow-hidden"
                                            for="sidebar-hover">
                                            Hover
                                        </label>
                                    </div>
                                    <div data-setting="checkbox" class="text-center">
                                        <input type="checkbox" value="sidebar-soft" class="btn-check"
                                            name="sidebar_type" id="sidebar-soft">
                                        <label class="btn btn-border btn-setting-panel d-block overflow-hidden"
                                            for="sidebar-soft">
                                            Soft
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Menu Style end here -->

                            <hr class="hr-horizontal">

                            <!-- Active Menu Style start here -->

                            <div class="mb-4">
                                <h5 class="mt-4 mb-3">Active Menu Style</h5>
                                <div class="d-grid gap-3 grid-cols-2">
                                    <div data-setting="radio" class="text-center">
                                        <input type="radio" value="navs-rounded" class="btn-check"
                                            name="sidebar_menu_style" id="navs-rounded">
                                        <label class="btn btn-border btn-setting-panel d-block overflow-hidden"
                                            for="navs-rounded">
                                            Rounded One
                                        </label>
                                    </div>
                                    <div data-setting="radio" class="text-center">
                                        <input type="radio" value="navs-rounded-all" class="btn-check"
                                            name="sidebar_menu_style" id="navs-rounded-all">
                                        <label class="btn btn-border btn-setting-panel d-block overflow-hidden"
                                            for="navs-rounded-all">
                                            Rounded All
                                        </label>
                                    </div>
                                    <div data-setting="radio" class="text-center">
                                        <input type="radio" value="navs-pill" class="btn-check"
                                            name="sidebar_menu_style" id="navs-pill">
                                        <label class="btn btn-border btn-setting-panel d-block overflow-hidden"
                                            for="navs-pill">
                                            Pill One Side
                                        </label>
                                    </div>
                                    <div data-setting="radio" class="text-center">
                                        <input type="radio" value="navs-pill-all" class="btn-check"
                                            name="sidebar_menu_style" id="navs-pill-all">
                                        <label class="btn btn-border btn-setting-panel d-block overflow-hidden"
                                            for="navs-pill-all">
                                            Pill All
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <hr class="hr-horizontal">
                            <!-- Color customizer start here -->
                            <div>
                                <div class="d-flex align-items-center justify-content-between my-3">
                                    <h5>Color Customizer</h5>
                                    <div class="d-flex align-items-center">
                                        <div data-setting="radio">
                                            <input type="radio" value="theme-color-default" class="btn-check"
                                                name="theme_color" id="theme-color-default"
                                                data-colors='{"primary": "#50b5ff", "info": "#d592ff"}'>
                                            <label class="btn bg-transparent" for="theme-color-default"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Reset Color"
                                                data-bs-original-title="Reset color">
                                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M21.4799 12.2424C21.7557 12.2326 21.9886 12.4482 21.9852 12.7241C21.9595 14.8075 21.2975 16.8392 20.0799 18.5506C18.7652 20.3986 16.8748 21.7718 14.6964 22.4612C12.518 23.1505 10.1711 23.1183 8.01299 22.3694C5.85488 21.6205 4.00382 20.196 2.74167 18.3126C1.47952 16.4293 0.875433 14.1905 1.02139 11.937C1.16734 9.68346 2.05534 7.53876 3.55018 5.82945C5.04501 4.12014 7.06478 2.93987 9.30193 2.46835C11.5391 1.99683 13.8711 2.2599 15.9428 3.2175L16.7558 1.91838C16.9822 1.55679 17.5282 1.62643 17.6565 2.03324L18.8635 5.85986C18.945 6.11851 18.8055 6.39505 18.549 6.48314L14.6564 7.82007C14.2314 7.96603 13.8445 7.52091 14.0483 7.12042L14.6828 5.87345C13.1977 5.18699 11.526 4.9984 9.92231 5.33642C8.31859 5.67443 6.8707 6.52052 5.79911 7.74586C4.72753 8.97119 4.09095 10.5086 3.98633 12.1241C3.8817 13.7395 4.31474 15.3445 5.21953 16.6945C6.12431 18.0446 7.45126 19.0658 8.99832 19.6027C10.5454 20.1395 12.2278 20.1626 13.7894 19.6684C15.351 19.1743 16.7062 18.1899 17.6486 16.8652C18.4937 15.6773 18.9654 14.2742 19.0113 12.8307C19.0201 12.5545 19.2341 12.3223 19.5103 12.3125L21.4799 12.2424Z"
                                                        fill="#31BAF1" />
                                                    <path
                                                        d="M20.0941 18.5594C21.3117 16.848 21.9736 14.8163 21.9993 12.7329C22.0027 12.4569 21.7699 12.2413 21.4941 12.2512L19.5244 12.3213C19.2482 12.3311 19.0342 12.5633 19.0254 12.8395C18.9796 14.283 18.5078 15.6861 17.6628 16.8739C16.7203 18.1986 15.3651 19.183 13.8035 19.6772C12.2419 20.1714 10.5595 20.1483 9.01246 19.6114C7.4654 19.0746 6.13845 18.0534 5.23367 16.7033C4.66562 15.8557 4.28352 14.9076 4.10367 13.9196C4.00935 18.0934 6.49194 21.37 10.008 22.6416C10.697 22.8908 11.4336 22.9852 12.1652 22.9465C13.075 22.8983 13.8508 22.742 14.7105 22.4699C16.8889 21.7805 18.7794 20.4073 20.0941 18.5594Z"
                                                        fill="#0169CA" />
                                                </svg>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-cols-5 mb-4 d-grid gap-3">
                                    <div data-setting="radio">
                                        <input type="radio" value="theme-color-blue" class="btn-check"
                                            name="theme_color" id="theme-color-1"
                                            data-colors='{"primary": "#4285F4", "info": "#EA4335"}'>
                                        <label class="btn btn-border d-block bg-transparent p-2" for="theme-color-1"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Gmail"
                                            data-bs-original-title="Gmail">
                                            <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" width="26" height="26">
                                                <circle cx="12" cy="12" r="10" fill="#4285F4" />
                                                <path d="M2,12 a1,1 1 1,0 20,0" fill="#EA4335" />
                                            </svg>
                                        </label>
                                    </div>
                                    <div data-setting="radio">
                                        <input type="radio" value="theme-color-red" class="btn-check" name="theme_color"
                                            id="theme-color-2" data-colors='{"primary": "#FF4500", "info": "#1A73E8"}'>
                                        <label class="btn btn-border  d-block bg-transparent p-2" for="theme-color-2"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Reddit"
                                            data-bs-original-title="Reddit">
                                            <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" width="26" height="26">
                                                <circle cx="12" cy="12" r="10" fill="#FF4500" />
                                                <path d="M2,12 a1,1 1 1,0 20,0" fill="#1A73E8" />
                                            </svg>
                                        </label>
                                    </div>
                                    <div data-setting="radio">
                                        <input type="radio" value="theme-color-purple" class="btn-check"
                                            name="theme_color" id="theme-color-3"
                                            data-colors='{"primary": "#8755f2", "info": "#EE4266"}'>
                                        <label class="btn btn-border d-block bg-transparent p-2" for="theme-color-3"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Twitch"
                                            data-bs-original-title="Twitch">
                                            <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" width="26" height="26">
                                                <circle cx="12" cy="12" r="10" fill="#8755f2" />
                                                <path d="M2,12 a1,1 1 1,0 20,0" fill="#EE4266" />
                                            </svg>
                                        </label>
                                    </div>
                                    <div data-setting="radio">
                                        <input type="radio" value="theme-color-cyan" class="btn-check"
                                            name="theme_color" id="theme-color-4"
                                            data-colors='{"primary": "#0A66C2", "info": "#333333"}'>
                                        <label class="btn btn-border d-block bg-transparent p-2" for="theme-color-4"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Linkdin"
                                            data-bs-original-title="Linkdin">
                                            <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" width="26" height="26">
                                                <circle cx="12" cy="12" r="10" fill="#0A66C2" />
                                                <path d="M2,12 a1,1 1 1,0 20,0" fill="#333333" />
                                            </svg>
                                        </label>
                                    </div>
                                    <div data-setting="radio">
                                        <input type="radio" value="theme-color-green" class="btn-check"
                                            name="theme_color" id="theme-color-5"
                                            data-colors='{"primary": "#00b75a", "info": "#000000"}'>
                                        <label class="btn btn-border d-block bg-transparent p-2" for="theme-color-5"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Spotify"
                                            data-bs-original-title="Spotify">
                                            <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" width="26" height="26">
                                                <circle cx="12" cy="12" r="10" fill="#00b75a" />
                                                <path d="M2,12 a1,1 1 1,0 20,0" fill="#000000" />
                                            </svg>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- Theme end here -->
                            <hr class="hr-horizontal">
                            <div>
                                <h5 class="mb-3 mt-4">Direction</h5>
                                <div class=" mb-3" data-setting="radio">
                                    <div class="form-check mb-0 w-100">
                                        <input class="form-check-input custum-redio-btn" type="radio" value="ltr"
                                            name="theme_scheme_direction" data-prop="dir"
                                            id="theme-scheme-direction-ltr" checked>
                                        <label
                                            class="form-check-label h6 d-flex align-items-center justify-content-between"
                                            for="theme-scheme-direction-ltr">
                                            <span>LTR</span>
                                            <svg class="text-primary" width="60" height="27" viewBox="0 0 60 27"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="11.5" cy="13.5002" r="6.5" fill="currentColor" />
                                                <rect x="21" y="7.70026" width="34" height="5" rx="2" fill="#80868B" />
                                                <rect opacity="0.5" x="21" y="16.1003" width="25.6281" height="3.2"
                                                    rx="1.6" fill="#80868B" />
                                                <rect x="0.375" y="0.375244" width="59.25" height="26.25" rx="4.125"
                                                    stroke="currentColor" stroke-width="0.75" />
                                            </svg>
                                        </label>
                                    </div>

                                </div>
                                <div class="mb-3" data-setting="radio">
                                    <div class="form-check mb-0 w-100">
                                        <input class="form-check-input custum-redio-btn" type="radio" value="rtl"
                                            class="btn-check" name="theme_scheme_direction" data-prop="dir"
                                            id="theme-scheme-direction-rtl">
                                        <label
                                            class="form-check-label h6 d-flex align-items-center justify-content-between "
                                            for="theme-scheme-direction-rtl">
                                            <span>RTL</span>
                                            <svg class="text-primary" width="60" height="27" viewBox="0 0 60 27"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle r="6.5" transform="matrix(-1 0 0 1 48.5 13.5002)"
                                                    fill="currentColor" />
                                                <rect width="34" height="5" rx="2"
                                                    transform="matrix(-1 0 0 1 39 7.70026)" fill="#80868B" />
                                                <rect opacity="0.5" width="25.6281" height="3.2" rx="1.6"
                                                    transform="matrix(-1 0 0 1 39 16.1003)" fill="#80868B" />
                                                <rect x="-0.375" y="0.375" width="59.25" height="26.25" rx="4.125"
                                                    transform="matrix(-1 0 0 1 59.25 0.000244141)" stroke="currentColor"
                                                    stroke-width="0.75" />
                                            </svg>
                                        </label>
                                    </div>

                                </div>
                            </div>
                            <!-- Theme end here -->
                            <!-- Active Menu Style end here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Settings sidebar end here -->

    <a class="btn btn-fixed-end btn-danger btn-icon btn-setting" id="settingbutton" data-bs-toggle="offcanvas"
        data-bs-target="#live-customizer" role="button" aria-controls="live-customizer">
        <span class="icon material-symbols-outlined animated-rotate text-white">
            settings
        </span>
    </a> <!-- Live Customizer end -->

    <div class="offcanvas offcanvas-bottom share-offcanvas" tabindex="-1" id="share-btn"
        aria-labelledby="shareBottomLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="shareBottomLabel">Share</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body small">
            <div class="d-flex flex-wrap align-items-center">
                <div class="text-center me-3 mb-3">
                    <img src="../assets/images/icon/08.png" class="img-fluid rounded mb-2" alt="" loading="lazy">
                    <h6>Facebook</h6>
                </div>
                <div class="text-center me-3 mb-3">
                    <img src="../assets/images/icon/09.png" class="img-fluid rounded mb-2" alt="" loading="lazy">
                    <h6>Twitter</h6>
                </div>
                <div class="text-center me-3 mb-3">
                    <img src="../assets/images/icon/10.png" class="img-fluid rounded mb-2" alt="" loading="lazy">
                    <h6>Instagram</h6>
                </div>
                <div class="text-center me-3 mb-3">
                    <img src="../assets/images/icon/11.png" class="img-fluid rounded mb-2" alt="" loading="lazy">
                    <h6>Google Plus</h6>
                </div>
                <div class="text-center me-3 mb-3">
                    <img src="../assets/images/icon/13.png" class="img-fluid rounded mb-2" alt="" loading="lazy">
                    <h6>In</h6>
                </div>
                <div class="text-center me-3 mb-3">
                    <img src="../assets/images/icon/12.png" class="img-fluid rounded mb-2" alt="" loading="lazy">
                    <h6>YouTube</h6>
                </div>
            </div>
        </div>
    </div>
    <!-- Backend Bundle JavaScript -->
    <script src="../assets/js/libs.min.js"></script>
    <!-- Lodash Utility -->
    <script src="../assets/vendor/lodash/lodash.min.js"></script>
    <!-- Utilities Functions -->
    <script src="../assets/js/setting/utility.js"></script>
    <!-- Settings Script -->
    <script src="../assets/js/setting/setting.js"></script>
    <!-- Settings Init Script -->
    <script src="../assets/js/setting/setting-init.js" defer></script>
    <!-- slider JavaScript -->
    <script src="../assets/js/slider.js"></script>
    <!-- masonry JavaScript -->
    <script src="../assets/js/masonry.pkgd.min.js"></script>
    <!-- SweetAlert JavaScript -->
    <script src="../assets/js/enchanter.js"></script>
    <!-- Sweet-alert Script -->
    <script src="../assets/vendor/sweetalert2/dist/sweetalert2.min.js" async></script>
    <script src="../assets/js/sweet-alert.js" defer></script>
    <!-- Chart Custom JavaScript -->
    <script src="../assets/js/customizer.js"></script>
    <!-- app JavaScript -->
    <script src="../assets/js/charts/weather-chart.js"></script>
    <script src="../assets/js/app.js"></script>
    <!-- Flatpickr Script -->
    <script src="../assets/vendor/flatpickr/dist/flatpickr.min.js"></script>
    <!-- fslightbox Script -->
    <script src="../assets/js/fslightbox.js" defer></script>
    <!-- vanilla Script -->
    <script src="../assets/vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>
    <!--lottie Script -->
    <script src="../assets/js/lottie.js"></script>
    <!--select2 Script -->
    <script src="../assets/js/select2.js"></script>



</body>

</html>