<article class="bookingform">
	<h2>BOOKING</h2>
	<p>The Seoul Seekers can be booked for performances, TV shows, and modeling gigs. For enquires please complete the form below.</p>
	<p>(For individual booking please include name of member desired in the message box)</p>
<br/>
	<form class="registration form-horizontal" action="#">

	  <fieldset id="personalinfo">
	    <legend class="personal-type"><h3>Personal Info</h3></legend>
		
				<section class="row booking-row">
					<label class="col col-lg-4 control-label" for="myname">Name:<span class="required">*</span></label></label>
					<div class="controls">
						<input class="col col-lg-8" type="text" name="myname" id="myname" required>
					</div><!-- controls -->
				</section><!-- row -->

				<section class="row booking-row">
					<label class="col col-lg-4 control-label" for="companyname">Company Name: </label>
					<div class="controls">
						<input class="col col-lg-8" type="text" name="companyname" id="companyname" />
					</div><!-- controls -->
				</section><!-- row -->

				<section class="row booking-row">
					<label class="col col-lg-4 control-label" for="myemail">Email:<span class="required">*</span></label></label>
					<div class="controls">
						<input class="col col-lg-8" type="email" name="myemail" id="myemail" required autocomplete="off" />
					</div><!-- controls -->
				</section><!-- row -->

	  </fieldset><!-- personal info -->

	  <fieldset id="otherinfo">
			<legend class="booking-type"><h3>Booking Type</h3></legend>

				<section class="row">
		  	<label class="col col-lg-4 control-label"></label>
	
					<div class="controls col col-lg-8">
						<label class="radio">
							<input type="radio" name="bookingtype" value="question" /> Crew Performance
						</label>
						<label class="radio">
							<input type="radio" name="bookingtype" value="question" /> Individual Performance
						</label>
						<label class="radio">
							<input type="radio" name="bookingtype" value="question" /> Individual Model
						</label>
					</div><!-- controls -->
				</section><!-- row -->
	<p></p>
				<section class="row booking-row">
					<label class="col col-lg-4 control-label" for="message">Message:<span class="required">*</span></label>
					<div class="controls">
					<textarea cols="50" rows="4" class= "col col-lg-8" id="message" name="message" placeholder="Your message here" required></textarea>
					</div><!-- controls -->
				</section><!-- row -->
				
	  </fieldset>
	  <button class="btn" type="submit">Submit</button>

</form>
</article>