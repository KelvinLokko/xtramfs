<!doctype html>
<html lang="en">
   
<!-- Mirrored from templates.iqonic.design/vito/html/main/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Oct 2024 14:23:44 GMT -->
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Npontu Technologies</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{asset(path: 'assets/images/npontulogo.png')}}" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{asset(path: 'assets/css/bootstrap.min.css')}}">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="{{asset(path: 'assets/css/typography.css')}}">
      <!-- Style CSS -->
      <link rel="stylesheet" href="{{asset(path: 'assets/css/style.css')}}">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="{{asset(path: 'assets/css/responsive.css')}}">
   </head>
   <body>
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">
         </div>
      </div>
      <!-- loader END -->
        <!-- Sign in Start -->

        @yield('content')


      <!--  <section class="sign-in-page">
            <div class="container bg-white mt-5 p-0">
                <div class="row no-gutters">
                    <div class="col-sm-6 align-self-center">
                        <div class="sign-in-from">
                            <h1 class="mb-0 dark-signin">Sign in</h1>
                            <p>Enter your email address and password to access admin panel.</p>
                            <form class="mt-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control mb-0" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <a href="#" class="float-right">Forgot password?</a>
                                    <input type="password" class="form-control mb-0" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="d-inline-block w-100">
                                    <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Remember Me</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary float-right">Sign in</button>
                                </div>
                                <div class="sign-info">
                                    <span class="dark-color d-inline-block line-height-2">Don't have an account? <a href="#">Sign up</a></span>
                                    <ul class="iq-social-media">
                                        <li><a href="#"><i class="ri-facebook-box-line"></i></a></li>
                                        <li><a href="#"><i class="ri-twitter-line"></i></a></li>
                                        <li><a href="#"><i class="ri-instagram-line"></i></a></li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                    </div>


                    // New code 
                    <div class="col-sm-6 text-center">
                    <div class="sign-in-detail text-white">
                        <a class="sign-in-logo mb-10" href="#"
                        ><img
                            src="{{asset(path: 'assets/images/npontulogo.png')}}"
                            class="img-fluid"
                            alt="logo"
                            style="width: 200px; height: 100px; margin-top: 60px"
                        />
                        </a>
                        <div class="item">
                        <img src="{{asset(path: 'assets/images/bro.png')}}" class="img-fluid mb-4" alt="logo" />
                        <p>Report. Analyze. Decide. Simplified.</p>
                        </div>
                    </div>
                    </div>


                    // Old code
                   <div class="col-sm-6 text-center">
                        <div class="sign-in-detail text-white">
                            <a class="sign-in-logo mb-5" href="#"><img src="{{asset(path: 'assets/images/npontulogo.png')}}" class="img-fluid" alt="logo"></a>
                            <div class="slick-slider11" data-autoplay="true" data-loop="true" data-nav="false" data-dots="true" data-items="1" data-items-laptop="1" data-items-tab="1" data-items-mobile="1" data-items-mobile-sm="1" data-margin="0">


                                <div class="item">
                                    <img src="{{asset(path: 'assets/images/login/1.png')}}" class="img-fluid mb-4" alt="logo">
                                    <h4 class="mb-1 text-white">Manage your orders</h4>
                                    <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                                </div> 

                                 <div class="item">
                                    <img src="{{asset(path: 'assets/images/login/1.png')}}" class="img-fluid mb-4" alt="logo">
                                    <h4 class="mb-1 text-white">Manage your orders</h4>
                                    <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                                </div> 

                                <div class="item">
                                    <img src="{{asset(path: 'assets/images/login/1.png')}}" class="img-fluid mb-4" alt="logo">
                                    <h4 class="mb-1 text-white">Manage your orders</h4>
                                    <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </section> -->




        <!-- Sign in END -->
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="{{asset(path: 'assets/js/jquery.min.js')}}"></script>
      <script src="{{asset(path: 'assets/js/popper.min.js')}}"></script>
      <script src="{{asset(path: 'assets/js/bootstrap.min.js')}}"></script>
      <!-- Appear JavaScript -->
      <script src="{{asset(path: 'assets/js/jquery.appear.js')}}"></script>
      <!-- Countdown JavaScript -->
      <script src="{{asset(path: 'assets/js/countdown.min.js')}}"></script>
      <!-- Counterup JavaScript -->
      <script src="{{asset(path: 'assets/js/waypoints.min.js')}}"></script>
      <script src="{{asset(path: 'assets/js/jquery.counterup.min.js')}}"></script>
      <!-- Wow JavaScript -->
      <script src="{{asset(path: 'assets/js/wow.min.js')}}"></script>
      <!-- Apexcharts JavaScript -->
      <script src="{{asset(path: 'assets/js/apexcharts.js')}}"></script>
      <!-- Slick JavaScript -->
      <script src="{{asset(path: 'assets/js/slick.min.js')}}"></script>
      <!-- Select2 JavaScript -->
      <script src="{{asset(path: 'assets/js/select2.min.js')}}"></script>
      <!-- Owl Carousel JavaScript -->
      <script src="{{asset(path: 'assets/js/owl.carousel.min.js')}}"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="{{asset(path: 'assets/js/jquery.magnific-popup.min.js')}}"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="{{asset(path: 'assets/js/smooth-scrollbar.js')}}"></script>
      <!-- Chart Custom JavaScript -->
      <script src="{{asset(path: 'assets/js/chart-custom.js')}}"></script>
      <!-- Custom JavaScript -->
      <script src="{{asset(path: 'assets/js/custom.js')}}"></script>



      <script>
        const togglePassword = document.getElementById("togglePassword");
        const passwordInput = document.getElementById("exampleInputPassword1");

        togglePassword.addEventListener("click", function() {
            const type = passwordInput.getAttribute("type") === "password" ? "text" : "password";
            passwordInput.setAttribute("type", type);
            this.classList.toggle("fa-eye-slash");
        });
    </script>

   </body>

<!-- Mirrored from templates.iqonic.design/vito/html/main/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Oct 2024 14:23:45 GMT -->
</html>