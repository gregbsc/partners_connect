<?php //display all deactivated users within a row // ?>

<div class="row">

	<div class="container">

		<?php if(isset($user_baseline)) : ?>
			<ul>
			<?php foreach($user_baseline as $result) : ?>

				<?php echo "<li>".$result->question . " : " . $result->response."</li>"; ?>

			<?php endforeach; ?>
			</ul>
		<?php endif; ?>			

	</div>

</div>