<?php defined('SYSPATH') or die('No direct script access.');

abstract class Model  {

  protected static $group = 'default';
	protected static $instances = array();

  public static function factory($name, $group = NULL) {
		if ($group === NULL)
		{
			$group = $name.'#'.static::$group;
		}

		if (isset(Model::$instances[$group]))
		{
			// Return the current group if initiated already
			return Model::$instances[$group];
		}
		// Add the model prefix
		$class = 'Model_'.$name;
		Model::$instances[$group] = new $class;
    return Model::$instances[$group];
  }
}
