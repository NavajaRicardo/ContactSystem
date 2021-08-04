<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DZI_Controller extends CI_Controller {
		
	public function __construct() {
		parent::__construct();

		//check authentication
		// $no_redirect = array('User');
		// if ( !$this->session->userdata('logged_in') && !in_array(uri_string(), $no_redirect)) {
		// 	header("Location: " . base_url());
		// 	exit;
		// }			
		// $this->output->enable_profiler(true);

	}
	
	public function view($view = null, $data = array(), $layout = 'layout') {
		$view_folder = $view == null ? $this->router->fetch_class() . '/' : ''; // class = controller
		$view = $view == null ? $this->router->fetch_method() : $view;

		if ($layout === null) 
			$this->load->view($view_folder . $view, $data);
		else {
			$render_body = $this->load->view($view_folder . $view, $data, true);
			$this->load->view('Shared/'.$layout, array('render_body' => $render_body));
		}

		// if ($partial != ''){
		// 	$this->partial($partial);
		// }		

		if( !empty($data) ){
			if(!isset($data['layout_css']) || $data['layout_css'] != null || $data['layout_css'] != ''){
				$this->partial($data['layout_css']);	
			}
						
			if(!isset($data['layout_css']) || $data['layout_css'] != null || $data['layout_css'] != ''){
				$this->partial($data['layout_css']);	
			}

			if(!isset($data['layout_js']) || $data['layout_js'] != null || $data['layout_js'] != ''){
				$this->partial($data['layout_js']);	
			}

			if(!isset($data['css']) || $data['css'] != null || $data['css'] != ''){
				$this->partial($data['css']);	
			}

			if(!isset($data['js']) || $data['js'] != null || $data['js'] != ''){
				$this->partial($data['js']);	
			}

		
		}


				
	}

	public function partial($view) {
		$this->load->view($view);
	}
	
	public function controllerverify() {
		// $controllername = parse_url(base_url(uri_string()), PHP_URL_PATH);

		// if (strpos($controllername, '/') !== false) { //kung makit-an ang / sa string then true
		// 	$controllername = ltrim( parse_url(base_url(uri_string()), PHP_URL_PATH) , '/'); //result "/User/rights". gi remove ang first char nga /
		// }else{
		// 	$controllername = parse_url(base_url(uri_string()), PHP_URL_PATH); //result "User/rights"
		// }
		$controllername = $this->uri->segment(1).'/'.$this->uri->segment(2);
		$data = array(
				 'UserLoginID' 		 => $this->session->userdata['UserLoginID']
				,'BranchID' 		 => $this->session->userdata['BranchID']
				,'SystemID' 		 => $this->session->userdata['SystemID']
				,'ControllerName' 	 => $controllername
				,'DelimiterData' 	 => 'NULL'
				,'Delimiters' 	 	 => 'NULL'
				,'SearchValue' 	 	 => 'NULL'
				,'Flag' 		 	 => 1
		);

		$this->load->model('MCommon');
		$result = $this->MCommon->FnControllerVerify($data);
		// print_r($result[0]['IsSuccess']);
		if(!$result[0]['IsSuccess'] == '1'){
			header("Location: " . base_url().'PageNotFound');
			exit;	
		}		
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
        $input_param  = ( $input_param === '' ) ? 'null' : $input_param;
        $input_param  = ( $input_param === 'null') ? str_replace("'", "", $input_param) : "'" . $input_param . "'";

        return $input_param;

	}
	public function empty_to_null($input){

        $input_param  = trim($input) ;
        $input_param  = ( $input_param === '' ) ? 'NULL' : $input_param;

        return $input_param;

    }
    public function input_int_replace($input){

        $input_param  = trim($input) ;
        $input_param  = ( $input_param === '' ) ? 'NULL' : $input_param;

        return $input_param;

    }
	public function blast($param) {
		$ch = curl_init();
		$parameters = array(
		    // 'apikey' 		=> '07013da2c06b2b7518ec558279c16d88', //Your API KEY JB
		    'apikey' 		=> 'd83555398dd3552abff32bc02b63c647', //Your API KEY 428am
		    'number' 		=> $param['number'],
		    'message' 		=> $param['message'],
		    'sendername' 	=> $param['sendername']
		);
		curl_setopt( $ch, CURLOPT_URL,'http://api.semaphore.co/api/v4/messages' );
		curl_setopt( $ch, CURLOPT_POST, 1 );

		//Send the parameters set above with the request
		curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( $parameters ) );

		// Receive response from server
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
		$output = curl_exec( $ch );
		curl_close ($ch);

		//Show the server response
		// echo $output;

	    return $output;
	}

	//added by lynsie canalita / monday, 01/06/2020, 10:35AM
	public function merge($data){

		$new_data = '';
		$len = count($data)-1;
		$prev_key = -1;

		foreach ($data as $key => $value) {

			foreach ($value as $value2) {
				if($key == $prev_key ){
					$new_data .= "*";
				}
				$new_data .= $value2;
				$prev_key = $key;
			}

			if($key != $len){
				$new_data .= "|";
			}

		}

		return $new_data;
		
	}
	//added by lynsie canalita / monday, 01/06/2020, 10:35AM

	//added by Richmond Coca / Sunday, 03/29/2020, 2:43PM
	public function merge_v2($data){

		$new_data = "{$data['Option']}**{$data['TableName']}**";
		$len = count($data['Data']);

		foreach ($data['Data'] as $key => $value) {

			foreach($value as $key2 => $value2){
				$new_data .= $key2.":".$value2."|";
			}

			$new_data .= "*";

		}

		return $new_data;
		
	}
    public function upload_file_array($file_post) {

        $file_ary = array();
        $file_count = count($file_post['name']);
        $file_keys = array_keys($file_post);
    
        for ($i=0; $i<$file_count; $i++) {
            foreach ($file_keys as $key) {
                $file_ary[$i][$key] = $file_post[$key][$i];
            }
        }
    
        return $file_ary;
    }
	public function array_to_comma_string($array_multidimensional){
		/*
			Used: Purchasing -> Create Purchase Order
		*/
		$value_holder = array();

        foreach ($array_multidimensional as $prop_ids) {
            $list = join(',', array_map(
                function ($id) { return current(explode('|', $id)); },
                $prop_ids
            ));    
            // echo $list;
            array_push($value_holder,$list);
            
		}
		$selected_comma_seprated = implode(',', $value_holder);
		return $selected_comma_seprated;
		
	}

	

	public function LoginContacts(){
			
		$config = array(
						'host' 		=> PUR_HOST,	
						'user'	 	=> PUR_USER,	
						'password' 	=> PUR_PWD,	
						'dbname' 	=> PUR_DB,	
						'port' 		=> PUR_PORT,	
						'dbdriver'	=> PUR_DRIVER,	
				  );
		$this->LoadDb( $config );
	}

	
	public function LoadDb($dbconfig) {
		$host 		= $dbconfig['host'];
		$user 		= $dbconfig['user'];
		$pass 		= DBPASS . $dbconfig['password'];
		$dbname 	= $dbconfig['dbname'];
		$port 		= $dbconfig['port'];
		$dbdriver 	= $dbconfig['dbdriver'];

		$this->dynamicDB = array(
			'dsn'	   => '',
			'hostname' => "localhost",
			'port' 	   => "{$port}",
			'username' => "{$user}",
			'password' => "",
			'database' => "{$dbname}",
			'dbdriver' => "{$dbdriver}",
			'dbprefix' => '',
			'pconnect' => FALSE,
			'db_debug' => TRUE, //change this to false on deploy
			'cache_on' => FALSE,
			'cachedir' => '',
			'char_set' => 'utf8',
			'dbcollat' => 'utf8_general_ci',
			'swap_pre' => '',
			'encrypt' => FALSE,
			'compress' => FALSE,
			'stricton' => FALSE,
			'failover' => array(),
			'save_queries' => TRUE
		);
// print_r($this->dynamicDB);die;
		$this->load->database($this->dynamicDB);
	}	
}
