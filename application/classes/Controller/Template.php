<?php defined('SYSPATH') OR die('No direct script access.');
/**
 * Abstract controller class for automatic templating.
 *
 * @package    Kohana
 * @category   Controller
 * @author     Kohana Team
 * @copyright  (c) 2008-2012 Kohana Team
 * @license    http://kohanaframework.org/license
 */
abstract class Controller_Template extends Controller {

	/**
	 * @var  View  page template
	 */
	public $template = 'template';

	/**
	 * @var  boolean  auto render template
	 **/
	public $auto_render = TRUE;

	/**
	 * Loads the template [View] object.
	 */
	public function before()
	{
		parent::before();

    $this->core = Kohana::$config->load('core');
    $this->cache = Kohana::$config->load('cache.'.Cache::$default);
    $this->response->headers('cache-control', 'max-age='.$this->cache['default_expire']); 
    if ($this->auto_render === TRUE)
		{
			// Load the template
			$this->template = View::factory($this->template);
      $this->template->bind_global('core', $this->core);
		}
	}

	/**
	 * Assigns the template [View] as the request response.
	 */
	public function after()
	{
		if ($this->auto_render === TRUE)
		{
			$this->response->body($this->template->render());
		}

		parent::after();
	}

}
