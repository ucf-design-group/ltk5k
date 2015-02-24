<?php include_once( 'functions.php' ); get_header(); ?>
<body>
	<header class="form-registration volunteers-header">
		<section class="header-caption">
			<article>
				<h1>Volunteers</h1>
			</article>
		</section>
		</header>
	<section>



<?php
		/**
		 * Form for volunteers registration
		 */
		

		/* Create new instance of volunter*/
		$volunteer = new Volunteer;

		/*if (time() < strtotime("November 9, 2014 11:59pm") && !$full && time() > strtotime("August 5, 2014 12:00am")) {*/
?>
	<section class="content">

		<article class="form" id="form">
			
			<h3>Thank you for helping us make this possible!</h3>
			<p><strong>All fields are required.</strong> Please note, the Light The Knight 5k is only for current UCF Students.</p>
			
			<form class="form-wrapper" action='' method='POST' id='ltk5k-form'>
				
				<fieldset>
					<p>
						<label for='ltk5k-form-fname'><?php echo $volunteer->fname_label; ?></label>
						<br>
						<input type="text" name="ltk5k-form-fname" id="ltk5k-form-fname" value="<?php echo $_POST['ltk5k-form-fname']; ?>">
					</p>
					<p>
						<label for='ltk5k-form-lname'><?php echo $volunteer->lname_label; ?></label>
						<br>
						<input type="text" name="ltk5k-form-lname" id="ltk5k-form-lname" value="<?php echo $_POST['ltk5k-form-lname']; ?>">
					</p>
					<p>
						<label for='ltk5k-form-email'><?php echo $volunteer->email_label; ?></label>
						<br>
						<input type="email" name="ltk5k-form-email" id="ltk5k-form-email" value="<?php echo $_POST['ltk5k-form-email']; ?>">
					</p>
					<p>
						<label for='ltk5k-form-phone'><?php echo $volunteer->phone_label; ?></label>
						<br>
						<input type="tel" name="ltk5k-form-phone" id="ltk5k-form-phone" value="<?php echo $_POST['ltk5k-form-phone']; ?>">
					</p>
					<p>
						<label for="ltk5k-form-shirt">Shirt Size</label>
						<br>
						<select name="ltk5k-form-shirt" id="ltk5k-form-shirt">
							<option value="">Select:</option>
							<option value="Small" <?php if ($_POST['ltk5k-form-shirt'] == "Small") echo "selected"; ?>>Small</option>
							<option value="Medium" <?php if ($_POST['ltk5k-form-shirt'] == "Medium") echo "selected"; ?>>Medium</option>
							<option value="Large" <?php if ($_POST['ltk5k-form-shirt'] == "Large") echo "selected"; ?>>Large</option>
							<option value="X-Large" <?php if ($_POST['ltk5k-form-shirt'] == "X-Large") echo "selected"; ?>>X-Large</option>
						</select>
					</p>
				</fieldset>
				<fieldset>
					<p>
						<label for='ltk5k-form-emergency-name'><?php echo $volunteer->emergency_name_label; ?></label>
						<input type="text" name="ltk5k-form-emergency-name" id="ltk5k-form-emergency-name" value="<?php echo $_POST['ltk5k-form-emergency-name']; ?>">
					</p>
					<p>
						<label for='ltk5k-form-emergency-phone'><?php echo $volunteer->emergency_phone_label; ?></label>
						<input type="text" name="ltk5k-form-emergency-phone" id="ltk5k-form-emergency-phone" value="<?php echo $_POST['ltk5k-form-emergency-phone']; ?>">
					</p>
					<p>
						<label for='ltk5k-form-emergency-relation'><?php echo $volunteer->emergency_relation_label; ?></label>
						<br>
						<input type="text" name="ltk5k-form-emergency-relation" id="ltk5k-form-emergency-relation" value="<?php echo $_POST['ltk5k-form-emergency-relation']; ?>">
					</p>
					<p>
							<p>Gender</p>
						<table class="role gender">
							<tr>
								<td>	
									<input type ="radio" name="ltk5k-form-gender" value="<?php echo $volunteer->gender_label; ?>" id="ltk5k-form-gender-m">
								</td>
								<td>	
									<input type ="radio" name="ltk5k-form-gender" value="female" id="ltk5k-form-gender-f">
								</td>
							</tr>
							<tr>
								<td>
									<label for="ltk5k-form-gender-m"><?php echo $volunteer->gender_male_label; ?></label>
								</td>
								<td>
									<label for="ltk5k-form-gender-f"><?php echo $volunteer->gender_female_label; ?></label>
								</td>
							</tr>
						</table>
					</p>
					<!-- <p>Your Desired Role</p>
					<table class="role">
						<tr>
							<td>
								<input data-swap="runners" type="radio" name="ltk5k-form-role" value="Runner" id="ltk5k-form-role-runner" <?php if ($_POST['ltk5k-form-role'] == "Runner") echo "checked"; ?> <?php echo (NUM_RUNNERS - $count['runners'] > 0) ? "" : "disabled"; ?>>
							</td>
							<td>
								<input data-swap="zombies" type="radio" name="ltk5k-form-role" value="Zombie" id="ltk5k-form-role-zombie" <?php if ($_POST['ltk5k-form-role'] == "Zombie") echo "checked"; ?> <?php echo (NUM_ZOMBIES - $count['zombies'] > 0) ? "" : "disabled"; ?>>
							</td>
							<td>
								<input data-swap="volunteers" type="radio" name="ltk5k-form-role" value="Volunteer" id="ltk5k-form-role-volunteer" <?php if ($_POST['ltk5k-form-role'] == "Volunteer") echo "checked"; ?> <?php echo (NUM_VOLUNTEERS - $count['volunteers'] > 0) ? "" : "disabled"; ?>>
							</td>
						</tr>
						<tr>
							<th>
								<label for='ltk5k-form-role-runner'><?php echo (NUM_RUNNERS - $count['runners'] > 0) ? "Runner" : "Runner (FULL)"; ?></label>
							</th>
							<th>
								<label for='ltk5k-form-role-zombie'><?php echo (NUM_ZOMBIES - $count['zombies'] > 0) ? "Zombie" : "Zombie (FULL)"; ?></label>
							</th>
							<th>
								<label for='ltk5k-form-role-volunteer'><?php echo (NUM_VOLUNTEERS - $count['volunteers'] > 0) ? "Volunteer" : "Volunteer (FULL)"; ?></label>
							</th>
						</tr>
					</table>
					<p class='placement'>Your Desired Group / Zone</p>
					<p>
						<select class='runners placement' name='ltk5k-form-placement' <?php if ($_POST['ltk5k-form-role'] == "Zombie" || $_POST['ltk5k-form-role'] == "Volunteer") echo "disabled='disabled'"; ?>>
							<option value=''>Select:</option>

