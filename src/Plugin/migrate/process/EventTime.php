<?php

namespace Drupal\aen_tools\Plugin\migrate\process;

use Drupal\migrate\ProcessPluginBase;
use Drupal\migrate\MigrateExecutableInterface;
use Drupal\migrate\Row;
/**
 * Transform Event time into seconds since midnight.
 *
 * @MigrateProcessPlugin(
 *   id = "tranform_eventtime"
 * )
 *
 * To do custom value transformations use the following:
 *
 * @code
 * field_eventtime:
 *   plugin: transform_eventtime
 *   source: eventtime
 * @endcode
 *
 */
class EventTime extends ProcessPluginBase {
/**
   * {@inheritdoc}
   */
  public function transform($value, MigrateExecutableInterface $migrate_executable, Row $row, $destination_property) {
  //\Drupal::logger('migrate')->debug("Eventtime value: " . $value);   
  $time = explode(':', $value);
  $hours = (int) $time[0];
  $minutes = (int) $time[1];
  $seconds = (int) $time[2];

    return (($hours*60*60)+($minutes*60)+$seconds);
  }
}
