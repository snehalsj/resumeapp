<?php
$path_to_check = '';
$needle = 'match';

foreach(glob($path_to_check . '*.txt') as $filename)
{
  foreach(file($filename) as $fli=>$fl)
  {
    if(strpos($fl, $needle)!==false)
    {
      echo $filename . ' on line ' . ($fli+1) . ': ' . $fl;
    }
  }
}
?>