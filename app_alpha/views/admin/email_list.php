<?php //display all users within a row // ?>

<div class="container">

	<div class="col-md-6">

		<?php $this->load->view('admin/email_contact_form'); ?>

	</div>

	<div class="col-md-4">

		<h4 class="h4">History</h4>

		<ul style="margin-top:20px;width:100%;max-width:800px" class="emailul">

			<?php $data['email_history'] = $email_history; ?>
			<?php $this->load->view('admin/email_history', $data); ?>

		</ul>

	</div>

</div>