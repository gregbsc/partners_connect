
<?php if(isset( $email_history )) : ?>
	<?php foreach( $email_history as $email ) : ?>

		<li> <p> <?php echo $email->subject; ?>, <?php echo $email->send_date; ?>  |  <span class="view-details"><strong>View details</strong></span> </p> 

			<ul class="hiddenul">
				<li> To : <?php echo $email->to_location;?></li>
				<li> Type : <?php echo $email->type; ?></li>
				<li> Subject : <?php echo $email->subject;?></li>
				<li> Send date : <?php echo $email->send_date ;?></li>
				<li> Sent : <?php echo ( $email->attempt == 1 ) ? "Successful" : "Failure";  ?></li>
				<li> Message : <?php echo $email->message;?></li>
			</ul>

		</li>		

	<?php endforeach; ?>
<?php endif; ?>