<?php include "includes/header.php";?>

<!-- created a new style for account type -->
<style media="screen">

    .dialog-with-tabs#small-dialog-2{
          max-width: 900px;
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
							<div><h2 data-test="step-title" class="modal-title">Education</h2>
								<div class="text-muted">
									4 of 11
								</div>
							</div>
						</div>


						<div class="modal-body">

                <div><h3 class="margin-bottom-30 margin-top-30">Add the schools you attended, areas of study, and degrees earned.</h3></div>
      					 	<div class="row">
      						 <div class="col-md-12">
      								<div class="form-group">

                        <button style=" color: #fff; background-color: green"; href="#small-dialog-2"
      									 class="popup-with-zoom-anim button gray ripple-effect margin-top-10 margin-bottom-15">
      									 <i class="icon-material-outline-add"></i>
      									 Add Education</button>

      							 	</div>
      				 			</div>
      			 			</div>
						</div>


						 <div class="modal-footer">
							<!-- Spacer  -->

							<div class="margin-top-50"></div>
							<div class="btn-row ">
								<button  style="text-align: left";   class="btn owork-btn-link">
									<span class="d-md-non"><span aria-hidden="true" class="glyphicon ">Black</span></span>
									<!-- <span class="d-non d-md-bloc">Back</span> -->
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


 <!-- Footer -->
