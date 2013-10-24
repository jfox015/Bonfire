<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Custom extends Admin_Controller {

	//--------------------------------------------------------------------

	public function __construct() 
	{
		parent::__construct();
		
		Template::set('toolbar_title', 'Fox Open Sports Platform');
		$this->auth->restrict('Site.Custom.View');
		
	}
	
	//--------------------------------------------------------------------	

	public function index() 
	{
        Template::set_view('admin/custom/index');
		Template::render();
	}
	
}