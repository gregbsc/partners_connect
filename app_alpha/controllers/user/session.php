<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class session extends CI_Controller {

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

        if( $this->ion_auth->logged_in() && $this->ion_auth->in_group("members") ) {

        	$this->load->model('users/user_info');
        	$this->load->model('users/session_planning');
        	$this->load->model('users/session_content');

        	$this->user_details = $this->ion_auth->user()->row();
    		$this->uid = $this->user_details->user_id;

    		$live_session = $this->session_planning->live_session( $this->uid );
    		$session_status = $this->session_planning->session_status($this->uid, $this->uri->segment(3));
   		
    		// ******************************* ******************************* *******************************
    		// start of logic to redirect users to correct page -- assuming they try to be tricky!
    		// ******************************* ******************************* *******************************

    		if( isset($live_session->session_number) && ( $this->uri->segment(3) == $live_session->session_number ) || isset($session_status) && $session_status == 1 ) {

    			if(!$this->uri->segment(4)) {

					//need to update this logic
					redirect("/user/session/{$live_session->session_number}/1",'redirect');

    			} 

    		} else {
    			redirect("/user/session/{$live_session->session_number}",'redirect');
    		}

    		// ******************************* ******************************* *******************************
    		//end of redirect for correct page
    		// ******************************* ******************************* *******************************

    	} else {
    		redirect('/user/login/','redirect'); // redirect if not logged in
    	}

    }
	
	//this is currently set the default -- this is what the user see's when they first login
	public function index()
	{			
			$this->load->helper('users/view_crutch');

			$session_content = $this->session_content->body($this->uri->segment(3), $this->uri->segment(4));

			$view_to_load = view_name( $session_content->template );

			//VIEWS BEING CALLED HERE
			$this->load->view('header');
			$this->load->view( $view_to_load );
			$this->load->view('footer');

	}


}