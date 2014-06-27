<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Ip extends CI_Controller {

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
		   
       	if( $this->ion_auth->logged_in() && $this->ion_auth->is_admin()) {

			$this->currentUser = $this->ion_auth->user()->row();
			$data['userName'] = $this->currentUser->email;
			// active users
			$this->load->model('activeUsers');
			$this->activeUsersList = $this->activeUsers->getActiveUsers();
			$this->opt_out_users = $this->activeUsers->opt_out_users();


        } else {

        	$data['noinfo'] = true;
        	redirect("admin/login", 'redirect');

    	}

    }
	
	public function index()
	{
		


		$this->load->model('admin/ipusers');
		
		if($this->input->get('clearip')) {
			$this->ipusers->clearIp($this->input->get('clearip'));
			//echo "IP CLEARED";
		}

		$ipUsers = $this->ipusers->all();

		$data['ipUsers'] = $ipUsers;


		$this->load->view('admin/header');
		$this->load->view('admin/ipusers', $data);		
		$this->load->view('admin/footer');

	}

}
// end if admin.php
