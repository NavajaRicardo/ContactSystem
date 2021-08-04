<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MLogin extends DZI_Model {
    public function __construct(){
         parent::__construct();

	}
	
    public function FnRegister($param){
       
  
      
        $data = "CALL sp_registration_iu(
                             {$param['ProfileID']},
                             '{$param['ProfileName']}',
                            '{$param['EmailAdd']}',
                            '{$param['ProfilePassword']}'
                           
                )";

        $query = $this->db->query($data);
        return $query->result_array();
      }
      public function FnLogin($param){
       
  
      
        $data = "CALL sp_login_s(
                           
                            '{$param['EmailAdd']}',
                            '{$param['ProfilePassword']}'
                           
                )";

        $query = $this->db->query($data);
        return $query->result_array();
      }
      public function FnSaveContact($param){
       
  
      
        $data = "CALL sp_contacts_iu(
                             {$param['ContactID']},
                            '{$param['ContactName']}',
                            '{$param['Company']}',
                            '{$param['PhoneNo']}',
                            '{$param['EmailAdd']}',
                            {$param['addedByUserID']},
                            {$param['StatusID']}
                           
                )";

        $query = $this->db->query($data);
        return $query->result_array();
      }
      public function FnGetContacts($param){
       
  
      
        $data = "CALL sp_contacts_s(
                             {$param['ContactID']},
                            '{$param['ContactName']}',
                         
                            {$param['addedByUserID']}
                           
                )";

        $query = $this->db->query($data);
        return $query->result_array();
      }
}
