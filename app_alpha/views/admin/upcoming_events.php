<?php //display all users within a row // ?>

<div class="row">

	<div class="container">

		<?php if( isset($upcomingEvens) ) : foreach ( $upcomingEvens as $event ) : ?>
			
			<pre>
			<?php print_r($event); ?>
			</pre>

		<?php endforeach;  endif; ?>

	</div>

</div>