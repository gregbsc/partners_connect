<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class user extends CI_Controller {

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

		if( $this->ion_auth->logged_in() && $this->ion_auth->in_group("members") ) {

			//VIEW BEING CALLED HERE
			$this->load->view('header');


			//VIEW BEING CALLED HERE
			$this->load->view('footer');

		} else {

		}

	}

	public function login() {

		//VIEW BEING CALLED HERE
		$this->load->view('header');

		if( $this->input->post('login-name') && $this->input->post('login-pass') ) {

			$userID = $this->input->post('login-name');
			$userPassword = $this->input->post('login-pass');
			$remember = TRUE;
			$this->ion_auth->login($userID, $userPassword, $remember);

		}

		if( $this->ion_auth->logged_in() && $this->ion_auth->in_group("members") ) {

			redirect("user", 'redirect');

		} else {

			//VIEW BEING CALLED HERE
			$this->load->view('user/login');

		}

		//VIEW BEING CALLED HERE
		$this->load->view('footer');

	}
	
}

// end if admin.php