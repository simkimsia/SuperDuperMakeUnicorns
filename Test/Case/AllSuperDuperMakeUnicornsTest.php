<?php
/**
 * AllSuperDuperMakeUnicornsTest test suite file
 *
 * will run ALL the tests for this CakePHP Plugin
 *
 * Copyright 2013, Kim Stacks
 * Singapore
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2013, Kim Stacks
 * @link http://stacktogether.com
 * @author Kim Stacks <kim@stacktogether.com>
 * @license http://www.opensource.org/licenses/mit-license.php The MIT License
 * @package SuperDuperMakeUnicorns
 * @subpackage SuperDuperMakeUnicorns.Test.Case
 * @version 0.1.0
 */
class AllSuperDuperMakeUnicornsTest extends PHPUnit_Framework_TestSuite {

/**
 * suite method, defines tests for this suite.
 *
 * @return void
 */
	public static function suite() {
		$suite = new CakeTestSuite('All SuperDuperMakeUnicorns test');
		$suite->addTestDirectoryRecursive(App::pluginPath('SuperDuperMakeUnicorns') . 'Test' . DS . 'Case' . DS);

		return $suite;
	}
}