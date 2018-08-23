<?php


class Home extends MY_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$data['content_view'] = 'home/home_v';
		$this->template->sample_template($data);
	}

	public function about()
	{
		$data['content_view'] = 'home/about_v';
		$this->template->sample_template($data);
	}
	

}

/* End of file Home.php */
/* Location: ./application/modules/home/controllers/Home.php */