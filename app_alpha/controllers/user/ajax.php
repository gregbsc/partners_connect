<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class ajax extends CI_Controller {

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

        	// LOAD MODELS HERE
        	$this->load->model('users/user_info');
        	$this->load->model('users/session_planning');
        	$this->load->model('users/session_content');
			$this->load->model('users/personality');
            $this->load->model('/users/session_tracking');

            //page location information
        	$this->session_location = $this->uri->segment(3);
        	$this->page_location = $this->uri->segment(4);
        	$this->next_page = intval($this->page_location) + 1;
        	$this->previous_page = intval($this->page_location) - 1;
            //user info
            $this->user_details = $this->ion_auth->user()->row();
            $this->uid = $this->user_details->user_id;


    	} else {
    		redirect('/user/login/','redirect'); // redirect if not logged in
    	}

    }
	
	//this is currently set the default -- this is what the user see's when they first login
	public function index()
	{

        if( $this->input->post('action') && isset($this->uid) ) {

            $action = $this->input->post('action');

            switch($action) {

                case 'personality':   
                    
                    if( $this->input->post('character') ) {
                        //update character id
                        $this->personality->update_char($this->uid, $this->input->post('character'));
                    } else {
                        echo "No character id";
                    }

                break; 

                case 'session-form':

                    if( $this->input->post('location')) {
                        //process form
                        $this->personality->process_form($this->uid, $_POST, $this->input->post('location'));
                    } else {
                        echo "No post location";
                    }

                break;

                case 'completed-session':
                    
                    if( $this->input->post('session') ) {
                        // complete session
                        $this->session_planning->complete_session( $this->uid, $this->input->post('session') );
                    } else {
                        echo "No post session";
                    }

                break;

                default:
                    echo "Default failure";

            }

        // if no post action or uid       
        } else {

            echo "failure";

        }

    }

}