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

       	if( $this->ion_auth->is_admin() ) {

			$this->currentUser = $this->ion_auth->user()->row();
			$this->load->model('activeUsers');
			$this->activeUsersList = $this->activeUsers->getActiveUsers();
			$this->load->model('admin/email_functionality');
        } 
    	
    }
	
	public function index()
	{
	
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
		$this->load->view('admin/footer');

	}

	public function contact() {

	
		$data['noinfo'] = '';
		$this->load->helper('email_helper');

		//$this->load->model('admin/email_functionality');

		if( $this->ion_auth->logged_in() && $this->ion_auth->is_admin() ) {


			if( $this->input->get('uid') ) {

				$uid = $this->input->get('uid');
				$userLookup = $this->ion_auth->user($uid)->row();
				$data['uid'] = $uid;

				if( $this->input->post('email_type') == 'Initial Contact') {
					$this->load->model('admin/user_details');
					//this is to track the first email where we presume the user will get their password.
					$this->user_details->update_initial_contact( $uid, 1 );
				}

				if(isset($userLookup)) {
					$data['user_phone'] = $userLookup->phone;
					$data['user_name'] = $userLookup->first_name . " " . $userLookup->last_name;
					$data['user_email'] = $userLookup->email;
				}

				if( $this->input->post('email_title') && $this->input->post('email_type') && $this->input->post('email_body')) {

					$email_title = $this->input->post('email_title');
					$email_type = $this->input->post('email_type');
					$email_body = $this->input->post('email_body');
					//custom check email check based on uid.
					$user_email = $this->email_functionality->user_email( $this->input->get('uid') );
					
					if( count($user_email) > 0 && isset( $user_email[0]->email ) ) {
						// helper function -- email helper
						//need to include email api
						send_email( $email_title, $email_type, $email_body, $user_email[0]->email );
						//records mail for admin interface use
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
		$this->load->view('admin/footer');

	}

	public function details() {

		
		$data['noinfo'] = '';
		$this->load->model('admin/user_details');



		if( $this->ion_auth->logged_in() && $this->ion_auth->is_admin() ) {

			if( $this->input->get('uid') && $this->input->get('type') ) {

				$sub_id =  $this->user_details->subid( $this->input->get('uid') );

				$user_details = $this->ion_auth->user( $this->input->get('uid') )->row();

				if( $this->input->get('type') == ( "baseline" || "all" ) ) {

					if(isset($sub_id[0]->submission_id)) {
						
						$baseline_results = $this->user_details->baseline( $sub_id[0]->submission_id );
						$data['baseline_results'] = $baseline_results;
						$data['user_details'] = $user_details;
						$data['email_history'] = $this->email_functionality->history( $this->input->get('uid') );

					}

				}

			} else {
				redirect("admin", 'redirect');
			}

			//VIEW BEING CALLED HERE
			$this->load->view('admin/header', $data);

			//VIEW BEING CALLED HERE
			$this->load->view('admin/details', $data);

		} else {

			//VIEW BEING CALLED HERE
			redirect("admin/login", 'redirect');

		}

		//VIEW BEING CALLED HERE
		$this->load->view('admin/footer');


	}

	
}
