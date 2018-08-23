<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends MX_Controller {

	function __construct(){
		parent::__construct();
		$this->load->module('Template');
	}

}

/* End of file MY_Controllers.php */
/* Location: ./application/core/MY_Controllers.php */