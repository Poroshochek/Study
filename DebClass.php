<?php
//SPL

spl_autoload_register(function ($class) {
  $path = dirname(__FILE__)."/".strtolower(str_replace("\\", "/", $class));
  spl_autoload($path);
});