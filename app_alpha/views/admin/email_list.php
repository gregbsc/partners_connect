<?php //display all users within a row // ?>
<div class="container">
<div class="row">

	<ul style="margin-top:20px;width:100%;margin-left:20px; max-width:800px">

		<?php foreach( $email_history as $email ) : ?>

		<?php //print_r($email); ?> 
			<li> <h4 class="h4"> <?php echo $email->subject; ?>, </h4>

				<ul>
					<li><?php echo $email->to_location;?></li>
					<li><?php echo $email->subject;?></li>
					<li><?php echo $email->send_date;?></li>
					<li><?php echo ( $email->attempt == 1 ) ? "Successful" : "Failure";  ?></li>
					<li><?php echo $email->message;?></li>
				</ul>

			</li>		
		<?php endforeach; ?>

	</ul>

</div>
</div>