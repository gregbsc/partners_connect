<?php //display all users within a row // ?>

<div class="row">

	<div class="container">

		<ul>

		<?php foreach( $removeUsersList as $userToRem ) : ?>
			
			<li> <?php echo $userToRem->username; ?> | <a href="/admin/remove/?remid=<?php echo $userToRem->id; ?>">Deactivate</a> </li>

		<?php endforeach; ?>

		</ul>

	</div>

</div>