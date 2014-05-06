<?php //display all users within a row // ?>

<div class="container">

	<div class="col-md-6">
		
		<?php if(isset($post_string)) : ?>
			<?php $this->load->view('admin/add_note_form', $data['post_string'] = $post_string ); ?>
		<?php endif; ?>

	</div>

	<div class="col-md-4">
		
		<h4 class="h4">Participant Details</h4>

		<ul class="emailul ulspecial medtext">

			<?php if(isset($user_name)) : ?>
				<li><?php echo $user_name; ?></li>
			<?php endif; ?>
			<?php if(isset($user_email)) : ?>
				<li>Email: <?php echo $user_email; ?></li>
			<?php endif; ?>
			<?php if(isset($user_phone)) : ?>
				<li>Phone number : <?php echo $user_phone; ?></li>
			<?php endif; ?>
			
		</ul>

		<?php if(isset($note_history)) : ?>
		<h4 class="h4 mtop20">Note History</h4>

		<ul class="emailul ulspecial">
			<?php $this->load->view('admin/note_history', $data['note_history'] = $note_history ); ?>
		</ul>
		
		<?php endif; ?>

	</div>

</div>