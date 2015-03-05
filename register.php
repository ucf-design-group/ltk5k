<?php
include_once( 'global-variables.php' );
include_once( 'partials/global-variables.php' );
include( 'functions.php' );
include( 'handler.php' );
get_header(); ?>

<body>
	<header class="form-registration volunteers-header">
		<section class="header-caption">
			<article class="col-wrapper">
				<div class="col-md-6">
					<h3>Remaining Runner Slots</h3>
					<h4><?php echo $numRunners ?></h4>
				</div>
				<div class="col-md-6">
					<h3>Remaining Volunteer Slots</h3>

					<h4><?php echo $numVolunteers ?></h4></div>
					<h4><?php echo $remainingVolunteers ?></h4></div>

			</article>
		</section>
		</header> 
	<section>




<?php
		/**
		 * Form for volunteers registration
		 */
		

		/* Create new instance of volunter*/
		$reg = new Registrant;

?> 
	<section class="content">

		<article class="form" id="form">
			
			<!-- <h3>Thank you for helping us make this possible!</h3> -->
			<p><strong>All fields are required.</strong> Please note, the Light The Knight 5k is only for current UCF Students.</p>
			
			<form class="form-wrapper" action='' method='POST' id='ltk5k-form'>
				
				<fieldset>
					<p>
						<label for='ltk5k-form-fname'><?php echo $reg->fname_label; ?></label>
						<br>
						<input type="text" name="ltk5k-form-fname" value="<?php echo $_POST['ltk5k-form-fname']; ?>">
					</p>
					<p>
						<label for='ltk5k-form-lname'><?php echo $reg->lname_label; ?></label>
						<br>
						<input type="text" name="ltk5k-form-lname" value="<?php echo $_POST['ltk5k-form-lname']; ?>">
					</p>
					<p>
						<label for='ltk5k-form-email'><?php echo $reg->email_label; ?></label>
						<br>
						<input type="email" name="ltk5k-form-email" value="<?php echo $_POST['ltk5k-form-email']; ?>">
					</p>
					<p>
						<label for='ltk5k-form-phone'><?php echo $reg->phone_label; ?></label>
						<br>
						<input type="tel" name="ltk5k-form-phone" value="<?php echo $_POST['ltk5k-form-phone']; ?>">
					</p>
				</fieldset>
				<fieldset>
					<p>
						<label for='ltk5k-form-ec-name'><?php echo $reg->emergency_name_label; ?></label>
						<input type="text" name="ltk5k-form-ec-name">
					</p>
					<p>
						<label for='ltk5k-form-ec-phone'><?php echo $reg->emergency_phone_label; ?></label>
						<input type="text" name="ltk5k-form-ec-phone" value="<?php echo $_POST['ltk5k-form-emergency-phone']; ?>">
					</p>
					<p>
						<label for='ltk5k-form-ec-relation'><?php echo $reg->emergency_relation_label; ?></label>
						<br>
						<input type="text" name="ltk5k-form-ec-relation" value="<?php echo $_POST['ltk5k-form-emergency-relation']; ?>">
					</p>
					<label>Participation</label>
						<table class="role">
							<tr>
								<td>	
									<input type ="radio" name="ltk5k-form-role" value="runner">
								</td>
								<td>	
									<input type ="radio" name="ltk5k-form-role" value="volunteer">
								</td>
							</tr>
							<tr>
								<td>
									<label for="ltk5k-form-role-runner">Runner</label>
								</td>
								<td>
									<label for="ltk5k-form-role-volunteer">Volunteer</label>
								</td>
							</tr>
						</table>

					<p>
						<label for="ltk5k-form-shirt">Shirt Size</label>
						<br>
						<select name="ltk5k-form-shirt-size">
							<option value="">Select:</option><!--  
							<option value="Small" <?php /* if ($_POST['ltk5k-form-shirt'] == "Small") echo "selected"; ?>>Small</option>
							<option value="Medium" <?php if ($_POST['ltk5k-form-shirt'] == "Medium") echo "selected"; ?>>Medium</option>
							<option value="Large" <?php if ($_POST['ltk5k-form-shirt'] == "Large") echo "selected"; ?>>Large</option>
							<option value="X-Large" <?php if ($_POST['ltk5k-form-shirt'] == "X-Large") echo "selected"; */ ?>>X-Large</option> -->

							<option value="S">Small</option>
							<option value="M">Medium</option>
							<option value="L">Large</option>
							<option value="XL">X-Large</option>
							<option value="Small">Small</option>
							<option value="Medium">Medium</option>
							<option value="Large">Large</option>
							<option value="X-Large">X-Large</option>

						</select>
					</p>
					</fieldset>
					<p class='submit'>
						<input class='button' name='ltk5k-form-submit' type='submit' value='Register'>
						<input class='button' type='reset' value='Cancel'>
					</p>
				</form>
			</article>
		<article class='sponsors'>
			<p>Special recognition to those who helped the Campus Activities Board make this event possible!</p>
		</article>
	</section>
<?php get_footer() ?>




