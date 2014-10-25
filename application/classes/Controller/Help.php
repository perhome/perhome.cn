<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Help extends Controller_Template {
    
	public function before()
	{
	    parent::before();
	}
	
	public function action_index()
	{
		$this->template->content = View::factory('help/index');
	}
	
	public function action_contract()
	{
		$this->template->content = View::factory('help/contract');
	}
	
	public function action_support()
	{
		$this->template->content = View::factory('help/support');
	}
	
	public function action_user()
	{
		$this->template->content = View::factory('help/user');
	}
	
	public function action_free()
	{
		$this->template->content = View::factory('help/free');
	}

	public function action_work()
	{
		$this->template->content = View::factory('help/work');
	}
} // End Help
