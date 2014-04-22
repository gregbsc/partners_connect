<?php //display all deactivated users within a row // ?>

<div class="row">

	<div class="container">

		<div class="col-md-6">

			<?php if(isset($user_details)) : ?>
				
				<h4 class="h4"><?php echo $user_details->first_name . " " . $user_details->last_name; ?></h4>

				<ul style="padding-left:10px;list-style:none;">
					<?php // print_r($user_details);?>
					<li> <?php echo ( isset( $user_details->email ) ) ? $user_details->email : "No recorded email"; ?> </li>
					<li> <?php echo ( isset( $user_details->created_on ) ) ? "Created on " . date('D-m-y',$user_details->created_on) : "No record of when created"; ?> </li>
					<li> <?php echo ( isset( $user_details->phone ) ) ? $user_details->phone : "No record of a phone number"; ?> </li>
				</ul>

			<?php endif; ?>

			<h4 class="h4">Screener Survey</h4>

			<ul style="padding-left:10px;list-style:none;">

				<?php foreach( $baseline_results as $question ) : ?>

					<li> <?php echo $question->question_name; ?> : <?php echo $question->question_response; ?> </pre> </li>

				<?php endforeach; ?>

			</ul>

		</div>

		<div class="col-md-4">

			<p><span class="h4">Email History</span> - <a href="<?php echo ( $this->input->get('uid') ) ? "/admin/user/contact/?uid=".$this->input->get('uid') : "/admin/users/" ; ?>">Click here to contact user</a></p>

			<ul style="margin-top:20px;width:100%;max-width:800px" class="emailul">

				<?php $this->load->view('admin/email_history', $data['email_history'] = $email_history); ?>

			</ul>

		</div>
	</div>

</div>