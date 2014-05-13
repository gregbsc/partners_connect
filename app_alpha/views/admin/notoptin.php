<?php //display all deactivated users within a row // ?>

<div class="row">

	<div class="container">
		<p class="tcenter"> This section (participants who did not option in) displays users whom were eligible for the study but chose not to take part. </p>
		<div class="col-md-6">

			<ul>

				<?php foreach( $notqlist as $not_qual ) : ?>

						<div class='not-elig-details mtop20 child-nomargin'>

							<?php 	
							echo "<p> <strong> IP address: </strong> " . $not_qual->user_ip . " </p> ";
							echo "<p> <strong> Submission id : </strong> " . $not_qual->submission_id ;
							echo ( isset($not_qual->decline_notes) ? "<p><strong>Decline notes : </strong> ".$not_qual->decline_notes . "</p>" : "" );
							echo ( isset($not_qual->user_decline_options) ? "<p><strong>Decline Select options : </strong> ". $not_qual->user_decline_options . "</p>" : "" );
							echo "<p> <a href='/admin/not-opt-in/?note_id={$not_qual->submission_id}'>Click to see available details</a>" ;?>

						</div>

				<?php endforeach; ?>

			</ul>

		</div>

		<div class="col-md-5">

			<?php if( isset($user_notes) ) : ?>

				<ul>

				<?php if(isset($user_notes[0]->submission_time)) : ?>

					<strong> Submission Time : </strong> <?php echo date('m-d-y', strtotime( $user_notes[0]->submission_time ) ); ?>

				<?php endif; ?>

				<?php foreach( $user_notes as $note ) : ?>

					<?php // print_r($note); ?>
					<li> <?php echo $note->question_name; ?> : <?php echo $note->question_response; ?> </li>

				<?php endforeach; ?>

				</ul>
			
			<?php endif; ?>

		</div>

	</div>

</div>