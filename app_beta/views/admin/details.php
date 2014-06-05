<?php //display all deactivated users within a row // ?>

<div class="row">

	<div class="container">

		<div class="col-md-4">

			<?php if(isset($user_details)) : ?>
				
				<h4 class="h4"><?php echo $user_details->first_name . " " . $user_details->last_name; ?></h4>

				<ul style="padding-left:10px;list-style:none;">

					<?php // print_r($user_details);?>
					<li> <?php echo ( isset( $user_details->email ) ) ? $user_details->email : "No recorded email"; ?> </li>
					<li> <?php echo ( isset( $user_details->created_on ) ) ? "Completed screener on " . date('D-M-y',$user_details->created_on) : "No record of when created"; ?> </li>
					<li> <?php echo ( isset( $user_details->phone ) ) ? $user_details->phone : "No record of a phone number"; ?> </li>
				
				</ul>

			<?php endif; ?>

			<?php //this was name incorrectly, this is actually screener // ?>
			<?php if(isset($baseline_results)) : ?>

				<!-- <p> <a href='/admin/baseline-view/?uid=<?php // echo $user_details->user_id; ?>'>Click here to see baseline results</a> </p> -->
				
				<h4 class="h4">Screener Survey <span class="medtext"> - Submitted : <?php echo  ( isset($baseline_results[0]->submission_time) ? $baseline_results[0]->submission_time : " "); ?></span> </h4>

				<ul style="padding-left:10px;list-style:none;">

					<?php foreach( $baseline_results as $question ) : ?>
						<li> <?php echo $question->question_name; ?> : <?php echo $question->question_response; ?> </pre> </li>
					<?php endforeach; ?>

				</ul>
			
			<?php endif; ?>
			
			<?php if(isset($registration->baseline_completed)) : ?>
				
				<h4 class="h4">Baseline Completed: <?php echo $registration->baseline_completed; ?> </h4>

			<?php endif; ?>

		</div>

		<?php if(isset($email_history)) : ?>
		
			<div class="col-md-4">

				<p><span class="h4">Email History</span> - <a href="<?php echo ( $this->input->get('uid') ) ? "/admin/user/contact/?uid=".$this->input->get('uid') : "/admin/users/" ; ?>">Click here to contact user</a></p>

				<ul class="emailul specialul">

					<?php $this->load->view('admin/email_history', $data['email_history'] = $email_history); ?>

				</ul>

			</div>

		<?php endif; ?>

		<?php if(isset($note_history)) : ?>
		
			<div class="col-md-4">

				<p><span class="h4">RAND Notes</span> - <a href="<?php echo ( $this->input->get('uid') ) ? "/admin/user/notes/?uid=".$this->input->get('uid') : "/admin/users/" ; ?>">Click here to add notes</a></p>

				<ul class="emailul specialul">

					<?php $this->load->view('admin/note_history', $data['note_history'] = $note_history); ?>

				</ul>

			</div>

		<?php endif; ?>


		<div class="col-md-4">

			<h4 class="h4">U1 - U4 : In progress</h4>

		</div>


	</div>

</div>