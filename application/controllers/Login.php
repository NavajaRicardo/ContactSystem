<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends DZI_Controller {

	public function __construct(){
		parent::__construct();

		$this->LoginContacts();
		$this->load->model('MLogin');
	}

	public function index() {
		$this->view(null, null,'login_employee'); 
	}
	public function register() {
		$this->view(null, null,'login_employee'); 
	}
	public function registered() {
		$this->view(null, null,'login_employee'); 
	}
	public function registeration(){
		

			  
	  
	
		  $param = array(
			'ProfileID'       		=> $this->input->post('ProfileID',        true),
			'ProfileName'     	=> $this->input->post('ProfileName', true),
			'EmailAdd'    => $this->input->post('EmailAdd', true),
			'ProfilePassword'      	    => $this->input->post('ProfilePassword', true)
		 );
		$data = $this->MLogin->FnRegister($param);

		if ( $data[0]['IsSuccess'] == "1" ) {
			$this->session->set_userdata('LoggedIn', true);
		}
		if(!empty($data))
			echo json_encode($data);
		else
			echo json_encode(array('Result' => 'Object is empty'));	 
		  
	 

  }
  public function verify(){
	
		
			$param = array(
			'EmailAdd'   				 => $this->input->post('EmailAdd', true),
			'ProfilePassword'      	    => $this->input->post('ProfilePassword', true)
		);
		$data = $this->MLogin->FnLogin($param);
		
		if ( $data[0]['IsSuccess'] == "1" ) {
			
			$this->session->set_userdata('LoggedIn', true);
			$this->session->set_userdata('ProfileID', $data[0]['ProfileID']);
		}
		if(!empty($data))
			echo json_encode($data);
		else
			echo json_encode(array('Result' => 'Object is empty'));	 
	}
	public function logout(){
		unset(
			$_SESSION['LoggedIn']
		   ,$_SESSION['ProfileID']
		   );
		header("Location: " . base_url() );
	}
}
