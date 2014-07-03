<div class="row">

	<div class="container">

	<?php // Javscript below used to submit session_feedback form //
	$this->load->view('user/session_feedback', $data['session'] = $session); ?>

	</div>

</div>

<script>

	$('#submit-form').click( function() {

		//$.post( "/user/session/update", $( "#required" ).serialize());
		$.post( "/ajax/update", $( "#required-completion" ).serialize() ).done(function( data ) {
	    	console.log( "Data Loaded: " + data );
	    	window.location.replace("/user/");
	  	});

	});

</script>