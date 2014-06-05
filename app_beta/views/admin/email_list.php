<?php //display all users within a row // ?>

<div class="container">

	<div class="col-md-6">

		<?php $this->load->view('admin/email_contact_form'); ?>

	</div>

	<div class="col-md-4">
		<h4 class="h4">User details</h4>
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

		<h4 class="h4 mtop20">Email History</h4>
		<ul class="emailul ulspecial">
			<?php $data['email_history'] = $email_history; ?>
			<?php $this->load->view('admin/email_history', $data); ?>
		</ul>

	</div>

</div>