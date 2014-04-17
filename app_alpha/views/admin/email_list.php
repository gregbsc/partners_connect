<?php //display all users within a row // ?>
<div class="container">
<div class="row">
	
	<?php $this->load->view('admin/email_contact_form'); ?>

	<ul style="margin-top:20px;width:100%;margin-left:20px; max-width:800px" class="emailul">

		<?php foreach( $email_history as $email ) : ?>

		<?php //print_r($email); ?> 
			<li> <h4 class="h4"> <?php echo $email->subject; ?>, <?php echo $email->send_date; ?>  |  <span class="view-details">View details</span> </h4> 

				<ul class="hiddenul">
					<li> To : <?php echo $email->to_location;?></li>
					<li> Subject : <?php echo $email->subject;?></li>
					<li> Send date : <?php echo $email->send_date ;?></li>
					<li> Sent : <?php echo ( $email->attempt == 1 ) ? "Successful" : "Failure";  ?></li>
					<li> Message : <?php echo $email->message;?></li>
				</ul>

			</li>		
		<?php endforeach; ?>

	</ul>

</div>
</div>

<script>


	jQuery( document ).ready(function() {

	  // Handler for .ready() called.
	  jQuery(".view-details").click( function() {

	  	jQuery(this).parent().next("ul.hiddenul").toggle();

	  });


	});


</script>