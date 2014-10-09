<?php defined('SYSPATH') or die('No direct script access.');

class Text extends Kohana_Text {
  public static function spell($str, $split = ' ')
  {
    $cache = Cache::instance();
    $spell_data = $cache->get('cache:spell_data');
    if (empty($spell_data)) {
      $spell_data = Kohana::$config->load('chinese_spell'); 
      // cache expires one year
      $cache->set($spell_data, 31536000);
    }
    $str_arr = UTF8::str_split($str);
    $result = array('');
    foreach($str_arr as $char){
      if(preg_match('/^[\x{4e00}-\x{9fa5}]+$/u',$char)) {
        $spell = $spell_data[$char];
        $temp_result = array();
        foreach($spell as $py){
          foreach($result as $v){
            $temp_result[] = $v.$py.$split;
          }
        }
        $result = $temp_result;
      }else{
        foreach($result as $k=>$v) {
          $result[$k] .= $char;
        }
      }
    }
    return $result;
  }

}
