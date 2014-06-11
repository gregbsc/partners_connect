<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class login extends CI_Controller {

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
	
 
	public function index() {

		//VIEW BEING CALLED HERE
		$this->load->view('header');

		if( $_POST ) {

			$userID = $this->input->post('login-name');
			$userPassword = $this->input->post('login-pass');
			$remember = TRUE;
			$this->ion_auth->login($userID, $userPassword, $remember);

		}

		if( $this->ion_auth->logged_in() && $this->ion_auth->is_admin() ) {

			redirect("admin", 'redirect');

		} else {

			//VIEW BEING CALLED HERE
			$this->load->view('admin/login');

		}

		//VIEW BEING CALLED HERE
		$this->load->view('footer');

	}


	
}
