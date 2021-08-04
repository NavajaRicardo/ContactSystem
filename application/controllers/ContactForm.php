<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ContactForm extends DZI_Controller {

	public function __construct(){
		parent::__construct();

        if ( !$this->session->userdata('LoggedIn') ) {
			header("Location: " . base_url() );
			exit;
		}

		$this->LoginContacts();
		$this->load->model('MLogin');
	}

	public function index() {
		$this->view(null, null,'login_employee'); 
	}
	public function addcontact() {
		$this->view(null, null,'login_employee'); 
	}
	public function editcontact() {
		$this->view(null, null,'login_employee'); 
	}
	public function savecontact(){
		

			  
	  
	
		$param = array(
		  'ContactID'       		=> $this->input->post('ContactID',        true),
		  'ContactName'     	=> $this->input->post('ContactName', true),
		  'Company'    => $this->input->post('Company', true),
		  'PhoneNo'      	    => $this->input->post('PhoneNo', true),
		  'EmailAdd'      	    => $this->input->post('EmailAdd', true),
		  'addedByUserID'      	    => $this->input_int_replace( $this->session->userdata['ProfileID']),
		  'StatusID'        =>  $this->input->post('StatusID', true),
	   );
	  $data = $this->MLogin->FnSaveContact($param);

	
	  if(!empty($data))
		  echo json_encode($data);
	  else
		  echo json_encode(array('Result' => 'Object is empty'));	 
		
   

	}
	public function getcontact(){
		

			  
	  
	
		$param = array(
			'ContactID'     	=> $this->input->post('ContactID', true),
		  'ContactName'     	=> $this->input->post('ContactName', true),
		 
		  'addedByUserID'      	    => $this->input_int_replace( $this->session->userdata['ProfileID'])
	   );
	  $data = $this->MLogin->FnGetContacts($param);

	
	  if(!empty($data))
		  echo json_encode($data);
	  else
		  echo json_encode(array('Result' => 'Object is empty'));	 
		
   

	}
}
