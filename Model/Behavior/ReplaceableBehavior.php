<?php
/**
 * ReplaceableBehavior class file.
 *
 * Replaces `unicorn` in an array with `super_duper_unicorn`
 *
 * Usage is straightforward:
 * In model: $array = $this->replaceWithSuper($array);
 *
 * Copyright 2013, Kim Stacks
 * Singapore
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2013, Kim Stacks.
 * @link http://stacktogether.com
 * @author Kim Stacks <kim@stacktogether.com>
 * @license http://www.opensource.org/licenses/mit-license.php The MIT License
 * @package SuperDuperMakeUnicorns
 * @subpackage SuperDuperMakeUnicorns.Model.Behavior
 * @version 0.1.0
 */
class ReplaceableBehavior extends ModelBehavior {

/**
 * Behavior settings
 *
 * @access public
 * @var array
 */
	public $settings = array();

/**
 * Initiate behavior for the model using specified settings.
 *
 * @param Model $Model
 * @param array $config
 * @return void
 */
	public function setup(Model $Model, $settings = array()) {
	}

/**
 * Replace all occurrences of unicorn in an array with super_duper_unicorn
 *
 * @param Model $Model
 * @param array $array
 * @return array
 */
	public function replaceWithSuper(Model $Model, $array = array()) {
		foreach ($array as $key => $value) {
			if (is_string($value) && $value == 'unicorn') {
				$array[$key] = 'super_duper_unicorn';
			}
		}

		return $array;
	}
}