<h4 class="h4">Why are you seeking help at this time? How important is each goal? </h4>

<form id="required-goals">

	<p class="instructions mtop40">Help your loved one stop drinking</p>
	
	<table class="baseline-table">
		<tr> <th>1</th> <th>2</th> <th>3</th> <th>4</th> </tr>
		<?php  table_row( 1, 4, NULL, "stop_drinking" ); ?>
	</table>

	<p class="instructions mtop20">Relieve your emotional distress </p>
	<table class="baseline-table">
		<tr> <th>1</th> <th>2</th> <th>3</th> <th>4</th> </tr>
		<?php  table_row( 1, 4, NULL, "emotional_distress" ); ?>
	</table>

	<p class="instructions mtop20">Get your loved one into treatment </p>
	<table class="baseline-table">
		<tr> <th>1</th> <th>2</th> <th>3</th> <th>4</th> </tr>
		<?php  table_row( 1, 4, NULL, "get_treatment" ); ?>
	</table>

	<p class="instructions mtop20">Learn how to support your loved one’s sobriety </p>
	<table class="baseline-table">
		<tr> <th>1</th> <th>2</th> <th>3</th> <th>4</th> </tr>
		<?php  table_row( 1, 4, NULL, "support_loved_one" ); ?>
	</table>

	<p class="instructions mtop20">Increase your loved one’s motivation for change </p>
	<table class="baseline-table">
		<tr> <th>1</th> <th>2</th> <th>3</th> <th>4</th> </tr>
		<?php  table_row( 1, 4, NULL, "motivation_for_change" ); ?>
	</table>

	<p class="instructions mtop20"> Help you help your family </p>
	<table class="baseline-table">
		<tr> <th>1</th> <th>2</th> <th>3</th> <th>4</th> </tr>
		<?php  table_row( 1, 4, NULL, "help_family" ); ?>
	</table>

	<p class="instructions mtop20">Learn how to communicate more effectively </p>
	<table class="baseline-table">
		<tr> <th>1</th> <th>2</th> <th>3</th> <th>4</th> </tr>
		<?php  table_row( 1, 4, NULL, "learn_to_communicate" ); ?>
	</table>

	<p class="instructions mtop40">Is there another goal important to you not on this list?</p>

	<textarea name="custom-goal" placeholder=""> </textarea>

	<input type="hidden" name="session" value="<?php echo $session; ?>" />
	<input type="hidden" name="page" value="<?php echo $page; ?>" />

	<input type="hidden" name="location" value="user_goals" />
	<input type="hidden" name="action" value="session-form" />

</form>

<button class="<?php echo $completed; ?>" id="submit-form-goals"> Submit </button>

<script>

	$('#submit-form-goals').click( function() {
		
		//$.post( "/user/session/update", $( "#required" ).serialize());
		$.post( "/ajax/update", $( "#required-goals" ).serialize() ).done(function( data ) {
	    	alert( "Data Loaded: " + data );
	  	});

		$('.require-action').show();
		$('button#submit-form-goals').hide();
		$('#required-goals').hide();

	});

</script>