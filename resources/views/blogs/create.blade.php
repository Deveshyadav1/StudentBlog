<?php use Illuminate\Support\Facades\Auth;  ?>
<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Student Blog
  </title>

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-kit.css?v=3.0.4" rel="stylesheet" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="blog-author bg-gray-200">
  <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3  navbar-transparent ">
    <div class="container">
      <a class="navbar-brand  text-white " href="/home" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="">
      {{Auth::user()->name}}
      </a>
      <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon mt-2">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </span>
      </button>

      <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0 ms-lg-12 ps-lg-5" id="navigation">
        
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

    </div>
  </nav>
  <header>
    <div class="page-header min-height-400" style="background-image: url('../assets/img/city-profile.jpg');" loading="lazy">
      <span class="mask bg-gradient-dark opacity-8"></span>
    </div>
  </header>
  
  <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6 mb-4">
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
                  <h3 class="mb-0">{{Auth::user()->name }}</h3>
                  <div class="d-block">
                    
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
     <section class="py-lg-5">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card box-shadow-xl overflow-hidden mb-5">
            <div class="row">
              <div class="col-lg-5 position-relative bg-cover px-0" style="background-image: url('../assets/img/examples/blog2.jpg')" loading="lazy">
                <div class="z-index-2 text-center d-flex h-100 w-100 d-flex m-auto justify-content-center">
                  <div class="mask bg-gradient-dark opacity-8"></div>
                  <div class="p-5 ps-sm-8 position-relative text-start my-auto z-index-2">
                    <h3 class="text-white">Students Blogs </h3>
                    <p class="text-white opacity-8 mb-4"></p>
             
                  </div>
                </div>
              </div>
             
<div class="col-lg-7">
    <form class="p-3" id="blog-form" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card-header px-4 py-sm-5 py-3">
            <h2>Add Blog</h2>
            <p class="lead">Share Your Thoughts</p>
        </div>
        <div class="card-body pt-1">
            <div class="row">
                <div class="col-md-12 pe-2 mb-3">
                    <div class="input-group input-group-static mb-4">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Blog Title">
                    </div>
                </div>
                <div class="col-md-12 pe-2 mb-3">
                    <div class="input-group input-group-static mb-4">
                        <label>Description</label>
                        <textarea name="description" id="blog-description" class="form-control" rows="6"
                            placeholder="Write your blog description..."></textarea>
                    </div>
                </div>
                    
                    
                      <div class="col-md-12 pe-2 mb-3">
                        <label>Image</label>
                        <div style="max-height: 200px; max-width: 200px; overflow: hidden;">
                            <input type="file" id="image-input" name="image" onchange="previewImage(this)">
                            <div id="image-container" class="dropzone" style="max-height: 100%; max-width: 100%;"></div>
                        </div>
                    </div>

                    <div id="image-dropzone" class="dropzone"></div>
                    <img id="image-preview" src="#" alt="Image Preview" style="display:none; max-width: 100%;">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 text-end ms-auto">
                    <button type="button" id="submit-blog" class="btn btn-success mb-0">Create</button>
                </div>
            </div>
        </div>
    </form>
</div>




            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  </div>

  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>



<script>
    $(document).ready(function () {
        $('#submit-blog').click(function () {

            if (validateForm()) {
                var formData = new FormData($('#blog-form')[0]);

                $.ajax({
                    type: 'POST',
                    url: '/submit-blog',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        console.log(response);

                        toastr.success('Blog submitted successfully', '', { positionClass: 'toast-top-center' });

                        $('#blog-form')[0].reset();

                        $('#image-preview').hide();
                    },
                    error: function (error) {
                        console.log(error);

                        toastr.error('An error occurred while submitting the blog', '', { positionClass: 'toast-top-center' });
                    }
                });
            }
        });
    });

    function previewImage(input) {
        var file = input.files[0];
        if (file) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#image-preview').attr('src', e.target.result).show();
            }

            reader.readAsDataURL(file);
        }
    }

    function validateForm() {
        var title = $('#blog-form input[name="title"]').val();
        var description = $('#blog-form textarea[name="description"]').val();
        var image = $('#blog-form input[name="image"]').val();

        if (title.trim() === '' || description.trim() === '' || image.trim() === '') {

            toastr.error('Please fill in all fields', '', { positionClass: 'toast-top-center' });
            return false;
        }

        return true;
    }
</script>



</body>

</html>