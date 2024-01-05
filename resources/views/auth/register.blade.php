
<head>

     
</head>






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
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <link id="pagestyle" href="../assets/css/material-kit.css?v=3.0.4" rel="stylesheet" />
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Add Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Add jQuery (if not already included) -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- Add Bootstrap JS (Assuming you are using Bootstrap 4) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>

<body class="sign-in-basic">
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
      
    </div>
  </nav>

  <div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');" loading="lazy">
    <span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container my-auto">
      <div class="row">
        <div class="col-lg-4 col-md-8 col-12 mx-auto">
          <div class="card z-index-0 fadeIn3 fadeInBottom">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Sign up</h4>
               
              </div>
            </div>

            <div class="card-body">

              <form role="form" method="POST" action="{{ route('register') }}" class="text-start">
                @csrf

                <div class="input-group input-group-outline my-3">
                  <label class="form-label">Name</label>
                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                 @error('name')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
                </div>



                <div class="input-group input-group-outline my-3">
                  <label class="form-label">Roll Number</label>
                  <input id="role_number" type="number" class="form-control @error('role_number') is-invalid @enderror" name="role_number" value="{{ old('role_number') }}" required autocomplete="name" autofocus>

                  @error('role_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>


                <div class="input-group input-group-outline my-3">
                  <label class="form-label">Email</label>
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                 @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                </div>



                <div class="input-group input-group-outline mb-3">
                  <label class="form-label">Password</label>
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                  <div class="input-group-append">
                    <div class="input-group-text">
                        <input type="checkbox" id="showPasswordCheckbox">
                        <label for="showPasswordCheckbox"  class="form-label"><i class="fas fa-eye"></i></label>
                    </div>
                  </div>
                </div>
                  <button id="generatePasswordBtn" type="button" class="btn btn-sm btn-primary"><i class="fas fa-key"></i> Generate Password</button>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror



                 <div class="input-group input-group-outline mb-3">
                  <label class="form-label">Confirm Password</label>
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
                <button id="useGeneratedPasswordBtn" type="button" class="btn btn-sm btn-secondary"><i class="fas fa-check"></i> Use Password</button>



                <div class="form-check form-switch d-flex align-items-center mb-3">
                  <input class="form-check-input" type="checkbox" id="rememberMe" checked>
                  <label class="form-check-label mb-0 ms-3" for="rememberMe">Remember me</label>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Sign in</button>

                </div>
                <p class="mt-4 text-sm text-center">
                 <a href="{{route('register')}}"> Don't have an account?</a>
                </p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
  <script src="../assets/js/material-kit.min.js?v=3.0.4" type="text/javascript"></script>
</body>

</html>



<script>
    $(document).ready(function() {
        // Function to generate a random 2-digit number
        function getRandomTwoDigitNumber() {
            return Math.floor(Math.random() * 90) + 10;
        }

        // Function to generate a password with fixed "0012" and random 2-digit number
        function generatePassword() {
            return "000000" + getRandomTwoDigitNumber();
        }

        // Click event for the "Generate Password" button
        $('#generatePasswordBtn').on('click', function() {
            var generatedPassword = generatePassword();
            $('#password').val(generatedPassword);
        });

        // Change event for the "Show Password" checkbox
        $('#showPasswordCheckbox').on('change', function() {
            var passwordInput = $('#password');
            var type = $(this).is(':checked') ? 'text' : 'password';
            passwordInput.attr('type', type);
        });

        // Click event for the "Use Password" button
        $('#useGeneratedPasswordBtn').on('click', function() {
            var generatedPassword = $('#password').val();
            $('#password-confirm').val(generatedPassword);
        });
    });
</script>
