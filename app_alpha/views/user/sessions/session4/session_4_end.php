<div class="row">

	<div class="container">

		<h1> Session 4 feedback form </h1>

		<h4 class="h4">Session feedback - Complete Session</h4>

		<form id="required-completion">

			<input type="hidden" name="session" value="<?php echo $session; ?>" />
			<input type="hidden" name="page" value="<?php echo $page; ?>" />

			<input type="hidden" name="location" value="goals" />
			<input type="hidden" name="action" value="completed-session" />

		</form>

		<button id="submit-form" class="mbot40"> Submit </button>

	</div>

</div>

<script>

	$('#submit-form').click( function() {

		$.post( "/ajax/update", $( "#required-completion" ).serialize() ).done(function( data ) {
	    	console.log( "Data Loaded: " + data );
	    	window.location.replace("/user/");
	  	});

	});

</script>