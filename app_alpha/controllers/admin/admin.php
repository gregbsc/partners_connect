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

        //admin nav
        $this->load->model('admin_Nav');
        $this->menuData = $this->admin_Nav->getNavigation();
       	//end of navigation

       	if( $this->ion_auth->is_admin() ) {

			$this->currentUser = $this->ion_auth->user()->row();
			$data['userName'] = $this->currentUser->email;

			// active users
			$this->load->model('activeUsers');
			$this->activeUsersList = $this->activeUsers->getActiveUsers();


        } else {

        	$data['noinfo'] = true;

    	}
    	
    }
	
	public function index()
	{
		//bind navigation date to data array -- pass to view
		if(!empty($this->menuData)) {
			$data['navigation']  = $this->menuData;
		}

		$data['userName'] = $this->currentUser->email;
	

		if( $this->ion_auth->logged_in() && $this->ion_auth->is_admin() ) {

			//VIEW BEING CALLED HERE
			$this->load->view('admin/header', $data);
			//VIEW BEING CALLED HERE
			$this->load->view('admin/admin', $data);

		} else {

			//VIEW BEING CALLED HERE
			$this->load->view('header', $data);
			redirect("admin/login", 'redirect');

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

		if( $this->ion_auth->logged_in() ) {

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

			$data['userName'] = $this->currentUser->email;
			$data['navigation']  = $this->menuData;
			$data['activeUsers']  = $this->activeUsersList;

			//VIEW BEING CALLED HERE
			$this->load->view('admin/header', $data);
			
			//VIEW BEING CALLED HERE
			//users view is called within the admin/admin view
			$this->load->view('admin/admin');
			

			//VIEW BEING CALLED HERE
			$this->load->view('footer');

		} else { 
			redirect("admin/login", 'redirect');
		} // end of is logged in as admin

	}


	public function create() {

		if( $this->ion_auth->logged_in() && $this->ion_auth->is_admin()) {
			
			$data['userName'] = $this->currentUser->email;
			$data['navigation']  = $this->menuData;
			//$data['activeUsers']  = $this->activeUsersList ;
			$data['createUsers'] = TRUE;

			//VIEW BEING CALLED HERE
			$this->load->view('admin/header', $data);

			$this->load->view('admin/admin', $data);

			//VIEW BEING CALLED HERE
			$this->load->view('footer');

			if( $_POST ) {

				$username = $this->input->post('username');
				$password = $this->input->post('password');

				if (!$this->ion_auth->username_check($username)) {

					$group_name = 'users';
					$email = $username;

					//user information
					$additional_data = array(
								'first_name' => $this->input->post('firstname'),
								'last_name' => $this->input->post('lastname'),
								);

					$this->ion_auth->register($username, $password, $email, $additional_data, $group_name);

				} else {
					// duplicate user....
				}

			}

		} else { 
			redirect("admin/login", 'redirect');
		} 

	}

	public function remove() {

		if( $this->ion_auth->logged_in() && $this->ion_auth->is_admin()) {
			
			if( $this->input->get('remid') ) {
				//deactivate user
				$id = $this->input->get('remid');
				$dataRemove = array( 'active' => 0 );
				$this->ion_auth->update($id, $dataRemove);
			}

			$data['userName'] = $this->currentUser->email;
			$data['navigation']  = $this->menuData;
			//$data['activeUsers']  = $this->activeUsers;

			$this->load->model('activeUsers');
			$data['removeUsersList'] = $this->activeUsers->getActiveUsers();

			$data['removeUser'] = TRUE;

			//VIEW BEING CALLED HERE
			$this->load->view('admin/header', $data);
			$this->load->view('admin/admin', $data);


		} else { 
			redirect("admin/login", 'redirect');
		} 

	}

	public function deactivated() {

		$deleteHashValue = md5('deletehash');

		if( $this->ion_auth->logged_in() && $this->ion_auth->is_admin() ) {

			//remove this user FOREVER...
			if( $this->input->get('delid') && $this->input->get('dcheck') ) {

				if($this->input->get('dcheck') == $deleteHashValue ) {

					$del_id = $this->input->get('delid');
					$this->ion_auth->delete_user($del_id);
					redirect("admin/deactivated", 'refresh');

				}

			}

			//re-activated this user... 
			if( $this->input->get('activateid') ) {

				//deactivate user
				$act_id = $this->input->get('activateid');

				$dataAdd = array( 'active' => 1 );
				$this->ion_auth->update($act_id, $dataAdd);
			
			}

			$data['userName'] = $this->currentUser->email;
			$data['navigation']  = $this->menuData;
			
			$this->load->model('deactivatedUsers');
			$data['removeUsersList'] = $this->deactivatedUsers->getDeactivated();

			$data['deactivatedUser'] = TRUE;

			//VIEW BEING CALLED HERE
			$this->load->view('admin/header', $data);
			$this->load->view('admin/admin', $data);


		} else { 
			redirect("admin/login", 'redirect');
		} 

	}

}

// end if admin.php