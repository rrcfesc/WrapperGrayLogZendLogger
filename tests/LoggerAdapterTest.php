<?php
/**
 * Rioxygen
 * @copyright Copyright (c) 2018 Rioxygen. (http://www.Rioxygen.com/)
 * @license   Copyright
 */
namespace Rioxygen\Graylog;

/**
 * Test Abstract Class
 * @version 1.0
 * @author Ricardo Ruiz <ricardo.cruz@Rioxygen.com>
 */
class LoggerAdapterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * test
     */
    public function testCreate()
    {
        /* @var Adapter $mock */
        $mock = $this->getMockForAbstractClass('Rioxygen\Graylog\LoggerAdapter');
        $mockRequestAdapter = $this->getMockForAbstractClass('Rioxygen\Graylog\Request\Adapter');
        $mock->setRequestAdapter($mockRequestAdapter);
    }
}
