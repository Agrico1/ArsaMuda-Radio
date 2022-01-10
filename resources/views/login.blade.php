<!doctype html>
<html lang="en">
  <head>
  	<title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{ asset('login/css/style.css') }}">

	</head>
	<body class="img js-fullheight" style="background-image: url({{ asset('login/images/bg.jpg') }});">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Login ArsaMuda</h3>
		      	<form action="/auth" method="post" class="signin-form">
                      @csrf
		      		<div class="form-group">
		      			<input type="email" class="form-control" placeholder="Email" name="email" required>
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" class="form-control" name="password" placeholder="Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
	            </div>
	          </form>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{ asset('login/js/jquery.min.js') }}"></script>
  <script src="{{ asset('login/js/js/popper.js') }}"></script>
  <script src="{{ asset('login/js/js/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('login/js/js/js/js/main.js') }}"></script>
  {{-- Sweet Alert --}}
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  @if (Session::has('success'))
      <script>
          Swal.fire({
          icon: 'success',
          title: 'Terimakasih',
          text: '{!! session("success") !!}'
          })
      </script>
  @endif

	</body>
</html>

