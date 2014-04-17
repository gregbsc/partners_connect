<?php //display all users within a row // ?>

<div class="container">

	<div class="col-md-6">

		<?php $this->load->view('admin/email_contact_form'); ?>

	</div>
	<div class="col-md-4">
		<h4 class="h4">History</h4>

		<ul style="margin-top:20px;width:100%;max-width:800px" class="emailul">

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