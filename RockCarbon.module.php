<?php namespace ProcessWire;
/**
 * A simple PHP API extension for DateTime
 * Using https://carbon.nesbot.com/
 *
 * @author Bernhard Baumrock, 15.09.2020
 * @license Licensed under MIT
 * @link https://www.baumrock.com
 */
class RockCarbon extends WireData implements Module {

  public static function getModuleInfo() {
    return [
      'title' => 'RockCarbon',
      'version' => '0.0.1',
      'summary' => 'A simple PHP API extension for DateTime',
      'autoload' => false,
      'singular' => true,
      'icon' => 'clock-o',
      'requires' => [],
      'installs' => [],
    ];
  }

  public function load() {
    require_once(__DIR__.'/vendor/autoload.php');
  }
}
