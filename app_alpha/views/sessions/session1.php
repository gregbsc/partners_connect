<div id="container">

	<div class="row">

		<div class="container">

			<h3>Admin</h3>


			<?php if(isset($createUsers) &&  $createUsers == TRUE ) : ?>
				<?php $this->load->view('admin/createUsers', $createUsers); ?>
			<?php endif; ?>

			<?php if(isset($activeUsers) && is_array( $activeUsers )) : ?>
				<?php $this->load->view('admin/activeUsers', $activeUsers); ?>
			<?php endif; ?>

			<?php // var_dump($removeUser); ?>

			<?php if( isset($removeUser) && $removeUser == TRUE ) : ?>
				<?php $this->load->view('admin/remove', $removeUsersList); ?>
			<?php endif; ?>

			<?php if( isset($deactivatedUser) && $deactivatedUser == TRUE ) : ?>
				<?php $this->load->view('admin/deactivatedUsers', $removeUsersList); ?>
			<?php endif; ?>

		</div>

	</div>

</div>