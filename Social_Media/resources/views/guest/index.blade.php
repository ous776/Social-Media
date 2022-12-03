@include('includes/header')


<div class="iq-top-navbar">
    <div class="iq-navbar-custom">
       <nav class="navbar navbar-expand-lg navbar-light p-0">
          <div class="iq-navbar-logo d-flex justify-content-between">
             <a href="{{ url('/') }}">
                <img src="../assets/images/logo.png" class="img-fluid" alt="">
                
             </a>
             
          </div>
       
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
             data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
             aria-label="Toggle navigation">
             <i class="ri-menu-3-line"></i>
          </button>

         
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav  ms-auto navbar-list">
                <li>
                   <a href="{{ route('login') }}" class="  d-flex align-items-center">
                     Login
                   </a>
                </li>bhb
                <li>
                  <a href="{{ route('register') }}" class="  d-flex align-items-center">
                     Register
                  </a>
               </li>
             

             </ul>
          </div>
       </nav>
    </div>
 </div>



<footer class="footer bg-white">
   <div class="offcanvas-body small">
      <div class="d-flex flex-wrap align-items-center">
         <div class="text-center me-3 mb-3">
            <img src="assets/images/icon/08.png" class="img-fluid rounded mb-2" alt="">
            <h6>Facebook</h6>
         </div>
         <div class="text-center me-3 mb-3">
            <img src="../assets/images/icon/09.png" class="img-fluid rounded mb-2" alt="">
            <h6>Twitter</h6>
         </div>
         <div class="text-center me-3 mb-3">
            <img src="../assets/images/icon/10.png" class="img-fluid rounded mb-2" alt="">
            <h6>Instagram</h6>
         </div>
         <div class="text-center me-3 mb-3">
            <img src="../assets/images/icon/13.png" class="img-fluid rounded mb-2" alt="">
            <h6>In</h6>
         </div>
         <div class="text-center me-3 mb-3">
            <img src="../assets/images/icon/12.png" class="img-fluid rounded mb-2" alt="">
            <h6>YouTube</h6>
         </div>
      </div>
   </div>
  </div>
   <div class="container">
      <div class="row">
         <div class="col-lg-6">
            <ul class="list-inline mb-0">
               <li class="list-inline-item"><a href="../dashboard/privacy-policy.html">Privacy Policy</a></li>
               <li class="list-inline-item"><a href="../dashboard/terms-of-service.html">Terms of Use</a></li>
            </ul>
         </div>
         <div class="col-lg-6 d-flex justify-content-end">
            Copyright 2020 <a href="#">SocialV</a> All Rights Reserved.
         </div>
      </div>
   </div>
</footer>



</body>

</html>