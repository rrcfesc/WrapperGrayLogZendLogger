<?php
/**
 * Rioxygen
 * @copyright Copyright (c) 2018 Rioxygen. (http://www.Rioxygen.com/)
 * @license   Copyright
 */
namespace Rioxygen\Graylog;

/**
 * Validator Test
 * @author Ricardo Ruiz <ricardojesus.ruizcruz@gmail.com>
 * @version 1.0
 */
class ValidatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException \LogicException
     */
    public function testNull()
    {
        Validator::checkIfNull(null, 'null');
    }
    /**
     * 
     * Test
     */
    public function testNotNull()
    {
        Validator::checkIfNull('XXX', 'notNullValue');
        Validator::checkIfNull([], 'notNullValue');
        Validator::checkIfNull(new \stdClass(), 'notNullValue');
        Validator::checkIfNull(function () {
        }, 'notNullValue');
    }
}
