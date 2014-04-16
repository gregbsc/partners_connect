<div id="container">

	<div class="row">

		<div class="container">

			<h3>Admin</h3>

			<?php // template of sorts // ?>
			<?php if(isset($createUsers) &&  $createUsers == TRUE ) : ?>
				<?php $this->load->view('admin/createUsers', $createUsers); ?>
			<?php endif; ?>

			<?php if(isset($activeUsers) && is_array( $activeUsers )) : ?>
				<?php $this->load->view('admin/activeUsers', $activeUsers); ?>
			<?php endif; ?>

			<?php if( isset($removeUser) && $removeUser == TRUE ) : ?>
				<?php $this->load->view('admin/remove', $removeUsersList); ?>
			<?php endif; ?>

			<?php if( isset($deactivatedUser) && $deactivatedUser == TRUE ) : ?>
				<?php $this->load->view('admin/deactivatedUsers', $removeUsersList); ?>
			<?php endif; ?>

			<?php // new submissions // ?>
			<?php if (isset($new_submissions) && !empty($new_submissions) && is_array($new_submissions)) : ?>
				
					<?php $this->load->view('admin/active_submissions', $submission); ?>
			
			<?php endif; ?>

		</div>

	</div>

</div>