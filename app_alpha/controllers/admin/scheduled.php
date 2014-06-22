<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class scheduled extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	
    function __construct()
    {

        parent::__construct();

       	if( $this->ion_auth->is_admin() ) {

			$this->currentUser = $this->ion_auth->user()->row();
			$this->load->model('activeUsers');
			$this->load->model('admin/scheduled_tasks');
			$this->activeUsersList = $this->activeUsers->getActiveUsers();
			$this->load->model('admin/email_functionality');
			$this->current_time = time();

        } 
    	
    }
	
	public function index()
	{

		if( $this->ion_auth->logged_in() && $this->ion_auth->is_admin() ) {

			$data = '';
			//VIEW BEING CALLED HERE
			$this->load->view('admin/header', $data);

			$data['upcomingEvents'] = $this->scheduled_tasks->upcomming();

			print_r($data['upcomingEvents']);

			//VIEW BEING CALLED HERE
			$this->load->view('admin/upcoming_events', $data);

		} else {

			//VIEW BEING CALLED HERE
			redirect("admin/login", 'redirect');

		}

		// just for testing -- run_pending_tasks() will be run via cron job 
		$this->run_pending_tasks();

		//VIEW BEING CALLED HERE
		$this->load->view('admin/footer');

	}

	private function run_pending_tasks() {

		$this->load->model('admin/scheduled_tasks');
		$need_to_process = $this->scheduled_tasks->fetch_time_lapsed_taks();

		if( isset($need_to_process) ) {

			foreach( $need_to_process as $process ) {
				
				if( isset($process->uid) && isset($process->action) && isset($process->run_time) && isset($process->completed) && isset($process->message) && isset($process->path) && isset($process->id) ) {
					
					if($process->completed == 0) {

						$task_completion_status = $this->act_on_process( $process->uid, $process->action, $process->run_time, $process->message, $process->path, $process->title, $process->id );

						//if successful response... update to sent
						if($task_completion_status == 1) {

							$this->scheduled_tasks->complete_process($process->uid, $process->id);

						}

					} // emd of if completed 

				} //end of if isset

			} // end of foreach

		} // end if 

	} // end of run pending tasks

	private function act_on_process( $uid, $action, $run_time, $message, $path, $title, $entry_id ) {

		$this->load->library('email');

		if( isset( $action ) ) {

			switch( $action ) {

				case 'email':

					$this->email->from( $this->config->item('rand_email'), $this->config->item('email_from_name') );
					$this->email->to( $path );
					$this->email->subject( $title );
					$this->email->message( $message );
					
					if( $this->email->send() ) {
						$status = 1;
					} else {
						$status = 0;
					}
				
				break;

				default:
					// status = 0 
					$status = 0;
					// log error

			}

			//return message / response from process
			return $status;

		}

	}

	
}
