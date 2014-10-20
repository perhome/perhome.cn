<?php defined('SYSPATH') or die('No direct script access.');

class Model_Article extends Model {

  public static function save($data)
  {
    $key = Text::random();
    return Sc::instance()->set($key, $data); 
  }

  public static function get($key)
  {
    return Sc::instance()->get($key); 
  }

  public static function get_list($start_score, $start_key=NULL, $limit = 10)
  {
    return Sc::instance()->get($key); 
  }

  public static function delete($key)
  {
    return Sc::instance()->del($key); 
  }

}
