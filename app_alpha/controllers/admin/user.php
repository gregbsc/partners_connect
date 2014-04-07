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
        $this->load->model('admin_Nav');
        $this->menuData = $this->admin_Nav->getNavigation();
       	//end of navigation

       	if( $this->ion_auth->is_admin() ) {

			$this->currentUser = $this->ion_auth->user()->row();
			$data['userName'] = $this->currentUser->email;

			// active users
			$this->load->model('activeUsers');
			$this->activeUsersList = $this->activeUsers->getActiveUsers();

        } else {

        	$data['noinfo'] = true;

    	}
    	
    }
	
	public function index()
	{
		//bind navigation date to data array -- pass to view
		if(!empty($this->menuData)) {
			//$data['navigation']  = $this->menuData;
		}

		$data['userName'] = $this->currentUser->email;
	

		if( $this->ion_auth->logged_in() && $this->ion_auth->is_admin() ) {

			//VIEW BEING CALLED HERE
			$this->load->view('admin/header', $data);
			//VIEW BEING CALLED HERE
			$this->load->view('admin/admin', $data);

		} else {

			//VIEW BEING CALLED HERE
			redirect("admin/login", 'redirect');

		}

		//VIEW BEING CALLED HERE
		$this->load->view('footer');

	}

	
}
