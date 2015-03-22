<?php
	class User extends CI_Controller {
		public function __construct() {
			parent::__construct() ;
			$this->load->library('session');
		}
		public function index()
		{
			$data['current_section'] = "home";

			//$this->session->set_userdata( $array );
			if(!(bool)$this->session->userdata('logged_in'))
				$this->load->view('auth');
			else
				$this->_render_page('index', $data);
			//$this->_render_page('index');
		}

		public function signin()
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			//echo $username."   ".$password;
			$this->load->model('usermodel');
			$check = $this->usermodel->authenticate($username, $password);
			if($check==FALSE)
				redirect(base_url('index.php/user'));
			else{
				$array = array(
					'name' => $q->username,
					'logged_in'=> TRUE,
					'email' => $q->email);				
				$this->session->set_userdata( $array );
				//print_r($data);
				redirect(base_url('index.php/user'));
			}
		}

		public function profile()
		{
			$data['current_section'] = "profile";
			$this->_render_page('profile', $data);
		}

		public function profile_update()
		{
			$data['current_section'] = "profile";
			$data['name'] = $this->input->post('name');
			$data['gender'] = $this->input->post('gender');
			$data['dob'] = $this->input->post('dob');
			$data['city'] = $this->input->post('city');
			$data['mobile'] = $this->input->post('mobile');
			$data['email'] = $this->input->post('email');
			$data['pic'] = $this->input->post('pic');
			print_r($data);
		}
		public function logout()
		{
			$array = array(
				'logged_in' => FALSE
			);
			$this->session->unset_userdata('logged_in');
			redirect(base_url('index.php/user'));

		}
		public function _render_page($view, $data='')
		{
			$this->load->view('base/header', $data);
			$this->load->view($view,$data);
		}
	}
?>