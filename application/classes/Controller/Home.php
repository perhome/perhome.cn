<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller_Template {
    
	public function before()
	{
	    parent::before();
	}
	
	public function action_index()
	{
		$this->template->content = View::factory('home');
	}
	
	public function action_aboutme()
	{
		$this->template->content = View::factory('aboutme');
	}
	
	public function action_contact()
	{
		$this->template->content = View::factory('contact');
	}
	
	public function action_service()
	{
		$this->template->content = View::factory('service');
	}
	
	public function action_product()
	{
		$this->template->content = View::factory('product');
	}

	public function action_faq()
	{
		$this->template->content = View::factory('faq');
	}

	public function action_support()
	{
		$this->template->content = View::factory('support');
	}

} // End Home
