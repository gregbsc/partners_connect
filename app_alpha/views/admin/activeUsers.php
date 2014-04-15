<?php //display all users within a row // ?>

<div class="row">

	<ul>

	<?php foreach( $activeUsers as $user ) : ?>
		<?php // print_r($user); ?>
		<li> <a href="/admin/user/details/?uid=<?php echo $user->user_id; ?>"> <?php echo $user->username; ?> </a> </li>

	<?php endforeach; ?>

	</ul>

</div>