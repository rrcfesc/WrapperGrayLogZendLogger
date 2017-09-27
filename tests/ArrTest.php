<?php
/**
 * Rioxygen
 * @copyright Copyright (c) 2018 Rioxygen. (http://www.Rioxygen.com/)
 * @license   Copyright
 */
namespace Rioxygen\Graylog;

/**
 * Test de Clase
 * @author Ricardo Ruiz <ricardojesus.ruizcruz@gmail.com>
 * @version 1.0
 */
class ArrTest extends \PHPUnit_Framework_TestCase
{
    /**
     * providerGet
     * @return array
     */
    public function providerGet()
    {
        return array(
            array(array('uno', 'dos', 'tress'), 1, null, 'dos'),
            array(array('we' => 'can', 'make' => 'change'), 'we', null, 'can'),
            array(array('uno', 'dos', 'tress'), 10, null, null),
            array(array('we' => 'can', 'make' => 'change'), 'he', null, null),
            array(array('we' => 'can', 'make' => 'change'), 'he', 'who', 'who'),
            array(array('we' => 'can', 'make' => 'change'), 'he', array('arrays'), array('arrays')),
        );
    }

    /**
     * {@inheritDoc}
     * @dataProvider providerGet()
     */
    public function testGet(array $array, $key, $default, $expected)
    {
        $this->assertSame(
            $expected,
            Arr::get($array, $key, $default)
        );
    }
}
