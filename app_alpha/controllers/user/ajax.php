<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class ajax extends CI_Controller {



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
            $this->load->model('process_post_survey');

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

            // switch statement for AJAX action 
            switch($action) {

                //case if action type == personality run these actions
                case 'personality':   
                    
                    if( $this->input->post('character') ) {

                        if($this->input->post('character') == 10) {
                            $charid = 0;
                        } else {
                            $charid = $this->input->post('character');
                        }
                        //update character id
                        $attempt = $this->personality->update_char($this->uid, $charid);
                        echo " Char update : " . $attempt;

                    } else {

                        echo "No character id";

                    }

                break; 

                case 'important-goal':

                    if( $this->input->post('location') &&  $this->input->post('page') && $this->input->post('session') ) {
                        
                        //process form
                        foreach($this->input->post('personality_goals') as $goal ) {
                            
                            $this->personality->update_personality_goal( $this->uid, $this->input->post('session'), $goal, 1 );
                            
                        }

                        $this->personality->update_progress($this->uid, $this->input->post('session'), $this->input->post('page') );

                    } else {
                        echo "No post location || page || session";
                    }


                break;

                case 'session-form':

                    if( $this->input->post('location') &&  $this->input->post('page') && $this->input->post('session')) {
                        
                        //process form
                        foreach($_POST as $question => $answer) {

                            $this->personality->process_form($this->uid, $question, $answer, $this->input->post('location'), $this->input->post('page'), $this->input->post('session'));
                        
                        }

                    } else {
                        echo "No post location || page || session";
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

                case 'feedback':
                    
                    if($this->input->post('session')) {

                        $this->session_planning->complete_session( $this->uid, $this->input->post('session') );
                        $this->process_post_survey->process_session_feedback($_POST, $this->uid, $this->input->post('session'));

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