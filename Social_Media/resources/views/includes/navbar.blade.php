
<div class="iq-top-navbar">
   <div class="iq-navbar-custom">
      <nav class="navbar navbar-expand-lg navbar-light p-0">
         <div class="iq-navbar-logo d-flex justify-content-between">
            <a href="../dashboard/index.html">
               <span>ITBook</span>
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
                  <a class="  d-flex align-items-center">
                     <button class="iq-float-menu-item bg-danger" data-toggle="tooltip" data-placement="top" title="Color Mode" id="dark-mode" data-active="true"><i class="ri-sun-line"></i></button></i></i>
                  </a>
               </li>
               <li class="nav-item dropdown">
                  <a href="notification.html">
                     <i class="ri-notification-4-line"></i>
                  </a>
               </li>
               <li class="nav-item dropdown">
                  <a href="chat.html">
                     <i class="ri-mail-line"></i>
                  </a>
               </li>
               <li class="nav-item dropdown">
                  <a href="#" class="   d-flex align-items-center dropdown-toggle" id="drop-down-arrow"
                     data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <img src="../assets/images/user/user.png" class="img-fluid rounded-circle me-3" alt="user">
                     <div class="caption">
                        <h6 class="mb-0 line-height">{{Auth::user()->firstname}} {{Auth::user()->lastname}}</h6>
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
                        <div class="card-body p-0 ">
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
                           <div class="d-inline-block w-100 text-center p-3">
                              <a class="btn btn-primary iq-sign-btn" href="{{ route('logout') }}" role="button">Sign
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


     