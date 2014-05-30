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

        	// LOAD HELPERS HERE
        	$this->load->helper('users/session_content');
        
            //user info
           	$this->user_details = $this->ion_auth->user()->row();
    		$this->uid = $this->user_details->user_id;

            //session status
    		$live_session = $this->session_planning->live_session( $this->uid );
    		$session_status = $this->session_planning->session_status($this->uid, $this->uri->segment(3));
   		
    		// ******************************* ******************************* *******************************
    		// start of logic to redirect users to correct page -- assuming they try to be tricky!
    		// ******************************* ******************************* *******************************

    		if( isset($live_session->session_number) && ( $this->uri->segment(3) == $live_session->session_number ) || isset($session_status) && $session_status == 1 ) {

                $this->recent_complete = $this->session_tracking->recent( $this->uid, $this->uri->segment(3) );

                if($this->uri->segment(4)) {

                    $this->page_status = $this->session_tracking->status( $this->uid, $this->uri->segment(3), $this->uri->segment(4) );

                } else {

                    $this->page_status = 0;

                }

    			if(!$this->uri->segment(4) || ( $this->uri->segment(4) != ( $this->recent_complete + 1) ) ) {

                    $next_page = $this->recent_complete + 1;
                    echo $next_page . " " . $this->recent_complete;
					//redirect("/user/session/{$live_session->session_number}/{$next_page}", 'redirect');

    			}

    		} else {
    			//redirect("/user/session/{$live_session->session_number}",'redirect');
    		}

    		// ******************************* ******************************* *******************************
    		//end of redirect for correct page
    		// ******************************* ******************************* *******************************

    	} else {
    		//redirect('/user/login/','redirect'); // redirect if not logged in
    	}

    }
	
	//this is currently set the default -- this is what the user see's when they first login
	public function index()
	{			
        //session related content
		$session_content = $this->session_content->body($this->uri->segment(3), $this->uri->segment(4));
        $video_content = $this->session_content->videos($this->uri->segment(3), $this->uri->segment(4));

        //this pulls in the users core personality / traits 
        $user_personality = $this->personality->core($this->uid);

  		$data['session'] = $this->uri->segment(3);

		if( isset($session_content->audio) ) { 
			$data['audio_file'] = $session_content->audio;
		}

        //custom model logic .. load model if needed
        if(isset($session_content->dynamic_model) && !empty($session_content->dynamic_model)) {

            $model_function = $session_content->dynamic_model; 
            $data['custom_content'] = $this->personality->$model_function( $this->uid );

        }

        //custom form loader .. load form if not null
        if(isset($session_content->form)) {
            $data['custom_form'] = $session_content->form;
        }

        //video logic
		if( isset( $session_content->video ) ) {

            $data['default_char'] = $user_personality->character;
            
            if( $user_personality->children == 0 ) {

                //$data['video_file'] = $video_content[ $user_personality->character ]->vimeo_id;
                $data['video_content'] = $video_content;
                //print_r($video_content);
                
            } else {

                //condition for child iif children == 1
                if(!empty($video_content[ $user_personality->character ]->child_vimeo)) {

                    //if child version of video exists show that video
                    $data['video_file'] = $video_content[ $user_personality->character ]->child_vimeo;

                } else if(isset($video_content[ $user_personality->character ]->vimeo_id)) {
               
                    $data['video_file'] = $video_content[ $user_personality->character ]->vimeo_id;

                }

            }

		}

		$data['page_data'] = $session_content;

        if($session_content->previous == 0) {
            
        } else {
    	   $data['links']['previous_link'] = "/user/session/{$this->session_location}/{$session_content->previous}";
        }

        if($session_content->next == 100) {
            $data['links']['next_link'] = "/user";
        } else {
    	   $data['links']['next_link'] = "/user/session/{$this->session_location}/{$session_content->next}";
 		}

		//VIEWS BEING CALLED HERE
		$this->load->view('header');
        //view for controller is set in database -- table session_content -- field template
		$this->load->view($session_content->template, $data);
		$this->load->view('footer');

	}

}