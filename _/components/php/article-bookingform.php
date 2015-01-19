<article class="bookingform">
	<h2>Booking</h2>
	<p>The Seoul Seekers can be booked for performances, TV shows, and modeling gigs. For enquires please complete the form below.</p>
	<p>(For individual booking please include name of member desired in the message box)</p>

	<form class="registration form-horizontal" action="#">

	  <fieldset id="personalinfo">
	    <legend>Personal Info</legend>
		
				<section class="row">
					<label class="col col-lg-4 control-label" for="myname">Name:<span class="required">*</span></label></label>
					<div class="controls">
						<input class="col col-lg-8" type="text" name="myname" id="myname" required>
					</div><!-- controls -->
				</section><!-- row -->

				<section class="row">
					<label class="col col-lg-4 control-label" for="companyname">Company Name: </label>
					<div class="controls">
						<input class="col col-lg-8" type="text" name="companyname" id="companyname" />
					</div><!-- controls -->
				</section><!-- row -->

				<section class="row">
					<label class="col col-lg-4 control-label" for="myemail">Email:<span class="required">*</span></label></label>
					<div class="controls">
						<input class="col col-lg-8" type="email" name="myemail" id="myemail" required autocomplete="off" />
					</div><!-- controls -->
				</section><!-- row -->

	  </fieldset><!-- personal info -->

	  <fieldset id="otherinfo">
			<legend>Booking Type</legend>

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
				<section class="row">
					<label class="col col-lg-4 control-label" for="message">Message:</label>
					<div class="controls">
					<textarea cols="50" rows="4" class= "col col-lg-8" id="message" name="message" placeholder="Your message here"></textarea>
					</div><!-- controls -->
				</section><!-- row -->
				
	  </fieldset>
	  <button class="btn" type="submit">Submit</button>

</form>
</article>