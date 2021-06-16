<!DOCTYPE html>
<html>
<head>
<title>Login Manpower Tracking App</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Slide Login Form template Responsive, Login form web template, Flat Pricing tables, Flat Drop downs Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

	 <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

	<!--favicon-->
	<link rel="shortcut icon" href="{{ asset('assets/dist/img/adflogo.png') }}">

	<!-- Custom Theme files -->
	<link href="{{asset('login-template/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
	<link href="{{asset('login-template/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" media="all" />
	<!-- //Custom Theme files -->

	<!-- web font -->
	<link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
	<!-- //web font -->

</head>
<body>

<!-- main -->
<div class="w3layouts-main"> 
	<div class="bg-layer">
		<br>
		<br>
		<div class="header-main">
			<div class="main-icon">
				
			<img src="{{asset('login-template/mptrack.png')}}" alt="Man Power Tracking App">
				{{-- <img src="{{asset('login-template/ADF-Logo.png')}}" alt="Logo ADF" width="200" height="100"> --}}
			</div>
			<div class="header-left-bottom">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
					<div class="icon1">
						<span class="fa fa-user"></span>
                        <input id="email" placeholder="Email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" type="email" required autocomplete="email" autofocus>
                    </div>
						@error('email')
							<span class="invalid-feedback" role="alert">
								<strong style="color: aliceblue">{{ $message }}</strong>
							</span>
						@enderror
					<div class="icon1">
						<span class="fa fa-lock"></span>
                        <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
					</div>
						@error('password')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					<div class="login-check">
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i> Keep me logged in</label>
					</div>
					<div class="bottom">
						<button class="btn">Log In</button>
					</div>
				</form>	
			</div>
		</div>
		
		<!-- copyright -->
		<div class="copyright">
			<p>© 2021 Adis Dimension Footwear. Version 1.0 | Build by MIS Team</p>
		</div>
		<!-- //copyright --> 
	</div>
</div>	
<!-- //main -->

</body>
</html>