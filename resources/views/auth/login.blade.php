
<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	<head><base href="../../../../">
		<meta charset="utf-8" />
		<title>Hope | 87</title>
		<meta name="description" content="Login page example" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="canonical" href="https://keenthemes.com/metronic" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Custom Styles(used by this page)-->
		<link href="{{asset('assets/css/pages/login/classic/login-4.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Page Custom Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="{{asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/plugins/custom/prismjs/prismjs.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<link href="{{asset('assets/css/themes/layout/header/base/light.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/css/themes/layout/header/menu/light.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/css/themes/layout/brand/dark.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/css/themes/layout/aside/dark.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="{{asset('assets/media/logos/favicon.ico')}}" />
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<style>
		.blue-bg-cs {
			background-color: #007bff;
			color: white;
			height: 100%;
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			margin-left: -15px;
		}
		.white-bg-cs {
			height: 100%;
			display: flex;
			/* flex-direction: column; */
			justify-content: center;
			align-items: center;
		}
		.login-signin{
			min-width: 300px;
			width: 400px;
		}
		.logo-img {
			width: 150px;
			height: 150px;
		}
	</style>
	<body>
		<div class="container-fluid h-100">
			<div class="row h-100">
				<div class="col-6 blue-bg-cs">
				<img src="{{asset('images/logo.png')}}" class="mb-8 logo-img" alt="" />
						<h4>ELEMENTARY &amp; SECONDARY <br> EDUCATION FOUNDATION</h4>
						<span>Government of Khyber Pakhtunkhwa Pakistan</span>
				</div>

				<div class="col-6 text-center white-bg-cs">
					<div class="login-signin">
						<div class="mb-10">
							<h3>Sign In To Admin</h3>
							<div class="text-muted font-weight-bold">Enter your details to login to your account:</div>
						</div>
						<form method="POST" action="{{ route('login') }}">
							@csrf
							<div class="form-group mb-5">
								<input class="form-control h-auto" type="email" placeholder="Email or User name" name="email"  />

							</div>
							<div class="form-group mb-5">
								<input class="form-control h-auto" type="password" placeholder="Password" name="password" />
							</div>
							<button id="kt_login_signin_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4">Sign In</button>
						</form>

						<div class="mt-10">
							<span class="opacity-70 mr-4">Don't have an account yet?</span>
							<a href="{{route('register')}}"  class="text-muted text-hover-primary font-weight-bold">Sign Up!</a>
						</div>
					</div>
				</div>
			</div> 
		</div>

		<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
		
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{asset('assets/plugins/custom/prismjs/prismjs.bundle.js')}}"></script>
		<script src="{{asset('assets/js/scripts.bundle.js')}}"></script>
		<!--end::Global Theme Bundle-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="{{asset('assets/js/pages/custom/login/login-general.js')}}"></script>
		<!--end::Page Scripts-->
	</body>
	<!--end::Body-->
</html>