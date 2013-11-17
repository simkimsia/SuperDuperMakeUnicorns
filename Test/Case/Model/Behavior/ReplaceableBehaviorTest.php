<?php
/**
 * 
 * ReplaceableBehaviorTest file
 *
 * PHP 5
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
 * @subpackage SuperDuperMakeUnicorns.Test.Case.Model.Behavior
 * @version 0.1.0
 */

App::uses('Model', 'Model');
App::uses('AppModel', 'Model');
require_once dirname(dirname(__FILE__)) . DS . 'mock_models.php';
/**
 * ReplaceableTest class
 *
 */
class ReplaceableBehaviorTest extends CakeTestCase {

	public $fixtures = array(
		'plugin.super_duper_make_unicorns.user'
	);

/**
 * Method executed before each test
 *
 */
	public function setUp() {
		parent::setUp();
		$this->User = ClassRegistry::init('User');

		// create relations between any of the models inside mock_models.php
		// here

		$this->User->Behaviors->attach('SuperDuperMakeUnicorns.Replaceable');
	}

/**
 * Method executed after each test
 *
 */
	public function tearDown() {
		unset($this->User);
		parent::tearDown();
	}

/**
 * testreplaceWithSuper method
 *
 * @return void
 */
	public function testreplaceWithSuper() {
		// GIVEN setup
		$array = array('unicorn');

		// WHEN we execute replaceWithSuper
		$result = $this->User->replaceWithSuper($array);

		// THEN we expect
		$expected = array('super_duper_unicorn');

		$this->assertEquals($expected, $result);
	}
}