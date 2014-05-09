<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Admin extends CI_Controller {

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
			$data['userName'] = $this->currentUser->email;

			// active users
			$this->load->model('activeUsers');
			$this->activeUsersList = $this->activeUsers->getActiveUsers();
			$this->opt_out_users = $this->activeUsers->opt_out_users();


        } else {

        	$data['noinfo'] = true;

    	}

    }
	
	public function index()
	{
		//creates admin...
		// $username = 'greg@bluscs.com';
		// $password = '1234';
		// $email = $username;
		// $additional_data = array(
		// 						'first_name' => 'Gregory',
		// 						'last_name' => 'Sobotka',
		// 						);
		// $group = array('1'); // Sets user to admin. No need for array('1', '2') as user is always set to member by default 
		// $this->ion_auth->register($username, $password, $email, $additional_data, $group);
		//bind navigation date to data array -- pass to view

		//this is now only used to remove 
		if( $this->ion_auth->logged_in() && $this->ion_auth->is_admin() ) {

			if($this->input->get('delall')) {

				if($this->input->get('delall') == "true") {

					$this->load->model('remove_registered');
				    $this->remove_registered->all();

				}

			}

			$data['userName'] = $this->currentUser->email;
			//VIEW BEING CALLED HERE
			$this->load->view('admin/header', $data);
			//VIEW BEING CALLED HERE
			$this->load->view('admin/admin', $data);

		} else {
			
			redirect("admin/login", 'redirect');
			//VIEW BEING CALLED HERE
			$this->load->view('header', $data);
			

		}

		//VIEW BEING CALLED HERE
		$this->load->view('footer');

	}

	public function login() {

		//VIEW BEING CALLED HERE
		$this->load->view('header');

		if( $_POST ) {

			$userID = $this->input->post('login-name');
			$userPassword = $this->input->post('login-pass');
			$remember = TRUE;
			$this->ion_auth->login($userID, $userPassword, $remember);

		}

		if( $this->ion_auth->logged_in() && $this->ion_auth->is_admin() ) {

			redirect("admin", 'redirect');

		} else {

			//VIEW BEING CALLED HERE
			$this->load->view('admin/login');

		}

		//VIEW BEING CALLED HERE
		$this->load->view('footer');

	}

	public function logout() {

		//logout function 
		if( $this->ion_auth->logged_in()) {
			//logout function
			$this->ion_auth->logout();
			redirect("admin/login", 'redirect');
		} else {
			// if they want to log out and are not logged in...
			redirect("admin/login", 'redirect');
		}

	}

	public function users() {


		if( $this->ion_auth->logged_in() && $this->ion_auth->is_admin()) {

			//remove users who did not qualify -- mostly for testing
			if($this->input->get('delall')) {

				if($this->input->get('delall') == "true") {

					$this->load->model('remove_registered');
				    $this->remove_registered->all();

				}

			} //end of remove users

			$data['userName'] = $this->currentUser->email;
			//$data['navigation']  = $this->menuData;
			$data['activeUsers'] = $this->activeUsersList;

			//$data['userDetails'] = $this

			//VIEW BEING CALLED HERE
			$this->load->view('admin/header', $data);
			
			//VIEW BEING CALLED HERE
			//users view is called within the admin/admin view
			$this->load->view('admin/admin', $data);

			//VIEW BEING CALLED HERE
			$this->load->view('footer');

		} else { 
			redirect("admin/login", 'redirect');
		} // end of is logged in as admin

	}


	public function create() {

		if( $this->ion_auth->logged_in() && $this->ion_auth->is_admin()) {

			$this->load->model('admin/user_details');
			//$data['userName'] = $this->currentUser->email;
			//$data['navigation']  = $this->menuData;
			//$data['activeUsers']  = $this->activeUsersList ;

			//VIEW BEING CALLED HERE
			$this->load->view('admin/header');
			$this->load->view('admin/createUsers'); 

			//VIEW BEING CALLED HERE
			$this->load->view('footer');

			if( $this->input->post('username') && $this->input->post('password') ) {
				
				$username = $this->input->post('username');
				$password = $this->input->post('password');

				if (!$this->ion_auth->username_check( $username )) {

					$group_name = array('2');
					$email = $username;

					//user information
					$additional_data = array('first_name' => $this->input->post('firstname'),
											'last_name' => $this->input->post('lastname'),
											'phone' => $this->input->post('phone'));
										
					$new_uid = $this->ion_auth->register( $username, $password, $email, $additional_data, $group_name );

					if( isset($new_uid) && $new_uid > 0 ) {
						$this->user_details->insert_details( $new_uid );
					}

				} else {
					// duplicate user....
				}

			}

		} else { 

			redirect("admin/login", 'redirect');

		} 

	}


	public function not_qualified() {

		if( $this->ion_auth->logged_in() && $this->ion_auth->is_admin() ) {
			
			$this->load->model('deactivatedUsers');

			$data['notqlist'] = $this->deactivatedUsers->getNotElig();

			if( $this->input->get('note_id') ) {
 
				$data['user_notes'] = $this->deactivatedUsers->notEligScreener( $this->input->get('note_id') );

			}

			//VIEW BEING CALLED HERE
			$this->load->view('admin/header', $data);
			$this->load->view('admin/notqualifieduers', $data);
			$this->load->view('footer');

		} else { 
			redirect("admin/login", 'redirect');
		} 

	}

	public function opted_out() {

		if( $this->ion_auth->logged_in() && $this->ion_auth->is_admin()) {

			$data['userName'] = $this->currentUser->email;
			//$data['navigation']  = $this->menuData;
			$data['activeUsers']  = $this->opt_out_users;

			//VIEW BEING CALLED HERE
			$this->load->view('admin/header', $data);
			
			//VIEW BEING CALLED HERE
			//users view is called within the admin/admin view
			$this->load->view('admin/admin', $data);

			//VIEW BEING CALLED HERE
			$this->load->view('footer');

		} else { 
			redirect("admin/login", 'redirect');
		} // end of is logged in as admin

	}

	//remove from study / action of opt out
	public function remove() {

		$this->load->model('activeUsers');
		$this->load->model('admin/user_details');

		if( $this->ion_auth->logged_in() && $this->ion_auth->is_admin()) {
			
			if( $this->input->get('remid') ) {

				//deactivate user
				$id = $this->input->get('remid');
				$dataRemove = array( 'active' => 0 );
				$this->ion_auth->update( $id, $dataRemove );
				//update status to opted out
				$this->user_details->update_status ($id, 3);

			} //end of delete user

			$data['userName'] = $this->currentUser->email;
			//$data['activeUsers']  = $this->activeUsers;
			$data['removeUsersList'] = $this->activeUsers->getActiveUsers();

			//VIEW BEING CALLED HERE
			$this->load->view('admin/header');
			$this->load->view('admin/remove', $data);

			//VIEW BEING CALLED HERE
			$this->load->view('footer');

		} else { 
			redirect("admin/login", 'redirect');
		} 

	}

	//this is the controller for perm deleting or re-activating opted out / deactivated users. 
	public function deactivated() {

		$this->load->model('admin/user_details');
		$this->load->model('deactivatedUsers');

		$deleteHashValue = md5('deletehash');

		if( $this->ion_auth->logged_in() && $this->ion_auth->is_admin() ) {

			//remove this user FOREVER...
			if( $this->input->get('delid') && $this->input->get('dcheck') ) {

				if($this->input->get('dcheck') == $deleteHashValue ) {

					$del_id = $this->input->get('delid');
					$this->deactivatedUsers->perm_delete($del_id);
					$ion_delete = $this->ion_auth->delete_user($del_id);				
					redirect("admin/deactivated", 'refresh');

				}

			}

			//re-activated this user... 
			if( $this->input->get('activateid') ) {
				
				//deactivate user
				$act_id = $this->input->get('activateid');
				$dataAdd = array( 'active' => 1 );
				$this->ion_auth->update($act_id, $dataAdd);
				$this->user_details->update_status($act_id, 1);
			}

			//$data['userName'] = $this->currentUser->email;
			$data['removeUsersList'] = $this->deactivatedUsers->getDeactivated();

			//VIEW BEING CALLED HERE
			$this->load->view('admin/header');
			$this->load->view('admin/deactivatedUsers', $data);
			
			//VIEW BEING CALLED HERE
			$this->load->view('footer');

		} else { 
			redirect("admin/login", 'redirect');
		} 

	}

	public function resources() {

		$this->load->view('admin/header');
		$this->load->view('admin/resources');
		$this->load->view('footer');

	}

}
// end if admin.php