<div class="row">

	<div class="container">
		
		<div class="safe-wrap mtop40">

			<p class="session-title"> Session <?php echo $session; ?> </p>
			<h4 class="h4 page-title"> <?php echo $page_data->title; ?> </h4>

		</div>

		<hr>

		<div class="col-md-5 nomargin">

			<?php if(isset($page_data->audio)) : ?>
				<div class="audio">
					<p> <?php echo $page_data->audio; ?> </p>
				</div>
			<?php endif; ?>

			<?php echo main_content( $page_data->content ); ?>

		</div>

		<div class="col-md-7">

			<?php if(isset($custom_form) && !empty($custom_form)): ?>
				<?php $this->load->view($custom_form); ?>
			<?php endif; ?>

			<div class="main-content">

				<form id="confirm-goals">

				<p class="h4 mtop20"> Please click on a goal before going to the next page. </p>
				
 				<p class="mbot40"> Why are you seeking help at this time? How important is each goal? </p>

 				<?php foreach($custom_content as $entry) : ?>

 					<?php if( is_numeric($entry->answer) ): ?>

 						<?php
 						switch($entry->goal) {

 							case 'emotional_distress':
 								echo display_goal_confirm($entry->goal, $entry->answer, 'Relieve your emotional distress');
 							break;
 							case 'support_loved_one':
 								echo display_goal_confirm($entry->goal, $entry->answer, 'Learn how to support your loved one’s sobriety');
 							break;
 							case 'help_family':
 								echo display_goal_confirm($entry->goal, $entry->answer, 'Help you help your family');
 							break;
 							case 'stop_drinking':
 								echo display_goal_confirm($entry->goal, $entry->answer, 'Help your loved one stop drinking');
 							break; 							
 							case 'get_treatment':
 								echo display_goal_confirm($entry->goal, $entry->answer, 'Get your loved one into treatment');
 							break;
 							case 'motivation_for_change':
 								echo display_goal_confirm($entry->goal, $entry->answer, 'Increase your loved one’s motivation for change');
 							break;
  							case 'learn_to_communicate':
  								echo display_goal_confirm($entry->goal, $entry->answer, 'Learn how to communicate more effectively');
 							break;							 							

 							default:
 								'No input';

 						} ?>
 						
 					<?php endif; ?>

 				<?php endforeach; ?>

 				<input type="hidden" name="session" value="<?php echo $session; ?>" />
				<input type="hidden" name="page" value="<?php echo $page; ?>" />

				<input type="hidden" name="location" value="user_goals" />
				<input type="hidden" name="action" value="important-goal" />

			</form>

			<button id="confirm-goals-submit" class="<?php echo $completed; ?>"> Submit </button>

			</div>
			
		</div>

	</div>

</div>

<script>

	$('#confirm-goals-submit').click( function() {
		
		//$.post( "/user/session/update", $( "#required" ).serialize());
		$.post( "/ajax/update", $( "#confirm-goals" ).serialize() ).done(function( data ) {
	    	alert( "Data Loaded: " + data );
	  	});

	});

</script>


<?php $this->load->view('user/sessions/navigation', $links); ?>