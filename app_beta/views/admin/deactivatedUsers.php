<?php //display all deactivated users within a row // ?>

<div class="row">

	<div class="container">

		<ul>
					
			<?php foreach( $removeUsersList as $userToRem ) : ?>

				<?php // print_r($userToRem); ?>
				<li> <?php echo $userToRem->username; ?> | <a href="/admin/deactivated/?activateid=<?php echo $userToRem->user_id; ?>">Re-activate</a> | <a href="/admin/deactivated/?delid=<?php echo $userToRem->user_id; ?>&dcheck=<?php echo md5('deletehash'); ?>">Permanently remove user</a> </li>

			<?php endforeach; ?>

		</ul>

	</div>

</div>