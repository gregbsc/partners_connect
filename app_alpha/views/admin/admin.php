<div id="container">

	<div class="row">

		<div class="container">

			<?php // template of sorts // ?>

			<?php 
			if(isset($createUsers) &&  $createUsers == TRUE ) : 
				$this->load->view('admin/createUsers', $createUsers); 
			endif; 

			if(isset($activeUsers) && is_array( $activeUsers )) : 
				$this->load->view('admin/activeUsers', $activeUsers); 
			endif;

			if( isset($removeUser) && $removeUser == TRUE ) :
				$this->load->view('admin/remove', $removeUsersList);
			endif;

			if( isset($deactivatedUser) && $deactivatedUser == TRUE ) : 
				$this->load->view('admin/deactivatedUsers', $removeUsersList);
			endif;
			
			if(isset($new_submissions) && !empty($new_submissions) && is_array($new_submissions)) :
				$this->load->view('admin/active_submissions', $submission);
			endif;

			if(isset($upcomingEvens)) {

				$this->load->view('admin/upcoming_events', $data['upcomingEvents'] = $upcomingEvents );
			}

			?>

		</div>

	</div>

</div>