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
   <div>
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
                              <img src="../assets/images/page-img/profile-bg1.jpg" alt="profile-bg"
                                 class="rounded img-fluid" loading="lazy">
                             <br><br><br>
                           </div>
                           <div class="user-detail text-center mb-3">
                              <div class="profile-img">
                                 <img src="../assets/images/user/11.png" alt="profile-img" loading="lazy"
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
                                       <a href="#"><img src="../assets/images/icon/08.png" class="img-fluid rounded"
                                             alt="facebook" loading="lazy"></a>
                                    </li>
                                    <li class="text-center pe-3">
                                       <a href="#"><img src="../assets/images/icon/09.png" class="img-fluid rounded"
                                             alt="Twitter" loading="lazy"></a>
                                    </li>
                                    <li class="text-center pe-3">
                                       <a href="#"><img src="../assets/images/icon/10.png" class="img-fluid rounded"
                                             alt="Instagram" loading="lazy"></a>
                                    </li>
                                    <li class="text-center pe-3">
                                       <a href="#"><img src="../assets/images/icon/11.png" class="img-fluid rounded"
                                             alt="Google plus" loading="lazy"></a>
                                    </li>
                                    <li class="text-center pe-3">
                                       <a href="#"><img src="../assets/images/icon/12.png" class="img-fluid rounded"
                                             alt="You tube" loading="lazy"></a>
                                    </li>
                                    <li class="text-center md-pe-3 pe-0">
                                       <a href="#"><img src="../assets/images/icon/13.png" class="img-fluid rounded"
                                             alt="linkedin" loading="lazy"></a>
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
               <div class="col-sm-12">
                  <div class="tab-content">
                     <div class="tab-pane fade show active" id="timeline" role="tabpanel">
                        <div class="card-body p-0">
                           <div class="row">
                              <div class="col-lg-4">
                                 <div class="card">
                                    <div class="card-body">
                                       <a href="#"><span
                                             class="badge badge-pill bg-primary font-weight-normal ms-auto me-1 material-symbols-outlined md-14">grade</span>
                                          27 Items for yoou</a>
                                    </div>
                                 </div>
                                 <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                       <div class="header-title">
                                          <h4 class="card-title">Life Event</h4>
                                       </div>
                                       <div class="card-header-toolbar d-flex align-items-center">
                                          <p class="m-0"><a href="javacsript:void();"> Create </a></p>
                                       </div>
                                    </div>
                                    <div class="card-body">
                                       <div class="row">
                                          <div class="col-sm-12">
                                             <div class="event-post position-relative">
                                                <a href="#"><img src="../assets/images/page-img/07.jpg"
                                                      alt="gallary-image" class="img-fluid rounded" loading="lazy"></a>
                                                <div class="job-icon-position">
                                                   <div
                                                      class="job-icon bg-primary p-2 d-inline-block rounded-circle material-symbols-outlined text-white">
                                                      local_mall
                                                   </div>
                                                </div>
                                                <div class="card-body text-center p-2">
                                                   <h5>Started New Job at Apple</h5>
                                                   <p>January 24, 2019</p>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-sm-12">
                                             <div class="event-post position-relative">
                                                <a href="#"><img src="../assets/images/page-img/06.jpg"
                                                      alt="gallary-image" class="img-fluid rounded" loading="lazy"></a>
                                                <div class="job-icon-position">
                                                   <div
                                                      class="job-icon bg-primary p-2 d-inline-block rounded-circle material-symbols-outlined text-white">
                                                      local_mall
                                                   </div>
                                                </div>
                                                <div class="card-body text-center p-2">
                                                   <h5>Freelance Photographer</h5>
                                                   <p class="mb-0">January 24, 2019</p>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                       <div class="header-title">
                                          <h4 class="card-title">Photos</h4>
                                       </div>
                                       <div class="card-header-toolbar d-flex align-items-center">
                                          <p class="m-0"><a href="javacsript:void();">Add Photo </a></p>
                                       </div>
                                    </div>
                                    <div class="card-body">
                                       <ul class="profile-img-gallary p-0 m-0 list-unstyled">
                                          <li class="">
                                             <a data-fslightbox="gallery" href="../assets/images/page-img/g1.jpg">
                                                <img src="../assets/images/page-img/g1.jpg" class="img-fluid"
                                                   alt="photo-profile" loading="lazy">
                                             </a>
                                          </li>
                                          <li class="">
                                             <a data-fslightbox="gallery" href="../assets/images/page-img/g2.jpg">
                                                <img src="../assets/images/page-img/g2.jpg" class="img-fluid"
                                                   alt="photo-profile" loading="lazy">
                                             </a>
                                          </li>
                                          <li class="">
                                             <a data-fslightbox="gallery" href="../assets/images/page-img/g3.jpg">
                                                <img src="../assets/images/page-img/g3.jpg" class="img-fluid"
                                                   alt="photo-profile" loading="lazy">
                                             </a>
                                          </li>
                                          <li class="">
                                             <a data-fslightbox="gallery" href="../assets/images/page-img/g4.jpg">
                                                <img src="../assets/images/page-img/g4.jpg" class="img-fluid"
                                                   alt="photo-profile" loading="lazy">
                                             </a>
                                          </li>
                                          <li class="">
                                             <a data-fslightbox="gallery" href="../assets/images/page-img/g5.jpg">
                                                <img src="../assets/images/page-img/g5.jpg" class="img-fluid"
                                                   alt="photo-profile" loading="lazy">
                                             </a>
                                          </li>
                                          <li class="">
                                             <a data-fslightbox="gallery" href="../assets/images/page-img/g6.jpg">
                                                <img src="../assets/images/page-img/g6.jpg" class="img-fluid"
                                                   alt="photo-profile" loading="lazy">
                                             </a>
                                          </li>
                                          <li class="">
                                             <a data-fslightbox="gallery" href="../assets/images/page-img/g7.jpg">
                                                <img src="../assets/images/page-img/g7.jpg" class="img-fluid"
                                                   alt="photo-profile" loading="lazy">
                                             </a>
                                          </li>
                                          <li class="">
                                             <a data-fslightbox="gallery" href="../assets/images/page-img/g8.jpg">
                                                <img src="../assets/images/page-img/g8.jpg" class="img-fluid"
                                                   alt="photo-profile" loading="lazy">
                                             </a>
                                          </li>
                                          <li class="">
                                             <a data-fslightbox="gallery" href="../assets/images/page-img/g9.jpg">
                                                <img src="../assets/images/page-img/g9.jpg" class="img-fluid"
                                                   alt="photo-profile" loading="lazy">
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                       <div class="header-title">
                                          <h4 class="card-title">Friends</h4>
                                       </div>
                                       <div class="card-header-toolbar d-flex align-items-center">
                                          <p class="m-0"><a href="javacsript:void();">Add New </a></p>
                                       </div>
                                    </div>
                                    <div class="card-body">
                                       <ul class="profile-img-gallary p-0 m-0 list-unstyled">
                                          <li class="">
                                             <a href="#">
                                                <img src="../assets/images/user/05.jpg" alt="gallary-image"
                                                   loading="lazy" class="img-fluid" /></a>
                                             <h6 class="mt-2 text-center">Anna Rexia</h6>
                                          </li>
                                          <li class="">
                                             <a href="#"><img src="../assets/images/user/06.jpg" alt="gallary-image"
                                                   loading="lazy" class="img-fluid" /></a>
                                             <h6 class="mt-2 text-center">Tara Zona</h6>
                                          </li>
                                          <li class="">
                                             <a href="#"><img src="../assets/images/user/07.jpg" alt="gallary-image"
                                                   loading="lazy" class="img-fluid" /></a>
                                             <h6 class="mt-2 text-center">Polly Tech</h6>
                                          </li>
                                          <li class="">
                                             <a href="#"><img src="../assets/images/user/08.jpg" alt="gallary-image"
                                                   loading="lazy" class="img-fluid" /></a>
                                             <h6 class="mt-2 text-center">Bill Emia</h6>
                                          </li>
                                          <li class="">
                                             <a href="#"><img src="../assets/images/user/09.jpg" alt="gallary-image"
                                                   loading="lazy" class="img-fluid" /></a>
                                             <h6 class="mt-2 text-center">Moe Fugga</h6>
                                          </li>
                                          <li class="">
                                             <a href="#"><img src="../assets/images/user/10.jpg" alt="gallary-image"
                                                   loading="lazy" class="img-fluid" /></a>
                                             <h6 class="mt-2 text-center">Hal Appeno </h6>
                                          </li>
                                          <li class="">
                                             <a href="#"><img src="../assets/images/user/07.jpg" alt="gallary-image"
                                                   loading="lazy" class="img-fluid" /></a>
                                             <h6 class="mt-2 text-center">Zack Lee</h6>
                                          </li>
                                          <li class="">
                                             <a href="#"><img src="../assets/images/user/06.jpg" alt="gallary-image"
                                                   loading="lazy" class="img-fluid" /></a>
                                             <h6 class="mt-2 text-center">Terry Aki</h6>
                                          </li>
                                          <li class="">
                                             <a href="#"><img src="../assets/images/user/05.jpg" alt="gallary-image"
                                                   loading="lazy" class="img-fluid" /></a>
                                             <h6 class="mt-2 text-center">Greta Life</h6>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-8">
                                 <div id="post-modal-data" class="card">
                                    <div class="card-header d-flex justify-content-between">
                                       <div class="header-title">
                                          <h4 class="card-title">Create Post</h4>
                                       </div>
                                    </div>
                                    <div class="card-body">
                                       <div class="d-flex align-items-center">
                                          <div class="user-img">
                                             <img src="../assets/images/user/1.jpg" alt="userimg"
                                                class="avatar-60 rounded-circle">
                                          </div>
                                          <form class="post-text ms-3 w-100 " data-bs-toggle="modal"
                                             data-bs-target="#post-modal" action="#">
                                             <input type="text" class="form-control rounded"
                                                placeholder="Write something here..." style="border:none;">
                                          </form>
                                       </div>
                                       <hr>
                                       <ul class=" post-opt-block d-flex list-inline m-0 p-0 flex-wrap">
                                          <li
                                             class="bg-soft-primary rounded p-2 pointer d-flex align-items-center me-3 mb-md-0 mb-2">
                                             <img src="../assets/images/small/07.png" alt="icon" class="img-fluid me-2"
                                                loading="lazy"> Photo/Video</li>
                                          <li
                                             class="bg-soft-primary rounded p-2 pointer d-flex align-items-center me-3 mb-md-0 mb-2">
                                             <img src="../assets/images/small/08.png" alt="icon" class="img-fluid me-2"
                                                loading="lazy"> Tag Friend</li>
                                          <li
                                             class="bg-soft-primary rounded p-2 pointer d-flex align-items-center me-3">
                                             <img src="../assets/images/small/09.png" alt="icon" class="img-fluid me-2"
                                                loading="lazy"> Feeling/Activity</li>
                                          <li class="bg-soft-primary rounded p-2 pointer text-center">
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <div class="dropdown-toggle" id="post-option"
                                                      data-bs-toggle="dropdown">
                                                      <span class="material-symbols-outlined">
                                                         more_horiz
                                                      </span>
                                                   </div>
                                                   <div class="dropdown-menu dropdown-menu-right"
                                                      aria-labelledby="post-option">
                                                      <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                         data-bs-target="#post-modal">Check in</a>
                                                      <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                         data-bs-target="#post-modal">Live Video</a>
                                                      <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                         data-bs-target="#post-modal">Gif</a>
                                                      <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                         data-bs-target="#post-modal">Watch Party</a>
                                                      <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                         data-bs-target="#post-modal">Play with Friend</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="modal fade" id="post-modal" tabindex="-1"
                                       aria-labelledby="post-modalLabel" aria-hidden="true">
                                       <div class="modal-dialog  modal-lg modal-fullscreen-sm-down">
                                          <div class="modal-content">
                                             <div class="modal-header">
                                                <h5 class="modal-title" id="post-modalLabel">Create Post</h5>
                                                <a href="javascript:void(0);" class="lh-1" data-bs-dismiss="modal">
                                                   <span class="material-symbols-outlined">close</span>
                                                </a>
                                             </div>
                                             <div class="modal-body">
                                                <div class="d-flex align-items-center">
                                                   <div class="user-img">
                                                      <img src="../assets/images/user/1.jpg" alt="userimg"
                                                         class="avatar-60 rounded-circle img-fluid" loading="lazy">
                                                   </div>
                                                   <form class="post-text ms-3 w-100" action="#">
                                                      <input type="text" class="form-control rounded"
                                                         placeholder="Write something here..." style="border:none;">
                                                   </form>
                                                </div>
                                                <hr>
                                                <ul class="d-flex flex-wrap align-items-center list-inline m-0 p-0">
                                                   <li class="col-md-6 mb-3">
                                                      <div class="bg-soft-primary rounded p-2 pointer me-3"><a
                                                            href="#"></a><img src="../assets/images/small/07.png"
                                                            alt="icon" class="img-fluid" loading="lazy"> Photo/Video
                                                      </div>
                                                   </li>
                                                   <li class="col-md-6 mb-3">
                                                      <div class="bg-soft-primary rounded p-2 pointer me-3"><a
                                                            href="#"></a><img src="../assets/images/small/08.png"
                                                            alt="icon" class="img-fluid" loading="lazy"> Tag Friend
                                                      </div>
                                                   </li>
                                                   <li class="col-md-6 mb-3">
                                                      <div class="bg-soft-primary rounded p-2 pointer me-3"><a
                                                            href="#"></a><img src="../assets/images/small/09.png"
                                                            alt="icon" class="img-fluid" loading="lazy">
                                                         Feeling/Activity</div>
                                                   </li>
                                                   <li class="col-md-6 mb-3">
                                                      <div class="bg-soft-primary rounded p-2 pointer me-3"><a
                                                            href="#"></a><img src="../assets/images/small/10.png"
                                                            alt="icon" class="img-fluid" loading="lazy"> Check in</div>
                                                   </li>
                                                   <li class="col-md-6 mb-3">
                                                      <div class="bg-soft-primary rounded p-2 pointer me-3"><a
                                                            href="#"></a><img src="../assets/images/small/11.png"
                                                            alt="icon" class="img-fluid" loading="lazy"> Live Video
                                                      </div>
                                                   </li>
                                                   <li class="col-md-6 mb-3">
                                                      <div class="bg-soft-primary rounded p-2 pointer me-3"><a
                                                            href="#"></a><img src="../assets/images/small/12.png"
                                                            alt="icon" class="img-fluid" loading="lazy"> Gif</div>
                                                   </li>
                                                   <li class="col-md-6 mb-3">
                                                      <div class="bg-soft-primary rounded p-2 pointer me-3"><a
                                                            href="#"></a><img src="../assets/images/small/13.png"
                                                            alt="icon" class="img-fluid" loading="lazy"> Watch Party
                                                      </div>
                                                   </li>
                                                   <li class="col-md-6 mb-3">
                                                      <div class="bg-soft-primary rounded p-2 pointer me-3"><a
                                                            href="#"></a><img src="../assets/images/small/14.png"
                                                            alt="icon" class="img-fluid" loading="lazy"> Play with
                                                         Friends</div>
                                                   </li>
                                                </ul>
                                                <hr>
                                                <div class="other-option">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <div class="user-img me-3">
                                                            <img src="../assets/images/user/1.jpg" alt="userimg"
                                                               class="avatar-60 rounded-circle img-fluid"
                                                               loading="lazy">
                                                         </div>
                                                         <h6>Your Story</h6>
                                                      </div>
                                                      <div class="card-post-toolbar">
                                                         <div class="dropdown">
                                                            <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                               aria-haspopup="true" aria-expanded="false" role="button">
                                                               <span class="btn btn-primary">Friend</span>
                                                            </span>
                                                            <div class="dropdown-menu m-0 p-0">
                                                               <a class="dropdown-item p-3" href="#">
                                                                  <div class="d-flex align-items-top">
                                                                     <span class="material-symbols-outlined">
                                                                        save
                                                                     </span>
                                                                     <div class="data ms-2">
                                                                        <h6>Public</h6>
                                                                        <p class="mb-0">Anyone on or off Facebook</p>
                                                                     </div>
                                                                  </div>
                                                               </a>
                                                               <a class="dropdown-item p-3" href="#">
                                                                  <div class="d-flex align-items-top">
                                                                     <span class="material-symbols-outlined">
                                                                        cancel
                                                                     </span>
                                                                     <div class="data ms-2">
                                                                        <h6>Friends</h6>
                                                                        <p class="mb-0">Your Friend on facebook</p>
                                                                     </div>
                                                                  </div>
                                                               </a>
                                                               <a class="dropdown-item p-3" href="#">
                                                                  <div class="d-flex align-items-top">
                                                                     <span class="material-symbols-outlined">
                                                                        person_remove
                                                                     </span>
                                                                     <div class="data ms-2">
                                                                        <h6>Friends except</h6>
                                                                        <p class="mb-0">Don't show to some friends</p>
                                                                     </div>
                                                                  </div>
                                                               </a>
                                                               <a class="dropdown-item p-3" href="#">
                                                                  <div class="d-flex align-items-top">
                                                                     <span class="material-symbols-outlined">
                                                                        notifications
                                                                     </span>
                                                                     <div class="data ms-2">
                                                                        <h6>Only Me</h6>
                                                                        <p class="mb-0">Only me</p>
                                                                     </div>
                                                                  </div>
                                                               </a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <button type="submit"
                                                   class="btn btn-primary d-block w-100 mt-3">Post</button>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="card">
                                    <div class="card-body">
                                       <div class="post-item">
                                          <div class="user-post-data pb-3">
                                             <div class="d-flex justify-content-between">
                                                <div class="me-3">
                                                   <img class="rounded-circle  avatar-60"
                                                      src="../assets/images/user/1.jpg" alt="" loading="lazy">
                                                </div>
                                                <div class="w-100">
                                                   <div class="d-flex justify-content-between flex-wrap">
                                                      <div class="">
                                                         <h5 class="mb-0 d-inline-block"><a href="#" class="">Bni
                                                               Cyst</a></h5>
                                                         <p class="ms-1 mb-0 d-inline-block">Add New Post</p>
                                                         <p class="mb-0">3 hour ago</p>
                                                      </div>
                                                      <div class="card-post-toolbar">
                                                         <div class="dropdown">
                                                            <span class="dropdown-toggle material-symbols-outlined"
                                                               data-bs-toggle="dropdown" aria-haspopup="true"
                                                               aria-expanded="false" role="button">
                                                               more_horiz
                                                            </span>
                                                            <div class="dropdown-menu m-0 p-0">
                                                               <a class="dropdown-item p-3" href="#">
                                                                  <div class="d-flex align-items-top">
                                                                     <span class="material-symbols-outlined">
                                                                        save
                                                                     </span>
                                                                     <div class="data ms-2">
                                                                        <h6>Save Post</h6>
                                                                        <p class="mb-0">Add this to your saved items</p>
                                                                     </div>
                                                                  </div>
                                                               </a>
                                                               <a class="dropdown-item p-3" href="#">
                                                                  <div class="d-flex align-items-top">
                                                                     <span class="material-symbols-outlined">
                                                                        edit
                                                                     </span>
                                                                     <div class="data ms-2">
                                                                        <h6>Edit Post</h6>
                                                                        <p class="mb-0">Update your post and saved items
                                                                        </p>
                                                                     </div>
                                                                  </div>
                                                               </a>
                                                               <a class="dropdown-item p-3" href="#">
                                                                  <div class="d-flex align-items-top">
                                                                     <span class="material-symbols-outlined">
                                                                        cancel
                                                                     </span>
                                                                     <div class="data ms-2">
                                                                        <h6>Hide From Timeline</h6>
                                                                        <p class="mb-0">See fewer posts like this.</p>
                                                                     </div>
                                                                  </div>
                                                               </a>
                                                               <a class="dropdown-item p-3" href="#">
                                                                  <div class="d-flex align-items-top">
                                                                     <span class="material-symbols-outlined">
                                                                        delete
                                                                     </span>
                                                                     <div class="data ms-2">
                                                                        <h6>Delete</h6>
                                                                        <p class="mb-0">Remove thids Post on Timeline
                                                                        </p>
                                                                     </div>
                                                                  </div>
                                                               </a>
                                                               <a class="dropdown-item p-3" href="#">
                                                                  <div class="d-flex align-items-top">
                                                                     <span class="material-symbols-outlined">
                                                                        notifications
                                                                     </span>
                                                                     <div class="data ms-2">
                                                                        <h6>Notifications</h6>
                                                                        <p class="mb-0">Turn on notifications for this
                                                                           post</p>
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
                                          <div class="user-post">
                                             <a href="#"><img src="../assets/images/page-img/p1.jpg" alt="post-image"
                                                   loading="lazy" class="img-fluid w-100" /></a>
                                          </div>
                                          <div class="comment-area mt-3">
                                             <div class="d-flex justify-content-between align-items-center flex-wrap">
                                                <div class="like-block position-relative d-flex align-items-center">
                                                   <div class="d-flex align-items-center">
                                                      <div class="like-data">
                                                         <div class="dropdown">
                                                            <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                               aria-haspopup="true" aria-expanded="false" role="button">
                                                               <img src="../assets/images/icon/01.png" class="img-fluid"
                                                                  alt="">
                                                            </span>
                                                            <div class="dropdown-menu py-2">
                                                               <a class="ms-2 me-2" href="#" data-bs-toggle="tooltip"
                                                                  data-bs-placement="top" title="Like"><img
                                                                     src="../assets/images/icon/01.png"
                                                                     class="img-fluid" alt=""></a>
                                                               <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                                  data-bs-placement="top" title="Love"><img
                                                                     src="../assets/images/icon/02.png"
                                                                     class="img-fluid" alt=""></a>
                                                               <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                                  data-bs-placement="top" title="Happy"><img
                                                                     src="../assets/images/icon/03.png"
                                                                     class="img-fluid" alt=""></a>
                                                               <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                                  data-bs-placement="top" title="HaHa"><img
                                                                     src="../assets/images/icon/04.png"
                                                                     class="img-fluid" alt=""></a>
                                                               <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                                  data-bs-placement="top" title="Think"><img
                                                                     src="../assets/images/icon/05.png"
                                                                     class="img-fluid" alt=""></a>
                                                               <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                                  data-bs-placement="top" title="Sade"><img
                                                                     src="../assets/images/icon/06.png"
                                                                     class="img-fluid" alt=""></a>
                                                               <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                                  data-bs-placement="top" title="Lovely"><img
                                                                     src="../assets/images/icon/07.png"
                                                                     class="img-fluid" alt=""></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="total-like-block ms-2 me-3">
                                                         <div class="dropdown">
                                                            <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                               aria-haspopup="true" aria-expanded="false" role="button">
                                                               140 Likes
                                                            </span>
                                                            <div class="dropdown-menu">
                                                               <a class="dropdown-item" href="#">Max Emum</a>
                                                               <a class="dropdown-item" href="#">Bill Yerds</a>
                                                               <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                                               <a class="dropdown-item" href="#">Tara Misu</a>
                                                               <a class="dropdown-item" href="#">Midge Itz</a>
                                                               <a class="dropdown-item" href="#">Sal Vidge</a>
                                                               <a class="dropdown-item" href="#">Other</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="total-comment-block">
                                                      <div class="dropdown">
                                                         <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false" role="button">
                                                            20 Comment
                                                         </span>
                                                         <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Max Emum</a>
                                                            <a class="dropdown-item" href="#">Bill Yerds</a>
                                                            <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                                            <a class="dropdown-item" href="#">Tara Misu</a>
                                                            <a class="dropdown-item" href="#">Midge Itz</a>
                                                            <a class="dropdown-item" href="#">Sal Vidge</a>
                                                            <a class="dropdown-item" href="#">Other</a>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div
                                                   class="share-block d-flex align-items-center feather-icon mt-2 mt-md-0">
                                                   <a href="#" data-bs-toggle="offcanvas" data-bs-target="#share-btn"
                                                      aria-controls="share-btn" class="d-flex align-items-center"><span
                                                         class="material-symbols-outlined md-18">
                                                         share
                                                      </span>
                                                      <span class="ms-1">99 Share</span></a>
                                                </div>
                                             </div>
                                             <hr>
                                             <ul class="post-comments p-0 m-0">
                                                <li class="mb-2">
                                                   <div class="d-flex flex-wrap">
                                                      <div class="user-img">
                                                         <img src="../assets/images/user/02.jpg" loading="lazy"
                                                            alt="userimg" class="avatar-35 rounded-circle img-fluid">
                                                      </div>
                                                      <div class="comment-data-block ms-3">
                                                         <h6>Monty Carlo</h6>
                                                         <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                                         <div
                                                            class="d-flex flex-wrap align-items-center comment-activity">
                                                            <a href="#">like</a>
                                                            <a href="#">reply</a>
                                                            <a href="#">translate</a>
                                                            <span> 5 min </span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </li>
                                                <li>
                                                   <div class="d-flex flex-wrap">
                                                      <div class="user-img">
                                                         <img src="../assets/images/user/03.jpg" alt="userimg"
                                                            class="avatar-35 rounded-circle img-fluid" loading="lazy">
                                                      </div>
                                                      <div class="comment-data-block ms-3">
                                                         <h6>Paul Molive</h6>
                                                         <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                                         <div
                                                            class="d-flex flex-wrap align-items-center comment-activity">
                                                            <a href="#">like</a>
                                                            <a href="#">reply</a>
                                                            <a href="#">translate</a>
                                                            <span> 5 min </span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </li>
                                             </ul>
                                             <form class="comment-text d-flex align-items-center mt-3"
                                                action="javascript:void(0);">
                                                <input type="text" class="form-control rounded"
                                                   placeholder="Enter Your Comment">
                                                <div class="comment-attagement d-flex">
                                                   <a href="javascript:void(0);"
                                                      class="material-symbols-outlined me-3 link">
                                                      insert_link
                                                   </a>
                                                   <a href="javascript:void(0);"
                                                      class="material-symbols-outlined  me-3">
                                                      sentiment_satisfied
                                                   </a>
                                                   <a href="javascript:void(0);"
                                                      class="material-symbols-outlined  me-3">
                                                      photo_camera
                                                   </a>
                                                </div>
                                             </form>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="card">
                                    <div class="card-body">
                                       <div class="post-item">
                                          <div class="user-post-data py-3">
                                             <div class="d-flex  justify-content-between">
                                                <div class="me-3">
                                                   <img class="rounded-circle  avatar-60"
                                                      src="../assets/images/user/1.jpg" alt="" loading="lazy">
                                                </div>
                                                <div class="w-100">
                                                   <div class="d-flex justify-content-between">
                                                      <div class="">
                                                         <h5 class="mb-0 d-inline-block me-1"><a href="#" class="">Bni
                                                               Cyst</a></h5>
                                                         <p class="mb-0 d-inline-block">Share Anna Mull's Post</p>
                                                         <p class="mb-0">5 hour ago</p>
                                                      </div>
                                                      <div class="card-post-toolbar">
                                                         <div class="dropdown">
                                                            <span class="dropdown-toggle material-symbols-outlined"
                                                               data-bs-toggle="dropdown" aria-haspopup="true"
                                                               aria-expanded="false" role="button">
                                                               more_horiz
                                                            </span>
                                                            <div class="dropdown-menu m-0 p-0">
                                                               <a class="dropdown-item p-3" href="#">
                                                                  <div class="d-flex align-items-top">
                                                                     <span class="material-symbols-outlined">
                                                                        save
                                                                     </span>
                                                                     <div class="data ms-2">
                                                                        <h6>Save Post</h6>
                                                                        <p class="mb-0">Add this to your saved items</p>
                                                                     </div>
                                                                  </div>
                                                               </a>
                                                               <a class="dropdown-item p-3" href="#">
                                                                  <div class="d-flex align-items-top">
                                                                     <span class="material-symbols-outlined">
                                                                        edit
                                                                     </span>
                                                                     <div class="data ms-2">
                                                                        <h6>Edit Post</h6>
                                                                        <p class="mb-0">Update your post and saved items
                                                                        </p>
                                                                     </div>
                                                                  </div>
                                                               </a>
                                                               <a class="dropdown-item p-3" href="#">
                                                                  <div class="d-flex align-items-top">
                                                                     <span class="material-symbols-outlined">
                                                                        cancel
                                                                     </span>
                                                                     <div class="data ms-2">
                                                                        <h6>Hide From Timeline</h6>
                                                                        <p class="mb-0">See fewer posts like this.</p>
                                                                     </div>
                                                                  </div>
                                                               </a>
                                                               <a class="dropdown-item p-3" href="#">
                                                                  <div class="d-flex align-items-top">
                                                                     <span class="material-symbols-outlined">
                                                                        delete
                                                                     </span>
                                                                     <div class="data ms-2">
                                                                        <h6>Delete</h6>
                                                                        <p class="mb-0">Remove thids Post on Timeline
                                                                        </p>
                                                                     </div>
                                                                  </div>
                                                               </a>
                                                               <a class="dropdown-item p-3" href="#">
                                                                  <div class="d-flex align-items-top">
                                                                     <span class="material-symbols-outlined">
                                                                        notifications
                                                                     </span>
                                                                     <div class="data ms-2">
                                                                        <h6>Notifications</h6>
                                                                        <p class="mb-0">Turn on notifications for this
                                                                           post</p>
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
                                          <div class="user-post">
                                             <a href="#"><img src="../assets/images/page-img/p3.jpg" alt="post-image"
                                                   loading="lazy" class="img-fluid w-100" /></a>
                                          </div>
                                          <div class="comment-area mt-3">
                                             <div class="d-flex justify-content-between align-items-center flex-wrap">
                                                <div class="like-block position-relative d-flex align-items-center">
                                                   <div class="d-flex align-items-center">
                                                      <div class="like-data">
                                                         <div class="dropdown">
                                                            <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                               aria-haspopup="true" aria-expanded="false" role="button">
                                                               <img src="../assets/images/icon/01.png" class="img-fluid"
                                                                  alt="" loading="lazy">
                                                            </span>
                                                            <div class="dropdown-menu py-2">
                                                               <a class="ms-2 me-2" href="#" data-bs-toggle="tooltip"
                                                                  data-bs-placement="top" title="Like"><img
                                                                     src="../assets/images/icon/01.png"
                                                                     class="img-fluid" alt="" loading="lazy"></a>
                                                               <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                                  data-bs-placement="top" title="Love"><img
                                                                     src="../assets/images/icon/02.png"
                                                                     class="img-fluid" alt="" loading="lazy"></a>
                                                               <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                                  data-bs-placement="top" title="Happy"><img
                                                                     src="../assets/images/icon/03.png"
                                                                     class="img-fluid" alt="" loading="lazy"></a>
                                                               <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                                  data-bs-placement="top" title="HaHa"><img
                                                                     src="../assets/images/icon/04.png"
                                                                     class="img-fluid" alt="" loading="lazy"></a>
                                                               <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                                  data-bs-placement="top" title="Think"><img
                                                                     src="../assets/images/icon/05.png"
                                                                     class="img-fluid" alt="" loading="lazy"></a>
                                                               <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                                  data-bs-placement="top" title="Sade"><img
                                                                     src="../assets/images/icon/06.png"
                                                                     class="img-fluid" alt="" loading="lazy"></a>
                                                               <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                                  data-bs-placement="top" title="Lovely"><img
                                                                     src="../assets/images/icon/07.png"
                                                                     class="img-fluid" alt="" loading="lazy"></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="total-like-block ms-2 me-3">
                                                         <div class="dropdown">
                                                            <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                               aria-haspopup="true" aria-expanded="false" role="button">
                                                               140 Likes
                                                            </span>
                                                            <div class="dropdown-menu">
                                                               <a class="dropdown-item" href="#">Max Emum</a>
                                                               <a class="dropdown-item" href="#">Bill Yerds</a>
                                                               <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                                               <a class="dropdown-item" href="#">Tara Misu</a>
                                                               <a class="dropdown-item" href="#">Midge Itz</a>
                                                               <a class="dropdown-item" href="#">Sal Vidge</a>
                                                               <a class="dropdown-item" href="#">Other</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="total-comment-block">
                                                      <div class="dropdown">
                                                         <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false" role="button">
                                                            20 Comment
                                                         </span>
                                                         <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Max Emum</a>
                                                            <a class="dropdown-item" href="#">Bill Yerds</a>
                                                            <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                                            <a class="dropdown-item" href="#">Tara Misu</a>
                                                            <a class="dropdown-item" href="#">Midge Itz</a>
                                                            <a class="dropdown-item" href="#">Sal Vidge</a>
                                                            <a class="dropdown-item" href="#">Other</a>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div
                                                   class="share-block d-flex align-items-center feather-icon mt-2 mt-md-0">
                                                   <a href="#" data-bs-toggle="offcanvas" data-bs-target="#share-btn"
                                                      aria-controls="share-btn" class="d-flex align-items-center">
                                                      <span class="material-symbols-outlined md-18">
                                                         share
                                                      </span>
                                                      <span class="ms-1">99 Share</span></a>
                                                </div>
                                             </div>
                                             <hr>
                                             <ul class="post-comments p-0 m-0">
                                                <li class="mb-2">
                                                   <div class="d-flex flex-wrap">
                                                      <div class="user-img">
                                                         <img src="../assets/images/user/02.jpg" alt="userimg"
                                                            class="avatar-35 rounded-circle img-fluid" loading="lazy">
                                                      </div>
                                                      <div class="comment-data-block ms-3">
                                                         <h6>Monty Carlo</h6>
                                                         <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                                         <div
                                                            class="d-flex flex-wrap align-items-center comment-activity">
                                                            <a href="#">like</a>
                                                            <a href="#">reply</a>
                                                            <a href="#">translate</a>
                                                            <span> 5 min </span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </li>
                                                <li>
                                                   <div class="d-flex flex-wrap">
                                                      <div class="user-img">
                                                         <img src="../assets/images/user/03.jpg" alt="userimg"
                                                            class="avatar-35 rounded-circle img-fluid" loading="lazy">
                                                      </div>
                                                      <div class="comment-data-block ms-3">
                                                         <h6>Paul Molive</h6>
                                                         <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                                         <div
                                                            class="d-flex flex-wrap align-items-center comment-activity">
                                                            <a href="#">like</a>
                                                            <a href="#">reply</a>
                                                            <a href="#">translate</a>
                                                            <span> 5 min </span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </li>
                                             </ul>
                                             <form class="comment-text d-flex align-items-center mt-3"
                                                action="javascript:void(0);">
                                                <input type="text" class="form-control rounded"
                                                   placeholder="Enter Your Comment">
                                                <div class="comment-attagement d-flex">
                                                   <a href="javascript:void(0);"
                                                      class="material-symbols-outlined me-3 link">
                                                      insert_link
                                                   </a>
                                                   <a href="javascript:void(0);"
                                                      class="material-symbols-outlined  me-3">
                                                      sentiment_satisfied
                                                   </a>
                                                   <a href="javascript:void(0);"
                                                      class="material-symbols-outlined  me-3">
                                                      photo_camera
                                                   </a>
                                                </div>
                                             </form>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="card">
                                    <div class="card-body">
                                       <div class="post-item">
                                          <div class="user-post-data py-3">
                                             <div class="d-flex justify-content-between">
                                                <div class="me-3">
                                                   <img class="rounded-circle avatar-60"
                                                      src="../assets/images/user/1.jpg" alt="" loading="lazy">
                                                </div>
                                                <div class="w-100">
                                                   <div class="d-flex justify-content-between">
                                                      <div class="">
                                                         <h5 class="mb-0 d-inline-block"><a href="#" class="">Bni
                                                               Cyst</a></h5>
                                                         <p class="ms-1 mb-0 d-inline-block">Update his Status</p>
                                                         <p class="mb-0">7 hour ago</p>
                                                      </div>
                                                      <div class="card-post-toolbar">
                                                         <div class="dropdown">
                                                            <span class="dropdown-toggle material-symbols-outlined"
                                                               data-bs-toggle="dropdown" aria-haspopup="true"
                                                               aria-expanded="false" role="button">
                                                               more_horiz
                                                            </span>
                                                            <div class="dropdown-menu m-0 p-0">
                                                               <a class="dropdown-item p-3" href="#">
                                                                  <div class="d-flex align-items-top">
                                                                     <span class="material-symbols-outlined">
                                                                        save
                                                                     </span>
                                                                     <div class="data ms-2">
                                                                        <h6>Save Post</h6>
                                                                        <p class="mb-0">Add this to your saved items</p>
                                                                     </div>
                                                                  </div>
                                                               </a>
                                                               <a class="dropdown-item p-3" href="#">
                                                                  <div class="d-flex align-items-top">
                                                                     <span class="material-symbols-outlined">
                                                                        edit
                                                                     </span>
                                                                     <div class="data ms-2">
                                                                        <h6>Edit Post</h6>
                                                                        <p class="mb-0">Update your post and saved items
                                                                        </p>
                                                                     </div>
                                                                  </div>
                                                               </a>
                                                               <a class="dropdown-item p-3" href="#">
                                                                  <div class="d-flex align-items-top">
                                                                     <span class="material-symbols-outlined">
                                                                        cancel
                                                                     </span>
                                                                     <div class="data ms-2">
                                                                        <h6>Hide From Timeline</h6>
                                                                        <p class="mb-0">See fewer posts like this.</p>
                                                                     </div>
                                                                  </div>
                                                               </a>
                                                               <a class="dropdown-item p-3" href="#">
                                                                  <div class="d-flex align-items-top">
                                                                     <span class="material-symbols-outlined">
                                                                        delete
                                                                     </span>
                                                                     <div class="data ms-2">
                                                                        <h6>Delete</h6>
                                                                        <p class="mb-0">Remove thids Post on Timeline
                                                                        </p>
                                                                     </div>
                                                                  </div>
                                                               </a>
                                                               <a class="dropdown-item p-3" href="#">
                                                                  <div class="d-flex align-items-top">
                                                                     <span class="material-symbols-outlined">
                                                                        notifications
                                                                     </span>
                                                                     <div class="data ms-2">
                                                                        <h6>Notifications</h6>
                                                                        <p class="mb-0">Turn on notifications for this
                                                                           post</p>
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
                                          <div class="user-post">
                                             <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type specimen book. It has survived not only five
                                                centuries,</p>
                                          </div>
                                          <div class="comment-area mt-3">
                                             <div class="d-flex justify-content-between align-items-center flex-wrap">
                                                <div class="like-block position-relative d-flex align-items-center">
                                                   <div class="d-flex align-items-center">
                                                      <div class="like-data">
                                                         <div class="dropdown">
                                                            <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                               aria-haspopup="true" aria-expanded="false" role="button">
                                                               <img src="../assets/images/icon/01.png" class="img-fluid"
                                                                  alt="" loading="lazy">
                                                            </span>
                                                            <div class="dropdown-menu py-2">
                                                               <a class="ms-2 me-2" href="#" data-bs-toggle="tooltip"
                                                                  data-bs-placement="top" title="Like"><img
                                                                     src="../assets/images/icon/01.png"
                                                                     class="img-fluid" alt="" loading="lazy"></a>
                                                               <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                                  data-bs-placement="top" title="Love"><img
                                                                     src="../assets/images/icon/02.png"
                                                                     class="img-fluid" alt="" loading="lazy"></a>
                                                               <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                                  data-bs-placement="top" title="Happy"><img
                                                                     src="../assets/images/icon/03.png"
                                                                     class="img-fluid" alt="" loading="lazy"></a>
                                                               <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                                  data-bs-placement="top" title="HaHa"><img
                                                                     src="../assets/images/icon/04.png"
                                                                     class="img-fluid" alt="" loading="lazy"></a>
                                                               <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                                  data-bs-placement="top" title="Think"><img
                                                                     src="../assets/images/icon/05.png"
                                                                     class="img-fluid" alt="" loading="lazy"></a>
                                                               <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                                  data-bs-placement="top" title="Sade"><img
                                                                     src="../assets/images/icon/06.png"
                                                                     class="img-fluid" alt="" loading="lazy"></a>
                                                               <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                                  data-bs-placement="top" title="Lovely"><img
                                                                     src="../assets/images/icon/07.png"
                                                                     class="img-fluid" alt="" loading="lazy"></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="total-like-block ms-2 me-3">
                                                         <div class="dropdown">
                                                            <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                               aria-haspopup="true" aria-expanded="false" role="button">
                                                               140 Likes
                                                            </span>
                                                            <div class="dropdown-menu">
                                                               <a class="dropdown-item" href="#">Max Emum</a>
                                                               <a class="dropdown-item" href="#">Bill Yerds</a>
                                                               <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                                               <a class="dropdown-item" href="#">Tara Misu</a>
                                                               <a class="dropdown-item" href="#">Midge Itz</a>
                                                               <a class="dropdown-item" href="#">Sal Vidge</a>
                                                               <a class="dropdown-item" href="#">Other</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="total-comment-block">
                                                      <div class="dropdown">
                                                         <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false" role="button">
                                                            20 Comment
                                                         </span>
                                                         <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Max Emum</a>
                                                            <a class="dropdown-item" href="#">Bill Yerds</a>
                                                            <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                                            <a class="dropdown-item" href="#">Tara Misu</a>
                                                            <a class="dropdown-item" href="#">Midge Itz</a>
                                                            <a class="dropdown-item" href="#">Sal Vidge</a>
                                                            <a class="dropdown-item" href="#">Other</a>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div
                                                   class="share-block d-flex align-items-center feather-icon mt-2 mt-md-0">
                                                   <a href="#" data-bs-toggle="offcanvas" data-bs-target="#share-btn"
                                                      aria-controls="share-btn" class="d-flex align-items-center"><span
                                                         class="material-symbols-outlined md-18">
                                                         share
                                                      </span>
                                                      <span class="ms-1">99 Share</span></a>
                                                </div>
                                             </div>
                                             <hr>
                                             <ul class="post-comments p-0 m-0">
                                                <li class="mb-2">
                                                   <div class="d-flex flex-wrap">
                                                      <div class="user-img">
                                                         <img src="../assets/images/user/02.jpg" alt="userimg"
                                                            class="avatar-35 rounded-circle img-fluid" loading="lazy">
                                                      </div>
                                                      <div class="comment-data-block ms-3">
                                                         <h6>Monty Carlo</h6>
                                                         <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                                         <div
                                                            class="d-flex flex-wrap align-items-center comment-activity">
                                                            <a href="#">like</a>
                                                            <a href="#">reply</a>
                                                            <a href="#">translate</a>
                                                            <span> 5 min </span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </li>
                                                <li>
                                                   <div class="d-flex flex-wrap">
                                                      <div class="user-img">
                                                         <img src="../assets/images/user/03.jpg" alt="userimg"
                                                            class="avatar-35 rounded-circle img-fluid" loading="lazy">
                                                      </div>
                                                      <div class="comment-data-block ms-3">
                                                         <h6>Paul Molive</h6>
                                                         <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                                         <div
                                                            class="d-flex flex-wrap align-items-center comment-activity">
                                                            <a href="#">like</a>
                                                            <a href="#">reply</a>
                                                            <a href="#">translate</a>
                                                            <span> 5 min </span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </li>
                                             </ul>
                                             <form class="comment-text d-flex align-items-center mt-3"
                                                action="javascript:void(0);">
                                                <input type="text" class="form-control rounded"
                                                   placeholder="Enter Your Comment">
                                                <div class="comment-attagement d-flex">
                                                   <a href="javascript:void(0);"
                                                      class="material-symbols-outlined me-3 link">
                                                      insert_link
                                                   </a>
                                                   <a href="javascript:void(0);"
                                                      class="material-symbols-outlined  me-3">
                                                      sentiment_satisfied
                                                   </a>
                                                   <a href="javascript:void(0);"
                                                      class="material-symbols-outlined  me-3">
                                                      photo_camera
                                                   </a>
                                                </div>
                                             </form>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="card">
                                    <div class="card-body">
                                       <div class="post-item">
                                          <div class="user-post-data py-3">
                                             <div class="d-flex justify-content-between">
                                                <div class=" me-3">
                                                   <img class="rounded-circle avatar-60"
                                                      src="../assets/images/user/1.jpg" alt="" loading="lazy">
                                                </div>
                                                <div class="w-100">
                                                   <div class="d-flex justify-content-between">
                                                      <div class="">
                                                         <h5 class="mb-0 d-inline-block me-1"><a href="#" class="">Bni
                                                               Cyst</a></h5>
                                                         <p class=" mb-0 d-inline-block">Change Profile Picture</p>
                                                         <p class="mb-0">3 day ago</p>
                                                      </div>
                                                      <div class="card-post-toolbar">
                                                         <div class="dropdown">
                                                            <span class="dropdown-toggle material-symbols-outlined"
                                                               data-bs-toggle="dropdown" aria-haspopup="true"
                                                               aria-expanded="false" role="button">
                                                               more_horiz
                                                            </span>
                                                            <div class="dropdown-menu m-0 p-0">
                                                               <a class="dropdown-item p-3" href="#">
                                                                  <div class="d-flex align-items-top">
                                                                     <span class="material-symbols-outlined">
                                                                        save
                                                                     </span>
                                                                     <div class="data ms-2">
                                                                        <h6>Save Post</h6>
                                                                        <p class="mb-0">Add this to your saved items</p>
                                                                     </div>
                                                                  </div>
                                                               </a>
                                                               <a class="dropdown-item p-3" href="#">
                                                                  <div class="d-flex align-items-top">
                                                                     <span class="material-symbols-outlined">
                                                                        edit
                                                                     </span>
                                                                     <div class="data ms-2">
                                                                        <h6>Edit Post</h6>
                                                                        <p class="mb-0">Update your post and saved items
                                                                        </p>
                                                                     </div>
                                                                  </div>
                                                               </a>
                                                               <a class="dropdown-item p-3" href="#">
                                                                  <div class="d-flex align-items-top">
                                                                     <span class="material-symbols-outlined">
                                                                        cancel
                                                                     </span>
                                                                     <div class="data ms-2">
                                                                        <h6>Hide From Timeline</h6>
                                                                        <p class="mb-0">See fewer posts like this.</p>
                                                                     </div>
                                                                  </div>
                                                               </a>
                                                               <a class="dropdown-item p-3" href="#">
                                                                  <div class="d-flex align-items-top">
                                                                     <span class="material-symbols-outlined">
                                                                        delete
                                                                     </span>
                                                                     <div class="data ms-2">
                                                                        <h6>Delete</h6>
                                                                        <p class="mb-0">Remove thids Post on Timeline
                                                                        </p>
                                                                     </div>
                                                                  </div>
                                                               </a>
                                                               <a class="dropdown-item p-3" href="#">
                                                                  <div class="d-flex align-items-top">
                                                                     <span class="material-symbols-outlined">
                                                                        notifications
                                                                     </span>
                                                                     <div class="data ms-2">
                                                                        <h6>Notifications</h6>
                                                                        <p class="mb-0">Turn on notifications for this
                                                                           post</p>
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
                                          <div class="user-post text-center">
                                             <a href="#"><img src="../assets/images/page-img/p1.jpg" alt="post-image"
                                                   loading="lazy" class="img-fluid profile-img" /></a>
                                          </div>
                                          <div class="comment-area mt-3">
                                             <div class="d-flex justify-content-between align-items-center flex-wrap">
                                                <div class="like-block position-relative d-flex align-items-center">
                                                   <div class="d-flex align-items-center">
                                                      <div class="like-data">
                                                         <div class="dropdown">
                                                            <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                               aria-haspopup="true" aria-expanded="false" role="button">
                                                               <img src="../assets/images/icon/01.png" class="img-fluid"
                                                                  alt="">
                                                            </span>
                                                            <div class="dropdown-menu py-2">
                                                               <a class="ms-2 me-2" href="#" data-bs-toggle="tooltip"
                                                                  data-bs-placement="top" title="Like"><img
                                                                     src="../assets/images/icon/01.png"
                                                                     class="img-fluid" alt="" loading="lazy"></a>
                                                               <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                                  data-bs-placement="top" title="Love"><img
                                                                     src="../assets/images/icon/02.png"
                                                                     class="img-fluid" alt="" loading="lazy"></a>
                                                               <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                                  data-bs-placement="top" title="Happy"><img
                                                                     src="../assets/images/icon/03.png"
                                                                     class="img-fluid" alt="" loading="lazy"></a>
                                                               <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                                  data-bs-placement="top" title="HaHa"><img
                                                                     src="../assets/images/icon/04.png"
                                                                     class="img-fluid" alt="" loading="lazy"></a>
                                                               <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                                  data-bs-placement="top" title="Think"><img
                                                                     src="../assets/images/icon/05.png"
                                                                     class="img-fluid" alt="" loading="lazy"></a>
                                                               <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                                  data-bs-placement="top" title="Sade"><img
                                                                     src="../assets/images/icon/06.png"
                                                                     class="img-fluid" alt="" loading="lazy"></a>
                                                               <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                                  data-bs-placement="top" title="Lovely"><img
                                                                     src="../assets/images/icon/07.png"
                                                                     class="img-fluid" alt="" loading="lazy"></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="total-like-block ms-2 me-3">
                                                         <div class="dropdown">
                                                            <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                               aria-haspopup="true" aria-expanded="false" role="button">
                                                               140 Likes
                                                            </span>
                                                            <div class="dropdown-menu">
                                                               <a class="dropdown-item" href="#">Max Emum</a>
                                                               <a class="dropdown-item" href="#">Bill Yerds</a>
                                                               <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                                               <a class="dropdown-item" href="#">Tara Misu</a>
                                                               <a class="dropdown-item" href="#">Midge Itz</a>
                                                               <a class="dropdown-item" href="#">Sal Vidge</a>
                                                               <a class="dropdown-item" href="#">Other</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="total-comment-block">
                                                      <div class="dropdown">
                                                         <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false" role="button">
                                                            20 Comment
                                                         </span>
                                                         <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Max Emum</a>
                                                            <a class="dropdown-item" href="#">Bill Yerds</a>
                                                            <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                                            <a class="dropdown-item" href="#">Tara Misu</a>
                                                            <a class="dropdown-item" href="#">Midge Itz</a>
                                                            <a class="dropdown-item" href="#">Sal Vidge</a>
                                                            <a class="dropdown-item" href="#">Other</a>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div
                                                   class="share-block d-flex align-items-center feather-icon mt-2 mt-md-0">
                                                   <a href="#" data-bs-toggle="offcanvas" data-bs-target="#share-btn"
                                                      aria-controls="share-btn" class="d-flex align-items-center"><span
                                                         class="material-symbols-outlined md-18">
                                                         share
                                                      </span>
                                                      <span class="ms-1">99 Share</span></a>
                                                </div>
                                             </div>
                                             <hr>
                                             <ul class="post-comments p-0 m-0">
                                                <li class="mb-2">
                                                   <div class="d-flex flex-wrap">
                                                      <div class="user-img">
                                                         <img src="../assets/images/user/02.jpg" alt="userimg"
                                                            class="avatar-35 rounded-circle img-fluid" loading="lazy">
                                                      </div>
                                                      <div class="comment-data-block ms-3">
                                                         <h6>Monty Carlo</h6>
                                                         <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                                         <div
                                                            class="d-flex flex-wrap align-items-center comment-activity">
                                                            <a href="#">like</a>
                                                            <a href="#">reply</a>
                                                            <a href="#">translate</a>
                                                            <span> 5 min </span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </li>
                                                <li>
                                                   <div class="d-flex flex-wrap">
                                                      <div class="user-img">
                                                         <img src="../assets/images/user/03.jpg" alt="userimg"
                                                            class="avatar-35 rounded-circle img-fluid" loading="lazy">
                                                      </div>
                                                      <div class="comment-data-block ms-3">
                                                         <h6>Paul Molive</h6>
                                                         <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                                         <div
                                                            class="d-flex flex-wrap align-items-center comment-activity">
                                                            <a href="#">like</a>
                                                            <a href="#">reply</a>
                                                            <a href="#">translate</a>
                                                            <span> 5 min </span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </li>
                                             </ul>
                                             <form class="comment-text d-flex align-items-center mt-3"
                                                action="javascript:void(0);">
                                                <input type="text" class="form-control rounded"
                                                   placeholder="Enter Your Comment">
                                                <div class="comment-attagement d-flex">
                                                   <a href="javascript:void(0);"
                                                      class="material-symbols-outlined me-3 link">
                                                      insert_link
                                                   </a>
                                                   <a href="javascript:void(0);"
                                                      class="material-symbols-outlined  me-3">
                                                      sentiment_satisfied
                                                   </a>
                                                   <a href="javascript:void(0);"
                                                      class="material-symbols-outlined  me-3">
                                                      photo_camera
                                                   </a>
                                                </div>
                                             </form>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="about" role="tabpanel">
                        <div class="row">
                           <div class="col-md-4">
                              <div class="card">
                                 <div class="card-body">
                                    <ul class="nav nav-pills basic-info-items list-inline d-block p-0 m-0">
                                       <li>
                                          <a class="nav-link active" href="#v-pills-basicinfo-tab" data-bs-toggle="pill"
                                             data-bs-target="#v-pills-basicinfo-tab" role="button">Contact and Basic
                                             Info</a>
                                       </li>
                                       <li>
                                          <a class="nav-link" href="#v-pills-details-tab" data-bs-toggle="pill"
                                             data-bs-target="#v-pills-details-tab" role="button">Hobbies and
                                             Interests</a>
                                       </li>
                                       <li>
                                          <a class="nav-link" href="#v-pills-family-tab" data-bs-toggle="pill"
                                             data-bs-target="#v-pills-family" role="button">Family and Relationship</a>
                                       </li>
                                       <li>
                                          <a class="nav-link" href="#v-pills-work-tab" data-bs-toggle="pill"
                                             data-bs-target="#v-pills-work-tab" role="button">Work and Education</a>
                                       </li>
                                       <li>
                                          <a class="nav-link" href="#v-pills-lived-tab" data-bs-toggle="pill"
                                             data-bs-target="#v-pills-lived-tab" role="button">Places You've Lived</a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-8 ps-4">
                              <div class="card">
                                 <div class="card-body">
                                    <div class="tab-content">
                                       <div class="tab-pane fade active show" id="v-pills-basicinfo-tab" role="tabpanel"
                                          aria-labelledby="v-pills-basicinfo-tab">
                                          <h4>Personal Info</h4>
                                          <hr>
                                          <div class="row mb-2">
                                             <div class="col-3">
                                                <h6>About Me:</h6>
                                             </div>
                                             <div class="col-9">
                                                <p class="mb-0">Hi, I’m James, I’m 36 and I work as a Digital Designer
                                                   for the “Daydreams” Agency in Pier 56</p>
                                             </div>
                                          </div>
                                          <div class="row mb-2">
                                             <div class="col-3">
                                                <h6>Email:</h6>
                                             </div>
                                             <div class="col-9">
                                                <p class="mb-0">Bnijohn@gmail.com</p>
                                             </div>
                                          </div>
                                          <div class="row mb-2">
                                             <div class="col-3">
                                                <h6>Mobile:</h6>
                                             </div>
                                             <div class="col-9">
                                                <p class="mb-0">(001) 4544 565 456</p>
                                             </div>
                                          </div>
                                          <div class="row mb-2">
                                             <div class="col-3">
                                                <h6>Address:</h6>
                                             </div>
                                             <div class="col-9">
                                                <p class="mb-0">United States of America</p>
                                             </div>
                                          </div>
                                          <div class="row mb-2">
                                             <div class="col-3">
                                                <h6>Social Link:</h6>
                                             </div>
                                             <div class="col-9">
                                                <p class="mb-0">www.bootstrap.com</p>
                                             </div>
                                          </div>
                                          <div class="row mb-2">
                                             <div class="col-3">
                                                <h6>Birth Date:</h6>
                                             </div>
                                             <div class="col-9">
                                                <p class="mb-0">24 January</p>
                                             </div>
                                          </div>
                                          <div class="row mb-2">
                                             <div class="col-3">
                                                <h6>Birth Year:</h6>
                                             </div>
                                             <div class="col-9">
                                                <p class="mb-0">1994</p>
                                             </div>
                                          </div>
                                          <div class="row mb-2">
                                             <div class="col-3">
                                                <h6>Birthplace:</h6>
                                             </div>
                                             <div class="col-9">
                                                <p class="mb-0">Austin, Texas, USA</p>
                                             </div>
                                          </div>
                                          <div class="row mb-2">
                                             <div class="col-3">
                                                <h6>Lives in:</h6>
                                             </div>
                                             <div class="col-9">
                                                <p class="mb-0">San Francisco, California, USA</p>
                                             </div>
                                          </div>
                                          <div class="row mb-2">
                                             <div class="col-3">
                                                <h6>Gender:</h6>
                                             </div>
                                             <div class="col-9">
                                                <p class="mb-0">Female</p>
                                             </div>
                                          </div>
                                          <div class="row mb-2">
                                             <div class="col-3">
                                                <h6>Interested in:</h6>
                                             </div>
                                             <div class="col-9">
                                                <p class="mb-0">Designing</p>
                                             </div>
                                          </div>
                                          <div class="row mb-2">
                                             <div class="col-3">
                                                <h6>language:</h6>
                                             </div>
                                             <div class="col-9">
                                                <p class="mb-0">English, French</p>
                                             </div>
                                          </div>
                                          <div class="row mb-2">
                                             <div class="col-3">
                                                <h6>Joined:</h6>
                                             </div>
                                             <div class="col-9">
                                                <p class="mb-0">April 31st, 2014</p>
                                             </div>
                                          </div>
                                          <div class="row mb-2">
                                             <div class="col-3">
                                                <h6>Status:</h6>
                                             </div>
                                             <div class="col-9">
                                                <p class="mb-0">Married</p>
                                             </div>
                                          </div>
                                          <div class="row mb-2">
                                             <div class="col-3">
                                                <h6>Phone Number:</h6>
                                             </div>
                                             <div class="col-9">
                                                <p class="mb-0">(044) 555 - 4369 - 8957</p>
                                             </div>
                                          </div>
                                          <div class="row mb-3">
                                             <div class="col-3">
                                                <h6>Political Incline:</h6>
                                             </div>
                                             <div class="col-9">
                                                <p class="mb-0">Democrat</p>
                                             </div>
                                          </div>
                                          <h4 class="mt-2">Websites and Social Links</h4>
                                          <hr>
                                          <div class="row mb-2">
                                             <div class="col-3">
                                                <h6>Website:</h6>
                                             </div>
                                             <div class="col-9">
                                                <p class="mb-0">www.bootstrap.com</p>
                                             </div>
                                          </div>
                                          <div class="row mb-2">
                                             <div class="col-3">
                                                <h6>Social Link:</h6>
                                             </div>
                                             <div class="col-9">
                                                <p class="mb-0">www.bootstrap.com</p>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="tab-pane fade" id="v-pills-details-tab" role="tabpanel"
                                          aria-labelledby="v-pills-details-tab">
                                          <h4 class="mt-2">Hobbies and Interests</h4>
                                          <hr>
                                          <h6 class="mb-1">Hobbies:</h6>
                                          <p>Hi, I’m Bni, I’m 26 and I work as a Web Designer for the iqonicdesign.I
                                             like to ride the bike to work, swimming, and working out. I also like
                                             reading design magazines, go to museums, and binge watching a good tv show
                                             while it’s raining outside.</p>
                                          <h6 class="mt-2 mb-1">Favourite TV Shows:</h6>
                                          <p>Breaking Good, RedDevil, People of Interest, The Running Dead, Found,
                                             American Guy.</p>
                                          <h6 class="mt-2 mb-1">Favourite Movies:</h6>
                                          <p>Idiocratic, The Scarred Wizard and the Fire Crown, Crime Squad, Ferrum Man.
                                          </p>
                                          <h6 class="mt-2 mb-1">Favourite Games:</h6>
                                          <p>The First of Us, Assassin’s Squad, Dark Assylum, NMAK16, Last Cause 4,
                                             Grand Snatch Auto.</p>
                                          <h6 class="mt-2 mb-1">Favourite Music Bands / Artists:</h6>
                                          <p>Iron Maid, DC/AC, Megablow, The Ill, Kung Fighters, System of a Revenge.
                                          </p>
                                          <h6 class="mt-2 mb-1">Favourite Books:</h6>
                                          <p>The Crime of the Century, Egiptian Mythology 101, The Scarred Wizard, Lord
                                             of the Wings, Amongst Gods, The Oracle, A Tale of Air and Water.</p>
                                          <h6 class="mt-2 mb-1">Favourite Writers:</h6>
                                          <p>Martin T. Georgeston, Jhonathan R. Token, Ivana Rowle, Alexandria Platt,
                                             Marcus Roth.</p>
                                       </div>
                                       <div class="tab-pane fade" id="v-pills-family" role="tabpanel">
                                          <h4 class="mb-3">Relationship</h4>
                                          <ul class="suggestions-lists m-0 p-0">
                                             <li class="d-flex mb-4 align-items-center">
                                                <div class="user-img img-fluid"><span
                                                      class="material-symbols-outlined md-18">
                                                      add
                                                   </span>
                                                </div>
                                                <div class="media-support-info ms-3">
                                                   <h6>Add Your Relationship Status</h6>
                                                </div>
                                             </li>
                                          </ul>
                                          <h4 class="mt-3 mb-3">Family Members</h4>
                                          <ul class="suggestions-lists m-0 p-0">
                                             <li class="d-flex mb-4 align-items-center">
                                                <div class="user-img img-fluid"><span
                                                      class="material-symbols-outlined md-18">
                                                      add
                                                   </span>
                                                </div>
                                                <div class="media-support-info ms-3">
                                                   <h6>Add Family Members</h6>
                                                </div>
                                             </li>
                                             <li class="d-flex mb-4 align-items-center justify-content-between">
                                                <div class="user-img img-fluid"><img src="../assets/images/user/01.jpg"
                                                      alt="story-img" class="rounded-circle avatar-40"></div>
                                                <div class="w-100">
                                                   <div class="d-flex justify-content-between">
                                                      <div class="ms-3">
                                                         <h6>Paul Molive</h6>
                                                         <p class="mb-0">Brothe</p>
                                                      </div>
                                                      <div class="edit-relation"><a href="#"
                                                            class="d-flex align-items-center"><span
                                                               class="material-symbols-outlined me-2 md-18">
                                                               edit
                                                            </span>Edit</a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </li>
                                             <li class="d-flex justify-content-between mb-4  align-items-center">
                                                <div class="user-img img-fluid"><img src="../assets/images/user/02.jpg"
                                                      alt="story-img" class="rounded-circle avatar-40" loading="lazy">
                                                </div>
                                                <div class="w-100">
                                                   <div class="d-flex flex-wrap justify-content-between">
                                                      <div class=" ms-3">
                                                         <h6>Anna Mull</h6>
                                                         <p class="mb-0">Sister</p>
                                                      </div>
                                                      <div class="edit-relation d-flex align-items-center"><a href="#"
                                                            class="d-flex align-items-center"><span
                                                               class="material-symbols-outlined me-2 md-18">
                                                               edit
                                                            </span>Edit</a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </li>
                                             <li class="d-flex mb-4 align-items-center justify-content-between">
                                                <div class="user-img img-fluid"><img src="../assets/images/user/03.jpg"
                                                      alt="story-img" class="rounded-circle avatar-40" loading="lazy">
                                                </div>
                                                <div class="w-100">
                                                   <div class="d-flex justify-content-between">
                                                      <div class="ms-3">
                                                         <h6>Paige Turner</h6>
                                                         <p class="mb-0">Cousin</p>
                                                      </div>
                                                      <div class="edit-relation"><a href="#"
                                                            class="d-flex align-items-center"><span
                                                               class="material-symbols-outlined me-2 md-18">
                                                               edit
                                                            </span>Edit</a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </li>
                                          </ul>
                                       </div>
                                       <div class="tab-pane fade" id="v-pills-work-tab" role="tabpanel"
                                          aria-labelledby="v-pills-work-tab">
                                          <h4 class="mb-3">Work</h4>
                                          <ul class="suggestions-lists m-0 p-0">
                                             <li class="d-flex justify-content-between mb-4  align-items-center">
                                                <div class="user-img img-fluid"><span
                                                      class="material-symbols-outlined md-18">
                                                      add
                                                   </span>
                                                </div>
                                                <div class="ms-3">
                                                   <h6>Add Work Place</h6>
                                                </div>
                                             </li>
                                             <li class="d-flex mb-4 align-items-center justify-content-between">
                                                <div class="user-img img-fluid"><img src="../assets/images/user/01.jpg"
                                                      alt="story-img" class="rounded-circle avatar-40" loading="lazy">
                                                </div>
                                                <div class="w-100">
                                                   <div class="d-flex justify-content-between">
                                                      <div class="ms-3">
                                                         <h6>Themeforest</h6>
                                                         <p class="mb-0">Web Designer</p>
                                                      </div>
                                                      <div class="edit-relation"><a href="#"
                                                            class="d-flex align-items-center"><span
                                                               class="material-symbols-outlined me-2 md-18">
                                                               edit
                                                            </span>Edit</a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </li>
                                             <li class="d-flex mb-4 align-items-center justify-content-between">
                                                <div class="user-img img-fluid"><img src="../assets/images/user/02.jpg"
                                                      alt="story-img" class="rounded-circle avatar-40" loading="lazy">
                                                </div>
                                                <div class="w-100">
                                                   <div class="d-flex flex-wrap justify-content-between">
                                                      <div class="ms-3">
                                                         <h6>iqonicdesign</h6>
                                                         <p class="mb-0">Web Developer</p>
                                                      </div>
                                                      <div class="edit-relation"><a href="#"
                                                            class="d-flex align-items-center"><span
                                                               class="material-symbols-outlined me-2 md-18">
                                                               edit
                                                            </span>Edit</a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </li>
                                             <li class="d-flex mb-4 align-items-center justify-content-between">
                                                <div class="user-img img-fluid"><img src="../assets/images/user/03.jpg"
                                                      alt="story-img" class="rounded-circle avatar-40" loading="lazy">
                                                </div>
                                                <div class="w-100">
                                                   <div class="d-flex flex-wrap justify-content-between">
                                                      <div class="ms-3">
                                                         <h6>W3school</h6>
                                                         <p class="mb-0">Designer</p>
                                                      </div>
                                                      <div class="edit-relation"><a href="#"
                                                            class="d-flex align-items-center"><span
                                                               class="material-symbols-outlined me-2 md-18">
                                                               edit
                                                            </span>Edit</a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </li>
                                          </ul>
                                          <h4 class="mb-3">Professional Skills</h4>
                                          <ul class="suggestions-lists m-0 p-0">
                                             <li class="d-flex mb-4 align-items-center">
                                                <div class="user-img img-fluid"><span
                                                      class="material-symbols-outlined md-18">
                                                      add
                                                   </span>
                                                </div>
                                                <div class="ms-3">
                                                   <h6>Add Professional Skills</h6>
                                                </div>
                                             </li>
                                          </ul>
                                          <h4 class="mt-3 mb-3">College</h4>
                                          <ul class="suggestions-lists m-0 p-0">
                                             <li class="d-flex mb-4 align-items-center">
                                                <div class="user-img img-fluid"><span
                                                      class="material-symbols-outlined md-18">
                                                      add
                                                   </span>
                                                </div>
                                                <div class="ms-3">
                                                   <h6>Add College</h6>
                                                </div>
                                             </li>
                                             <li class="d-flex mb-4 align-items-center">
                                                <div class="user-img img-fluid"><img src="../assets/images/user/01.jpg"
                                                      alt="story-img" class="rounded-circle avatar-40" loading="lazy">
                                                </div>
                                                <div class="w-100">
                                                   <div class="d-flex flex-wrap justify-content-between">
                                                      <div class="ms-3">
                                                         <h6>Lorem ipsum</h6>
                                                         <p class="mb-0">USA</p>
                                                      </div>
                                                      <div class="edit-relation"><a href="#"
                                                            class="d-flex align-items-center"><span
                                                               class="material-symbols-outlined me-2 md-18">
                                                               edit
                                                            </span>Edit</a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </li>
                                          </ul>
                                       </div>
                                       <div class="tab-pane fade" id="v-pills-lived-tab" role="tabpanel"
                                          aria-labelledby="v-pills-lived-tab">
                                          <h4 class="mb-3">Current City and Hometown</h4>
                                          <ul class="suggestions-lists m-0 p-0">
                                             <li class="d-flex mb-4 align-items-center justify-content-between">
                                                <div class="user-img img-fluid"><img src="../assets/images/user/01.jpg"
                                                      alt="story-img" loading="lazy" class="rounded-circle avatar-40">
                                                </div>
                                                <div class="w-100">
                                                   <div class="d-flex flex-wrap justify-content-between">
                                                      <div class="ms-3">
                                                         <h6>Georgia</h6>
                                                         <p class="mb-0">Georgia State</p>
                                                      </div>
                                                      <div class="edit-relation"><a href="#"
                                                            class="d-flex align-items-center"><span
                                                               class="material-symbols-outlined me-2 md-18">
                                                               edit
                                                            </span>Edit</a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </li>
                                             <li class="d-flex mb-4 align-items-center justify-content-between">
                                                <div class="user-img img-fluid"><img src="../assets/images/user/02.jpg"
                                                      alt="story-img" class="rounded-circle avatar-40" loading="lazy">
                                                </div>
                                                <div class="w-100">
                                                   <div class="d-flex flex-wrap justify-content-between">
                                                      <div class="ms-3">
                                                         <h6>Atlanta</h6>
                                                         <p class="mb-0">Atlanta City</p>
                                                      </div>
                                                      <div class="edit-relation"><a href="#"
                                                            class="d-flex align-items-center"><span
                                                               class="material-symbols-outlined me-2 md-18">
                                                               edit
                                                            </span>Edit</a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </li>
                                          </ul>
                                          <h4 class="mt-3 mb-3">Other Places Lived</h4>
                                          <ul class="suggestions-lists m-0 p-0">
                                             <li class="d-flex mb-4 align-items-center">
                                                <div class="user-img img-fluid"><span
                                                      class="material-symbols-outlined md-18">
                                                      add
                                                   </span>
                                                </div>
                                                <div class="ms-3">
                                                   <h6>Add Place</h6>
                                                </div>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="friends" role="tabpanel">
                        <div class="card">
                           <div class="card-body">
                              <h2>Friends</h2>
                              <div class="friend-list-tab mt-2">
                                 <ul
                                    class="nav nav-pills d-flex align-items-center justify-content-left friend-list-items p-0 mb-2">
                                    <li>
                                       <a class="nav-link active" data-bs-toggle="pill" href="#pill-all-friends"
                                          data-bs-target="#all-feinds">All Friends</a>
                                    </li>
                                    <li>
                                       <a class="nav-link" data-bs-toggle="pill" href="#pill-recently-add"
                                          data-bs-target="#recently-add">Recently Added</a>
                                    </li>
                                    <li>
                                       <a class="nav-link" data-bs-toggle="pill" href="#pill-closefriends"
                                          data-bs-target="#closefriends"> Close friends</a>
                                    </li>
                                    <li>
                                       <a class="nav-link" data-bs-toggle="pill" href="#pill-home"
                                          data-bs-target="#home-town"> Home/Town</a>
                                    </li>
                                    <li>
                                       <a class="nav-link" data-bs-toggle="pill" href="#pill-following"
                                          data-bs-target="#following">Following</a>
                                    </li>
                                 </ul>
                                 <div class="tab-content">
                                    <div class="tab-pane fade active show" id="all-friends" role="tabpanel">
                                       <div class="card-body p-0">
                                          <div class="row">
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/05.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Petey Cruiser</h5>
                                                            <p class="mb-0">15 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton01" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton01">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/06.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Anna Sthesia</h5>
                                                            <p class="mb-0">50 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton02" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton02">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/07.jpg" alt="profile-img"
                                                               class="img-fluid">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Paul Molive</h5>
                                                            <p class="mb-0">10 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton03" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton03">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/08.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Gail Forcewind</h5>
                                                            <p class="mb-0">20 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton04" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton04">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/09.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Paige Turner</h5>
                                                            <p class="mb-0">12 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton05" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton05">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/10.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>b Frapples</h5>
                                                            <p class="mb-0">6 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton06" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton06">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/13.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Walter Melon</h5>
                                                            <p class="mb-0">30 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton07" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton07">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/14.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Barb Ackue</h5>
                                                            <p class="mb-0">14 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton08" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton08">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/15.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Buck Kinnear</h5>
                                                            <p class="mb-0">16 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton09" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton09">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/16.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Ira Membrit</h5>
                                                            <p class="mb-0">22 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton10" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton10">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/17.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Shonda Leer</h5>
                                                            <p class="mb-0">10 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton11" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton11">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/18.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>ock Lee</h5>
                                                            <p class="mb-0">18 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton12" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton12">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/19.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Maya Didas</h5>
                                                            <p class="mb-0">40 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton13" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton13">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/05.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Rick O'Shea</h5>
                                                            <p class="mb-0">50 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton14" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton14">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/06.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Pete Sariya</h5>
                                                            <p class="mb-0">5 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton15" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton15">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/07.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Monty Carlo</h5>
                                                            <p class="mb-0">2 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton16" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton16">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/08.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Sal Monella</h5>
                                                            <p class="mb-0">0 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton17" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton17">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/09.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Sue Vaneer</h5>
                                                            <p class="mb-0">25 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton18" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton18">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/10.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Cliff Hanger</h5>
                                                            <p class="mb-0">18 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton19" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton19">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/05.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Barb Dwyer</h5>
                                                            <p class="mb-0">23 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton20" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton20">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/06.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Terry Aki</h5>
                                                            <p class="mb-0">8 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton21" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton21">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/13.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Cory Ander</h5>
                                                            <p class="mb-0">7 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton22" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton22">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/14.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Robin Banks</h5>
                                                            <p class="mb-0">14 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton23" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton23">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/15.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Jimmy Changa</h5>
                                                            <p class="mb-0">10 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton24" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton24">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/16.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Barry Wine</h5>
                                                            <p class="mb-0">18 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton25" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton25">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/17.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Poppa Cherry</h5>
                                                            <p class="mb-0">16 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton26" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton26">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/18.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Zack Lee</h5>
                                                            <p class="mb-0">33 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton27" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton27">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/19.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Don Stairs</h5>
                                                            <p class="mb-0">15 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton28" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton28">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/05.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Peter Pants</h5>
                                                            <p class="mb-0">12 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton29" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton29">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/06.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Hal Appeno </h5>
                                                            <p class="mb-0">13 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton30" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton30">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="tab-pane fade" id="recently-add" role="tabpanel">
                                       <div class="card-body p-0">
                                          <div class="row">
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/07.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Otto Matic</h5>
                                                            <p class="mb-0">4 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton31" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton31">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/08.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Moe Fugga</h5>
                                                            <p class="mb-0">16 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton32" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton32">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/09.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Tom Foolery</h5>
                                                            <p class="mb-0">14 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton33" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton33">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/10.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Bud Wiser</h5>
                                                            <p class="mb-0">16 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton34" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton34">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/15.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Polly Tech</h5>
                                                            <p class="mb-0">10 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton35" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton35">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/16.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Holly Graham</h5>
                                                            <p class="mb-0">8 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton36" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton36">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/17.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Tara Zona</h5>
                                                            <p class="mb-0">5 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton37" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton37">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/18.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Barry Cade</h5>
                                                            <p class="mb-0">20 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton38" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton38">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="tab-pane fade" id="closefriends" role="tabpanel">
                                       <div class="card-body p-0">
                                          <div class="row">
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/19.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Bud Wiser</h5>
                                                            <p class="mb-0">32 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton39" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton39">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/05.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Otto Matic</h5>
                                                            <p class="mb-0">9 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton40" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton40">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/06.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Peter Pants</h5>
                                                            <p class="mb-0">2 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton41" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton41">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/07.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Zack Lee</h5>
                                                            <p class="mb-0">15 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton42" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton42">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/08.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Barry Wine</h5>
                                                            <p class="mb-0">36 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton43" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton43">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/09.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Robin Banks</h5>
                                                            <p class="mb-0">22 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton44" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton44">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/10.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Cory Ander</h5>
                                                            <p class="mb-0">18 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton45" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton45">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/15.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Moe Fugga</h5>
                                                            <p class="mb-0">12 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton46" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton46">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/16.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Polly Tech</h5>
                                                            <p class="mb-0">30 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton47" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton47">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/17.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Hal Appeno</h5>
                                                            <p class="mb-0">25 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton48" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton48">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="tab-pane fade" id="home-town" role="tabpanel">
                                       <div class="card-body p-0">
                                          <div class="row">
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/18.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Paul Molive</h5>
                                                            <p class="mb-0">14 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton49" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton49">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/19.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Paige Turner</h5>
                                                            <p class="mb-0">8 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton50" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton50">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/05.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Barb Ackue</h5>
                                                            <p class="mb-0">23 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton51" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton51">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/06.jpg" alt="profile-img"
                                                               class="img-fluid">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Ira Membrit</h5>
                                                            <p class="mb-0">16 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton52" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton52">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/07.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Maya Didas</h5>
                                                            <p class="mb-0">12 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton53" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton53">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="tab-pane fade" id="following" role="tabpanel">
                                       <div class="card-body p-0">
                                          <div class="row">
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/05.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Maya Didas</h5>
                                                            <p class="mb-0">20 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton54" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton54">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/06.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Monty Carlo</h5>
                                                            <p class="mb-0">3 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton55" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton55">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/07.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Cliff Hanger</h5>
                                                            <p class="mb-0">20 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton56" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton56">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/08.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>b Ackue</h5>
                                                            <p class="mb-0">12 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton57" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton57">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/09.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Bob Frapples</h5>
                                                            <p class="mb-0">12 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton58" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton58">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/10.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Anna Mull</h5>
                                                            <p class="mb-0">6 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton59" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton59">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/15.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>ry Wine</h5>
                                                            <p class="mb-0">15 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton60" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton60">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/16.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Don Stairs</h5>
                                                            <p class="mb-0">12 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton61" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton61">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/17.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Peter Pants</h5>
                                                            <p class="mb-0">8 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton62" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton62">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/18.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Polly Tech</h5>
                                                            <p class="mb-0">18 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton63" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton63">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/19.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Tara Zona</h5>
                                                            <p class="mb-0">30 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton64" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton64">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/05.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Arty Ficial</h5>
                                                            <p class="mb-0">15 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton65" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton65">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/06.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Bill Emia</h5>
                                                            <p class="mb-0">25 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton66" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton66">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/07.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Bill Yerds</h5>
                                                            <p class="mb-0">9 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton67" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton67">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 mb-3">
                                                <div class="iq-friendlist-block">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <a href="#">
                                                            <img src="../assets/images/user/08.jpg" alt="profile-img"
                                                               class="img-fluid" loading="lazy">
                                                         </a>
                                                         <div class="friend-info ms-3">
                                                            <h5>Matt Innae</h5>
                                                            <p class="mb-0">19 friends</p>
                                                         </div>
                                                      </div>
                                                      <div class="card-header-toolbar d-flex align-items-center">
                                                         <div class="dropdown">
                                                            <span
                                                               class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center"
                                                               id="dropdownMenuButton68" data-bs-toggle="dropdown"
                                                               aria-expanded="true" role="button">
                                                               <i class="material-symbols-outlined me-2">
                                                                  done
                                                               </i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                               aria-labelledby="dropdownMenuButton68">
                                                               <a class="dropdown-item" href="#">Get Notification</a>
                                                               <a class="dropdown-item" href="#">Close Friend</a>
                                                               <a class="dropdown-item" href="#">Unfollow</a>
                                                               <a class="dropdown-item" href="#">Unfriend</a>
                                                               <a class="dropdown-item" href="#">Block</a>
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
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="photos" role="tabpanel">
                        <div class="card">
                           <div class="card-body">
                              <h2>Photos</h2>
                              <div class="friend-list-tab mt-2">
                                 <ul
                                    class="nav nav-pills d-flex align-items-center justify-content-left friend-list-items p-0 mb-2">
                                    <li>
                                       <a class="nav-link active" data-bs-toggle="pill" href="#pill-photosofyou"
                                          data-bs-target="#photosofyou">Photos of You</a>
                                    </li>
                                    <li>
                                       <a class="nav-link" data-bs-toggle="pill" href="#pill-your-photos"
                                          data-bs-target="#your-photos">Your Photos</a>
                                    </li>
                                 </ul>
                                 <div class="tab-content">
                                    <div class="tab-pane fade active show" id="photosofyou" role="tabpanel">
                                       <div class="card-body p-0">
                                          <div class="d-grid gap-2 d-grid-template-1fr-13">
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a data-fslightbox="gallery" href="../assets/images/page-img/51.jpg"
                                                      class="rounded">
                                                      <img src="../assets/images/page-img/51.jpg"
                                                         class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 60
                                                                  <i class="material-symbols-outlined md-14 ms-1">
                                                                     thumb_up
                                                                  </i> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 30
                                                                  <span class="material-symbols-outlined  md-14 ms-1">
                                                                     chat_bubble_outline
                                                                  </span> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 10
                                                                  <span class="material-symbols-outlined md-14 ms-1">
                                                                     forward
                                                                  </span></a>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn material-symbols-outlined md-16"
                                                      data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove">
                                                      drive_file_rename_outline
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a data-fslightbox="gallery" href="../assets/images/page-img/52.jpg"
                                                      class="rounded">
                                                      <img src="../assets/images/page-img/52.jpg"
                                                         class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 60
                                                                  <i class="material-symbols-outlined md-14 ms-1">
                                                                     thumb_up
                                                                  </i> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 30
                                                                  <span class="material-symbols-outlined  md-14 ms-1">
                                                                     chat_bubble_outline
                                                                  </span> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 10
                                                                  <span class="material-symbols-outlined md-14 ms-1">
                                                                     forward
                                                                  </span></a>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn material-symbols-outlined md-16"
                                                      data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove">
                                                      drive_file_rename_outline
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a data-fslightbox="gallery" href="../assets/images/page-img/53.jpg"
                                                      class="rounded">
                                                      <img src="../assets/images/page-img/53.jpg"
                                                         class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 60
                                                                  <i class="material-symbols-outlined md-14 ms-1">
                                                                     thumb_up
                                                                  </i> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 30
                                                                  <span class="material-symbols-outlined  md-14 ms-1">
                                                                     chat_bubble_outline
                                                                  </span> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 10
                                                                  <span class="material-symbols-outlined md-14 ms-1">
                                                                     forward
                                                                  </span></a>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn material-symbols-outlined md-16"
                                                      data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove">
                                                      drive_file_rename_outline
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a data-fslightbox="gallery" href="../assets/images/page-img/54.jpg"
                                                      class="rounded">
                                                      <img src="../assets/images/page-img/54.jpg"
                                                         class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 60
                                                                  <i class="material-symbols-outlined md-14 ms-1">
                                                                     thumb_up
                                                                  </i> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 30
                                                                  <span class="material-symbols-outlined  md-14 ms-1">
                                                                     chat_bubble_outline
                                                                  </span> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 10
                                                                  <span class="material-symbols-outlined md-14 ms-1">
                                                                     forward
                                                                  </span></a>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn material-symbols-outlined md-16"
                                                      data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove">
                                                      drive_file_rename_outline
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a data-fslightbox="gallery" href="../assets/images/page-img/55.jpg"
                                                      class="rounded">
                                                      <img src="../assets/images/page-img/55.jpg"
                                                         class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 60
                                                                  <i class="material-symbols-outlined md-14 ms-1">
                                                                     thumb_up
                                                                  </i> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 30
                                                                  <span class="material-symbols-outlined  md-14 ms-1">
                                                                     chat_bubble_outline
                                                                  </span> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 10
                                                                  <span class="material-symbols-outlined md-14 ms-1">
                                                                     forward
                                                                  </span></a>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn material-symbols-outlined md-16"
                                                      data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove">
                                                      drive_file_rename_outline
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a data-fslightbox="gallery" href="../assets/images/page-img/56.jpg"
                                                      class="rounded">
                                                      <img src="../assets/images/page-img/56.jpg"
                                                         class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 60
                                                                  <i class="material-symbols-outlined md-14 ms-1">
                                                                     thumb_up
                                                                  </i> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 30
                                                                  <span class="material-symbols-outlined  md-14 ms-1">
                                                                     chat_bubble_outline
                                                                  </span> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 10
                                                                  <span class="material-symbols-outlined md-14 ms-1">
                                                                     forward
                                                                  </span></a>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn material-symbols-outlined md-16"
                                                      data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove">
                                                      drive_file_rename_outline
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a data-fslightbox="gallery" href="../assets/images/page-img/57.jpg"
                                                      class="rounded">
                                                      <img src="../assets/images/page-img/57.jpg"
                                                         class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 60
                                                                  <i class="material-symbols-outlined md-14 ms-1">
                                                                     thumb_up
                                                                  </i> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 30
                                                                  <span class="material-symbols-outlined  md-14 ms-1">
                                                                     chat_bubble_outline
                                                                  </span> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 10
                                                                  <span class="material-symbols-outlined md-14 ms-1">
                                                                     forward
                                                                  </span></a>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn material-symbols-outlined md-16"
                                                      data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove">
                                                      drive_file_rename_outline
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a data-fslightbox="gallery" href="../assets/images/page-img/58.jpg"
                                                      class="rounded">
                                                      <img src="../assets/images/page-img/58.jpg"
                                                         class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 60
                                                                  <i class="material-symbols-outlined md-14 ms-1">
                                                                     thumb_up
                                                                  </i> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 30
                                                                  <span class="material-symbols-outlined  md-14 ms-1">
                                                                     chat_bubble_outline
                                                                  </span> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 10
                                                                  <span class="material-symbols-outlined md-14 ms-1">
                                                                     forward
                                                                  </span></a>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn material-symbols-outlined md-16"
                                                      data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove">
                                                      drive_file_rename_outline
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a data-fslightbox="gallery" href="../assets/images/page-img/59.jpg"
                                                      class="rounded">
                                                      <img src="../assets/images/page-img/59.jpg"
                                                         class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 60
                                                                  <i class="material-symbols-outlined md-14 ms-1">
                                                                     thumb_up
                                                                  </i> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 30
                                                                  <span class="material-symbols-outlined  md-14 ms-1">
                                                                     chat_bubble_outline
                                                                  </span> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 10
                                                                  <span class="material-symbols-outlined md-14 ms-1">
                                                                     forward
                                                                  </span></a>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn material-symbols-outlined md-16"
                                                      data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove">
                                                      drive_file_rename_outline
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a data-fslightbox="gallery" href="../assets/images/page-img/60.jpg"
                                                      class="rounded">
                                                      <img src="../assets/images/page-img/60.jpg"
                                                         class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 60
                                                                  <i class="material-symbols-outlined md-14 ms-1">
                                                                     thumb_up
                                                                  </i> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 30
                                                                  <span class="material-symbols-outlined  md-14 ms-1">
                                                                     chat_bubble_outline
                                                                  </span> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 10
                                                                  <span class="material-symbols-outlined md-14 ms-1">
                                                                     forward
                                                                  </span></a>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn material-symbols-outlined md-16"
                                                      data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove">
                                                      drive_file_rename_outline
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a data-fslightbox="gallery" href="../assets/images/page-img/61.jpg"
                                                      class="rounded">
                                                      <img src="../assets/images/page-img/61.jpg"
                                                         class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 60
                                                                  <i class="material-symbols-outlined md-14 ms-1">
                                                                     thumb_up
                                                                  </i> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 30
                                                                  <span class="material-symbols-outlined  md-14 ms-1">
                                                                     chat_bubble_outline
                                                                  </span> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 10
                                                                  <span class="material-symbols-outlined md-14 ms-1">
                                                                     forward
                                                                  </span></a>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn material-symbols-outlined md-16"
                                                      data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove">
                                                      drive_file_rename_outline
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a data-fslightbox="gallery" href="../assets/images/page-img/62.jpg"
                                                      class="rounded">
                                                      <img src="../assets/images/page-img/62.jpg"
                                                         class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 60
                                                                  <i class="material-symbols-outlined md-14 ms-1">
                                                                     thumb_up
                                                                  </i> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 30
                                                                  <span class="material-symbols-outlined  md-14 ms-1">
                                                                     chat_bubble_outline
                                                                  </span> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 10
                                                                  <span class="material-symbols-outlined md-14 ms-1">
                                                                     forward
                                                                  </span></a>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn material-symbols-outlined md-16"
                                                      data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove">
                                                      drive_file_rename_outline
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a data-fslightbox="gallery" href="../assets/images/page-img/63.jpg"
                                                      class="rounded">
                                                      <img src="../assets/images/page-img/63.jpg"
                                                         class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 60
                                                                  <i class="material-symbols-outlined md-14 ms-1">
                                                                     thumb_up
                                                                  </i> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 30
                                                                  <span class="material-symbols-outlined  md-14 ms-1">
                                                                     chat_bubble_outline
                                                                  </span> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 10
                                                                  <span class="material-symbols-outlined md-14 ms-1">
                                                                     forward
                                                                  </span></a>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn material-symbols-outlined md-16"
                                                      data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove">
                                                      drive_file_rename_outline
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a data-fslightbox="gallery" href="../assets/images/page-img/64.jpg"
                                                      class="rounded">
                                                      <img src="../assets/images/page-img/64.jpg"
                                                         class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 60
                                                                  <i class="material-symbols-outlined md-14 ms-1">
                                                                     thumb_up
                                                                  </i> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 30
                                                                  <span class="material-symbols-outlined  md-14 ms-1">
                                                                     chat_bubble_outline
                                                                  </span> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 10
                                                                  <span class="material-symbols-outlined md-14 ms-1">
                                                                     forward
                                                                  </span></a>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn material-symbols-outlined md-16"
                                                      data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove">
                                                      drive_file_rename_outline
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a data-fslightbox="gallery" href="../assets/images/page-img/65.jpg"
                                                      class="rounded">
                                                      <img src="../assets/images/page-img/65.jpg"
                                                         class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 60
                                                                  <i class="material-symbols-outlined md-14 ms-1">
                                                                     thumb_up
                                                                  </i> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 30
                                                                  <span class="material-symbols-outlined  md-14 ms-1">
                                                                     chat_bubble_outline
                                                                  </span> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 10
                                                                  <span class="material-symbols-outlined md-14 ms-1">
                                                                     forward
                                                                  </span></a>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn material-symbols-outlined md-16"
                                                      data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove">
                                                      drive_file_rename_outline
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a data-fslightbox="gallery" href="../assets/images/page-img/51.jpg"
                                                      class="rounded">
                                                      <img src="../assets/images/page-img/51.jpg"
                                                         class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 60
                                                                  <i class="material-symbols-outlined md-14 ms-1">
                                                                     thumb_up
                                                                  </i> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 30
                                                                  <span class="material-symbols-outlined  md-14 ms-1">
                                                                     chat_bubble_outline
                                                                  </span> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 10
                                                                  <span class="material-symbols-outlined md-14 ms-1">
                                                                     forward
                                                                  </span></a>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn material-symbols-outlined md-16"
                                                      data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove">
                                                      drive_file_rename_outline
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a data-fslightbox="gallery" href="../assets/images/page-img/52.jpg"
                                                      class="rounded">
                                                      <img src="../assets/images/page-img/52.jpg"
                                                         class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 60
                                                                  <i class="material-symbols-outlined md-14 ms-1">
                                                                     thumb_up
                                                                  </i> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 30
                                                                  <span class="material-symbols-outlined  md-14 ms-1">
                                                                     chat_bubble_outline
                                                                  </span> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 10
                                                                  <span class="material-symbols-outlined md-14 ms-1">
                                                                     forward
                                                                  </span></a>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn material-symbols-outlined md-16"
                                                      data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove">
                                                      drive_file_rename_outline
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a data-fslightbox="gallery" href="../assets/images/page-img/53.jpg"
                                                      class="rounded">
                                                      <img src="../assets/images/page-img/53.jpg"
                                                         class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 60
                                                                  <i class="material-symbols-outlined md-14 ms-1">
                                                                     thumb_up
                                                                  </i> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 30
                                                                  <span class="material-symbols-outlined  md-14 ms-1">
                                                                     chat_bubble_outline
                                                                  </span> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 10
                                                                  <span class="material-symbols-outlined md-14 ms-1">
                                                                     forward
                                                                  </span></a>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn material-symbols-outlined md-16"
                                                      data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove">
                                                      drive_file_rename_outline
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a data-fslightbox="gallery" href="../assets/images/page-img/54.jpg"
                                                      class="rounded">
                                                      <img src="../assets/images/page-img/54.jpg"
                                                         class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 60
                                                                  <i class="material-symbols-outlined md-14 ms-1">
                                                                     thumb_up
                                                                  </i> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 30
                                                                  <span class="material-symbols-outlined  md-14 ms-1">
                                                                     chat_bubble_outline
                                                                  </span> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 10
                                                                  <span class="material-symbols-outlined md-14 ms-1">
                                                                     forward
                                                                  </span></a>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn material-symbols-outlined md-16"
                                                      data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove">
                                                      drive_file_rename_outline
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a data-fslightbox="gallery" href="../assets/images/page-img/55.jpg"
                                                      class="rounded">
                                                      <img src="../assets/images/page-img/55.jpg"
                                                         class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 60
                                                                  <i class="material-symbols-outlined md-14 ms-1">
                                                                     thumb_up
                                                                  </i> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 30
                                                                  <span class="material-symbols-outlined  md-14 ms-1">
                                                                     chat_bubble_outline
                                                                  </span> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 10
                                                                  <span class="material-symbols-outlined md-14 ms-1">
                                                                     forward
                                                                  </span></a>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn material-symbols-outlined md-16"
                                                      data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove">
                                                      drive_file_rename_outline
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a data-fslightbox="gallery" href="../assets/images/page-img/56.jpg"
                                                      class="rounded">
                                                      <img src="../assets/images/page-img/56.jpg"
                                                         class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 60
                                                                  <i class="material-symbols-outlined md-14 ms-1">
                                                                     thumb_up
                                                                  </i> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 30
                                                                  <span class="material-symbols-outlined  md-14 ms-1">
                                                                     chat_bubble_outline
                                                                  </span> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 10
                                                                  <span class="material-symbols-outlined md-14 ms-1">
                                                                     forward
                                                                  </span></a>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn material-symbols-outlined md-16"
                                                      data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove">
                                                      drive_file_rename_outline
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a data-fslightbox="gallery" href="../assets/images/page-img/57.jpg"
                                                      class="rounded">
                                                      <img src="../assets/images/page-img/57.jpg"
                                                         class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 60
                                                                  <i class="material-symbols-outlined md-14 ms-1">
                                                                     thumb_up
                                                                  </i> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 30
                                                                  <span class="material-symbols-outlined  md-14 ms-1">
                                                                     chat_bubble_outline
                                                                  </span> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 10
                                                                  <span class="material-symbols-outlined md-14 ms-1">
                                                                     forward
                                                                  </span></a>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn material-symbols-outlined md-16"
                                                      data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove">
                                                      drive_file_rename_outline
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a data-fslightbox="gallery" href="../assets/images/page-img/58.jpg"
                                                      class="rounded">
                                                      <img src="../assets/images/page-img/58.jpg"
                                                         class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 60
                                                                  <i class="material-symbols-outlined md-14 ms-1">
                                                                     thumb_up
                                                                  </i> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 30
                                                                  <span class="material-symbols-outlined  md-14 ms-1">
                                                                     chat_bubble_outline
                                                                  </span> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 10
                                                                  <span class="material-symbols-outlined md-14 ms-1">
                                                                     forward
                                                                  </span></a>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn material-symbols-outlined md-16"
                                                      data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove">
                                                      drive_file_rename_outline
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a href="#">
                                                      <img src="../assets/images/page-img/59.jpg"
                                                         class="img-fluid rounded" alt="Responsive image"
                                                         loading="lazy">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 60
                                                                  <i class="material-symbols-outlined md-14 ms-1">
                                                                     thumb_up
                                                                  </i> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 30
                                                                  <span class="material-symbols-outlined  md-14 ms-1">
                                                                     chat_bubble_outline
                                                                  </span> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 10
                                                                  <span class="material-symbols-outlined md-14 ms-1">
                                                                     forward
                                                                  </span></a>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn material-symbols-outlined md-16"
                                                      data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove">
                                                      drive_file_rename_outline
                                                   </a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="tab-pane fade" id="your-photos" role="tabpanel">
                                       <div class="card-body p-0">
                                          <div class="d-grid gap-2 d-grid-template-1fr-13 ">
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a data-fslightbox="gallery" href="../assets/images/page-img/51.jpg"
                                                      class="rounded">
                                                      <img src="../assets/images/page-img/51.jpg"
                                                         class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 60
                                                                  <i class="material-symbols-outlined md-14 ms-1">
                                                                     thumb_up
                                                                  </i> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 30
                                                                  <span class="material-symbols-outlined  md-14 ms-1">
                                                                     chat_bubble_outline
                                                                  </span> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 10
                                                                  <span class="material-symbols-outlined md-14 ms-1">
                                                                     forward
                                                                  </span></a>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn material-symbols-outlined md-16"
                                                      data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove">
                                                      drive_file_rename_outline
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a data-fslightbox="gallery" href="../assets/images/page-img/52.jpg"
                                                      class="rounded">
                                                      <img src="../assets/images/page-img/52.jpg"
                                                         class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 60
                                                                  <i class="material-symbols-outlined md-14 ms-1">
                                                                     thumb_up
                                                                  </i> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 30
                                                                  <span class="material-symbols-outlined  md-14 ms-1">
                                                                     chat_bubble_outline
                                                                  </span> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 10
                                                                  <span class="material-symbols-outlined md-14 ms-1">
                                                                     forward
                                                                  </span></a>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn material-symbols-outlined md-16"
                                                      data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove">
                                                      drive_file_rename_outline
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a data-fslightbox="gallery" href="../assets/images/page-img/53.jpg"
                                                      class="rounded">
                                                      <img src="../assets/images/page-img/53.jpg"
                                                         class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 60
                                                                  <i class="material-symbols-outlined md-14 ms-1">
                                                                     thumb_up
                                                                  </i> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 30
                                                                  <span class="material-symbols-outlined  md-14 ms-1">
                                                                     chat_bubble_outline
                                                                  </span> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 10
                                                                  <span class="material-symbols-outlined md-14 ms-1">
                                                                     forward
                                                                  </span></a>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn material-symbols-outlined md-16"
                                                      data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove">
                                                      drive_file_rename_outline
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a data-fslightbox="gallery" href="../assets/images/page-img/54.jpg"
                                                      class="rounded">
                                                      <img src="../assets/images/page-img/54.jpg"
                                                         class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 60
                                                                  <i class="material-symbols-outlined md-14 ms-1">
                                                                     thumb_up
                                                                  </i> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 30
                                                                  <span class="material-symbols-outlined  md-14 ms-1">
                                                                     chat_bubble_outline
                                                                  </span> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 10
                                                                  <span class="material-symbols-outlined md-14 ms-1">
                                                                     forward
                                                                  </span></a>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn material-symbols-outlined md-16"
                                                      data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove">
                                                      drive_file_rename_outline
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a data-fslightbox="gallery" href="../assets/images/page-img/55.jpg"
                                                      class="rounded">
                                                      <img src="../assets/images/page-img/55.jpg"
                                                         class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 60
                                                                  <i class="material-symbols-outlined md-14 ms-1">
                                                                     thumb_up
                                                                  </i> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 30
                                                                  <span class="material-symbols-outlined  md-14 ms-1">
                                                                     chat_bubble_outline
                                                                  </span> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 10
                                                                  <span class="material-symbols-outlined md-14 ms-1">
                                                                     forward
                                                                  </span></a>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn material-symbols-outlined md-16"
                                                      data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove">
                                                      drive_file_rename_outline
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a data-fslightbox="gallery" href="../assets/images/page-img/56.jpg"
                                                      class="rounded">
                                                      <img src="../assets/images/page-img/56.jpg"
                                                         class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 60
                                                                  <i class="material-symbols-outlined md-14 ms-1">
                                                                     thumb_up
                                                                  </i> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 30
                                                                  <span class="material-symbols-outlined  md-14 ms-1">
                                                                     chat_bubble_outline
                                                                  </span> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 10
                                                                  <span class="material-symbols-outlined md-14 ms-1">
                                                                     forward
                                                                  </span></a>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn material-symbols-outlined md-16"
                                                      data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove">
                                                      drive_file_rename_outline
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a data-fslightbox="gallery" href="../assets/images/page-img/57.jpg"
                                                      class="rounded">
                                                      <img src="../assets/images/page-img/57.jpg"
                                                         class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 60
                                                                  <i class="material-symbols-outlined md-14 ms-1">
                                                                     thumb_up
                                                                  </i> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 30
                                                                  <span class="material-symbols-outlined  md-14 ms-1">
                                                                     chat_bubble_outline
                                                                  </span> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 10
                                                                  <span class="material-symbols-outlined md-14 ms-1">
                                                                     forward
                                                                  </span></a>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn material-symbols-outlined md-16"
                                                      data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove">
                                                      drive_file_rename_outline
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a data-fslightbox="gallery" href="../assets/images/page-img/58.jpg"
                                                      class="rounded">
                                                      <img src="../assets/images/page-img/58.jpg"
                                                         class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 60
                                                                  <i class="material-symbols-outlined md-14 ms-1">
                                                                     thumb_up
                                                                  </i> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 30
                                                                  <span class="material-symbols-outlined  md-14 ms-1">
                                                                     chat_bubble_outline
                                                                  </span> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 10
                                                                  <span class="material-symbols-outlined md-14 ms-1">
                                                                     forward
                                                                  </span></a>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn material-symbols-outlined md-16"
                                                      data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove">
                                                      drive_file_rename_outline
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a data-fslightbox="gallery" href="../assets/images/page-img/59.jpg"
                                                      class="rounded">
                                                      <img src="../assets/images/page-img/59.jpg"
                                                         class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 60
                                                                  <i class="material-symbols-outlined md-14 ms-1">
                                                                     thumb_up
                                                                  </i> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 30
                                                                  <span class="material-symbols-outlined  md-14 ms-1">
                                                                     chat_bubble_outline
                                                                  </span> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 10
                                                                  <span class="material-symbols-outlined md-14 ms-1">
                                                                     forward
                                                                  </span></a>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn material-symbols-outlined md-16"
                                                      data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove">
                                                      drive_file_rename_outline
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a data-fslightbox="gallery" href="../assets/images/page-img/60.jpg"
                                                      class="rounded">
                                                      <img src="../assets/images/page-img/60.jpg"
                                                         class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 60
                                                                  <i class="material-symbols-outlined md-14 ms-1">
                                                                     thumb_up
                                                                  </i> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 30
                                                                  <span class="material-symbols-outlined  md-14 ms-1">
                                                                     chat_bubble_outline
                                                                  </span> </a>
                                                            </li>
                                                            <li><a href="#"
                                                                  class="pe-3 text-white d-flex align-items-center"> 10
                                                                  <span class="material-symbols-outlined md-14 ms-1">
                                                                     forward
                                                                  </span></a>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn material-symbols-outlined md-16"
                                                      data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove">
                                                      drive_file_rename_outline
                                                   </a>
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
                  </div>
               </div>
               <div class="col-sm-12 text-center">
                  <img src="../assets/images/page-img/page-load-loader.gif" alt="loader" style="height: 100px;"
                     loading="lazy">
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
                        <img class="rounded-circle avatar-50" src="../assets/images/user/01.jpg" alt="" loading="lazy">
                     </div>
                     <div class="ms-3">
                        <h6 class="mb-0">Anna Sthesia</h6>
                        <p class="mb-0">Just Now</p>
                     </div>
                  </div>
                  <div class="d-flex align-items-center mb-4">
                     <div class="iq-profile-avatar status-online">
                        <img class="rounded-circle avatar-50" src="../assets/images/user/02.jpg" alt="" loading="lazy">
                     </div>
                     <div class="ms-3">
                        <h6 class="mb-0">Paul Molive</h6>
                        <p class="mb-0">Admin</p>
                     </div>
                  </div>
                  <div class="d-flex align-items-center mb-4">
                     <div class="iq-profile-avatar status-online">
                        <img class="rounded-circle avatar-50" src="../assets/images/user/03.jpg" alt="" loading="lazy">
                     </div>
                     <div class="ms-3">
                        <h6 class="mb-0">Anna Mull</h6>
                        <p class="mb-0">Admin</p>
                     </div>
                  </div>
                  <div class="d-flex align-items-center mb-4">
                     <div class="iq-profile-avatar status-online">
                        <img class="rounded-circle avatar-50" src="../assets/images/user/04.jpg" alt="" loading="lazy">
                     </div>
                     <div class="ms-3">
                        <h6 class="mb-0">Paige Turner</h6>
                        <p class="mb-0">Admin</p>
                     </div>
                  </div>
                  <div class="d-flex align-items-center mb-4">
                     <div class="iq-profile-avatar status-online">
                        <img class="rounded-circle avatar-50" src="../assets/images/user/11.jpg" alt="" loading="lazy">
                     </div>
                     <div class="ms-3">
                        <h6 class="mb-0">Bob Frapples</h6>
                        <p class="mb-0">Admin</p>
                     </div>
                  </div>
                  <div class="d-flex align-items-center mb-4">
                     <div class="iq-profile-avatar status-online">
                        <img class="rounded-circle avatar-50" src="../assets/images/user/02.jpg" alt="" loading="lazy">
                     </div>
                     <div class="ms-3">
                        <h6 class="mb-0">Barb Ackue</h6>
                        <p class="mb-0">Admin</p>
                     </div>
                  </div>
                  <div class="d-flex align-items-center mb-4">
                     <div class="iq-profile-avatar status-online">
                        <img class="rounded-circle avatar-50" src="../assets/images/user/03.jpg" alt="" loading="lazy">
                     </div>
                     <div class="ms-3">
                        <h6 class="mb-0">Greta Life</h6>
                        <p class="mb-0">Admin</p>
                     </div>
                  </div>
                  <div class="d-flex align-items-center mb-4">
                     <div class="iq-profile-avatar status-away">
                        <img class="rounded-circle avatar-50" src="../assets/images/user/12.jpg" alt="" loading="lazy">
                     </div>
                     <div class="ms-3">
                        <h6 class="mb-0">Ira Membrit</h6>
                        <p class="mb-0">Admin</p>
                     </div>
                  </div>
                  <div class="d-flex align-items-center mb-4">
                     <div class="iq-profile-avatar status-away">
                        <img class="rounded-circle avatar-50" src="../assets/images/user/01.jpg" alt="" loading="lazy">
                     </div>
                     <div class="ms-3">
                        <h6 class="mb-0">Pete Sariya</h6>
                        <p class="mb-0">Admin</p>
                     </div>
                  </div>
                  <div class="d-flex align-items-center">
                     <div class="iq-profile-avatar">
                        <img class="rounded-circle avatar-50" src="../assets/images/user/02.jpg" alt="" loading="lazy">
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
                              <label class="form-check-label h6 d-flex align-items-center justify-content-between"
                                 for="color-mode-light">
                                 <span>Light Theme</span>
                                 <div class="text-primary ">
                                    <svg width="60" height="27" viewBox="0 0 60 27" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125" fill="white" />
                                       <circle cx="9.75" cy="9.75" r="3.75" fill="#80868B" />
                                       <rect x="16.5" y="8.25" width="37.5" height="3" rx="1.5" fill="#DADCE0" />
                                       <rect x="6" y="18" width="48" height="3" rx="1.5" fill="currentColor" />
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
                              <label class="form-check-label h6 d-flex align-items-center justify-content-between"
                                 for="color-mode-dark">
                                 <span>Dark Theme</span>
                                 <div class="text-primary ">
                                    <svg width="60" height="27" viewBox="0 0 60 27" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125"
                                          fill="#1E2745" />
                                       <circle cx="9.75" cy="9.75" r="3.75" fill="#80868B" />
                                       <rect x="16.5" y="8.25" width="37.5" height="3" rx="1.5" fill="#DADCE0" />
                                       <rect x="6" y="18" width="48" height="3" rx="1.5" fill="currentColor" />
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
                              <label class="form-check-label h6 d-flex align-items-center justify-content-between"
                                 for="color-mode-auto">
                                 <span>Device Default</span>
                                 <div class="text-primary ">
                                    <svg class="rounded" width="60" height="27" viewBox="0 0 60 27" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125"
                                          fill="#1E2745" />
                                       <circle cx="9.75" cy="9.75" r="3.75" fill="#80868B" />
                                       <rect x="16.5" y="8.25" width="37.5" height="3" rx="1.5" fill="#DADCE0" />
                                       <rect x="6" y="18" width="48" height="3" rx="1.5" fill="currentColor" />
                                       <g clip-path="url(#clip0_507_92)">
                                          <rect width="30" height="27" fill="white" />
                                          <circle cx="9.75" cy="9.75" r="3.75" fill="#80868B" />
                                          <rect x="16.5" y="8.25" width="37.5" height="3" rx="1.5" fill="#DADCE0" />
                                          <rect x="6" y="18" width="48" height="3" rx="1.5" fill="currentColor" />
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
                              <input type="checkbox" value="sidebar-mini" class="btn-check" name="sidebar_type"
                                 id="sidebar-mini">
                              <label class="btn btn-border btn-setting-panel d-block overflow-hidden"
                                 for="sidebar-mini">
                                 Mini
                              </label>
                           </div>
                           <div data-setting="checkbox" class="text-center">
                              <input type="checkbox" value="sidebar-hover"
                                 data-extra="{target: '.sidebar', ClassListAdd: 'sidebar-mini'}" class="btn-check"
                                 name="sidebar_type" id="sidebar-hover">
                              <label class="btn btn-border btn-setting-panel d-block overflow-hidden"
                                 for="sidebar-hover">
                                 Hover
                              </label>
                           </div>
                           <div data-setting="checkbox" class="text-center">
                              <input type="checkbox" value="sidebar-soft" class="btn-check" name="sidebar_type"
                                 id="sidebar-soft">
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
                              <input type="radio" value="navs-rounded" class="btn-check" name="sidebar_menu_style"
                                 id="navs-rounded">
                              <label class="btn btn-border btn-setting-panel d-block overflow-hidden"
                                 for="navs-rounded">
                                 Rounded One
                              </label>
                           </div>
                           <div data-setting="radio" class="text-center">
                              <input type="radio" value="navs-rounded-all" class="btn-check" name="sidebar_menu_style"
                                 id="navs-rounded-all">
                              <label class="btn btn-border btn-setting-panel d-block overflow-hidden"
                                 for="navs-rounded-all">
                                 Rounded All
                              </label>
                           </div>
                           <div data-setting="radio" class="text-center">
                              <input type="radio" value="navs-pill" class="btn-check" name="sidebar_menu_style"
                                 id="navs-pill">
                              <label class="btn btn-border btn-setting-panel d-block overflow-hidden" for="navs-pill">
                                 Pill One Side
                              </label>
                           </div>
                           <div data-setting="radio" class="text-center">
                              <input type="radio" value="navs-pill-all" class="btn-check" name="sidebar_menu_style"
                                 id="navs-pill-all">
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
                                 <input type="radio" value="theme-color-default" class="btn-check" name="theme_color"
                                    id="theme-color-default" data-colors='{"primary": "#50b5ff", "info": "#d592ff"}'>
                                 <label class="btn bg-transparent" for="theme-color-default" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Reset Color" data-bs-original-title="Reset color">
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
                              <input type="radio" value="theme-color-blue" class="btn-check" name="theme_color"
                                 id="theme-color-1" data-colors='{"primary": "#4285F4", "info": "#EA4335"}'>
                              <label class="btn btn-border d-block bg-transparent p-2" for="theme-color-1"
                                 data-bs-toggle="tooltip" data-bs-placement="top" title="Gmail"
                                 data-bs-original-title="Gmail">
                                 <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    width="26" height="26">
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
                                 <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    width="26" height="26">
                                    <circle cx="12" cy="12" r="10" fill="#FF4500" />
                                    <path d="M2,12 a1,1 1 1,0 20,0" fill="#1A73E8" />
                                 </svg>
                              </label>
                           </div>
                           <div data-setting="radio">
                              <input type="radio" value="theme-color-purple" class="btn-check" name="theme_color"
                                 id="theme-color-3" data-colors='{"primary": "#8755f2", "info": "#EE4266"}'>
                              <label class="btn btn-border d-block bg-transparent p-2" for="theme-color-3"
                                 data-bs-toggle="tooltip" data-bs-placement="top" title="Twitch"
                                 data-bs-original-title="Twitch">
                                 <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    width="26" height="26">
                                    <circle cx="12" cy="12" r="10" fill="#8755f2" />
                                    <path d="M2,12 a1,1 1 1,0 20,0" fill="#EE4266" />
                                 </svg>
                              </label>
                           </div>
                           <div data-setting="radio">
                              <input type="radio" value="theme-color-cyan" class="btn-check" name="theme_color"
                                 id="theme-color-4" data-colors='{"primary": "#0A66C2", "info": "#333333"}'>
                              <label class="btn btn-border d-block bg-transparent p-2" for="theme-color-4"
                                 data-bs-toggle="tooltip" data-bs-placement="top" title="Linkdin"
                                 data-bs-original-title="Linkdin">
                                 <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    width="26" height="26">
                                    <circle cx="12" cy="12" r="10" fill="#0A66C2" />
                                    <path d="M2,12 a1,1 1 1,0 20,0" fill="#333333" />
                                 </svg>
                              </label>
                           </div>
                           <div data-setting="radio">
                              <input type="radio" value="theme-color-green" class="btn-check" name="theme_color"
                                 id="theme-color-5" data-colors='{"primary": "#00b75a", "info": "#000000"}'>
                              <label class="btn btn-border d-block bg-transparent p-2" for="theme-color-5"
                                 data-bs-toggle="tooltip" data-bs-placement="top" title="Spotify"
                                 data-bs-original-title="Spotify">
                                 <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    width="26" height="26">
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
                                 name="theme_scheme_direction" data-prop="dir" id="theme-scheme-direction-ltr" checked>
                              <label class="form-check-label h6 d-flex align-items-center justify-content-between"
                                 for="theme-scheme-direction-ltr">
                                 <span>LTR</span>
                                 <svg class="text-primary" width="60" height="27" viewBox="0 0 60 27" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="11.5" cy="13.5002" r="6.5" fill="currentColor" />
                                    <rect x="21" y="7.70026" width="34" height="5" rx="2" fill="#80868B" />
                                    <rect opacity="0.5" x="21" y="16.1003" width="25.6281" height="3.2" rx="1.6"
                                       fill="#80868B" />
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
                              <label class="form-check-label h6 d-flex align-items-center justify-content-between "
                                 for="theme-scheme-direction-rtl">
                                 <span>RTL</span>
                                 <svg class="text-primary" width="60" height="27" viewBox="0 0 60 27" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle r="6.5" transform="matrix(-1 0 0 1 48.5 13.5002)" fill="currentColor" />
                                    <rect width="34" height="5" rx="2" transform="matrix(-1 0 0 1 39 7.70026)"
                                       fill="#80868B" />
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