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