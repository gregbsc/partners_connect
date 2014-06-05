<div id="container">

	<div class="row">

		<div class="container">

			<?php // template of sorts //

			if(isset($activeUsers) && is_array( $activeUsers )) : 
				$this->load->view('admin/activeUsers', $activeUsers); 
			endif;

			if( isset($deactivatedUser) ) : 
				$this->load->view('admin/deactivatedUsers', $deactivatedUser);
			endif;
			
			if(isset($new_submissions) && !empty($new_submissions) && is_array($new_submissions)) :
				$this->load->view('admin/active_submissions', $submission);
			endif;

			if(isset($upcomingEvents)) {
				$this->load->view('admin/upcoming_events', $data['upcomingEvents'] = $upcomingEvents );
			} ?>		

		</div>

	</div>

</div>