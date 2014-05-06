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
				$this->user_info->decline_reason($this->input->get('subid'), $this->input->post('reason'));
				redirect('no-thank-you','refresh');

			}

		} else { 
			$data = '';
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

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */