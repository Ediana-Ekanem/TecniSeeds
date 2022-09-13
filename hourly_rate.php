<?php include "includes/header.php";?>

<!-- created a new style for account type -->
<style media="screen">
      .modal-content {
        padding: 0px;
    }

    a.job-listing{
      color:#707070;
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
							<div><h2 data-test="step-title" class="modal-title">Hourly Rate</h2>
								<div class="text-muted">
									7 of 11
								</div>
							</div>
						</div>


						<div class="modal-body">

              <!-- Dashboard Box -->
              <div class="col-xl-12">
                <div class="dashboard-box">

                  <!-- Headline -->
                  <!-- <div class="headline">
                    <h3><i class="icon-material-outline-face"></i> My Profile</h3>
                  </div> -->

              <div class="content">


                <ul class="fields-ul">

                  <li>
                    <div class="row">
                      <div class="col-xl-7">
                        <div class="submit-field">
                             <h5>Note that</h5>
                              <!-- <span class="bidding-detail">Set your minimal hourly rate </span> -->
                                <p>Clients will see this rate on your profile and in search results once you publish your profile.
                                  You can adjust your rate every time you submit a proposal.
                                 </p>
                        </div>
                      </div>
                        <div class="col-xl-5">

                          <div class="submit-field">
                            <div class="bidding-widget">
                              <!-- Headline -->
                              <span class="bidding-detail">Set your <strong>minimal per service rate</strong></span>

                              <!-- Slider -->

        												<!-- <div class="input-with-icon">
        													<input class="with-border form-control" type="text" placeholder="Maximum" name="title" id="serviceAmount">
        													<i class="currency">USD</i>
        												</div> -->
                              <div class="bidding-value margin-bottom-10">#<span id="biddingVal"></span></div>
                              <input class="bidding-slider" type="text" value="" data-slider-handle="custom" data-slider-currency="#" data-slider-min="500" data-slider-max="10000" data-slider-value="auto" data-slider-step="100" data-slider-tooltip="hide" />
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="row">
                        <div class="col-xl-7">
                             <div class="submit-field">
                               <h5>O-work Service Fee "Explain this"></h5>
                                <!-- <span class="bidding-detail">Set your minimal hourly rate </span> -->
                                  <p>The O-work Service Fee is 20% when you begin a contract with a new client.
                                    Once you bill over $500 with your client, the fee will be 10%.
                                   </p>
                          </div>
                        </div>

                          <div class="col-xl-5">
                            <div class="submit-field">.
                              <div class="bidding-widget">
                                <!-- Headline -->

                                <div class="input-with-icon form-control with-border " id="discounted">
        													<!-- <input class="with-border form-control" type="text" placeholder="Maximum" > -->
        													<i class="currency">USD</i>
        												</div>

                                  </form>
                                <!-- Slider -->

                                <!-- <div class="bidding-value margin-bottom-10">$<span id="biddingVal"></span></div> -->
        												<!-- <input class="bidding-slider" type="text" value="" data-slider-handle="custom" data-slider-currency="$" data-slider-min="5" data-slider-max="150" data-slider-value="35" data-slider-step="1" data-slider-tooltip="hide" /> -->
                                <!-- <div class="bidding-value margin-bottom-10">#<span id="biddingVal"></span></div> -->
                                <!-- <div class="bidding-value">$<span id="biddingVal2"></span></div> -->
                  							<!-- <input class="bidding-slider" type="text" value="" data-slider-handle="custom" data-slider-currency="$" data-slider-min="500" data-slider-max="4500" data-slider-value="500" data-slider-step="50" data-slider-tooltip="hide" /> -->
                              </div>
                            </div>
                          </div>
                        </div>
                    </li>

                    <li>
                      <div class="row">
                        <div class="col-xl-7">
                             <div class="submit-field">
                               <h5>You'll receive</h5>
                                <!-- <span class="bidding-detail">Set your minimal hourly rate </span> -->
                                  <p>The estimated amount you'll receive after service fees</p>
                          </div>
                        </div>
                          <div class="col-xl-5">
                            <div class="submit-field">
                              <div class="bidding-widget">
                                <!-- Headline -->
                                <span class="bidding-detail">Set your <strong>minimal per service rate</strong></span>

                                <!-- Slider -->
                                <!-- <div class="bidding-value margin-bottom-10">$<span id="biddingVa"></span></div> -->
                                <!-- <input class="bidding-slider" type="text" value="" data-slider-handle="custom" data-slider-currency="#" data-slider-min="500" data-slider-max="10000" data-slider-value="500" data-slider-step="100" data-slider-tooltip="hide" /> -->
                              </div>
                            </div>
                          </div>
                        </div>
                    </li>
                  </ul>
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

<script type="text/javascript">

    $(document).ready(function(){

      function myFunc(){
        var input = $('#biddingVal').val();
        $('#discounted').text(input);
      }

      myFunc();

      $('#biddingVal').keyup(function(){
        $('#discounted').html($(this).val());
      });

      $('#biddingVal').change(function(){
        myFunc();
      })

    //   $('#serviceAmount').keyup(function(){
    //     //getting the current value of text areas
    //     var currentValue = $(this).val();
    //     //setting the discount Value
    //     $('#discounted').text(currentValue);
    //
    //   });
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
