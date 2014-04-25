<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class screener extends CI_Controller {

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
        //admin nav
    	
    }
	
	public function index()
	{	
		//check previous ip addresses
		$this->load->model('signup_ip');

		$previousIP = $this->signup_ip->getIpRecord();

		$userIP = $_SERVER['REMOTE_ADDR'];

		$submission_time = time();
		
		$submission_id = md5( $userIP + $submission_time );
		
		$this->load->model('screener_model');

		//VIEW BEING CALLED HERE
		$this->load->view('header');

		if( $_POST && $previousIP < 1 ) {

			$data['register_link'] = $submission_id;

			//process  post first
			$this->screener_model->process_screen( $_POST, $userIP, $submission_id, $submission_time );

			/*
			Important questions to check in screener :

				If “No” to any of the following screener questions: 1, 3, 4-7 OR a “Yes” to question 2,  (CP does not qualify for Stage 2 screening):

				If “Yes” to all of the following screener questions: 1, 3, 4-7 AND a “No” to question 2, (CP qualifies for Stage 2 screening):

			*/

			if( $this->input->post('screen_1') == 'yes' && $this->input->post('screen_3') == 'yes' && $this->input->post('screen_4') == 'yes' && $this->input->post('screen_5') == 'yes' && $this->input->post('screen_6') == 'yes' && $this->input->post('screen_7') == 'yes' && $this->input->post('screen_2') == 'no') {

				print_r($_POST);

				$this->screener_model->register_user( $userIP, $submission_id );

				$this->load->view('signup/qualified', $data);

			} else {

				$this->load->view('signup/not_qualified');

			}

			//load view
			$this->load->view('signup/results', $data);

		} else {

			//VIEW BEING CALLED HERE
			if( $previousIP > 0 ) {
				$this->load->view('signup/previous_attempt');
			} else {
				$this->load->view('signup/screener');
			}

		}

		//VIEW BEING CALLED HERE
		$this->load->view('footer');

	}

	public function welcomePage() {
		//VIEW BEING CALLED HERE
		$this->load->view('header');

		$this->load->view('signup/welcome');

		//VIEW BEING CALLED HERE
		$this->load->view('footer');

	}
	
}

// end if admin.php