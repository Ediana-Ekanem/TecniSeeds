<?php include "includes/header.php";?>

</head>

<body>
<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
	<!-- Header -->
	<header id="header-container" class="fullwidth">

		<!-- Header -->
		<div id="header">
			<div class="container">

				<!-- Left Side nav Content -->
				<div class="left-side">
					<div id="logo">
					  <a href="index.html"><img src="images/logo.png" alt=""></a>
					</div>
				</div>
				<!-- Left Side Content / End -->

				<!-- Right Side nav Content / -->
				<div class="right-side">
					<p>Already have an account? <a href = "#">Log In<a/></p>
				</div>
				<!-- Right Side Content / End -->

			</div>
		</div>

		<!-- Header / End -->
	</header>

<div class="clearfix"></div>
<!-- Header Container / End -->

<!-- Titlebar
================================================== -->
<div id="titlebar" class="gradient">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Register</h2>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li>Register</li>
					</ul>
				</nav>

			</div>
		</div>
	</div>
</div>


<!-- Page Content
================================================== -->
<div class="container">
	<div class="row">
		<!-- <div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 col-xs-12"> -->
		<!-- " -->
		<div class="col-md-6 col-md-offset-3 col-xs-12 ">
			<div class="login-register-page">
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3 style="font-size: 26px;">Let's create your account!</h3>
					<span>Already have an account? <a href="pages-login.html">Log In!</a></span>
				</div>

				<!-- Account Type -->
				<div class="account-type">
					<div>
						<input type="radio" name="account-type-radio" id="freelancer-radio" class="account-type-radio"/>
						<label for="freelancer-radio" class="ripple-effect-dark"><i class="icon-material-outline-account-circle"></i> Freelancer</label>
					</div>

					<div>
						<input type="radio" name="account-type-radio" id="employer-radio" class="account-type-radio"/>
						<label for="employer-radio" class="ripple-effect-dark"><i class="icon-material-outline-business-center"></i> Employer</label>
					</div>
				</div>

				<!-- Form -->

				<form method="post" id="register-account-form" action ="">
					<!-- toggle username  -->
					<div id class="input-with-icon-left">
						<i class="icon-material-outline-account-circle"></i>
						<input type="text" class="input-text with-border" name="first-name" id="aDiv" placeholder="Username" required/>
					</div>

					<div class="row">

							<div class ="col-md-6">
								<div class="input-with-icon-left">
									<i class="icon-feather-user"></i>
									<input type="text" class="input-text with-border" name="first-name" id="" placeholder="First Name" required/>
								</div>
							</div>

								<div class ="col-md-6">
								<div class="input-with-icon-left">
									<i class="icon-feather-user"></i>
									<input type="text" class="input-text with-border" name="second-name" id="" placeholder="Last Name" required/>
								</div>
							</div>

						</div>

										<!-- password -->
						<div class="input-with-icon-left" title="Should be at least 8 characters long" data-tippy-placement="bottom">
							<i class="icon-material-outline-lock"></i>
							<input type="password" class="input-text with-border" name="password-register" id="password-register" placeholder="Password" required/>
						</div>
									<!-- repeat password -->
						<div class="input-with-icon-left">
							<i class="icon-material-outline-lock"></i>
							<input type="password" class="input-text with-border" name="password-repeat-register" id="password-repeat-register" placeholder="Repeat Password" required/>
						</div>

						<!-- select Location -->
				<div>
					<select class="selectpicker with-border" data-size="7" title="Select Location" data-live-search="true">
						<option value="PH">Philippines</option>
						<option value="PN">Pitcairn</option>
						<option value="PL">Poland</option>
						<option value="PT">Portugal</option>
						<option value="PR">Puerto Rico</option>
						<option value="QA">Qatar</option>
						<option value="RE">Réunion</option>
						<option value="RO">Romania</option>
						<option value="RU">Russian Federation</option>
						<option value="RW">Rwanda</option>
						<option value="SZ">Swaziland</option>
						<option value="SE">Sweden</option>
						<option value="CH">Switzerland</option>
						<option value="TR">Turkey</option>
						<option value="TM">Turkmenistan</option>
						<option value="TV">Tuvalu</option>
						<option value="UG">Uganda</option>
						<option value="UA">Ukraine</option>
						<option value="GB">United Kingdom</option>
						<option value="US" selected>United States</option>
						<option value="UY">Uruguay</option>
						<option value="UZ">Uzbekistan</option>
						<option value="YE">Yemen</option>
					</select>
				</div>


				<div>
					<div class="checkbox margin-top-30">
						<input type="checkbox" id="two-step">
						<label for="two-step"><span class="checkbox-icon"></span>
						 Yes, I understand and agree to the <a href="#">Hirecheater Terms of Service</a>
						 including the <a href="#">User Agreement</a>and <a href="#">Privacy Policy.</a>
					 </label>
					</div>

						<div class="checkbox margin-top-20">
							<input type="checkbox" id="two2-step" name="terms">
							<label for="two2-step"><span class="checkbox-icon"></span>
							 Yes, I understand and agree to the <a href="#">Hirecheater Terms of Service</a>
							 including the <a href="#">User Agreement</a>and <a href="#">Privacy Policy.</a>
						 </label>
						</div>
				</div>

				<!-- Button -->
				<!-- Button -->
			<div class ="text-center">
				<button class="button button-sliding-icon ripple-effect margin-top-10" type="submit" form="login-form">Create Account<i class="icon-material-outline-arrow-right-alt"></i></button>
			</div>

				<!-- Social Login -->
				<div class="social-login-separator"><span>or</span></div>
				<div class="social-login-buttons">
					<button class="facebook-login ripple-effect"><i class="icon-brand-facebook-f"></i> Register via Facebook</button>
					<button class="google-login ripple-effect"><i class="icon-brand-google-plus-g"></i> Register via Google+</button>
				</div>
			</div>

		</div>
	</div>
</div>

<!-- Spacer -->
<div class="margin-top-70"></div>
<!-- Spacer / End-->

<!-- Footer
================================================== -->
<div id="footer">

<?php include "includes/footer.php";?>
<script>
 var $aDiv = $('#aDiv');
// var $bDiv = $('#bDiv');
var $aBtn = $('#freelancer-radio');
var $bBtn = $('#employer-radio');
		$aDiv.hide();
	// $bDiv.hide();

	$aBtn.click(function(){
		$aDiv.show(500);
		// $bDiv.hide();

	});
	$bBtn.click(function(){
		// $bDiv.hide();
		$aDiv.hide(200);

	});
// $(document).ready(function() {
// 					$('#myDiv').show();
//     });
	</script>

</body>
</html>
