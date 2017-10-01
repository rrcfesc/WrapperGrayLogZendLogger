<?php
/**
 * Rioxygen
 * @copyright Copyright (c) 2018 Rioxygen. (http://www.Rioxygen.com/)
 * @license   Copyright
 */
namespace Rioxygen\Graylog\Logger;

use Rioxygen\Graylog\Logger\ZendLogger;

/**
 * Test de Clase
 * @author Ricardo Ruiz <ricardojesus.ruizcruz@gmail.com>
 * @version 1.0
 */
class ZendLoggerTest extends \PHPUnit_Framework_TestCase
{
    public function testConstruct()
    {
        $adapter = new ZendLogger([
            'prod' => false,
            'key' => 'XXX',
            'password' => 'XXX',
            'accountNumber' => 'XXX',
            'meterNumber' => 'XXX',
            'dropOffType' => 'BUSINESS_SERVICE_CENTER',
            #'requestAdapter' => new StubFedex,
        ]);

    }
}