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

			//VIEW BEING CALLED HERE
			$this->load->view('admin/admin', $data);

		} else {

			//VIEW BEING CALLED HERE
			redirect("admin/login", 'redirect');

		}

		//VIEW BEING CALLED HERE
		$this->load->view('admin/footer');

	}

	public function run_pending_tasks() {

		$this->load->model('admin/scheduled_tasks');
		$need_to_process = $this->scheduled_tasks->fetch_time_lapsed_taks();

		foreach( $need_to_process as $process ) {

			echo $this->act_on_process();

		}


	}

	public function act_on_process( $process ) {

		if( isset($process->action) ) {

			switch($process->action) {

				case 'email':

					if($process->)
					
					return 'email action';
				
				break;

				default:
					//log error

			}

		}

	}

	public function create_task() {



	}

	
}
