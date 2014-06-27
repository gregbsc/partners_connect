<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class lost extends CI_Controller {

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

    	
    }
	
	public function index()
	{
	
	$data['fill'] = true;
	
	$data['initialize'] = true;
		$this->load->helper('email_helper');
		$this->load->library('email');

		if( $this->input->get('account') && $this->input->get('activecode') ) {

			$data['message'] = "Enter your new password below.";
			$data['password_post_url'] = $this->site_url."/user/update/password/?action=reset&account={$this->input->get('account')}&activecode={$this->input->get('activecode')}";

			//print_r($data['password_post_url']);

			if( $this->input->post('password') ) {

				$password_complete = $this->ion_auth->forgotten_password_complete( $this->input->get('activecode'), $this->input->post('password') );

				if(isset($password_complete)) {
					redirect("user/login/?message=Password+change+successful", 'redirect');				
				}

			}

		}

		if( $this->input->post('uemail') ) {

			$forgotten = $this->ion_auth->forgotten_password( $this->input->post('uemail') );

			if( isset( $forgotten['identity'] ) && isset( $forgotten['forgotten_password_code'] ) ) {

				$title = "Password Reset";
				$email_type = "Password Reset";

				$site_url = base_url();
				$email_title = "Password Reset for Partners Connect";
				$reset_link = $site_url."user/lost/?action=reset&account={$forgotten['identity']}&activecode={$forgotten['forgotten_password_code']}";
				$email_body = "To reset your email address go to the following link ".$reset_link;

				$this->email->from($this->config->item('rand_email'), 'Partners Connect');
				$this->email->to( $forgotten['identity'] );
				$this->email->subject($email_title);
				$this->email->message($email_body);	

				$emailResult = $this->email->send();

				redirect("user/lost/?status=success", 'redirect');

			} else {

				redirect("user/lost/?status=failure", 'redirect');

			}

		} 

		if( $this->input->get('status') ) {

			if($this->input->get('status') == 'success') {

				$data['message'] = 'Instructions for reseting your password were sent to your email address.';

			} else {

				$data['message'] = 'There was an issue with reseting your password. Please contact Rand.';

			}

		}

		//VIEW BEING CALLED HERE
		$this->load->view('header');
		//VIEW BEING CALLED HERE
		$this->load->view('user/lost_password', $data);
		//VIEW BEING CALLED HERE
		$this->load->view('footer');

	
}
}
// end if admin.php