<?php
foreach ($placement_count['runners'] as $group => $remaining_spots) {
	if ($remaining_spots > 0) {
?>
							<option value="<?php echo $group; ?>"><?php echo $group; ?> (<?php echo $remaining_spots; ?> openings)</option>
<?php
	}
}
?> 
							</select>
							<select class='zombies placement' name='ltk5k-form-placement' <?php if ($_POST['ltk5k-form-role'] != "Zombie") echo "disabled='disabled'"; ?>>
								<option value=''>Select:</option>
<?php
foreach ($placement_count['zombies'] as $group => $remaining_spots) {
	if ($remaining_spots > 0) {
?>
								<option value="<?php echo $group; ?>"><?php echo $group; ?> (<?php echo $remaining_spots; ?> openings)</option>
<?php
	}
}
?>
							</select>
							<select class='volunteers placement' name='ltk5k-form-placement' <?php if ($_POST['ltk5k-form-role'] != "Volunteer") echo "disabled='disabled'"; ?>>
								<option value=''>Select:</option>
<?php
foreach ($placement_count['volunteers'] as $group => $remaining_spots) {
	if ($remaining_spots > 0) {
		if ($group == 14){
?>
							<option value="<?php echo $group; ?>">Survivor Party (<?php echo $remaining_spots; ?> openings)</option>
<?php	
	}	else {
?>
							<option value="<?php echo $group; ?>"><?php echo $group; ?> (<?php echo $remaining_spots; ?> openings)</option>
<?php
	}
	}
}
?>
							</select>
						</p>-->

					</fieldset>
					<p class='submit'>
						<input class='button' name='ltk5k-form-submit' type='submit' value='Register'>
						<input class='button' type='reset' value='Cancel'>
					</p>
				</form>
			</article>
<?php
		//}
?>
			<article class='sponsors'>
				<p>Special recognition to those who helped the Campus Activities Board make this event possible!</p>
			</article>
		</section>
<?php get_footer() ?>