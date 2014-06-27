<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Resources extends CI_Controller {

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
		$this->load->view('header');
		$this->load->view('resources');
		$this->load->view('footer');

	}

	public function nothankyou() {

		if( $this->input->get('subid') ) {

			$submit_url = site_url("no-thank-you");	
			$submit_url = $submit_url.'?subid='.$this->input->get('subid');
			
			$data['form_forward'] = $submit_url;

			if( $this->input->post('reason') ) {

				//load model 
				$this->load->model('users/user_info');

				//decline notes
				$this->user_info->decline_reason($this->input->get('subid'), $this->input->post('reason'), $this->input->post('reason_select'));

				//1 == declined / opted out before creating user account
				$this->user_info->declined_status( $this->input->get('subid'), 1 );
				redirect('no-thank-you','refresh');

			}

		} else { 
			$data = '';
		}

		if( $_POST['reason_select'] ) {	
			$submit_url = site_url();	
			redirect($submit_url,'redirect');
		}

		$this->load->view('header');
		$this->load->view('signup/nothanks', $data);
		$this->load->view('footer');

	}

	public function contact() {

		$this->load->view('header');
		$this->load->view('contact');
		$this->load->view('footer');

	}

	public function welcome()
	{	
		$this->load->view('header');
		$this->load->view('signup/welcome');
		$this->load->view('footer');
		
	}

	public function success() {

		//VIEW BEING CALLED HERE
		$this->load->view('header');
		$this->load->view('success');
		$this->load->view('footer');

	}

}