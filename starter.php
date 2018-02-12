<?php

//SPL

// spl_autoload_register(function ($class) {
//   $path = dirname(__FILE__)."/".strtolower(str_replace("\\", "/", $class));
//   spl_autoload($path);
// });


spl_autoload_register(function($class){
  $fClass = 'Classes/'.$class.'.php';
  $fInter = 'Interfaces/'.$class.'.php';
  $fTrait = 'Trates/'.$class.'.php';


  if (file_exists($fClass)) {
    require_once $fClass;
  } elseif (file_exists($fInter)) {
    require_once $fInter;
  } elseif (file_exists($fTrait)) {
    require_once $fTrait;
  }
});