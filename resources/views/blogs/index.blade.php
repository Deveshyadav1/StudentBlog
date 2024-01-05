<!--
=========================================================
* Material Kit 2 - v3.0.4
=========================================================

* Product Page:  https://www.creative-tim.com/product/material-kit 
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Material Kit 2 by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-kit.css?v=3.0.4" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="blog-author bg-gray-200">
  <!-- Navbar Transparent -->
  <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3  navbar-transparent ">
    <div class="container">
      <a class="navbar-brand  text-white " href="/home" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="">
        Student Blog
      </a>
      <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon mt-2">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </span>
      </button>
      


 <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
    <ul class="navbar-nav navbar-nav-hover ms-auto">
        <li class="nav-item my-auto ms-3 ms-lg-0">
            <a href="/add_blog" class="btn btn-sm bg-gradient-primary mb-0 me-1 mt-2 mt-md-0">Add Blog</a>
        </li>
        <li class="nav-item my-auto ms-3 ms-lg-0">
            <a href="/blogs" class="btn btn-sm bg-gradient-primary mb-0 me-1 mt-2 mt-md-0">Blog List</a>
        </li>
        
        @auth
            <!-- User is authenticated, show Logout button -->
            <li class="nav-item my-auto ms-3 ms-lg-0">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-sm bg-gradient-danger mb-0 me-1 mt-2 mt-md-0">Logout</button>
                </form>
            </li>
        @else
            <!-- User is not authenticated, show Login button or link -->
            <li class="nav-item my-auto ms-3 ms-lg-0">
                <a href="{{ route('login') }}" class="btn btn-sm bg-gradient-primary mb-0 me-1 mt-2 mt-md-0">Login</a>
            </li>
        @endauth
    </ul>
</div>




    </div>
  </nav>
  <!-- End Navbar -->
  <!-- -------- START HEADER 4 w/ search book a ticket form ------- -->
  <header>
    <div class="page-header min-height-400" style="background-image: url('../assets/img/city-profile.jpg');" loading="lazy">
      <span class="mask bg-gradient-dark opacity-8"></span>
    </div>
  </header>
  <!-- -------- END HEADER 4 w/ search book a ticket form ------- -->
  <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6 mb-4">
    <!-- START Testimonials w/ user image & text & info -->
    <section class="py-sm-7 py-5 position-relative">
      <div class="container">
        <div class="row">
          <div class="col-12 mx-auto">
            <div class="mt-n8 mt-md-n9 text-center">
              <img class="avatar avatar-xxl shadow-xl position-relative z-index-2" src="../assets/img/bruce-mars.jpg" alt="bruce" loading="lazy">
            </div>
            <div class="row py-5">
              <div class="col-lg-7 col-md-7 z-index-2 position-relative px-md-2 px-sm-5 mx-auto">
                <div class="d-flex justify-content-between align-items-center mb-2">
                  <h3 class="mb-0">{{Auth::user()->name}}</h3>
                  <div class="d-block">
                    <!-- <button type="button" class="btn btn-sm btn-outline-info text-nowrap mb-0">Follow</button> -->
                  </div>
                </div>
                <div class="row mb-4">
                  <div class="col-auto">
                    <span class="h6">{{$blogCount}}</span>
                    <span>Blogs</span>
                  </div>
                  
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
   

    <section class="py-3">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h3 class="mb-5">Check my latest blog posts</h3>
          </div>
        </div>
        <div class="row">


<?php

// echo "<pre>";
// print_r($blogs);die;

?>


<div class="row">
    @foreach ($blogs as $index => $blog)
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card card-plain">
                <div class="card-header p-0 position-relative">
                    <a class="d-block blur-shadow-image">
                        <img src="{{ asset('assets/img/blog_images/' . $blog->image) }}" alt="{{ $blog->title }}" class="img-fluid shadow border-radius-lg" loading="lazy">
                    </a>
                </div>
                <div class="card-body px-0">
                    <h5>
                        <a href="javascript:;" class="text-dark font-weight-bold">{{ $blog->title }}</a>
                    </h5>
                    <p>
                        {{ \Illuminate\Support\Str::limit($blog->description, 100, $end='...') }}
                    </p>
                    
                </div>
            </div>
        </div>

        @if(($index + 1) % 4 == 0)
            </div>
            <div class="row">
        @endif
    @endforeach
</div>

         


        </div>
      </div>
    </section>
    <!-- END Blogs w/ 4 cards w/ image & text & link -->
  </div>
  <!-- -------- START FOOTER 5 w/ DARK BACKGROUND ------- -->
  
  <!-- -------- END FOOTER 5 w/ DARK BACKGROUND ------- -->
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
  <script src="../assets/js/material-kit.min.js?v=3.0.4" type="text/javascript"></script>
</body>

</html>