<?php

namespace Theory;

require_once "DebClass.php";


function myReadFile($filePath)
{
  if (!file_exists($filePath)) {
    throw new \Exception("file '${filePath}' doesn`t exist!");    
  }
}

function readFolder($folderPath)
{
  return [myReadFile($folderPath)];
}

function tryReadFile()
{
  try {
    $bodies = readFolder("path/to/folder");
    return $bodies;
  } catch (\Exception $e) {
    echo $e->getMessage();
    return [];
  }
}

$result = tryReadFile();
print_r($result);