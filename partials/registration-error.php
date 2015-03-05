<<<<<<< HEAD
<section class="error-form content">
	<article>
		<h3>Oops, there was a problem with your submission... <?php $_GET['error']?></h3>
		<p class="alert">
			<?php // Echo the variable 'echo' registered in the session.
			echo $_SESSION['error']?>
		</p>
	</article>
	<article>
		<a href="http://osi.ucf.edu/ltk5k/deregister"><p>Return to form</p></a>
	</article>	
</section>
=======
<?php
include_once( 'functions.php' );
get_header(); 

/**
 * Registration Error Page
 *
 * This page will be displayed if there was an error with the form submission, 
 * i.e. if the user forgot to complete the entire for or if there was an error
 * communicating with the server. generateFormError() in `functions.php` will
 * compile the page, pass the error, and handle its displayment.
 */ ?>

<section class="error-form">
	<article>
		<h3>Oops, there was a problem with your submission... <?php $_GET['error']?></h3>
	</article>
	<article>
		<p><?php $_GET['error']?></p>
	</article>	
</section>

<?php // get_footer(); ?>
>>>>>>> 0ce53a4188795adc7227afb3c50446202eec36d2