<!-- ==================================================  -->
<div id="footer">
	<?php include "includes/footer.php";?>

  	<!-- Edit Review Popup
  	================================================== -->
  	<div id="small-dialog-2" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

  		<!--Tabs -->
  		<div class="sign-in-form">

  			<ul class="popup-tabs-nav">
  					<h2 style="padding:20px"; class="modal-title">Add education</h2>
  			</ul>

  			<div class="popup-tabs-container">

  				<!-- Tab -->
  				<div class="popup-tab-content" id="tab2">

  					<!-- Welcome Text -->
  					<!-- <div class="welcome-text">
  						<h3>Leave a Review</h3>
  						<span>Rate <a href="#">Peter Valentín</a> for the project <a href="#">Simple Chrome Extension</a> </span>
  					</div> -->

  					<!-- Form -->
  								<form method="post" id="register-account-form">

  								<div class="form-group margin-top-0">
  									<label for="" class=""><strong>School</strong></label>
  									<div class="feedback-yes-no">
  										<input type="text" class="input-text with-border form-control" placeholder="Ex: University of Lagos">
  									</div>
  								</div>

  								<div class="form-group padding-top-20">
  									<label for="" class=""><strong>Area of Study (Optional)</strong></label>
  									<div class="feedback-yes-no">
  										<input type="text" class="input-text with-border form-control" placeholder="Ex: Computer Science">
  									</div>
  								</div>

  								<div class="form-group padding-top-20 paddin-bottom-20">
  									<label for="" class=""><strong>Degree (Optional)</strong></label>
  									<div class="feedback-yes-no">
  										<input type="text" class="input-text with-border form-control" placeholder="Ex: Bachelor's">
  									</div>
  								</div>




                  <!-- period start -->
          <div data-v-5fac4428="" class="form-group has-error padding-top-20">
            <label data-v-5fac4428="" class="">Dates Attended (Optional)</label>
          </div>


            <div class="row">

                  <div class="col-md-6">
                    <div class="form-group has-error">
                      <div class="submit-field">
                        <select class="selectpicker with-border" data-size="7" title="Select Job Type">
                          <option value="US" selected>Month</option>
                          <option value="AR">January</option>
                          <option value="AM">February</option>
                          <option value="AW">March</option>
                          <option value="AU">April</option>
                          <option value="AT">May</option>
                          <option value="AZ">June</option>
                          <option value="BS">July</option>
                          <option value="BH">August</option>
                          <option value="BD">September</option>
                          <option value="BB">October</option>
                          <option value="BY">November</option>
                          <option value="BE">December</option>
                        </select>
                      </div>

                                <!-- has error element sample-->
                      <!-- <div data-v-5fac4428="">
                        <label data-v-5fac4428="" class="form-message form-error">
                          <span data-v-5fac4428="" aria-hidden="true" class="glyphicon air-icon-exclamation-circle"></span>
                          <span data-v-5fac4428="">This field is required.</span>
                        </label>
                      </div> -->
                    </div>
                </div>

                  <div class="col-md-6 ">
                      <div class="form-group has-error">
                      <div class="submit-field">
                        <select class="selectpicker with-border" data-size="7" title="Select Job Type" data-live-search="true">
                          <option value="AR">Argentina</option>
                          <option value="AM">Armenia</option>
                          <option value="AW">Aruba</option>
                          <option value="AU">Australia</option>
                          <option value="AT">Austria</option>
                          <option value="AZ">Azerbaijan</option>
                          <option value="BS">Bahamas</option>
                          <option value="BH">Bahrain</option>
                          <option value="BD">Bangladesh</option>
                          <option value="BB">Barbados</option>
                          <option value="BY">Belarus</option>
                          <option value="BE">Belgium</option>
                          <option value="BZ">Belize</option>
                          <option value="BJ">Benin</option>
                          <option value="BM">Bermuda</option>
                          <option value="BT">Bhutan</option>
                          <option value="BG">Bulgaria</option>
                          <option value="BF">Burkina Faso</option>
                          <option value="BI">Burundi</option>
                          <option value="KH">Cambodia</option>
                          <option value="CM">Cameroon</option>
                          <option value="CA">Canada</option>
                          <option value="CV">Cape Verde</option>
                          <option value="KY">Cayman Islands</option>
                          <option value="CO">Colombia</option>
                          <option value="KM">Comoros</option>
                          <option value="CG">Congo</option>
                          <option value="CK">Cook Islands</option>
                          <option value="CR">Costa Rica</option>
                          <option value="CI">Côte d'Ivoire</option>
                          <option value="HR">Croatia</option>
                          <option value="CU">Cuba</option>
                          <option value="CW">Curaçao</option>
                          <option value="CY">Cyprus</option>
                          <option value="CZ">Czech Republic</option>
                          <option value="DK">Denmark</option>
                          <option value="DJ">Djibouti</option>
                          <option value="DM">Dominica</option>
                          <option value="DO">Dominican Republic</option>
                          <option value="EC">Ecuador</option>
                          <option value="EG">Egypt</option>
                          <option value="GP">Guadeloupe</option>
                          <option value="GU">Guam</option>
                          <option value="GT">Guatemala</option>
                          <option value="GG">Guernsey</option>
                          <option value="GN">Guinea</option>
                          <option value="GW">Guinea-Bissau</option>
                          <option value="GY">Guyana</option>
                          <option value="HT">Haiti</option>
                          <option value="HN">Honduras</option>
                          <option value="HK">Hong Kong</option>
                          <option value="HU">Hungary</option>
                          <option value="IS">Iceland</option>
                          <option value="IN">India</option>
                          <option value="ID">Indonesia</option>
                          <option value="NO">Norway</option>
                          <option value="OM">Oman</option>
                          <option value="PK">Pakistan</option>
                          <option value="PW">Palau</option>
                          <option value="PA">Panama</option>
                          <option value="PG">Papua New Guinea</option>
                          <option value="PY">Paraguay</option>
                          <option value="PE">Peru</option>
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
                          <option value="US" selected>Year</option>
                          <option value="UY">Uruguay</option>
                          <option value="UZ">Uzbekistan</option>
                          <option value="YE">Yemen</option>
                          <option value="ZM">Zambia</option>
                          <option value="ZW">Zimbabwe</option>
                        </select>
                      </div>
                                <!-- has error element sample -->
                        <!-- <div data-v-5fac4428="">
                          <label data-v-5fac4428="" class="form-message form-error">
                            <span data-v-5fac4428="" aria-hidden="true" class="glyphicon air-icon-exclamation-circle"></span>
                            <span data-v-5fac4428="">This field is required.</span>
                          </label>
                        </div> -->

                      </div>
                    </div>
              </div>

  							<!-- </div><div class="clearfix"></div> -->
  						<div class="form-group padding-top-20">
  						<label for="" class="">Description (Optional)</label>
  						<textarea  placeholder="Describe your studies, awards, etc." name="message2" id="message2" class="form-control" cols="7" required></textarea>
  					</div>


  					<!-- Button -->
  					<button class="button full-width button-sliding-icon ripple-effect" type="submit" form="leave-review-form">Save & Continue <i class="icon-material-outline-arrow-right-alt"></i></button>
  					</form>
  				</div>

  			</div>
  		</div>
  	</div>
  	<!-- Edit Review Popup / End -->


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
