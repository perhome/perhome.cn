<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Watch extends Controller_Template {
    
	public function before()
	{
	    parent::before();
	}
	
	public function action_plan()
	{
		$this->template->content = View::factory('watch/plan');
	}
	
} // End Watch
