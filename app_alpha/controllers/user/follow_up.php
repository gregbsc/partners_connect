<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class follow_up extends CI_Controller {

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

        $this->site_url = $this->config->item('base_url');

        if($this->input->get('url')) {
        	$this->refer = $this->input->get('url');
        }

        if( $this->ion_auth->logged_in() && $this->ion_auth->in_group("members") ) {

        	$this->load->model('users/user_info');
        	$this->user_details = $this->ion_auth->user()->row();
    		$this->user_id = $this->user_details->user_id;
    		
    	} else {

    		if(isset($this->refer)) {
				//redirect 
    			redirect($this->refer, 'redirect');
    		} else {
    			//redirect 
    			redirect('/user/login', 'redirect');
    		}

    	}

    }
	
	//this is currently set the default -- this is what the user see's when they first login
	public function index()
	{	

		$this->load->model('process_post_survey');

		if($this->input->post()) {

			$postObject = $_POST;
			$this->process_post_survey->process_survey($postObject, $this->user_id);

		}
		$data['uid'] = $this->user_id;

		//VIEW BEING CALLED HERE
		$this->load->view('header');
		
		if(!empty($_POST)) {
			$this->load->view('user/follow_up/thank_you', $data );
		} else {
			$this->load->view('user/follow_up/survey', $data );
		}

		//VIEW BEING CALLED HERE
		$this->load->view('footer');
		

	}

	


}
// end if admin.php