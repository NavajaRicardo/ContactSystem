<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends DZI_Controller {

	public function __construct() {
		parent::__construct();
		

        // $this->LoginContacts();
       

	}
	
    public function sid(){
        /*
            Function name   :   sid
            Author          :   Armando Garing II
            Date Created    :   September 26, 2018

            Overview  :

            Revision History  :
            Date         Time     By                    Reference
        */

        $this->View('Register/sid', null, 'layout_sai');
    }
	
}
