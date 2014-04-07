<?php //display all users within a row // ?>

<div class="row">

	<ul>

	<?php foreach( $activeUsers as $user ) : ?>

		<li> <?php echo $user->username; ?> | <?php echo $user->email; ?> </li>

	<?php endforeach; ?>

	</ul>

</div>