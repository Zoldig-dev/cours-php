<?php 

function changeFormatTime2($milliseconds){
  $milliseconds *= 1000;
  $seconds = floor($milliseconds / 1000);
  $minutes = floor($seconds / 60);
  $hours = floor($minutes / 60);
  $milliseconds = $milliseconds % 1000;
  $seconds = $seconds % 60;
  $minutes = $minutes % 60;

  $format = '%u:%02u:%02u.%03u';
  $time = sprintf($format, $hours, $minutes, $seconds, $milliseconds);
  return rtrim($time, '0'). ($milliseconds ? '' : '000');
}