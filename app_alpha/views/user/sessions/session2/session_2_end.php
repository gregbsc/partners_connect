<div class="row">

	<div class="container">

		<?php // Javscript below used to complete session //
		$this->load->view('user/session_feedback', $data['session'] = $session); ?>

	</div>

</div>

<script>

	$('#submit-form').click( function() {

		$.post( "/ajax/update", $( "#required-completion" ).serialize() ).done(function( data ) {
	    	console.log( "Data Loaded: " + data );
	    	//window.location.replace("/user/");
	  	});

	});

</script>