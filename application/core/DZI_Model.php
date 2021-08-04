<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DZI_Model extends CI_Model {
    public function __construct(){
         parent::__construct(); 
    }

	public function escape_string($data) {
        if ( !isset($data) or empty($data) ) return '';
        if ( is_numeric($data) ) return $data;

        $non_displayables = array(
            '/%0[0-8bcef]/',            // url encoded 00-08, 11, 12, 14, 15
            '/%1[0-9a-f]/',             // url encoded 16-31
            '/[\x00-\x08]/',            // 00-08
            '/\x0b/',                   // 11
            '/\x0c/',                   // 12
            '/[\x0e-\x1f]/'             // 14-31
        );
        foreach ( $non_displayables as $regex )
            $data = preg_replace( $regex, '', $data );
        $data = str_replace("'", "''", $data );
        return $data;
    }
     
	public function utf8size($d) {
	    if (is_array($d)) 
	        foreach ($d as $k => $v) 
	            $d[$k] = $this->utf8size($v);

	     else if(is_object($d))
	        foreach ($d as $k => $v) 
	            $d->$k = $this->utf8size($v);

	     else 
	        return utf8_encode($d);

	    return $d;
	}
    public function input_str_replace($input){

        $input_param  = $this->escape_string( trim($input) );
        $input_param  = ( $input_param === '' ) ? 'NULL' : $input_param;
        $input_param  = ( $input_param === 'NULL') ? str_replace("'", "", $input_param) : "'" . $input_param . "'";

        return $input_param;

    }
    public function input_int_replace($input){

        $input_param  = trim($input);
        $input_param  = ( $input_param === '' ) ? 'NULL' : $input_param;

        return $input_param;

    }
}
