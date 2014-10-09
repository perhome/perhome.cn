<?php defined('SYSPATH') or die('No direct script access.');
return array
(
  'ssdb' => array(
    'driver'             => 'ssdb',
    'group'              => 'default',
    'default_expire'     => Kohana::$environment == KOHANA::PRODUCTION ? 3600 : 0,
  )
);
