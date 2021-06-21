<?php

namespace Drupal\aen_tools\Plugin\migrate\process;

use Drupal\migrate\ProcessPluginBase;
use Drupal\migrate\MigrateExecutableInterface;
use Drupal\migrate\Row;
/**
 * Transform Event time into seconds since midnight.
 *
 * @MigrateProcessPlugin(
 *   id = "transform_aen_metadata"
 * )
 *
 * To do custom value transformations use the following:
 *
 * @code
 * field_metadata:
 *   plugin: transform_aen_metadata
 *   source: metadata
 * @endcode
 *
 */
class EventMetadata extends ProcessPluginBase {
/**
   * Delete elements from array
 */

   public function remove_val($val, $arr) {
  //Delete element by value using array_splice()
  $key = array_search($val, $arr);

  while($key) {
  	array_splice($arr, array_search($val, $arr ), 1);
    $key = array_search($val, $arr);
  }
  return $arr;
   }

   /**
   * {@inheritdoc}
 */
  public function transform($value, MigrateExecutableInterface $migrate_executable, Row $row, $destination_property) {
	 $pattern = '/(?<=\*)([\s\S]+?)(?!\=\>)(?=\*)/';

preg_match_all($pattern, $value, $matches);

$arr = $matches[0];
//$arr =   $this->remove_val('=>', $arr);
//$arr = remove_val(',', $arr);
$val = '=>';
 $key = array_search($val, $arr);

  while($key) {
        array_splice($arr, array_search($val, $arr ), 1);
    $key = array_search($val, $arr);
  }



//print_r($arr);
$output = '';
$title = '';
$abstract = '';
$address = '';
$cleaned = [];
$other = [];
//Remove bogus entries:

$length = count($arr);

for ( $i=0; $i<$length; ) {
  //echo 'index: ' . $i . PHP_EOL;
  if($arr[$i] === 'title') {
    //$output = $output . '<strong>' . $arr[$i] . '</strong><span><em>' . $arr[$i+1] . '</em></span><br>';
    $output = $output . '<h3>'  . $arr[$i+1] . '</h3>';

  }
  else if ($arr[$i] === 'abstract') {
    //$output = $output . '<strong>' . $arr[$i] . '</strong><span><em>' . $arr[$i+1] . '</em></span><br>';
    $output = $output . '<h4>Abstract</h4><p><span><em>' . $arr[$i+1] . '</em></span></p><br>';

  }
else {
  $output = $output . '<strong>' . $arr[$i] . ': </strong><span>' . $arr[$i+1] . '</span><br>';

}
$i = $i+3;
}



//echo $title . PHP_EOL;
//echo $abstract . PHP_EOL;

//print_r($output);
 
    
    return $output;
  }
}
