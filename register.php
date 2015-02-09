<?php include('functions.php'); ?>
<!DOCTYPE html>
<html lang='en'>
	<head>
		<title>Zombie Run | Campus Activities Board</title>
		<link href='style.css' rel='stylesheet'>
		<script src='main.js' type='text/javascript'></script>
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<style>
<?php
			switch ($_POST['zk5k-form-role']) {
				case "Zombie": echo "select.runners, select.volunteers { display: none; }"; break;
				case "Volunteer": echo "select.runners, select.zombies { display: none; }"; break;
				default: echo "select.zombies, select.volunteers { display: none; }";
			}
?>
		</style>
	</head>
	<body>
		<header>
			<div class='logo'></div>
				<h1>Zombie Knights 5K</h1>
			<div class='register-info'>
				<a href="resources/run_times_2014.pdf"><h2>Click to View Run Times</h2></a>
				<!--<h2><?php echo (time() < strtotime("November 9, 2014 11:59pm") && !$full) ? ((time() > strtotime("August 5, 2014 12:00am")) ? "Register Below" : "Registration Will Open at Midnight") : "Registration has Closed" ?></h2>-->
			</div>
			<div class='time-left'></div>
			<nav>
				<ul>
					<li>
						<a class='button' href='index.php?p=runners'>Runners</a>
					</li>
					<li>
						<a class='button' href='index.php?p=zombies'>Zombies</a>
					</li>
				</ul>
				<ul>
					<li>
						<a class='button' href='index.php?p=volunteers'>Volunteers</a>
					</li>
					<li>
						<a class='button' href='register.php'>Register</a>
					</li>
				</ul>
			</nav>
		</header>
		<section>
			<article class='runners'>
				<h3>For Runners</h3>
				<p>Test your zombie apocalypse survival skills and intuition by taking on the living dead. Runners will be provided with life belts, a bib and a path - the rest is up to you.</p>
			</article>
			<article class='packet'>
				<h4>Packet Pickup</h4>
				<p>Packet Distribution, including your bib number and information for the race, will be available on Monday (11/10) and Tuesday (11//11) from 5:00pm - 8:00pm in the Arena Lobby.</p>
			</article>
			<article class='zombies'>
				<h3>For Zombies</h3>
				<p>If you feel like you've been infected by the disease, please be sure to sign up as a zombie. You have taken over many parts of campus and must collect human lives (cleverly disguised as belts) to survive</p>
				<p>We provide make up and the zombie virus; you must dress yourself. The creativity here is up to you - be any kind of zombie you want.  You must be available for informational meeting on Monday (11/10) or Tuesday (11/11) either 5:00pm - 6:00pm or 6:00pm - 7:00pm at the Arena Lobby.</p>
			</article>
			<article class='volunteers'>
				<h3>For Volunteers</h3>
				<p>If you want to help setup for the event, or help execute the event (including, but not limited to, manning the life station or being a race official) then this is your place! Sign up to be a volunteer!</p>
				<p>You must be available for informational meeting on Monday (11/10) or Tuesday (11/11) either 5:00pm - 6:00pm or 6:00pm - 7:00pm at the Arena Lobby.</p>
			</article>
<?php
		if (time() < strtotime("November 9, 2014 11:59pm") && !$full && time() > strtotime("August 5, 2014 12:00am")) {
?>
			<article class='form' id='form'>
				<h3><?php echo $message; ?></h3>
				<p>All fields are required:</p>
				<p>Please note, the Zombie Knights 5K is only for current UCF Students.</p>
				<form action='' method='POST' id='zk5k-form'>
					<fieldset>
						<p>
							<label for='zk5k-form-fname'>First Name</label>
							<br>
							<input type="text" name="zk5k-form-fname" id="zk5k-form-fname" value="<?php echo $_POST['zk5k-form-fname']; ?>">
						</p>
						<p>
							<label for='zk5k-form-lname'>Last Name</label>
							<br>
							<input type="text" name="zk5k-form-lname" id="zk5k-form-lname" value="<?php echo $_POST['zk5k-form-lname']; ?>">
						</p>
						<p>
							<label for='zk5k-form-email'>E-mail Address (If UCF student please put Knights Email)</label>
							<br>
							<input type="email" name="zk5k-form-email" id="zk5k-form-email" value="<?php echo $_POST['zk5k-form-email']; ?>">
						</p>
						<p>
							<label for='zk5k-form-phone'>Phone Number (0000000000)</label>
							<br>
							<input type="tel" name="zk5k-form-phone" id="zk5k-form-phone" value="<?php echo $_POST['zk5k-form-phone']; ?>">
						</p>
						<p>
							<label for="zk5k-form-shirt">Shirt Size</label>
							<br>
							<select name="zk5k-form-shirt" id="zk5k-form-shirt">
								<option value="">Select:</option>
								<option value="Small" <?php if ($_POST['zk5k-form-shirt'] == "Small") echo "selected"; ?>>Small</option>
								<option value="Medium" <?php if ($_POST['zk5k-form-shirt'] == "Medium") echo "selected"; ?>>Medium</option>
								<option value="Large" <?php if ($_POST['zk5k-form-shirt'] == "Large") echo "selected"; ?>>Large</option>
								<option value="X-Large" <?php if ($_POST['zk5k-form-shirt'] == "X-Large") echo "selected"; ?>>X-Large</option>
							</select>
						</p>
					</fieldset>
					<fieldset>
						<p>
							<label for='zk5k-form-ec-name'>Emergency Contact Name</label>
							<br>
							<input type="text" name="zk5k-form-ec-name" id="zk5k-form-ec-name" value="<?php echo $_POST['zk5k-form-ec-name']; ?>">
						</p>
						<p>
							<label for='zk5k-form-ec-phone'>Emergency Contact Phone</label>
							<br>
							<input type="text" name="zk5k-form-ec-phone" id="zk5k-form-ec-phone" value="<?php echo $_POST['zk5k-form-ec-phone']; ?>">
						</p>
						<p>
							<label for='zk5k-form-ec-relation'>Emergency Contact Relation</label>
							<br>
							<input type="text" name="zk5k-form-ec-relation" id="zk5k-form-ec-relation" value="<?php echo $_POST['zk5k-form-ec-relation']; ?>">
						</p>
						<p>
 							<p>Gender</p>
							<table class="role gender">
								<tr>
									<td>	
										<input type ="radio" name="zk5k-form-gender" value="male" id="zk5k-form-gender-m">
									</td>
									<td>	
										<input type ="radio" name="zk5k-form-gender" value="female" id="zk5k-form-gender-f">
									</td>
								</tr>
								<tr>
									<td>
										<label for="zk5k-form-gender-m">Male</label>
									</td>
									<td>
										<label for="zk5k-form-gender-f">Female</label>
									</td>
								</tr>
							</table>
						</p>
						<p>Your Desired Role</p>
						<table class="role">
							<tr>
								<td>
									<input data-swap="runners" type="radio" name="zk5k-form-role" value="Runner" id="zk5k-form-role-runner" <?php if ($_POST['zk5k-form-role'] == "Runner") echo "checked"; ?> <?php echo (NUM_RUNNERS - $count['runners'] > 0) ? "" : "disabled"; ?>>
								</td>
								<td>
									<input data-swap="zombies" type="radio" name="zk5k-form-role" value="Zombie" id="zk5k-form-role-zombie" <?php if ($_POST['zk5k-form-role'] == "Zombie") echo "checked"; ?> <?php echo (NUM_ZOMBIES - $count['zombies'] > 0) ? "" : "disabled"; ?>>
								</td>
								<td>
									<input data-swap="volunteers" type="radio" name="zk5k-form-role" value="Volunteer" id="zk5k-form-role-volunteer" <?php if ($_POST['zk5k-form-role'] == "Volunteer") echo "checked"; ?> <?php echo (NUM_VOLUNTEERS - $count['volunteers'] > 0) ? "" : "disabled"; ?>>
								</td>
							</tr>
							<tr>
								<th>
									<label for='zk5k-form-role-runner'><?php echo (NUM_RUNNERS - $count['runners'] > 0) ? "Runner" : "Runner (FULL)"; ?></label>
								</th>
								<th>
									<label for='zk5k-form-role-zombie'><?php echo (NUM_ZOMBIES - $count['zombies'] > 0) ? "Zombie" : "Zombie (FULL)"; ?></label>
								</th>
								<th>
									<label for='zk5k-form-role-volunteer'><?php echo (NUM_VOLUNTEERS - $count['volunteers'] > 0) ? "Volunteer" : "Volunteer (FULL)"; ?></label>
								</th>
							</tr>
						</table>
						<p class='placement'>Your Desired Group / Zone</p>
						<p>
							<select class='runners placement' name='zk5k-form-placement' <?php if ($_POST['zk5k-form-role'] == "Zombie" || $_POST['zk5k-form-role'] == "Volunteer") echo "disabled='disabled'"; ?>>
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
							<select class='zombies placement' name='zk5k-form-placement' <?php if ($_POST['zk5k-form-role'] != "Zombie") echo "disabled='disabled'"; ?>>
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
							<select class='volunteers placement' name='zk5k-form-placement' <?php if ($_POST['zk5k-form-role'] != "Volunteer") echo "disabled='disabled'"; ?>>
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
						</p>

					</fieldset>
					<p class='submit'>
						<input class='button' name='zk5k-form-submit' type='submit' value='Register'>
						<input class='button' type='reset' value='Cancel'>
					</p>
				</form>
			</article>
<?php
		}
?>
			<article class='sponsors'>
				<p>Special recognition to those who helped the Campus Activities Board make this event possible!</p>
			</article>
			<footer>
				<div class="sponsors"></div>
				<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js' type='text/javascript'></script>
				<script src='js/main.js' type='text/javascript'></script>
				<script type="text/javascript" src="//use.typekit.net/vak2hnx.js"></script>
				<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
			</footer>
		</section>
	</body>
</html>
