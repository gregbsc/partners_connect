<?php //display all users within a row // ?>

<div class="row">

	<div class="container">


		<?php 

		foreach($ipUsers as $user) {

			echo "<p>" . $user->user_ip . " <a href='?clearip=$user->user_ip'>Clear IP</a> </p>";

		}

		?>

	</div>

</div>