<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class register extends CI_Controller {

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
	
	public function index()
	{	

		$this->load->model('screener_model');
		$this->load->helper('admin_email_contact');

		//View being called here 
		$this->load->view('header');
		
		if( $this->input->get('subid') ||  $this->input->post('subid') ) {

			if( $this->input->get('subid') ) {
				$sub_id = $this->input->get('subid');
				$user_status = $this->screener_model->user_info( $sub_id );

			} else if( $this->input->post('subid') ) {
				$sub_id = $this->input->post('subid');
				$user_status = $this->screener_model->user_info( $sub_id );

			} else { 
				$sub_id = 'error';
				$user_status = 'error';
			}

			//if user info reflects new user ... 
			if( $user_status != "null" && ( $user_status->status == 'new' && $user_status->qualified == 1 ) ) {

				if( $this->input->post('first_name') && $this->input->post('last_name') && $this->input->post('username') && $this->input->post('phone') ) {

					if ( !$this->ion_auth->username_check( $this->input->post('username') ) ) {
					
						$group_name = 'users';
						$email = $this->input->post('username');
						$username = $this->input->post('username');
						$phone = $this->input->post('phone');
						
						//remove any type of slashes etc. from phone number to set original password
						$disallowed = array("-",".","(",")");
						$password = str_replace($disallowed,"",$phone);

						//data to create user...
						$additional_data = array( 'first_name' => $this->input->post('first_name'), 
							'last_name' => $this->input->post('last_name'), 
							'phone' => $phone );			

						$createUser = $this->ion_auth->register($username, $password, $email, $additional_data, $group_name);

						if( $createUser ) {

							//update user via model to registered
							$this->screener_model->user_registration_success( $sub_id, $createUser );

							//send email to admin on successful submission. Email set in config file for CI. 
							success_register_contact( $this->config->item('admin_email') );

							//redirect
							redirect('user/success', 'redirect');

						}
					
					} else { 
						
						$data['user_creation'] = "error";
						// post did not pass...

					}

				} // end of if posts 

				// sub id to pass to form -- hidden field
				$data['subid'] = $user_status->submission_id;

				// view loaded here
				$this->load->view('register', $data);
				

			} else {

				// if not qualified 
				if($user_status->status == "registered") {

					// Already Registered -- redirect to login
					redirect('user/login/', 'redirect');

				}

			}
		
		} else { 

			$this->load->view('signup/previous_attempt');

		}

		$this->load->view('footer');

	}

}