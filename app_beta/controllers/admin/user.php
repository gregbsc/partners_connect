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
		$this->load->model('admin/user_details');

		if( $this->ion_auth->logged_in() && $this->ion_auth->is_admin() ) {


			if( $this->input->get('uid') ) {

				$uid = $this->input->get('uid');
				$userLookup = $this->ion_auth->user($uid)->row();

				$data['uid'] = $uid;
				$data['initial_link'] = "admin/user/contact/?uid=".$uid."&email_action=initial_contact";

				$redirecturl = "admin/user/contact/?uid=".$uid;

				if( $this->input->post('email_type') == 'Initial Contact') {

					//this is to track the first email where we presume the user will get their password.
					$this->user_details->update_initial_contact( $uid, 1 );
				}

				if ( $this->input->get('email_action') == 'initial_contact' ) {

					$email_title = "Test title for initial contact";
					$email_type = "Initial Email";
					$site_url = '';
					$email_body = "Hi, Name Here. Login using the following URL, <a href='http://pconnect.linuxblu.com/user/'>http://pconnect.linuxblu.com/user/</a> ";

					//send email
					send_email( $email_title, $email_type, $email_body, $userLookup->email );

					$this->email_functionality->record_email( $email_title, $email_type, $email_body, $userLookup->email, $userLookup->id );

					//update user contact
					$this->user_details->update_initial_contact( $uid, 1 );

					//redirect
					redirect($redirecturl, 'refresh');

				}

				if( isset( $userLookup ) ) {

					$data['user_phone'] = $userLookup->phone;
					$data['user_name'] = $userLookup->first_name . " " . $userLookup->last_name;
					$data['user_email'] = $userLookup->email;

				}

				// send custom email
				if( $this->input->post('email_title') && $this->input->post('email_type') && $this->input->post('email_body')) {

					$email_title = $this->input->post('email_title');
					$email_type = $this->input->post('email_type');
					$email_body = $this->input->post('email_body');

					//custom check email check based on uid.
					$user_email = $this->email_functionality->user_email( $this->input->get('uid') );
					
					if( count($user_email) > 0 && isset( $user_email[0]->email ) ) {

						//helper function -- email helper
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

			//$this->load->view('admin/footer');

		} else {

			//VIEW BEING CALLED HERE
			redirect("admin/login", 'redirect');

		}

		//VIEW BEING CALLED HERE
		$this->load->view('admin/footer');

	}

	//When you are viewing /admin/user/details?uid=## you are viewing this controller
	public function details() {
		
		$this->load->model('admin/user_details');

		if( $this->ion_auth->logged_in() && $this->ion_auth->is_admin() ) {

			if( $this->input->get('uid') ) {

				//get all notes here
				$all_notes = $this->user_details->all_notes( $this->input->get('uid') );
				$data['note_history'] = $all_notes;

				//subid is a method that returns all of the users registration information
				$sub_id =  $this->user_details->subid( $this->input->get('uid') );
				$user_details = $this->ion_auth->user( $this->input->get('uid') )->row();

				if( $this->input->get('type') == ( "baseline" || "all" ) ) {

					if(isset($sub_id[0]->submission_id)) {
						
						$screener_results = $this->user_details->screener( $sub_id[0]->submission_id );
						$data['baseline_results'] = $screener_results;

						$data['registration'] = $sub_id[0];
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

	public function notes() {	

 		$this->load->model('admin/user_details');

		if($this->input->get('uid')) {
			
			$uid = $this->input->get('uid');

			$post_string = "/admin/user/notes/?uid=".$uid;

			if( $this->input->post('note_title') && $this->input->post('note_body') ) { 

				$this->user_details->submit_note( $uid, $this->input->post('note_title'), $this->input->post('note_body') );
				redirect($post_string,'refresh');

			}

 			$all_notes = $this->user_details->all_notes( $uid );

			$data['note_history'] = $all_notes;

			$userLookup = $this->ion_auth->user($uid)->row();

			$data['uid'] = $uid;

			if( isset( $userLookup ) ) {

				$data['user_phone'] = $userLookup->phone;
				$data['user_name'] = $userLookup->first_name . " " . $userLookup->last_name;
				$data['user_email'] = $userLookup->email;

			}
			
			$data['post_string'] = $post_string;

		} else {
			$data['uid_string'] = "/admin/user/notes/";
		}

		//VIEW BEING CALLED HERE
		$this->load->view('admin/header');

		$this->load->view('admin/notes', $data);

		//VIEW BEING CALLED HERE
		$this->load->view('admin/footer');		

	}
	
}
