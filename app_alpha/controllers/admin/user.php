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
        //$this->load->model('admin_Nav');
        //$this->menuData = $this->admin_Nav->getNavigation();
       	//end of navigation

       	if( $this->ion_auth->is_admin() ) {

			$this->currentUser = $this->ion_auth->user()->row();
			//$data['userName'] = $this->currentUser->email;
			// active users
			$this->load->model('activeUsers');
			$this->activeUsersList = $this->activeUsers->getActiveUsers();

        } 
    	
    }
	
	public function index()
	{
		//bind navigation date to data array -- pass to view

		//$data['userName'] = $this->currentUser->email;
	
		$data['noinfo'] = '';

		if( $this->ion_auth->logged_in() && $this->ion_auth->is_admin() ) {

			if( $this->input->get('uid') ) {

	

			} else {
				redirect("admin", 'redirect');
			}

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

	public function contact() {

	
		$data['noinfo'] = '';
		$this->load->helper('email_helper');

		$this->load->model('admin/email_functionality');

		if( $this->ion_auth->logged_in() && $this->ion_auth->is_admin() ) {


			if( $this->input->get('uid') ) {


				if( $this->input->post('email_title') && $this->input->post('email_type') && $this->input->post('email_body')) {

					$email_title = $this->input->post('email_title');
					$email_type = $this->input->post('email_type');
					$email_body = $this->input->post('email_body');
					$user_email = $this->email_functionality->user_email( $this->input->get('uid') );
					
					if( count($user_email) > 0 && isset( $user_email[0]->email ) ) {
						// helper function -- email helper
						//need to include email api
						send_email( $email_title, $email_type, $email_body, $user_email[0]->email );
						$this->email_functionality->record_email( $email_title, $email_type, $email_body, $user_email[0]->email, $user_email[0]->id );
					}
				}
				
				//get email history last
				$data['email_history'] = $this->email_functionality->history( $this->input->get('uid') );

			} else {

				redirect("admin", 'redirect');

			}

			//VIEW BEING CALLED HERE
			$this->load->view('admin/header', $data);

			//VIEW BEING CALLED HERE
			$this->load->view('admin/email_list', $data);

		} else {

			//VIEW BEING CALLED HERE
			redirect("admin/login", 'redirect');

		}

		//VIEW BEING CALLED HERE
		$this->load->view('footer');

	}

	
}
