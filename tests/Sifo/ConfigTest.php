<?php

use Sifo\Config;

define( 'ROOT_PATH', realpath( '.') );

/**
 * Test class for Config.
 * Generated by PHPUnit on 2009-11-01 at 12:17:05.
 */
class ConfigTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Config
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
	    $this->object = Config::getInstance('tests');

    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
	    $this->object = null;
    }

	/**
	 * Test object correct creation.
	 */
	public function testObjectCreation()
	{
        $this->assertInstanceOf(Config::class, $this->object);
	}
}
