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

		$this->load->model('screener_model');

		//VIEW BEING CALLED HERE
		$this->load->view('header');

		if( $_POST && $previousIP < 0 ) {


			$this->screener_model->process_screen( $_POST );


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
	
}

// end if admin.php