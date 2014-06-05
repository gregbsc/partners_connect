<h4 class="h4">Why are you seeking help at this time? How important is each goal? </h4>

<form id="required">

	<p>Help your loved one stop drinking (0-4 ruler)</p>

	<p>Relieve your emotional distress (0-4 ruler) </p>

	<p>Get your loved one into treatment (0-4 ruler)</p>

	<p>Learn how to support your loved one’s sobriety (0-4 ruler)</p>

	<p>Increase your loved one’s motivation for change (0-4 ruler)</p>

	<p>Help you help your family (0-4 ruler) </p>

	<p>Learn how to communicate more effectively (0-4 ruler)</p>

	<p>Is there another goal important to you not on this list? [type in goal]</p>

	<input type="hidden" name="session" value="<?php echo $session; ?>" />
	<input type="hidden" name="page" value="<?php echo $page; ?>" />

	<input type="hidden" name="location" value="goals" />
	<input type="hidden" name="action" value="session-form" />

</form>

<button class="<?php echo $completed; ?>" id="submit-form"> Submit </button>

<script>

	$('#submit-form').click( function() {
		
		$.post( "/user/session/update", $( "#required" ).serialize());
		$('.require-action').show();
		//$('#submit-form').hide();

	});

</script>