
<?php if(isset( $note_history )) : ?>

	<?php foreach( $note_history as $note_history ) : ?>

		<li> 
			<p> <strong> <?php echo $note_history->note_subject; ?> </strong> - <?php echo $note_history->post_time; ?>  |  <span class="view-details"><strong>View details</strong></span> </p> 

			<ul class="hiddenul">
				<li> <strong> Subject : </strong> <?php echo $note_history->note_subject;?></li>
				<li> <strong> Date : </strong> <?php echo $note_history->post_time ;?></li>
				<li class="mtop20"> <strong> Note : </strong> <?php echo $note_history->note_message;?></li>
			</ul>
		</li>		

	<?php endforeach; ?>

<?php endif; ?>