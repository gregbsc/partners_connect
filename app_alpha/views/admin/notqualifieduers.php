<?php //display all deactivated users within a row // ?>

<div class="row">

	<div class="container">

		<div class="col-md-6">

			<ul>

				<?php foreach( $notqlist as $not_qual ) : ?>
				<?php //print_r($not_qual); ?>

						<?php 
						echo "<div class='not-elig-details mtop20'>";
						echo "<strong> IP address: </strong> " . $not_qual->user_ip . " </br> ";
						echo "<strong> Submission id : </strong> " . $not_qual->submission_id ;
						echo "</br> <a href='/admin/not-eligible/?note_id={$not_qual->submission_id}'>Click to see available details</a>" ;
						echo "</div>";
						
				 ?>

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