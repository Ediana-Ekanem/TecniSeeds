<?php include "includes/header.php";?>

<!-- created a new style for account type -->
    <style media="screen">

      .account-type input.account-type-radio:empty ~ label {
      	height: 100%;
      	line-height: 40px;

      }

    </style>
</head>

<body class="gray">

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container" class="fullwidth">

	<!-- Header -->
	<div id="header">
		<div class="container">

			<!-- Left Side Content -->
			<div class="left-side">

				<!-- Logo -->
				<div id="logo">
					<a href="index.html"><img src="images/logo.png" alt=""></a>
				</div>

				<div class="clearfix"></div>
				<!-- Main Navigation / End -->

			</div>
			<!-- Left Side Content / End -->


			<!-- Right Side Content / Start -->
			<div class="right-side">
				  <?php include "includes/right_navigation.php";?>
				</div>
			<!-- Right Side Content / End -->

		</div>
	</div>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->

<!-- Spacer -->
<div class="margin-top-50"></div>
<!-- Spacer / End-->

<!-- Page Content
================================================== -->
<div class="container">
	<div class="row">
		<div class="col-xl-3 col-lg-4">
			<div class="sidebar-container">

				<div class="dashboard-nav">
					<!-- <div class="dashboard-nav-inner"> -->

				<ul data-submenu-title="Start">
					<li><a href="dashboard.html"><i class="icon-material-outline-dashboard"></i> Expertise</a></li>
					<li><a href="dashboard-messages.html"><i class="icon-material-outline-question-answer"></i> Messages <span class="nav-tag">2</span></a></li>
					<li><a href="dashboard-bookmarks.html"><i class="icon-material-outline-star-border"></i> Bookmarks</a></li>
					<li><a href="dashboard-reviews.html"><i class="icon-material-outline-rate-review"></i> Reviews</a></li>
				</ul>
			</div>

				<!-- Category -->
				<div class="sidebar-widget">
					<h3>Category</h3>
					<select class="selectpicker default" multiple data-selected-text-format="count" data-size="7" title="All Categories" >
						<option>Admin Support</option>
						<option>Customer Service</option>
						<option>Data Analytics</option>
						<option>Design & Creative</option>
						<option>Legal</option>
						<option>Software Developing</option>
						<option>IT & Networking</option>
						<option>Writing</option>
						<option>Translation</option>
						<option>Sales & Marketing</option>
					</select>
				</div>
			</div>
		</div>

						<!-- second division -->
		<div class="col-xl-9 col-lg-8 content-left-offset">

			<div class="listings-container margin-top-0">

				<!-- Job Listing -->
				<a href="#" class="job-listing">

					<div class="modal-content">

						<div class="modal-header d-flex align-items-center d-none-mobile-app">
							<div><h2 data-test="step-title" class="modal-title">Expertise</h2>
								<div class="text-muted">
									2 of 11
								</div>
							</div>
						</div>


						<div class="modal-body">
							<form class="" action="" method="post">

							 <div>
								 <h3 class="margin-bottom-30 margin-top-30"><strong>What is your level of expertise in this field?</strong></h3>

								 <div class="form-group">
									 <div class="row">

										 <div class="col-lg-4 account-type">
											 <input type="radio" name="account-type-radio" id="employer-radio" class="account-type-radio"/>
											 <label for="employer-radio" class="ripple-effect-dark">
												 <h3 data-v-5fac4428="" class="m-xs-top-bottom">Entry level</h3>
												 <small data-v-5fac4428="" class="text-mute"> I am relatively new to this field</small>
											 </label>
												</div>


											<div class="col-lg-4 account-type">
 											 <input type="radio" name="account-type-radio" id="freelancer-radio" class="account-type-radio"/>
 											 <label for="freelancer-radio" class="ripple-effect-dark">
													<h3 data-v-5fac4428="" class="m-xs-top-bottom">Intermediate</h3>
													 <small data-v-5fac4428="" class="text-muted">I have substantial experience in this field</small>
												</label>
											 </div>

											 <div class="col-lg-4 account-type">
												 <input type="radio" name="account-type-radio" id="employer-radio" class="account-type-radio"/>
												 <label for="employer-radio" class="ripple-effect-dark">
													 <h3 data-v-5fac4428="" class="m-xs-top-bottom">Expert</h3>
													  <small data-v-5fac4428="" class="text-muted">I have comprehensive and deep expertise in this fie</small>
												</div>
											</div>
										</div>
								 </div>
							 </form>
							 </div>


							 <!-- <div class="row">
								 <div class="col-md-12">


								 <div class="form-group">
									 <label ="" class=""><strong>What is the main service you offer?</strong></label>
								 <div class="submit-field">
									 <select class="selectpicker with-border form-control" data-size="7" title="Select Category" name="bulk_options">
										 <option value="admin">Admin Support</option>
										 <option value="custumer">Customer Service</option>
										 <option value="dataanalyst">Data Analytics</option>
										 <option value="">Design & Creative</option>
										 <option value="">Legal</option>
										 <option value="">Software Developing</option>
										 <option value="">IT & Networking</option>
										 <option value="">Writing</option>
										 <option value="">Translation</option>
										 <option value="">Sales & Marketing</option>
									 </select>
								 </div>
							 </div>

						 </div>

					 </div> -->
							 <!-- end of select -->

							 <!-- has-error use this class to show error -->
	<!-- <div class="form-group">

							 <div class="row">
						 		<div class="col-xl-12">
						 			<div class="section-headline margin-top-0 padding-top-20 margin-bottom-12">
						 				<h5><strong>What type of Data Science and Analytics do you have?</strong></h5>
						 			</div>
						 		</div>
							</div>

								<div class="row">
							 		<div class="col-xl-6 col-md-6">
							 			<div class="section-headline margin-top-25 margin-bottom-5">
							 				<h5>Select atleast 4 skills</h5>
							 			</div>
									</div>
								</div>


						<div class="row">
						 			<div class="checkbox col-md-6">
						 				<input type="checkbox" id="chekcbox1" checked>
						 				<label for="chekcbox1"><span class="checkbox-icon"></span>A/B Testing</label>
						 			</div>
						 			<br>
						 			<div class="checkbox col-md-6">
						 				<input type="checkbox" id="chekcbox2">
						 				<label for="chekcbox2"><span class="checkbox-icon"></span> Data Mining & Management</label>
						 			</div>
									<br>
									<div class="checkbox col-md-6">
										<input type="checkbox" id="chekcbox1" checked>
										<label for="chekcbox1"><span class="checkbox-icon"></span>Data Visualization</label>
									</div>
									<br>
									<div class="checkbox col-md-6">
										<input type="checkbox" id="chekcbox2">
										<label for="chekcbox2"><span class="checkbox-icon"></span> Machine Learning</label>
									</div>
									<br>
									<div class="checkbox col-md-6">
										<input type="checkbox" id="chekcbox2">
										<label for="chekcbox2"><span class="checkbox-icon"></span> Other - Data Science & Analytics</label>
									</div>
									<br>
									<div class="checkbox col-md-6">
										<input type="checkbox" id="chekcbox2">
										<label for="chekcbox2"><span class="checkbox-icon"></span> Quantitative Analysis</label>
									</div>
					</div>
	</div> -->
	<!-- form group end-->

						<!-- <div class="form-group">
							<div class="row">
							<div class="col-xl-12">
							 <div class="submit-field margin-top-0 padding-top-20">
								 <h5><strong>What skills do you offer clients </strong><i class="help-icon" data-tippy-placement="right" title="Add up to 10 skills"></i></h5>

								 Skills List
								 <div class="keywords-container">
									 <div class="keyword-input-container">
										 <input type="text" class="keyword-input with-border" placeholder="e.g. Angular, Laravel"/>
										 <button class="keyword-input-button ripple-effect"><i class="icon-material-outline-add"></i></button>
									 </div>
									 <div class="keywords-list">
										 <span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">Angular</span></span>
										 <span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">Vue JS</span></span>
										 <span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">iOS</span></span>
										 <span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">Android</span></span>
										 <span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">Laravel</span></span>
									 </div>
									 <div data-v5fac4428="" class="text-muted text-right p-xs-top">
												Enter at least 1 skill
									</div>
								 </div>
							 </div>
						 </div>
					  <div class="clearfix"></div>
					 </div>
				 </div> -->
						 <!-- end serch skill -->

			 	<!-- </div> -->
			 <!-- </form> -->

						<div class="modal-footer">
							<!-- Spacer -->
							<div class="margin-top-50"></div>
							<div class="btn-row ">
								<button  style="text-align: left";   class="btn owork-btn-link" data-test="step-back-button"><!---->
									<span class="d-block d-md-none"><span aria-hidden="true" class="glyphicon air-icon-arrow-prev"></span></span>
									<span class="d-none d-md-block">Back</span>
								</button>

								<button class="button button-sliding-icon ripple-effect" data-test="step-next-button"> Next</button>
							</div>
						</div>
						<!-- modal footer end -->
				</div>
				</a>
		</div>

				<!-- Pagination -->
				<div class="clearfix"></div>

			</div>

		</div>
	</div>



<!-- Footer
================================================== -->
<div id="footer">
	<?php include "includes/footer.php";?>
	<script src="js/bootstrap.min.js"></script>

		<!-- for modal -->
	<script type="text/javascript">

	  $(document).ready(function (){

	    setTimeout(function (){
	      $('#modal1').modal('show')
	    }, 2000);
	  });

	$("#modal1button").on("click", function(){
	    $("#modal1").modal("hide");
	    $("#modal1").on("hidden.bs.modal",function(){
	      setTimeout(function (){
	        $("#modal2").modal("show")
	        }, 2000);
	  });
	});
	</script>

<!-- Google Autocomplete -->
<script>
	function initAutocomplete() {
		 var options = {
		  types: ['(cities)'],
		  // componentRestrictions: {country: "us"}
		 };

		 var input = document.getElementById('autocomplete-input');
		 var autocomplete = new google.maps.places.Autocomplete(input, options);
	}
</script>

<!-- Google API & Maps -->
<!-- Geting an API Key: https://developers.google.com/maps/documentation/javascript/get-api-key -->
<script src="https://maps.googleapis.com/maps/api/js?key=&libraries=places"></script>

</body>
</html>
